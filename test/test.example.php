<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$config = [
    'cons_id' => '',

    'secret_key' => '',

    'username' => '',
    'password' => '',
    'kd_aplikasi' => '',
];

$pcare = new \redzjovi\pcare\v1\BpjsIntegration();
$pcare->initialize($config);
dump($pcare);

// $diagnosa = new \redzjovi\pcare\v1\Diagnosa();
// $response = $diagnosa->initialize($config)->get();
// dump($response);

// $dokter = new \redzjovi\pcare\v1\Dokter();
// $response = $dokter->initialize($config)->get();
// dump($response);

// $kesadaran = new \redzjovi\pcare\v1\Kesadaran();
// $response = $kesadaran->initialize($config)->get();
// dump($response);

// // need Jovi
// $kunjungan = new \redzjovi\pcare\v2\Kunjungan();
// $response = $kunjungan->initialize($config)->rujukanGet('0114U1630316Y000003');
// dump($response);

// // need Jovi
// $kunjungan = new \redzjovi\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->rujukanGet('0114U1630316Y000003');
// dump($response);

// $kunjungan = new \redzjovi\pcare\v1\Kunjungan();
// $response = $kunjungan->initialize($config)->riwayatGet('0000029247423');
// dump($response);

$kunjungan = new \redzjovi\pcare\v1\Kunjungan();
$response = $kunjungan->initialize($config)->delete('0114A0260815Y000002');
dump($response);
