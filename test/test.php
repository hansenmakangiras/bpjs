<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

$config = [
    'cons_id' => '12049',

    'secret_key' => '7hFC0E97A1',

    'username' => '1004U201',
    'password' => '123456',
    'kd_aplikasi' => '095',
];

$pcare = new \redzjovi\pcare\v1\BpjsIntegration();
$pcare->initialize($config);
dump($pcare);

$diagnosa = new \redzjovi\pcare\v1\Diagnosa();
$response = $diagnosa->initialize($config)->get();
dump($response);
