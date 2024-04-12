<?php

namespace App\Commands;

use App\Helpers\ApiHelper;
use App\Models\DrawResultModel;
use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;
use DateTime;

class DrawsUpdate extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'Api';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'draws:update';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Atualiza os dados dos jogos';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'draws:update';

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        $apiHelper = new ApiHelper();
        $drawResultModel = new DrawResultModel();

        foreach ($apiHelper->draws as $url) {
            //https://servicebus2.caixa.gov.br/portaldeloterias/api/
            $fullUrl = 'https://api.guidi.dev.br/loteria/' . $url . '/ultimo';

            try {
                $data = $apiHelper->fetchDataFromApi($fullUrl);

                $drawData = [
                    'draw_type'   => $url,
                    'draw_number' => $data['numero'],
                    'draw_result' => json_encode($data),
                    'draw_date'   => DateTime::createFromFormat('d/m/Y', $data['dataApuracao'])->format('Y-m-d')
                ];

                $existingRecord = $drawResultModel
                    ->where('draw_type', $drawData['draw_type'])
                    ->where('draw_number', $drawData['draw_number'])
                    ->first();

                if (!$existingRecord) {
                    $drawResultModel->insert($drawData);
                    CLI::write('Dados de ' . ucfirst($url) . ' inseridos com sucesso no banco!', 'green');
                } else {
                    $drawResultModel->update($existingRecord->id, $drawData);
                    CLI::write('Dados de ' . ucfirst($url) . ' atualizados com sucesso no banco!', 'green');
                }

            } catch (\Exception $e) {
                CLI::error('Erro ao salvar/atualizar os dados de ' . ucfirst($url) . ': ' . $e->getMessage(), 'red');
            }
        }
    }
}
