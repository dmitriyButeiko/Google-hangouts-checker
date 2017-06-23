<?php 

	$currentWordkedDirectory = getcwd();

	/*
	*	Curl headers for google
	*/
	$curlHeaders = array(
		"Host: people-pa.clients6.google.com",
		"User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64; rv:54.0) Gecko/20100101 Firefox/54.0",
		"Accept: */*",
		"Accept-Language: en",
		"Accept-Encoding: gzip, deflate, br",
		"X-HTTP-Method-Override: GET",
		"Authorization: SAPISIDHASH 1497875207_27345df7e82106ca8c6fc69d76e755e5d82a2062",
	//	"Content-Type: application/x-www-form-urlencoded",
		"X-Goog-AuthUser: 0",
		"Referer: https://hangouts.google.com/webchat/load?prop=StartPage&pvt=AMP3uWYk6zpTivGs87U0QuxWx_MijcD1ER-T-C6vEpIGdFrAkLTtSNSH5dvva2xkPKNkO_jaRJvd8Ps5EyfaZbVfD_I5TU6JNg&fc=https://hangouts.google.com&ds&hl=uk&zx=0.7968597911030841",
		"Content-Length: 95",
		"Origin: https://hangouts.google.com",
		"Cookie: " . file_get_contents(__DIR__ . "/files/cookies.txt"),
		"DNT: 1",
		"Connection: keep-alive"
	);


?>