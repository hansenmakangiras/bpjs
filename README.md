## Synopsis
PHP pcare.

## Installation
```
composer require redzjovi/bpjs
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

$diagnosa = new \bpjs\pcare\v1\Diagnosa();
$diagnosa->initialize($config); // don't forget to initialize config
$response = $diagnosa->get();
var_dump($response);
```
[reference](http://dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/#p_pengguna)

## Available methods
### $diagnosa->get($keyword = 0, $start = 0, $limit = 10)
```php
$diagnosa = new \bpjs\pcare\v1\Diagnosa();
$response = $diagnosa->get();
```

### $dokter->get($start = 0, $limit = 10)
```php
$dokter = new \bpjs\pcare\v1\Dokter();
$response = $dokter->get();
```

### $kesadaran->get()
```php
$kesadaran = new \bpjs\pcare\v1\Kesadaran();
$response = $kesadaran->get();
```

### $kunjungan->rujukanGet($noKunjungan)
```php
$kunjungan = new \bpjs\pcare\v2\Kunjungan();
$response = $kunjungan->rujukanGet('0114U1630316Y000003');
```

### $kunjungan->rujukanGet($noKunjungan)
```php
$kunjungan = new \bpjs\pcare\v1\Kunjungan();
$response = $kunjungan->rujukanGet('0114U1630316Y000003');
```

### $kunjungan->riwayatGet($noKartu)
```php
$kunjungan = new \bpjs\pcare\v1\Kunjungan();
$response = $kunjungan->rujukanGet('0000029247423');
```

### $kunjungan->add($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \bpjs\pcare\v2\Kunjungan();
$response = $kunjungan->add($data);
```

### $kunjungan->add($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \bpjs\pcare\v1\Kunjungan();
$response = $kunjungan->add($data);
```

### $kunjungan->edit($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \bpjs\pcare\v2\Kunjungan();
$response = $kunjungan->edit($data);
```

### $kunjungan->edit($data)
```php
$data = [
    'noKunjungan' => null,
    'noKartu' => '0001101521158',
    'tglDaftar' => '01-02-2018',
];
$kunjungan = new \bpjs\pcare\v1\Kunjungan();
$response = $kunjungan->edit($data);
```

### $kunjungan->delete($noKunjungan)
```php
$kunjungan = new \bpjs\pcare\v1\Kunjungan();
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
$mcu = new \bpjs\pcare\v2\Mcu();
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
$mcu = new \bpjs\pcare\v1\Mcu();
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
$mcu = new \bpjs\pcare\v2\Mcu();
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
$mcu = new \bpjs\pcare\v1\Mcu();
$response = $mcu->edit($data);
```

### $mcu->kunjunganGet($noKunjungan)
```php
$mcu = new \bpjs\pcare\v2\Mcu();
$response = $mcu->kunjunganGet('0000029247423');
```

### $mcu->kunjunganGet($noKunjungan)
```php
$mcu = new \bpjs\pcare\v1\Mcu();
$response = $mcu->kunjunganGet('0000029247423');
```

### $mcu->delete($kdmcu, $noKunjungan)
```php
$mcu = new \bpjs\pcare\v1\Mcu();
$response = $mcu->delete('34', '1301U0070815Y000005');
```

### $obat->dphoGet($keyword = '', $start = 0, $limit = 10)
```php
$obat = new \bpjs\pcare\v1\Obat();
$response = $obat->dphoGet('1301', '0', '3');
```

### $obat->kunjunganGet($noKunjungan)
```php
$obat = new \bpjs\pcare\v1\Obat();
$response = $obat->kunjunganGet('1301U0070815Y000004');
```

### $obat->kunjunganAdd($data)
```php
$data = [
    'kdObatSK' => 0,
    'noKunjungan' => '1301U0070815Y000004',
    'racikan' => true,
];
$obat = new \bpjs\pcare\v1\Obat();
$response = $obat->kunjunganAdd($data);
```

### $obat->kunjunganDelete($kdObatSK, $noKunjungan)
```php
$obat = new \bpjs\pcare\v1\Obat();
$response = $obat->kunjunganDelete('13', '1301U0070815Y000004');
```

### $pendaftaran->getByNomorUrut($noUrut, $tglDaftar)
```php
$pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
$response = $pendaftaran->getByNomorUrut('1', '13-08-2015');
```

### $pendaftaran->getByProvider($tglDaftar, $start = 0, $limit = 10)
```php
$pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
$response = $pendaftaran->getByProvider('13-08-2015', '0', '3');
```

### $pendaftaran->add($data)
```php
$data = [
    'kdProviderPeserta' => '0114A026',
    'tglDaftar' => '12-08-2015',
    'noKartu' => '0001113569638',
];
$pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
$response = $pendaftaran->add($data);
```

### $pendaftaran->delete($noKartu, $tglDaftar, $noUrut)
```php
$pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
$response = $pendaftaran->delete('0001113569638', '24-08-2015', '1');
```

### $peserta->get($keyword)
```php
$peserta = new \bpjs\pcare\v2\Peserta();
$response = $peserta->get('0001101521158');
```

### $peserta->get($keyword)
```php
$peserta = new \bpjs\pcare\v2\Peserta();
$response = $peserta->get('0000029247423');
```

### $peserta->getByJenisKartu($keyword)
```php
$peserta = new \bpjs\pcare\v2\Peserta();
$response = $peserta->getByJenisKartu('3174016909650001');
```

### $peserta->getByJenisKartu($keyword)
```php
$peserta = new \bpjs\pcare\v1\Peserta();
$response = $peserta->getByJenisKartu('3174016909650001');
```

### $poli->fktpGet($start = 0, $limit = 10)
```php
$poli = new \bpjs\pcare\v1\Poli();
$response = $poli->fktpGet('0', '10');
```

### $poli->fktlGet($start = 0, $limit = 10)
```php
$poli = new \bpjs\pcare\v1\Poli();
$response = $poli->fktlGet('0', '10');
```

### $provider->get($start = 0, $limit = 10)
```php
$provider = new \bpjs\pcare\v1\Provider();
$response = $provider->get('0', '10');
```

### $tindakan->add($data)
```php
$data = [
    'kdTindakanSK' => 0,
    'noKunjungan' => '1301U0070815Y000004',
    'kdTindakan' => '01007',
];
$tindakan = new \bpjs\pcare\v1\Tindakan();
$response = $tindakan->add($data);
```

### $tindakan->edit($data)
```php
$data = [
    'kdTindakanSK' => 218,
    'noKunjungan' => '1301U0070815Y000004',
    'kdTindakan' => '01007',
];
$tindakan = new \bpjs\pcare\v1\Tindakan();
$response = $tindakan->edit($data);
```

### $tindakan->delete($kdTindakanSK, $noKunjungan)
```php
$tindakan = new \bpjs\pcare\v1\Tindakan();
$response = $tindakan->delete('199', '1301U0070815Y000005');
```

### $tindakan->getByKunjungan($noKunjungan)
```php
$tindakan = new \bpjs\pcare\v1\Tindakan();
$response = $tindakan->getByKunjungan('1301U0070815Y000005');
```

### $tindakan->get($start = 0, $limit = 10)
```php
$tindakan = new \bpjs\pcare\v1\Tindakan();
$response = $tindakan->get('0', '10');
```

### $tindakan->get($rawatInap = true)
```php
$statusPulang = new \bpjs\pcare\v1\StatusPulang();
$response = $statusPulang->get(true);
```

### $kelompok->getByClub($kdJnsKelompok)
```php
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->getByClub('01');
```

### $kelompok->getByKegiatan($bulan)
```php
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->getByKegiatan('01-01-2016');
```

### $kelompok->getByPeserta($eduId)
```php
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->getByPeserta('16020000001');
```

### $kelompok->kegiatanAdd($data)
```php
$data = [
    'eduId' => null,
    'clubId' => 36,
    'tglPelayanan' => '27-03-2016',
    'kdKegiatan' => '01',
    'kdKelompok' => '03',

    'materi' => 'materi',
    'pembicara' => 'pembicara',
    'lokasi' => 'lokasi',
    'keterangan' => 'keterangan',
    'biaya' => 20000
];
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->kegiatanAdd($data);
```

### $kelompok->pesertaAdd($data)
```php
$data = [
    'eduId' => '16030000009',
    'noKartu' => '0001101615759'
];
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->pesertaAdd($data);
```

### $kelompok->kegiatanDelete($eduId)
```php
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->kegiatanDelete('16030000009');
```

### $kelompok->pesertaDelete($eduId, $noKartu)
```php
$kelompok = new \bpjs\pcare\v1\Kelompok();
$response = $kelompok->pesertaDelete('16030000009', '0001101615759');
```
