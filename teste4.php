const commandCategories = {
"Gerenciamento de Projeto": [{
command: "composer create-project laravel/laravel nome-do-projeto",
description: "Cria um novo projeto Laravel."
},
{
command: "composer create-project laravel/laravel .",
description: "Cria um novo projeto, estando dentro da pasta."
},
{
command: "php artisan serve",
description: "Inicia o servidor de desenvolvimento."
},
{
command: "php artisan key:generate",
description: "Gera novamente a APP_KEY no arquivo .env."
},
{
command: "php artisan about",
description: "Exibe informações sobre a instalação do Laravel."
}
],
"Banco de Dados": [{
command: "php artisan make:model NomeDoModelo -m",
description: "Cria um novo modelo Eloquent e um arquivo de migração."
},
{
command: "php artisan make:seeder NomeDoSeeder",
description: "Cria uma classe de seeder para popular o banco de dados."
},
{
command: "php artisan db:seed",
description: "Executa os seeders para popular o banco de dados."
},
{
command: "php artisan migrate",
description: "Executa as migrações no banco de dados."
},
{
command: "php artisan migrate:refresh",
description: "Desfaz todas as migrações e executa-as novamente (ideal para testes)."
},
{
command: "php artisan migrate:refresh --seed",
description: "Desfaz todas as migrações, recria-as e executa os seeders automaticamente."
},
{
command: "php artisan make:factory NomeDaFactory",
description: "Cria uma factory para gerar dados fictícios para o banco de dados."
},
{
command: "php artisan make:model NomeDoModelo -mf",
description: "Cria um modelo com a migração e a factory."
},
{
command: "php artisan migrate:rollback",
description: "Desfaz as últimas migrações aplicadas no banco de dados."
},
{
command: "php artisan migrate:reset",
description: "Desfaz todas as migrações aplicadas no banco de dados."
},
{
command: "php artisan migrate:status",
description: "Exibe o status das migrações (executadas ou pendentes)."
},
{
command: "php artisan db:wipe",
description: "Exclui todas as tabelas, visualizações e dados do banco de dados."
},
{
command: "php artisan migrate:fresh",
description: "Limpa o banco de dados e aplica todas as migrações."
}
],
"Autenticação": [{
command: "composer require laravel/ui",
description: "Instala o pacote de scaffolding de autenticação (Laravel UI)."
},
{
command: "php artisan ui bootstrap --auth",
description: "Gera a autenticação com Bootstrap e views padrão."
},
{
command: "composer require laravel/breeze --dev",
description: "Instala o Laravel Breeze, uma solução leve para autenticação."
},
{
command: "php artisan breeze:install",
description: "Configura o Laravel Breeze no projeto."
},
{
command: "composer require laravel/sanctum",
description: "Instala o Laravel Sanctum para autenticação de API."
},
{
command: "php artisan vendor:publish --provider=\"Laravel\\Sanctum\\SanctumServiceProvider\"",
description: "Publica o arquivo de configuração do Laravel Sanctum."
}
],
"Rotas e Middleware": [{
command: "php artisan route:list",
description: "Lista todas as rotas registradas no projeto."
},
{
command: "php artisan make:middleware NomeDoMiddleware",
description: "Cria um middleware para tratamento de requisições HTTP."
},
{
command: "php artisan route:cache",
description: "Gera um cache para as rotas, melhorando o desempenho."
},
{
command: "php artisan route:clear",
description: "Remove o cache das rotas."
}
],
"Cache e Otimização": [{
command: "php artisan config:cache",
description: "Gera um arquivo cache para as configurações do projeto."
},
{
command: "php artisan cache:clear",
description: "Limpa todo o cache do sistema."
},
{
command: "php artisan config:clear",
description: "Remove o cache das configurações do sistema."
},
{
command: "php artisan optimize",
description: "Otimiza o cache de arquivos de configuração, rotas e eventos."
},
{
command: "php artisan optimize:clear",
description: "Limpa todos os caches de configuração, rotas, eventos e views."
},
{
command: "php artisan view:clear",
description: "Limpa o cache de views compiladas."
}
],
"Tradução e Internacionalização": [{
command: "composer require laravel-lang/publisher --dev",
description: "Instala o pacote para traduzir o Laravel para português."
},
{
command: "php artisan lang:add pt",
description: "Adiciona os arquivos de tradução para português no projeto."
}
],
"Tarefas e Filas": [{
command: "php artisan make:job NomeDoJob",
description: "Cria um job para processamento em filas (queue)."
},
{
command: "php artisan queue:work",
description: "Processa jobs em filas do sistema."
},
{
command: "php artisan queue:listen",
description: "Escuta as filas e processa jobs em tempo real."
},
{
command: "php artisan queue:restart",
description: "Reinicia todos os workers de filas."
}
],
"Testes": [{
command: "php artisan test",
description: "Executa todos os testes do projeto."
},
{
command: "php artisan make:test NomeDoTeste",
description: "Cria uma classe de teste para validação de código."
},
{
command: "php artisan make:test NomeDoTeste --unit",
description: "Cria uma classe de teste unitário para validação de métodos específicos."
}
],
"Eventos e Listeners": [{
command: "php artisan make:event NomeDoEvento",
description: "Cria um evento para disparar ações no sistema."
},
{
command: "php artisan make:listener NomeDoListener",
description: "Cria um listener para reagir a eventos no sistema."
}
],
"Gerenciamento de Arquivos e Storage": [{
command: "php artisan storage:link",
description: "Cria um link simbólico para o diretório 'storage/app/public'."
}],
"Políticas e Permissões": [{
command: "php artisan make:policy NomeDaPolicy",
description: "Cria uma policy para gerenciar permissões de usuários."
}],
"Requests e Validações": [{
command: "php artisan make:request NomeDoRequest",
description: "Cria uma classe de request para validação de dados de entrada."
}],
"Utilitários": [{
command: "php artisan list",
description: "Lista todos os comandos disponíveis no Artisan."
},
{
command: "php artisan help nome_do_comando",
description: "Exibe detalhes e opções para um comando específico do Artisan."
},
{
command: "php artisan make:component NomeDoComponente",
description: "Gera um componente Blade com lógica PHP e template para reutilização na interface."
},
{
command: "php artisan env",
description: "Exibe as variáveis de ambiente configuradas no sistema."
}
]
};