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

### $obat->dphoGet($keyword = '', $start = 0, $limit = 10)
```php
$obat = new \redzjovi\pcare\v1\Obat();
$response = $obat->dphoGet('1301', '0', '3');
```

### $obat->kunjunganGet($noKunjungan)
```php
$obat = new \redzjovi\pcare\v1\Obat();
$response = $obat->kunjunganGet('1301U0070815Y000004');
```

### $obat->kunjunganAdd($data)
```php
$data = [
    'kdObatSK' => 0,
    'noKunjungan' => '1301U0070815Y000004',
    'racikan' => true,
];
$obat = new \redzjovi\pcare\v1\Obat();
$response = $obat->kunjunganAdd($data);
```

### $obat->kunjunganDelete($kdObatSK, $noKunjungan)
```php
$obat = new \redzjovi\pcare\v1\Obat();
$response = $obat->kunjunganDelete('13', '1301U0070815Y000004');
```

### $pendaftaran->getByNomorUrut($noUrut, $tglDaftar)
```php
$pendaftaran = new \redzjovi\pcare\v1\Pendaftaran();
$response = $pendaftaran->getByNomorUrut('1', '13-08-2015');
```

### $pendaftaran->getByProvider($tglDaftar, $start = 0, $limit = 10)
```php
$pendaftaran = new \redzjovi\pcare\v1\Pendaftaran();
$response = $pendaftaran->getByProvider('13-08-2015', '0', '3');
```

### $pendaftaran->add($data)
```php
$data = [
    'kdProviderPeserta' => '0114A026',
    'tglDaftar' => '12-08-2015',
    'noKartu' => '0001113569638',
];
$pendaftaran = new \redzjovi\pcare\v1\Pendaftaran();
$response = $pendaftaran->add($data);
```

### $pendaftaran->delete($noKartu, $tglDaftar, $noUrut)
```php
$pendaftaran = new \redzjovi\pcare\v1\Pendaftaran();
$response = $pendaftaran->delete('0001113569638', '24-08-2015', '1');
```

### $peserta->get($keyword)
```php
$peserta = new \redzjovi\pcare\v2\Peserta();
$response = $peserta->get('0001101521158');
```

### $peserta->get($keyword)
```php
$peserta = new \redzjovi\pcare\v2\Peserta();
$response = $peserta->get('0000029247423');
```

### $peserta->getByJenisKartu($keyword)
```php
$peserta = new \redzjovi\pcare\v2\Peserta();
$response = $peserta->getByJenisKartu('3174016909650001');
```

### $peserta->getByJenisKartu($keyword)
```php
$peserta = new \redzjovi\pcare\v1\Peserta();
$response = $peserta->getByJenisKartu('3174016909650001');
```

### $poli->fktpGet($start = 0, $limit = 10)
```php
$poli = new \redzjovi\pcare\v1\Poli();
$response = $poli->fktpGet('0', '10');
```

### $poli->fktlGet($start = 0, $limit = 10)
```php
$poli = new \redzjovi\pcare\v1\Poli();
$response = $poli->fktlGet('0', '10');
```
