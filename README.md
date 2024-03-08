Setup Laravel
1. Composer create laravel/laravel name
2.Create Database on Xampp etc.. and link in .env file
3. Run php artisan migrate 
php artisan key:generate
4. php artisan make:migration create_products_table (Creates a table ) --> You will see this in migrations to add more 
5. Run migration again
6.npm install -D sass (if you want scss)
7.composer and npm install
8.For Login etc.. composer require laravel/ui
9.// Generate basic scaffolding...
	php artisan ui bootstrap
	php artisan ui vue
	php artisan ui react

	// Generate login / registration scaffolding...
	php artisan ui bootstrap --auth
	php artisan ui vue --auth
	php artisan ui react --auth
10.Run npm install and npm run dev and migrate
11. If setting up seeder here is an aexample
Also add this in top of DatabaseSeeder.php (use App\Models\User;)
        User::updateOrcreate([
            'email' => 'me@michaelhoughton.com'
        ],[
            'name' => 'Michael Houghton',
            'password' => bcrypt('password'),
            'admin' => 1,
        ]);
12. Then run php artisan db:seed

When Starting project, 1. Database Migration, 2. Model, 3.Controller