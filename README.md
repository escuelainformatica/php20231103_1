# historial de comandos de consola

```bash
   2        1.008 php artisan make:model Cliente --all
   3        0.855 php artisan migrate:install
   4        1.067 php artisan migrate:fresh
   5        1.079 php artisan migrate:fresh
   6        0.818 php artisan make:view cliente
   7     8:55.843 php artisan serve
   8        0.823 php artisan make:controller EjemploController
   9    20:27.173 php artisan serve
  10        0.829 php artisan make:rule ClienteUnico
  11    11:46.820 php artisan serve

```

## autenticacion

* modelo usuario
* crear usuario (tinker)

```php
$usr=new User();

$usr->name="john";
$user->email="a@b.cl";
$usr->password=Hash:make('abc123');
$usr->save();
```

* pagina login
  * php artisan make:view login
* pagina o enrutamiento logout  
* enrutamiento

```php
Route::middleware('auth')->get('/insertar',[ClienteController::class,'insertarGet']);
Route::middleware('auth')->post('/insertar',[ClienteController::class,'insertarPost']);
Route::get('/login',[UsuarioController::class,'login'])->name('login');
Route::post('/login',[UsuarioController::class,'loginPost']);
Route::get('/logout',[UsuarioController::class,'logout']);
```

* opcional agregar autenticacion personalizada.
