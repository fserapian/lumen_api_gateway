<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumeExternalService
{
    /**
     * Send request to any service
     *
     * @param string $method
     * @param string $requestUrl
     * @param array $formParams
     * @param array $headers
     * @return string
     */
    public function performRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        $client = new Client([
            'base_uri' => $this->baseUri
        ]);

        $response = $client->request(
            $method,
            $requestUrl,
            ['form_params' => $formParams, 'headers' => $headers]
        );

        return $response->getBody()->getContents();
    }
}
