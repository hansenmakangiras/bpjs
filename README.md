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
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \redzjovi\pcare\v2\Kunjungan();
$response = $kunjungan->add($data);
```

### $kunjungan->add($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->add($data);
```

### $kunjungan->edit($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \redzjovi\pcare\v2\Kunjungan();
$response = $kunjungan->edit($data);
```

### $kunjungan->edit($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->edit($data);
```

### $kunjungan->delete($noKunjungan)
```php
$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->delete('0114A0260815Y000002');
```

### $mcu->add($data)
```php
$data = [
    'kdMCU' => 0,
    'noKunjungan' => '0114U1630815Y000001',
    'kdProvider' => '1301U007',
    'tglPelayanan' => '18-08-2015',
];
$mcu = new \redzjovi\pcare\v2\Mcu();
$response = $mcu->add($data);
```
### $mcu->add($data)
```php
$data = [
    'kdMCU' => 0,
    'noKunjungan' => '0114U1630815Y000001',
    'kdProvider' => '1301U007',
    'tglPelayanan' => '18-08-2015',
];
$mcu = new \redzjovi\pcare\v1\Mcu();
$response = $mcu->add($data);
```

### $mcu->edit($data)
```php
$data = [
    'kdMCU' => 0,
    'noKunjungan' => '0114U1630815Y000001',
    'kdProvider' => '1301U007',
    'tglPelayanan' => '18-08-2015',
];
$mcu = new \redzjovi\pcare\v2\Mcu();
$response = $mcu->edit($data);
```

### $mcu->edit($data)
```php
$data = [
    'kdMCU' => 0,
    'noKunjungan' => '0114U1630815Y000001',
    'kdProvider' => '1301U007',
    'tglPelayanan' => '18-08-2015',
];
$mcu = new \redzjovi\pcare\v1\Mcu();
$response = $mcu->edit($data);
```

### $mcu->kunjunganGet($noKunjungan)
```php
$mcu = new \redzjovi\pcare\v2\Mcu();
$response = $mcu->kunjunganGet('0000029247423');
```

### $mcu->kunjunganGet($noKunjungan)
```php
$mcu = new \redzjovi\pcare\v1\Mcu();
$response = $mcu->kunjunganGet('0000029247423');
```

### $mcu->delete($kdmcu, $noKunjungan)
```php
$mcu = new \redzjovi\pcare\v1\Mcu();
$response = $mcu->delete('34', '1301U0070815Y000005');
```
