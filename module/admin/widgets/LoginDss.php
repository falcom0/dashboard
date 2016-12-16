<?php 

namespace app\module\admin\widgets;

class LoginDss
{
	public $cookie;
	public $post;
	
	public $curl;
	public $result;
	
	public function __construct($username, $password)
	{
		$this->post = [
				'username' => $username,
				'password' => $password
		];
		
		$this->cookie = 'login.txt';
		$this->curl = curl_init();
		
		curl_setopt($this->curl, CURLOPT_URL, 'https://dss.usu.ac.id/login.html');
		curl_setopt($this->curl, CURLOPT_POST, 1);
		curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($this->post));
		curl_setopt($this->curl, CURLOPT_COOKIEJAR, $this->cookie);
		curl_setopt($this->curl, CURLOPT_COOKIEFILE, $this->cookie);
		curl_setopt($this->curl ,CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($this->curl ,CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($this->curl ,CURLOPT_RETURNTRANSFER, true);
	}
	
	public function getHomePage($close = false)
	{
		$html = curl_exec($this->curl);
		
		if($close)
		{
			curl_close($this->curl);
		}
		
	 	return $html;
	}
	
	public function getPage($url, $data = [])
	{	
		$this->getHomePage();
		curl_setopt($this->curl, CURLOPT_URL, $url);
		
		if($data)
		{	
			curl_setopt($this->curl, CURLOPT_POST, 1);
			curl_setopt($this->curl, CURLOPT_POSTFIELDS, http_build_query($data));
		}
		
		$html = curl_exec($this->curl);
		curl_close($this->curl);
		
		return $html;
	}
}