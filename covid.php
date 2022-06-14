<?php

function covid(){
	$curl = curl_init();

	curl_setopt_array($curl, [
		CURLOPT_URL => "https://covid-193.p.rapidapi.com/statistics?country=Turkey",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 30,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => [
			"X-RapidAPI-Host: covid-193.p.rapidapi.com",
			"X-RapidAPI-Key: TOKEN_HERE"
		],
	]);

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		return $err;
	} else {
		return $response;
	}
}

?>