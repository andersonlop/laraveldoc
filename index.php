<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .category-box {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        padding: 1rem;
        margin-bottom: 1.5rem;
    }

    .command-box {
        background-color: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="mb-4">Comandos Laravel Organizados</h1>
        <p class="text-muted">Clique no botão "Copiar" para copiar os comandos para sua área de transferência.</p>

        <div id="categories-list">
            <!-- Categorias e comandos serão carregados dinamicamente aqui -->
        </div>
    </div>

    <script>
    const commandCategories = {
        "Gerenciamento de Projeto": [{
                command: "composer create-project laravel/laravel nome-do-projeto",
                description: "Cria um novo projeto Laravel."
            },
            {
                command: "php artisan serve",
                description: "Inicia o servidor de desenvolvimento."
            },
            {
                command: "php artisan key:generate",
                description: "Gera novamente a APP_KEY no arquivo .env."
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
            }
        ]
    };

    // Função para copiar texto para a área de transferência
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text).then(() => {
            alert(`Comando copiado: ${text}`);
        }).catch(err => {
            console.error('Não foi possível copiar o texto:', err);
        });
    }

    // Renderizar categorias e comandos dinamicamente
    function renderCategories(commandCategories) {
        const categoriesList = document.getElementById('categories-list');

        for (const [category, commands] of Object.entries(commandCategories)) {
            const categoryBox = document.createElement('div');
            categoryBox.className = 'category-box';

            const categoryTitle = document.createElement('h2');
            categoryTitle.textContent = category;
            categoryBox.appendChild(categoryTitle);

            commands.forEach(({
                command,
                description
            }) => {
                const commandBox = document.createElement('div');
                commandBox.className = 'command-box';

                commandBox.innerHTML = `
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="mb-1"><strong>${description}</strong></p>
                                <code>${command}</code>
                            </div>
                            <button class="btn btn-primary btn-sm ms-3" onclick="copyToClipboard('${command}')">Copiar</button>
                        </div>
                    `;

                categoryBox.appendChild(commandBox);
            });

            categoriesList.appendChild(categoryBox);
        }
    }

    // Renderizar os comandos no carregamento da página
    renderCategories(commandCategories);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>