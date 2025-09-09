# Intensivão Laravel: API de Blog com Painel Reativo

## ✨ Funcionalidades Principais

- **API RESTful Completa** para CRUD de Posts e Usuários.
- **Painel de Gerenciamento** reativo construído com Vue.js 3 consumindo a API.
- **Otimização de Performance:** Diagnóstico e correção do problema de queries N+1 usando Eager Loading.
- **Processamento Assíncrono:** Uso do sistema de Filas (Queues) do Laravel para executar tarefas em segundo plano (simulação de envio de e-mail).
- **Ambiente de Desenvolvimento Moderno** com Laravel Sail (Docker).
- **Depuração Avançada** com Laravel Telescope para monitoramento de requisições, queries e jobs.

## 🚀 Tecnologias Utilizadas

- PHP 8.4
- Laravel 12
- Vue.js 3
- MySQL
- Docker (Laravel Sail)
- Laravel Telescope

## ⚙️ Como Executar o Projeto Localmente

1. Clone o repositório: `git clone [https://github.com/marcello-iorio/laravel-api]`
2. Navegue até a pasta do projeto: `cd laravel-api`
3. Copie o arquivo de ambiente: `cp .env.example .env` | `cp .env.example .env` (Windows)
4. Inicie os containers do Docker: `./vendor/bin/sail up -d`
5. Rode as migrations e popule o banco: `./vendor/bin/sail artisan migrate:fresh --seed`
6. Acesse o painel em: `http://localhost/posts-manager`
7. Acesse o Telescope em: `http://localhost/telescope`
