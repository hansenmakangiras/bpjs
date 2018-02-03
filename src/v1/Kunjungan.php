<?php

namespace redzjovi\pcare\v1;

use GuzzleHttp\Client;

class Kunjungan extends \redzjovi\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function delete($noKunjungan)
    {
        // $response = $this->client->request(
        //     'DELETE',
        //     'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan/rujukan/'.$noKunjungan,
        //     ['headers' => $this->headers]
        // )
        // ->getBody()->getContents();

        $response = $this->client->delete(
            'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan/rujukan/'.$noKunjungan,
            ['headers' => $this->headers]
        )
        ->getBody()->getContents();

        return json_decode($response, true);
    }

    public function riwayatGet($noKartu)
    {
        $response = $this->client->request(
            'GET',
            'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan/peserta/'.$noKartu,
            ['headers' => $this->headers]
        )
        ->getBody()->getContents();

        return json_decode($response, true);
    }

    public function rujukanGet($noKunjungan)
    {
        $response = $this->client->request(
            'GET',
            'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan/rujukan/'.$noKunjungan,
            ['headers' => $this->headers]
        )
        ->getBody()->getContents();

        return json_decode($response, true);
    }
}
