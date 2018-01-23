## Synopsis
PHP pcare.

## Installation
```
composer require redzjovi/php-pcare
```

## How to use
```
$config = [
    'cons_id' => '12345',

    'secret_key' => '1234567890',

    'username' => '12345678',
    'password' => '123456',
    'kd_aplikasi' => '123',
];

$diagnosa = new \redzjovi\pcare\v1\Diagnosa();
$response = $diagnosa->initialize($config)->get();
var_dump($response);
```
