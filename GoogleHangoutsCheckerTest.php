<?php 

    require_once "GoogleHangoutsChecker.php";

    $googleHangoutsChecker = GoogleHangoutsChecker::getChecker();

	$testNumberThatNotExists = "+380669948837";
    $googleHangoutsChecker->checkNumber($testNumberThatNotExists);

?>