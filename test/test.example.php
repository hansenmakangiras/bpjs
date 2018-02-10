<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$config = [
    'cons_id' => '',

    'secret_key' => '',

    'username' => '',
    'password' => '',
    'kd_aplikasi' => '',
];

$pcare = new \bpjs\pcare\v1\BpjsIntegration();
$pcare->initialize($config);
dump($pcare);

// $diagnosa = new \bpjs\pcare\v1\Diagnosa();
// $response = $diagnosa->initialize($config)->get();
// dump($response);

// $dokter = new \bpjs\pcare\v1\Dokter();
// $response = $dokter->initialize($config)->get();
// dump($response);

// $kesadaran = new \bpjs\pcare\v1\Kesadaran();
// $response = $kesadaran->initialize($config)->get();
// dump($response);

// $kunjungan = new \bpjs\pcare\v2\Kunjungan();
// $response = $kunjungan->initialize($config)->rujukanGet('0114U1630316Y000003');
// dump($response);

// $kunjungan = new \bpjs\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->rujukanGet('0114U1630316Y000003');
// dump($response);

// $kunjungan = new \bpjs\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->riwayatGet('0000029247423');
// dump($response);

// $data = [
//     'noKunjungan' => null,
//     'noKartu' => '0001101521158',
//     'tglDaftar' => '01-02-2018',
// ];
// $kunjungan = new \bpjs\pcare\v2\Kunjungan();
// $response = $kunjungan->initialize($config)->add($data);
// dump($response);

// $data = [
//     'noKunjungan' => null,
//     'noKartu' => '0001101521158',
//     'tglDaftar' => '01-02-2018',
// ];
// $kunjungan = new \bpjs\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->add($data);
// dump($response);

// $data = [
//     'noKunjungan' => null,
//     'noKartu' => '0001101521158',
//     'tglDaftar' => '01-02-2018',
// ];
// $kunjungan = new \bpjs\pcare\v2\Kunjungan();
// $response = $kunjungan->initialize($config)->edit($data);
// dump($response);

// $data = [
//     'noKunjungan' => null,
//     'noKartu' => '0001101521158',
//     'tglDaftar' => '01-02-2018',
// ];
// $kunjungan = new \bpjs\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->edit($data);
// dump($response);

// $kunjungan = new \bpjs\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->delete('0114A0260815Y000002');
// dump($response);

// $data = [
//     'kdMCU' => 0,
//     'noKunjungan' => '0114U1630815Y000001',
//     'kdProvider' => '1301U007',
//     'tglPelayanan' => '18-08-2015',
// ];
// $mcu = new \bpjs\pcare\v2\Mcu();
// $response = $mcu->initialize($config)->add($data);
// dump($response);

// $data = [
//     'kdMCU' => 0,
//     'noKunjungan' => '0114U1630815Y000001',
//     'kdProvider' => '1301U007',
//     'tglPelayanan' => '18-08-2015',
// ];
// $mcu = new \bpjs\pcare\v1\Mcu();
// $response = $mcu->initialize($config)->add($data);
// dump($response);

// $data = [
//     'kdMCU' => 0,
//     'noKunjungan' => '0114U1630815Y000001',
//     'kdProvider' => '1301U007',
//     'tglPelayanan' => '18-08-2015',
// ];
// $mcu = new \bpjs\pcare\v2\Mcu();
// $response = $mcu->initialize($config)->edit($data);
// dump($response);

// $data = [
//     'kdMCU' => 0,
//     'noKunjungan' => '0114U1630815Y000001',
//     'kdProvider' => '1301U007',
//     'tglPelayanan' => '18-08-2015',
// ];
// $mcu = new \bpjs\pcare\v1\Mcu();
// $response = $mcu->initialize($config)->edit($data);
// dump($response);

// $mcu = new \bpjs\pcare\v2\Mcu();
// $response = $mcu->initialize($config)->kunjunganGet('0000029247423');
// dump($response);

// $mcu = new \bpjs\pcare\v1\Mcu();
// $response = $mcu->initialize($config)->kunjunganGet('0000029247423');
// dump($response);

// $mcu = new \bpjs\pcare\v1\Mcu();
// $response = $mcu->initialize($config)->delete('34', '1301U0070815Y000005');
// dump($response);

// $obat = new \bpjs\pcare\v1\Obat();
// $response = $obat->initialize($config)->dphoGet('1301', '0', '3');
// dump($response);

// $obat = new \bpjs\pcare\v1\Obat();
// $response = $obat->initialize($config)->kunjunganGet('1301U0070815Y000004');
// dump($response);

