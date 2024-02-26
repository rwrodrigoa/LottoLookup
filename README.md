# API LottoLookup

API LottoLookup oferece acesso programático aos resultados dos jogos de loteria da Caixa Econômica Federal, incluindo Mega-Sena, Lotofácil, Quina, e muitos outros.

## Funcionalidades

- Consulta do último resultado de cada loteria.
- Listagem dos últimos 10 resultados de um loteria específica.
- Consulta de um resultado específico por número do jogo.
- Consulta do último resultado de uma loteria específica.

## Começando

Para começar a usar a API LottoLookup, você não precisa de autenticação. A API é aberta e pode ser acessada diretamente através da URL base `https://lottolookup.com.br/api`.

### Pré-requisitos

Não há pré-requisitos para consumir esta API, além de uma ferramenta para fazer requisições HTTP, como cURL ou Postman, ou uma biblioteca HTTP na linguagem de programação de sua escolha.

### Fazendo Requisições

Aqui está um exemplo de como consultar o último resultado da Mega-Sena usando cURL:

```bash
curl https://lottolookup.com.br/api/megasena/latest
```

### Documentação

Para mais informações sobre os endpoints disponíveis e detalhes sobre as respostas da API, visite nossa documentação completa disponível em: https://lottolookup.com.br.

### Limitações

A API permite até 60 requisições por minuto por endereço IP, a fim de garantir a qualidade do serviço para todos os usuários.

### Contribuindo

Contribuições para a API LottoLookup são bem-vindas! Aqui estão algumas maneiras de contribuir:

- Reportando bugs
- Sugerindo melhorias
- Deixando uma estrela para o projeto

### Licença

Este projeto está licenciado sob a Licença MIT - veja o arquivo LICENSE.md para detalhes.

### Contato

Se você tiver alguma dúvida ou sugestão, não hesite em entrar em contato através do e-mail suporte@rodrigoweiss.com.

### Agradecimentos

- A todos os usuário que confiam e apoiam o meu trabalho.
- À Caixa Econômica Federal por disponibilizar os dados das loterias.