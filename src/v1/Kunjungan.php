<?php

namespace redzjovi\pcare\v1;

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
     *      'noKartu' => '0000029247423',
     *      'tglDaftar' => '24-08-2015',
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
     *      'kdProviderRujukLanjut' => '0105R001',
     *      'kdStatusPulang' => '3',
     *      'tglPulang' => '24-08-2015',
     *      'kdDokter' => '002',
     *      'kdDiag1' => 'K296',
     *      'kdDiag2' => null,
     *      'kdDiag3' => null,
     *      'kdPoliRujukInternal' => '001',
     *
     *      'kdPoliRujukLanjut' => null
     * ]
     */
    public function add($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan',
                [
                    'headers' => $this->headers,
                    'json' => $data,
                ]
            )
            ->getBody();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function delete($noKunjungan)
    {
        try {
            $response = $this->client->request(
                'DELETE',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan/'.$noKunjungan,
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
     *      'noKunjungan' => '1301U0070815Y000007',
     *      'noKartu' => '0000029247423',
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
     *      'kdProviderRujukLanjut' => '0195R001',
     *      'kdStatusPulang' => '3',
     *      'tglPulang' => '23-08-2015',
     *      'kdDokter' => '002',
     *      'kdDiag1' => 'K296',
     *      'kdDiag2' => null,
     *      'kdDiag3' => null,
     *      'kdPoliRujukInternal' => null,
     *
     *      'kdPoliRujukLanjut' => 'TON'
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
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kunjungan/rujukan/'.$noKunjungan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
