<?php

namespace bpjs\pcare\v1;

use GuzzleHttp\Client;

class Pendaftaran extends \bpjs\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array $data
     * [
     *      'kdProviderPeserta' => '0114A026',
     *      'tglDaftar' => '12-08-2015',
     *      'noKartu' => '0001113569638',
     *      'kdPoli' => '001',
     *      'keluhan' => null,
     *
     *      'kunjSakit' => true,
     *      'sistole' => 0,
     *      'diastole' => 0,
     *      'beratBadan' => 0,
     *      'tinggiBadan' => 0,
     *
     *      'respRate' => 0,
     *      'heartRate' => 0,
     *      'rujukBalik' => 0,
     *      'rawatInap' => false
     * ]
     */
    public function add($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/pendaftaran',
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

    public function delete($noKartu, $tglDaftar, $noUrut)
    {
        try {
            $response = $this->client->request(
                'DELETE',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/pendaftaran/peserta/'.$noKartu.'/tglDaftar/'.$tglDaftar.'/noUrut/'.$noUrut,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function getByNomorUrut($noUrut, $tglDaftar)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/pendaftaran/noUrut/'.$noUrut.'/tglDaftar/'.$tglDaftar,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function getByProvider($tglDaftar, $start = 0, $limit = 10)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/pendaftaran/tglDaftar/'.$tglDaftar.'/'.$start.'/'.$limit,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
