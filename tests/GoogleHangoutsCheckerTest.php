<?php 

	$currentWordkeddirectory = getcwd();
	//include_once $currentWordkeddirectory . "/../vendor/autoload.php";
	include_once $currentWordkeddirectory . "/../GoogleHangoutsChecker.php";

	class GoogleHangoutsCheckerTest extends PHPUnit_Framework_TestCase
	{
		private $googleHangoutsChecker;

		public function __construct()
		{
			$this->googleHangoutsChecker = GoogleHangoutsChecker::getChecker();  
		}

		public function test_checkNumber()
		{
			$testNumberThatNotExists = "+380669948837";
		    $this->assertFalse($this->googleHangoutsChecker->checkNumber($testNumberThatNotExists));

			/*$testNumberThatExists = "+18007520900";
			$this->assertTrue($this->googleHangoutsChecker->checkNumber($testNumberThatExists));*/
		}	

		/*public function test_checkNumbers()
		{
			$arrayOfNumbers = array(
				"+9999999992492999",
				"+18007520900"
			);
			$result = $this->googleHangoutsChecker->checkNumbers($arrayOfNumbers);

			$this->assertTrue((count($result) == 1) && ($result[0] == "+18007520900")); 
		}*/
	}	
	
?>