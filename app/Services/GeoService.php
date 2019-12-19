<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;

class GeoService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getCountries()
    {
        return $this->executeRequest('countries');
    }

    public function getStatesByCode(string $code)
    {
        return $this->executeRequest(sprintf('states/%s', $code));
    }

    protected function executeRequest($route, $method = 'GET', $payload = []) : array
    {
        try {
            $response = $this->client->request($method, $route, [
                'json' => $payload,
                'http_errors' => true,
            ]);
        } catch (ClientException | ConnectException $e) {
            return []; // ConnectException thrown when outside the network.
        }

        return $this->getResponse($response);
    }

    protected function getResponse($response) : array
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
