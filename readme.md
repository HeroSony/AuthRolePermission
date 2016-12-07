# AuthRolePermission

- Clone or Download project
- Change .env.example to .env ( config DB username and password)
- Open command prompt from local project and run `composer install` if you get `Fatal error: Call to undefined method Illuminate\Foundation\Application::bindShared()`, try to find EntrustServiceProvider.php and modify `bindShared` to `singleton`
- Run `php artisan key:generate` for generate a new key
- Done!!!
