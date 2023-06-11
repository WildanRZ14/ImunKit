<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\API;

class NewsModel extends Model
{
    protected $apiKey;

    public function __construct($apiConfig = null)
    {
        parent::__construct($apiConfig);
        $this->apiKey = config(API::class)->newsAPIKey;
    }

    public function getNews()
    {
        $client = \Config\Services::curlrequest();

        $query = http_build_query([
            'q' => 'Immunization for babies',
            'apiKey' => $this->apiKey
        ]);

        $url = 'https://newsapi.org/v2/everything?' . $query;

        $response = $client->request('GET', $url);

        if ($response->getStatusCode() === 200) {
            $data = json_decode($response->getBody());

            if ($data->totalResults > 0) {
                return $data->articles;
            } else {
                return [];
            }
        } else {
            throw new \Exception($response->getBody());
        }
    }
}
