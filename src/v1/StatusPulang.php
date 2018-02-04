<?php

namespace redzjovi\pcare\v1;

use GuzzleHttp\Client;

class StatusPulang extends \redzjovi\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get($rawatInap = true)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/statuspulang/rawatInap/'.$rawatInap,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
