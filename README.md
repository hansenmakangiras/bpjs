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
[reference](http://dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/#p_pengguna)

## Available methods
### $diagnosa->get($keyword = 0, $start = 0, $limit = 10)
```php
$diagnosa = new \redzjovi\pcare\v1\Diagnosa();
$response = $diagnosa->get();
```

### $dokter->get($start = 0, $limit = 10)
```php
$dokter = new \redzjovi\pcare\v1\Dokter();
$response = $dokter->get();
```

### $kesadaran->get()
```php
$kesadaran = new \redzjovi\pcare\v1\Kesadaran();
$response = $kesadaran->get();
```

### $kunjungan->rujukanGet($noKunjungan)
```php
$kunjungan = new \redzjovi\pcare\v2\Kunjungan();
$response = $kunjungan->rujukanGet('0114U1630316Y000003');
```

### $kunjungan->rujukanGet($noKunjungan)
```php
$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->rujukanGet('0114U1630316Y000003');
```

### $kunjungan->riwayatGet($noKartu)
```php
$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->rujukanGet('0000029247423');
```

### $kunjungan->add($data)
TBA

### $kunjungan->add($data)
TBA

### $kunjungan->edit($data)
TBA

### $kunjungan->edit($data)
TBA

### $kunjungan->delete($noKunjungan)
```php
$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->delete('0114A0260815Y000002');
```
