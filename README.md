# Projeto - EntregaFácil

> Aplicativo de delivery usando php e laravel, IFSP 2024 - PRWE7 - PROGRAMAÇÃO PARA WEB.

## Apresentação

> 12/08 - Seminário Laravel Filament + PDF tutorial.

## Intalação e Uso

1. Clone o repositório
2. De Checkout para o branch desejado
3. Instale o aplicativo usando:

```
composer install
```

4. Configure as portas em .env. Caso esse arquivo não tenha sido criado altere de .env.example.
5. Em config/database.php Certifique que o banco de dados esteja correto, Exemplo - MySQL:

```
'default' => env('DB_CONNECTION', 'mysql')
```

6. Migre as tabelas do banco de dados

```
php artisan migrate
```

7. Caso queira criar elementos na tabela para testes use:

```
php artisan db:seed
```
8. Ligue o projeto no localhost
```
php artisan serve
```
9. Crie um usuário utilizando:
```
php artisan make:filament-user
```
10. Acesse o aplicativo em 
```
localhost:8000/admin
ou
localhost/admin
```

## Contribuição

Configure o git com email e nome do usuário (É necessario estar na lista de contribuidores)

```
git config --global user.email "usuario@exemplo.com"
git config --global user.name "NomeUsuario"
```
