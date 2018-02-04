<?php

namespace redzjovi\pcare\v1;

use GuzzleHttp\Client;

class Tindakan extends \redzjovi\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array $data
     * [
     *      'kdTindakanSK' => 0,
     *      'noKunjungan' => '1301U0070815Y000004',
     *      'kdTindakan' => '01007',
     *      'biaya' => 0,
     *      'keterangan' => null,
     *
     *      'hasil' => 0
     * ]
     */
    public function add($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/tindakan',
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

    public function delete($kdTindakanSK, $noKunjungan)
    {
        try {
            $response = $this->client->request(
                'DELETE',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/tindakan/'.$kdTindakanSK.'/kunjungan/'.$noKunjungan,
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
     *      'kdTindakanSK' => 218,
     *      'noKunjungan' => '1301U0070815Y000004',
     *      'kdTindakan' => '01007',
     *      'biaya' => 0,
     *      'keterangan' => null,
     *
     *      'hasil' => 0
     * ]
     */
    public function edit($data)
    {
        try {
            $response = $this->client->request(
                'PUT',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/tindakan',
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

    public function get($start = 0, $limit = 10)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/tindakan/'.$start.'/'.$limit,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function getByKunjungan($noKunjungan)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/tindakan/kunjungan/'.$noKunjungan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
