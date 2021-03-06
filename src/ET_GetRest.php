<?php

namespace FuelSdk;

/**
 * This class represents the GET operation for REST service.
 */
class ET_GetRest extends ET_Constructor
{
    /**
     * Initializes a new instance of the class.
     * @param    ET_Client $authStub The ET client object which performs the auth token, refresh token using clientID clientSecret
     * @param    string $url The endpoint URL
     * @param    null|string $qs access token passed in header instead of url
     */
    function __construct($authStub, $url, $qs = "")
    {
        // $restResponse = ET_Util::restGet($url, $authStub);
        $restResponse = ET_Util::restGet($url, $authStub, $qs);

        $this->moreResults = false;
        parent::__construct($restResponse->body, $restResponse->httpcode, true);
    }
}
