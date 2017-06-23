<?php

require_once "HttpHelper.php";

/**
 *
 */
class GoogleHangoutsChecker
{

    private $checkNumberUrl = "https://people-pa.clients6.google.com/v2/people/autocomplete";
    private $httpHelper;

    /**
     *
     */
    private function __construct()
    {
        $this->httpHelper = HttpHelper::getHelper();
    }

    /**
    * Returns instance of VideoPlayer parser
    */
    public function getChecker()
    {
        static $instance = null;
        if($instance == null)
        {
            $instance = new GoogleHangoutsChecker();
        }

        return $instance;
    }

    /**
     * generate post string
     * call method makePostRequest from httpHelper
     * @param void $number
     */
    public function checkNumber($number)
    {
        // post data for google request
        $postData = array(
            "query" => $number,
            "client" => "HANGOUTS_WITH_DATA",
            "pageSize" => "15",
            "key" => "AIzaSyBokvzEPUrkgfws0OrFWkpKkVBVuhRfKpk"
        );

        $requestData = array(
            "requestUrl" => $this->checkNumberUrl,
            "postData" => $postData
        );

        // do post request to google autocomplete
        $this->httpHelper->makePostRequest($requestData);
    }

    /**
     * 
     * 
     * 
     */
    public function checkNumbers($numbers)
    {
        $existedNumbers = array();

        foreach($numbers as $singleNumber)
        {
            $numberExists = $this->checkNumber($singleNumber);

            if($numberExists)
            {
                $existedNumbers[] = $singleNumber;
            }
        }

        return $singleNumber;
    }
}
