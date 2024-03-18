<?php

namespace App\Models;
use GuzzleHttp\Client;

class RandomUser
{

    private $url;

    private static $guzzleClient = null;

    public function __construct()
    {
        $this->url = "https://randomuser.me/api";
    }

    public function  getRandomUser($limit = 0)
    {
        $url = $this->url;
        $params = array();

        if ($limit > 0) {
            $params["results"] = $limit;
        }

        if (count($params) > 0) {
            $url .= "?" . http_build_query($params);
        }

        return $this->request("GET",$url);

    }

    private function request($method,$url,$data = null) {
        $header = ['Content-Type' => 'application/json'];
        $client = new Client(['base_uri' => $url]);

        $response = $client->request($method,'',[
            'headers' => $header,
            'json' => $data,
        ])->getBody();

        $response_json = json_decode($response,false);
        return $response_json;
    }
}

