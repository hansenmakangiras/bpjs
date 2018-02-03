<?php

namespace redzjovi\pcare\v2;

use GuzzleHttp\Client;

class Kunjungan extends \redzjovi\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array $data
     * [
     *      'noKunjungan' => null,
     *      'noKartu' => '0001101521158',
     *      'tglDaftar' => '01-02-2018',
     *      'keluhan' => 'keluhan',
     *      'kdSadar' => '01',
     *      'sistole' => 0,
     *      'diastole' => 0,
     *      'beratBadan' => 0,
     *      'tinggiBadan' => 0,
     *      'respRate' => 0,
     *
     *      'heartRate' => 0,
     *      'terapi' => 'catatan',
     *      'kdProviderRujukLanjut' => '0112R027',
     *      'kdStatusPulang' => '4',
     *      'tglPulang' => '16-02-2016',
     *      'kdDokter' => '019',
     *      'kdDiag1' => 'K29.6',
     *      'kdDiag2' => null,
     *      'kdDiag3' => null,
     *      'kdPoliRujukInternal' => null,
     *
     *      'kdPoliRujukLanjut' => 'TON',
     *      'kdTacc' => 2,
     *      'alasanTacc' => 'umur sudah lansia'
     * ]
     */
    public function add($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/kunjungan',
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

    /**
     * @param array $data
     * [
     *      'noKunjungan' => '0114U1630316Y000001',
     *      'noKartu' => '0001101521158',
     *      'tglDaftar' => null,
     *      'keluhan' => 'keluhan',
     *      'kdSadar' => '01',
     *      'sistole' => 0,
     *      'diastole' => 0,
     *      'beratBadan' => 0,
     *      'tinggiBadan' => 0,
     *      'respRate' => 0,
     *
     *      'heartRate' => 0,
     *      'terapi' => 'catatan',
     *      'kdProviderRujukLanjut' => '0112R027',
     *      'kdStatusPulang' => '4',
     *      'tglPulang' => '16-02-2016',
     *      'kdDokter' => '019',
     *      'kdDiag1' => 'K29.6',
     *      'kdDiag2' => null,
     *      'kdDiag3' => null,
     *      'kdPoliRujukInternal' => null,
     *
     *      'kdPoliRujukLanjut' => 'TON',
     *      'kdTacc' => 2,
     *      'alasanTacc' => 'time'
     * ]
     */
    public function edit($data)
    {
        try {
            $response = $this->client->request(
                'PUT',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/kunjungan',
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

    public function rujukanGet($noKunjungan)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v2/kunjungan/rujukan/'.$noKunjungan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
