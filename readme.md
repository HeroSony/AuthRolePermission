# AuthRolePermission

-	Clone or Download project
-	Change .env.example to .env ( config DB username and password)
-	Open command prompt from local project and run composer install
  If you get Fatal error: Call to undefined method Illuminate\Foundation\Application::bindShared(), 
	Find EntrustServiceProvider.php and modify bindShared to singleton
-	Run php artisan key:generate for generate a new key
- Test and Done!!!
