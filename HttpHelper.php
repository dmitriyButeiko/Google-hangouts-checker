<?php

    require_once "Config.php";

/**
 *
 */
class HttpHelper
{
    /**
     * @var void array of request headers
     */
    public $requestHeaders;

    /**
     *
     */
    public function __construct()
    {
    }

    /*
    *
    */
    public function getHelper()
    {
        $instance = null;
        if($instance == null)
        {
            $instance = new HttpHelper();
        }  
        return $instance;
    }

    /**
     * @param void $url
     */
    private function getHtml($url)
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $html = curl_exec($ch);
        return $html;
    }

    /**
     * initialize curl variable
     *
     * set default options via CURLOPT
     * set default headers from private valriable
     * setup cookies
     * call functuin make post string to generate ost string from array
     * call function
     * @param void $requestData url - url to make post request
     * postData - array of post data
     */
    public function makePostString($fields)
    {
        $postData = '';
        foreach($fields as $k => $v)
        {
            $postData .= $k.'='.$v.'&';
        }
    
        $postData = rtrim($postData, '&');     
        return $postData;       
    }   

    /*
    *
    */
    public function makePostRequest($requestData)
    {
        global $curlHeaders;
        $requestUrl = $requestData["requestUrl"];

        $ch = curl_init($requestUrl);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, true);
        $postString = $this->makePostString($requestData["postData"]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
        //curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $requestHeaders = $curlHeaders;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $curlHeaders); 

        $resultEncoded = curl_exec($ch);
        $resultDecoded  = gzdecode($resultEncoded);

        var_dump($resultDecoded);
    }
}