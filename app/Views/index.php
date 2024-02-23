<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>

<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<section class="hero is-default is-medium">

    <div class="hero-head">
        <nav class="navbar">
            <div class="container is-flex is-flex-direction-row is-justify-content-space-between is-align-items-center">
                <div class="navbar-brand">
                    <a href="<?= site_url('/') ?>" class="navbar-item is-size-3 has-text-weight-semibold">
                        LottoLookup
                    </a>
                </div>
                <div class="">
                    <span class="navbar-item">
                        <a href="https://github.com/rwrodrigoa/LottoLookup" class="button is-black is-inverted">
                            <span class="icon">
                                <i class="fab fa-github"></i>
                            </span>
                            <span>Github</span>
                        </a>
                    </span>
                </div>
            </div>
        </nav>
    </div>

    <div class="hero-body">
        <div class="container has-text-centered">
            <p class="title">
                <img width="25%" src="<?= base_url('assets/img/LottoLookup_Logo.jpeg') ?>" alt="Logo da LottoLookup">
            </p>
            <p class="subtitle has-text-weight-normal is-size-4 mt-2">
                Uma API simples e fácil de usar para consultar resultados de loterias <br>
                da Caixa Econômica Federal.
            </p>
        </div>
    </div>

</section>

<div class="container content my-5 px-2">
    <h1>Bem vindo a API LottoLookup!</h1>
    <p>
        Bem-vindo à documentação da API LottoLookup! Esta API fornece acesso aos resultados dos jogos de loteria da
        Caixa Econômica Federal. Aqui você encontrará informações sobre como utilizar a API para consultar os últimos
        resultados de diversos jogos.
    </p>
    <h3>Loterias Suportadas</h3>
    <p>
        A API LottoLookup suporta os seguintes jogos de loteria:
    </p>
    <ul>
        <li>Mais Milionária (<code class="has-text-weight-light">maismilionaria</code>)</li>
        <li>Mega-Sena (<code class="has-text-weight-light">megasena</code>)</li>
        <li>Lotofácil (<code class="has-text-weight-light">lotofacil</code>)</li>
        <li>Quina (<code class="has-text-weight-light">quina</code>)</li>
        <li>Lotomania (<code class="has-text-weight-light">lotomania</code>)</li>
        <li>Timemania(<code class="has-text-weight-light">timemania</code>)</li>
        <li>Dupla Sena (<code class="has-text-weight-light">duplasena</code>)</li>
        <li>Federal (<code class="has-text-weight-light">federal</code>)</li>
        <li>Loteca (<code class="has-text-weight-light">loteca</code>)</li>
        <li>Dia de Sorte (<code class="has-text-weight-light">diadesorte</code>)</li>
        <li>Super Sete (<code class="has-text-weight-light">supersete</code>)</li>
    </ul>

    <h3>Endpoints</h3>

    <h4>Listar o último resultado de cada loteria</h4>
    <blockquote>
        <p><strong>GET </strong><a href="https://lottolookup.com.br/api">https://lottolookup.com.br/api</a></p>
        <p class="has-text-weight-light">Retorna o último resultado disponível para cada loteria.</p>
    </blockquote>

    <h4>Listar os últimos 10 resultados de uma loteria específica</h4>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena">https://lottolookup.com.br/api/&lt;nomedaloteria&gt;</a>
        </p>
        <p class="has-text-weight-light">Substitua &lt;nomedaloteria&gt; pelo identificador da loteria para obter os 10
            últimos resultados.</p>
    </blockquote>
    <p>Exemplo:</p>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena">https://lottolookup.com.br/api/megasena</a></p>
        <p class="has-text-weight-light">Para consultar os últimos 10 resultados da Mega-Sena.</p>
    </blockquote>

    <h4>Consultar um resultado por um número de jogo</h4>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena/2689">https://lottolookup.com.br/api/&lt;nomedaloteria&gt;/&lt;numerodojogo&gt;</a>
        </p>
        <p class="has-text-weight-light">Substitua &lt;nomedaloteria&gt; pelo identificador da loteria e
            &lt;numerodojogo&gt; pelo número específico do jogo a ser consultado.</p>
    </blockquote>
    <p>Exemplo:</p>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena/2689">https://lottolookup.com.br/api/megasena/2689</a></p>
        <p class="has-text-weight-light">Para consultar o resultado da Mega-Sena de número 2689.</p>
    </blockquote>
    <article class="message">
        <div class="message-header">
            <p><i class="fa-solid fa-triangle-exclamation"></i> Atenção</p>
        </div>
        <div class="message-body">
            <p>
                Apenas resultados à partir do dia 22/02/2024 (data de lançamento deste serviço) estão disponíveis para
                consulta.
            </p>
        </div>
    </article>

    <h4>Consultar o último resultado de uma loteria específica</h4>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena/latest">https://lottolookup.com.br/api/&lt;nomedaloteria&gt;/latest</a>
        </p>
        <p class="has-text-weight-light">Substitua &lt;nomedaloteria&gt; pelo identificador da loteria.</p>
    </blockquote>
    <p>Exemplo:</p>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena/latest">https://lottolookup.com.br/api/megasena/latest</a>
        </p>
        <p class="has-text-weight-light">Para consultar o último resultado da Mega-Sena.</p>
    </blockquote>

    <h3>Limites de requisição</h3>
    <p>
        A API é aberta e pode ser utilizada por qualquer pessoa, sujeita a um limite de 60 requisições por minuto por
        endereço IP para garantir a qualidade e a disponibilidade do serviço para todos os usuários.
    </p>

    <article class="message">
        <div class="message-header">
            <p><i class="fa-solid fa-server"></i> Planos privados</p>
        </div>
        <div class="message-body">
            <p>
                A API LottoLookup é uma API pública e gratuita. No entanto, para evitar abusos,
                limitamos o número de consultas por IP. Se você precisar de mais consultas, entre em contato conosco
                para discutir opções de assinatura de hospedagem exclusiva e privada.
            </p>
        </div>
    </article>

    <h3>Códigos de resposta HTTP</h3>
    <p>A API LottoLookup utiliza os seguintes códigos de resposta HTTP:</p>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>200 OK</td>
                <td>A requisição foi bem-sucedida</td>
            </tr>
            <tr>
                <td>404 Not Found</td>
                <td>O recurso solicitado (loteria ou número do jogo) não foi encontrado</td>
            </tr>
            <tr>
                <td>429 Too Many Requests</td>
                <td>Excedeu o limite de requisições permitidas por minuto</td>
            </tr>
        </tbody>
    </table>

    <h3>Exemplo de resposta</h3>
    <blockquote>
        <p><strong>GET </strong><a
                href="https://lottolookup.com.br/api/megasena/2689">https://lottolookup.com.br/api/megasena/2689</a></p>
    </blockquote>
    <p>Uma resposta típica da API LottoLookup é um objeto JSON, com a seguinte estrutura:</p>
    <pre>{
    "acumulado": true,
    "dataApuracao": "17/02/2024",
    "dataProximoConcurso": "20/02/2024",
    "dezenasSorteadasOrdemSorteio": [
        "16",
        "48",
        "52",
        "47",
        "09",
        "20"
    ],
    "exibirDetalhamentoPorCidade": true,
    "id": null,
    "indicadorConcursoEspecial": 1,
    "listaDezenas": [
        "09",
        "16",
        "20",
        "47",
        "48",
        "52"
    ],
    "listaDezenasSegundoSorteio": null,
    "listaMunicipioUFGanhadores": [],
    "listaRateioPremio": [
        {
            "descricaoFaixa": "6 acertos",
            "faixa": 1,
            "numeroDeGanhadores": 0,
            "valorPremio": 0
        },
        {
            "descricaoFaixa": "5 acertos",
            "faixa": 2,
            "numeroDeGanhadores": 65,
            "valorPremio": 65325.01
        },
        {
            "descricaoFaixa": "4 acertos",
            "faixa": 3,
            "numeroDeGanhadores": 4926,
            "valorPremio": 1231.4
        }
    ],
    "listaResultadoEquipeEsportiva": null,
    "localSorteio": "ESPAÇO DA SORTE",
    "nomeMunicipioUFSorteio": "SÃO PAULO,  SP",
    "nomeTimeCoracaoMesSorte": "\u0000\u0000\u0000",
    "numero": 2689,
    "numeroConcursoAnterior": 2688,
    "numeroConcursoFinal_0_5": 2690,
    "numeroConcursoProximo": 2690,
    "numeroJogo": 2,
    "observacao": "",
    "premiacaoContingencia": null,
    "tipoJogo": "MEGA_SENA",
    "tipoPublicacao": 3,
    "ultimoConcurso": true,
    "valorArrecadado": 73646500,
    "valorAcumuladoConcurso_0_5": 78913962.98,
    "valorAcumuladoConcursoEspecial": 15809984.28,
    "valorAcumuladoProximoConcurso": 78913962.98,
    "valorEstimadoProximoConcurso": 87000000,
    "valorSaldoReservaGarantidora": 0,
    "valorTotalPremioFaixaUm": 0
}</pre>

    <h3>Contato</h3>
    <p>
        Se você tiver alguma dúvida, sugestão ou precisar de assistência, entre em contato comigo pelo e-mail
        <a href="mailto:suporte@rodrigoweiss.com" class="is-underlined">suporte@rodrigoweiss.com</a>.

</div>

<footer class="footer is-default">
    <div class="content has-text-centered">
        <p>
            <strong>LottoLookup</strong> desenvolvido é por <a href="https://rodrigoweiss.com"
                class="is-underlined">Rodrigo Weiss</a>. <br>
            O código fonte é licenciado pelo
            <a href="https://opensource.org/blog/license/mit" class="is-underlined">MIT</a>.
        </p>
    </div>
</footer>
<?= $this->endSection() ?>