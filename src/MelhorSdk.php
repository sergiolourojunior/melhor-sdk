<?php

namespace Sergiolourojunior\MelhorSdk;

class MelhorSdk
{
	public $sandbox = true;
	public $token = '';
	private $data;

	public function calculate($data){

		if($this->sandbox) {
			$url = "https://sandbox.melhorenvio.com.br/api/v2/me/shipment/calculate";
		} else {
			$url = "https://www.melhorenvio.com.br/api/v2/me/shipment/calculate";
		}

		$token = $this->token;

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => json_encode($data),
			CURLOPT_HTTPHEADER => array(
				"accept: application/json",
				"content-type: application/json",
				"authorization: Bearer ".$token
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			return false;
		} else {
			return $response;
		}
	}
}
