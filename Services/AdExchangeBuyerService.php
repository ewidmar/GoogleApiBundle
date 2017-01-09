<?php

namespace HappyR\Google\ApiBundle\Services;

class AdExchangeBuyerService extends \Google_Service_AdExchangeBuyer
{
    public $client;

    public function __construct(GoogleClient $client)
    {
        $this->client = $client;
        parent::__construct($client->getGoogleClient());
    }
}
