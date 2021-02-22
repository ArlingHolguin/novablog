<?php

return [

    /*
    |--------------------------------------------------------------------------
    |Nombre de la aplicación
    |--------------------------------------------------------------------------
    |
    | Este valor es el nombre de su aplicación. Este valor se utiliza cuando el
    | framework necesita colocar el nombre de la aplicación en una notificación o
    | cualquier otra ubicación según lo requiera la aplicación o sus paquetes.
    |
    */

    'name' => env('APP_NAME', 'Blog'),

    /*
    |--------------------------------------------------------------------------
    | Entorno de aplicación
    |--------------------------------------------------------------------------
    |
    | Este valor determina el "entorno" en el que se encuentra su aplicación actualmente.
    | funcionando. Esto puede determinar cómo prefiere configurar varios
    | servicios que utiliza la aplicación. Establezca esto en su archivo ".env".
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Modo de depuración de la aplicación
    |--------------------------------------------------------------------------
    |
    | Cuando su aplicación está en modo de depuración, los mensajes de error detallados con
    | Los rastros de pila se mostrarán en cada error que ocurra dentro de su
    | solicitud. Si está deshabilitado, se muestra una página de error genérico simple.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | URL de la aplicación
    |--------------------------------------------------------------------------
    |
    | La consola utiliza esta URL para generar correctamente las URL al utilizar
    | la herramienta de línea de comandos Artisan. Debe establecer esto en la raíz de
    | su aplicación para que se utilice al ejecutar tareas Artisan.
    |
    */

    'url' => env('APP_URL', 'http://bloc.test'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Zona horaria de la aplicación
    |--------------------------------------------------------------------------
    |
    | Aquí puede especificar la zona horaria predeterminada para su aplicación, que
    | será utilizado por las funciones de fecha y hora de PHP. Nos hemos ido
    | y configúrelo en un valor predeterminado razonable para usted.
    |
    */

    'timezone' => 'America/Bogota',

    /*
    |--------------------------------------------------------------------------
    | Configuración regional de la aplicación
    |--------------------------------------------------------------------------
    |
    | La configuración regional de la aplicación determina la configuración regional predeterminada que se utilizará
    | por el proveedor de servicios de traducción. Eres libre de establecer este valor
    | a cualquiera de las configuraciones regionales que admitirá la aplicación.
    |
    */

    'locale' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Configuración regional alternativa de la aplicación
    |--------------------------------------------------------------------------
    |
    | La configuración regional alternativa determina la configuración regional que se utilizará cuando la actual
    | no está disponible. Puede cambiar el valor para que corresponda a cualquiera de
    | las carpetas de idiomas que se proporcionan a través de su aplicación.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | Esta configuración regional será utilizada por la biblioteca PHP de Faker al generar
    | datos para las semillas de su base de datos. Por ejemplo, esto se utilizará para obtener
    | números de teléfono localizados, información de direcciones y más.
    |
    */

    'faker_locale' => 'es_CO',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | El servicio de cifrado Illuminate utiliza esta clave y debe configurarse
    | a una cadena aleatoria de 32 caracteres; de lo contrario, estas cadenas cifradas
    | no estará seguro. ¡Haga esto antes de implementar una aplicación!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Proveedores de servicios de carga automática
    |--------------------------------------------------------------------------
    |
    | Los proveedores de servicios enumerados aquí se cargarán automáticamente en el
    | solicitud a su aplicación. No dude en agregar sus propios servicios a
    | esta matriz para otorgar funcionalidad ampliada a sus aplicaciones.
    |
    */

    'providers' => [

        /*
         * Proveedores de servicios de Laravel Framework...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\FortifyServiceProvider::class,
        App\Providers\JetstreamServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | Esta matriz de alias de clase se registrará cuando esta aplicación
    | Está empezado. Sin embargo, siéntase libre de registrar tantos como desee
    | los alias se cargan "perezosamente" para que no obstaculicen el rendimiento.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        // 'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
