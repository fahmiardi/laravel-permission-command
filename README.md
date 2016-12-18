# Laravel Permission Console Commands

This is out of the box package managing permission via console command for [Spatie Laravel Permission](https://github.com/spatie/laravel-permission)

## Install

```bash
composer require fahmiardi/laravel-permission-command
```

Register service provider by adding to your `config/app.php`:

```php
...
Fahmiardi\Permissions\Commands\PermissionCommandServiceProvider::class,
```

Once installed you can do stuff like this:

```bash
php artisan list
```

You must see:

```bash
permission
    permission:assign-role        Assign role(s) to user
    permission:create-permission  Create permission
    permission:create-role        Create role
    permission:give-permission    Give permission(s) to user or role
```

## Usage

###Create Permission

```bash
php artisan permission:create-permission
```

###Create Role

```bash
php artisan permission:create-role
```

###Assign Role to User

```bash
php artisan permission:assign-role
```

###Give permission to User and Role type

```bash
php artisan permission:give-permission #type will be asked
php artisan permission:give-permission --user
php artisan permission:give-permission --role
```