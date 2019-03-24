# Twitch Search
Um aplicativo para fazer busca dos top 30 canais ou jogos da twitch com determinado termo de busca.

## Requerimentos
- Laravel 5.8.7
- PHP     7.2.*

## Como usar
1. Crie uma aplicação na [Twitch](https://dev.twitch.tv/docs/v5/#getting-a-client-id) e guarde o Cliend ID.
2. Clone este repositorio
3. Entre na pasta do projeto `cd twitch_search`
4. Instale as dependencias `composer install`
5. Copie o .env.example para o .env `cp .env.example .env` e coloque o Client ID do twitch
6. Gere uma nova chave para o artisan `php artisan key:generate`
7. Rode a aplicação `php artisan serve`
8. Abra no seu navegador a [aplicação](http://localhost:8000)
9. ENJOY IT!
