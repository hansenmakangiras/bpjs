<?php

namespace redzjovi\pcare\v1;

use GuzzleHttp\Client;

class BpjsIntegration
{
    public $client;
    public $headers;

    // 1. X-cons-id
    public $cons_id;

    // 2. X-Timestamp
    public $timestamp;

    // 3. X-Signature
    public $signature;
    public $secret_key;

    // 4. X-Authorization
    public $authorization;
    public $username;
    public $password;
    public $kd_aplikasi;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * [initialize description]
     * @param array $config
     * [
     *      'cons_id' => '12345',
     *
     *      'secret_key' => '1234567890',
     *
     *      'username' => '12345678',
     *      'password' => '123456',
     *      'kd_aplikasi' => '123',
     * ]
     */
    public function initialize($config = [])
    {
        foreach ($config as $configName => $configValue) {
            $this->$configName = $configValue;
        }

        $this->setTimestamp()->setSignature()->setAuthorization()->setHeaders();
        return $this;
    }

    public function setAuthorization()
    {
        $this->authorization = base64_encode($this->username.':'.$this->password.':'.$this->kd_aplikasi);
        return $this;
    }

    public function setHeaders()
    {
        $this->headers = [
            'X-cons-id' => $this->cons_id,
            'X-Timestamp' => $this->timestamp,
            'X-Signature' => $this->signature,
            'X-Authorization' => 'Basic '.$this->authorization,
        ];
        return $this;
    }

    public function setSignature()
    {
        $data = $this->cons_id.'&'.$this->timestamp;
        $signature = hash_hmac('sha256', $data, $this->secret_key, true);
        $encodedSignature = base64_encode($signature);
        $this->signature = $encodedSignature;
        return $this;
    }

    public function setTimestamp()
    {
        date_default_timezone_set('UTC');
        $this->timestamp = strval(time()-strtotime('1970-01-01 00:00:00'));
        return $this;
    }
}
