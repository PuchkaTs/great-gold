<?php


namespace Acme\Twitter;


use Guzzle\Plugin\Oauth\OauthPlugin;
use Guzzle\Service\Client;

class TwitterAPI {

    protected $client;

    function __construct()
    {
        $client = new Client('https://api.twitter.com/1.1/');
        $oauth = new OauthPlugin([
            'consumer_key'    => 'NkGX5YSyTPPz2ONSA6nnTMjEv',
            'consumer_secret' => 'stqZsBkUj6qOu1Jokv1vulwToqSd7ce8XqZEV17s6DVT1tqDoc',
            'token'           => '110823516-PyPFyDZwRZPDkZBdv3MkQfod8N1k6z6IWdYBocBE',
            'token_secret'    => 'mjrwp48ujjZ90ljLx3p8EVXAF8FrHPgL878UsoHNo51xT'

        ]);

        $client->addSubscriber($oauth);
        $this->client = $client;
    }

    public function search($query)
    {
        $response = $this->client->get("search/tweets.json/?q=$query")->send();

        return $response->json();
    }
} 