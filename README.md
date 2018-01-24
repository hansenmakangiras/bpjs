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

## Available methods
### $diagnosa->get($keyword = 0, $start = 0, $limit = 10)
```php
$diagnosa = new \redzjovi\pcare\v1\Diagnosa();
$response = $diagnosa->get();
```
[reference](http://dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/#p_pengguna)
