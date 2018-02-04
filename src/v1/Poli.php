<?php

namespace redzjovi\pcare\v1;

use GuzzleHttp\Client;

class Poli extends \redzjovi\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function fktlGet($start = 0, $limit = 10)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/poli/fktl/'.$start.'/'.$limit,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function fktpGet($start = 0, $limit = 10)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/poli/fktp/'.$start.'/'.$limit,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
