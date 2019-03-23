# Twitch Search
Um aplicativo para fazer busca dos top 30 canais ou jogos da twitch com determinado termo de busca.

## Requerimentos
- Laravel 5.8.7
- PHP     7.2.*

## Como usar
1. Crie uma aplicação na [Twitch](https://dev.twitch.tv/docs/v5/#getting-a-client-id) e guarde o Cliend ID.
2. Clone este repositorio
3. Entre na pasta do projeto `cd twitch`
4. Instale as dependencias `composer update`
5. Adicione o arquivo de configuração do twitch `mv config/twitch.php.example config/twitch.php` e adicione seu Client ID.
6. Rode a aplicação `php artisan serve`
7. Abra no seu navegador a aplicação: [localhost:8000](localhost:8000)
8. ENJOY IT!
