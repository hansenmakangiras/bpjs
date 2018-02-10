<?php

namespace bpjs\pcare\v1;

use GuzzleHttp\Client;

class Kelompok extends \bpjs\pcare\v1\BpjsIntegration
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getByClub($kdJnsKelompok)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/club/'.$kdJnsKelompok,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function getByKegiatan($bulan)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/kegiatan/'.$bulan,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }

    public function getByPeserta($eduId)
    {
        try {
            $response = $this->client->request(
                'GET',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/peserta/'.$eduId,
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
     *      'eduId' => null,
     *      'clubId' => 36,
     *      'tglPelayanan' => '27-03-2016',
     *      'kdKegiatan' => '01',
     *      'kdKelompok' => '03',
     *
     *      'materi' => 'materi',
     *      'pembicara' => 'pembicara',
     *      'lokasi' => 'lokasi',
     *      'keterangan' => 'keterangan',
     *      'biaya' => 20000
     * ]
     */
    public function kegiatanAdd($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/kegiatan',
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

    public function kegiatanDelete($eduId)
    {
        try {
            $response = $this->client->request(
                'DELETE',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/kegiatan/'.$eduId,
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
     *      'eduId' => '16030000009',
     *      'noKartu' => '0001101615759'
     * ]
     */
    public function pesertaAdd($data)
    {
        try {
            $response = $this->client->request(
                'POST',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/peserta',
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

    public function pesertaDelete($eduId, $noKartu)
    {
        try {
            $response = $this->client->request(
                'DELETE',
                'dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/kelompok/peserta/'.$eduId.'/'.$noKartu,
                ['headers' => $this->headers]
            )
            ->getBody()->getContents();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse()->getBody();
        }

        return json_decode($response, true);
    }
}