// $data = [
//     'kdObatSK' => 0,
//     'noKunjungan' => '1301U0070815Y000004',
//     'racikan' => true,
// ];
// $obat = new \bpjs\pcare\v1\Obat();
// $response = $obat->initialize($config)->kunjunganAdd($data);
// dump($response);

// $obat = new \bpjs\pcare\v1\Obat();
// $response = $obat->initialize($config)->kunjunganDelete('13', '1301U0070815Y000004');
// dump($response);

// $pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
// $response = $pendaftaran->initialize($config)->getByNomorUrut('1', '13-08-2015');
// dump($response);

// $pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
// $response = $pendaftaran->initialize($config)->getByProvider('13-08-2015', '0', '3');
// dump($response);

// $data = [
//     'kdProviderPeserta' => '0114A026',
//     'tglDaftar' => '12-08-2015',
//     'noKartu' => '0001113569638',
// ];
// $pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
// $response = $pendaftaran->initialize($config)->add($data);
// dump($response);

// $pendaftaran = new \bpjs\pcare\v1\Pendaftaran();
// $response = $pendaftaran->initialize($config)->delete('0001113569638', '24-08-2015', '1');
// dump($response);

// $peserta = new \bpjs\pcare\v2\Peserta();
// $response = $peserta->initialize($config)->get('0001101521158');
// dump($response);

// $peserta = new \bpjs\pcare\v1\Peserta();
// $response = $peserta->initialize($config)->get('0000029247423');
// dump($response);

// $peserta = new \bpjs\pcare\v2\Peserta();
// $response = $peserta->initialize($config)->getByJenisKartu('3174016909650001');
// dump($response);

// $peserta = new \bpjs\pcare\v1\Peserta();
// $response = $peserta->initialize($config)->getByJenisKartu('3174016909650001');
// dump($response);

// $poli = new \bpjs\pcare\v1\Poli();
// $response = $poli->initialize($config)->fktlGet('0', '10');
// dump($response);

// $provider = new \bpjs\pcare\v1\Provider();
// $response = $provider->initialize($config)->get('0', '10');
// dump($response);

// $data = [
//     'kdTindakanSK' => 0,
//     'noKunjungan' => '1301U0070815Y000004',
//     'kdTindakan' => '01007',
// ];
// $tindakan = new \bpjs\pcare\v1\Tindakan();
// $response = $tindakan->initialize($config)->add($data);
// dump($response);

// $data = [
//     'kdTindakanSK' => 218,
//     'noKunjungan' => '1301U0070815Y000004',
//     'kdTindakan' => '01007',
// ];
// $tindakan = new \bpjs\pcare\v1\Tindakan();
// $response = $tindakan->initialize($config)->edit($data);
// dump($response);

// $tindakan = new \bpjs\pcare\v1\Tindakan();
// $response = $tindakan->initialize($config)->delete('199', '1301U0070815Y000005');
// dump($response);

// $tindakan = new \bpjs\pcare\v1\Tindakan();
// $response = $tindakan->initialize($config)->getByKunjungan('1301U0070815Y000005');
// dump($response);

// $tindakan = new \bpjs\pcare\v1\Tindakan();
// $response = $tindakan->initialize($config)->get('0', '10');
// dump($response);

// $statusPulang = new \bpjs\pcare\v1\StatusPulang();
// $response = $statusPulang->initialize($config)->get(true);
// dump($response);

// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->getByClub('01');
// dump($response);

// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->getByKegiatan('01-01-2016');
// dump($response);

// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->getByPeserta('16020000001');
// dump($response);

// $data = [
//     'eduId' => null,
//     'clubId' => 36,
//     'tglPelayanan' => '27-03-2016',
//     'kdKegiatan' => '01',
//     'kdKelompok' => '03',
//
//     'materi' => 'materi',
//     'pembicara' => 'pembicara',
//     'lokasi' => 'lokasi',
//     'keterangan' => 'keterangan',
//     'biaya' => 20000
// ];
// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->kegiatanAdd($data);
// dump($response);

// $data = [
//     'eduId' => '16030000009',
//     'noKartu' => '0001101615759'
// ];
// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->pesertaAdd($data);
// dump($response);

// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->kegiatanDelete('16030000009');
// dump($response);

// $kelompok = new \bpjs\pcare\v1\Kelompok();
// $response = $kelompok->initialize($config)->pesertaDelete('16030000009', '0001101615759');
// dump($response);
