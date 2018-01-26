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

$kesadaran = new \redzjovi\pcare\v1\Kesadaran();
$response = $kesadaran->initialize($config)->get();
dump($response);
