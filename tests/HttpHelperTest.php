<?php 

	$currentWordkeddirectory = getcwd();
	//include_once $currentWordkeddirectory . "/../vendor/autoload.php";
	include_once $currentWordkeddirectory . "/../HttpHelper.php";

	class HttpHelperTest extends PHPUnit_Framework_TestCase
	{
		private $httpHelper;

		public function __construct()
		{
			$this->httpHelper = HttpHelper::getHelper();  
		}

		public function test_makePostString()
		{
			$testPostData = array(
				"name" => "Dmitriy",
				"surname" => "Buteiko"
			);
			$resultPostString = $this->httpHelper->makePostString($testPostData);

			$this->assertEquals("name=Dmitriy&surname=Buteiko", $resultPostString);

			$testPostData = array(
				"name" => "Dmitriy",
				"surname" => "Buteiko",
				"data" => "wwr",
				"and" => "wrgwg"
			);
			$resultPostString = $this->httpHelper->makePostString($testPostData);

			$this->assertEquals("name=Dmitriy&surname=Buteiko&data=wwr&and=wrgwg", $resultPostString);
		}  		

		
	}	
	
?>