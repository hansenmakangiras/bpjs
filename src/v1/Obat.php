<?php

namespace bpjs\pcare\v1;

use GuzzleHttp\Client;

class Obat extends \bpjs\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function dphoGet($keyword = '', $start = 0, $limit = 10)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/obat/dpho/'.$keyword.'/'.$start.'/'.$limit,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    /**
     * @param array $data
     * [
     *      'kdObatSK' => 0,
     *      'noKunjungan' => '1301U0070815Y000004',
     *      'racikan' => true,
     *      'kdRacikan' => null,
     *      'obatDPHO' => true,
     *      'kdObat' => '130199999',
     *      'signa1' => 3,
     *      'signa2' => 1,
     *      'jmlObat' => 10,
     *      'jmlPermintaan' => 2,
     *
     *      'nmObatNonDPHO' => 'racikan 1 obat 1'
     * ]
     */
    public function kunjunganAdd($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/obat/kunjungan',
                [
                    'headers' => $this->headers,
                    'json' => $data,
                ]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function kunjunganDelete($kdObatSK, $noKunjungan)
    {
        try {
            $response = $this->client->request(
                'DELETE',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/obat/'.$kdObatSK.'/kunjungan/'.$noKunjungan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function kunjunganGet($noKunjungan)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/obat/kunjungan/'.$noKunjungan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
