<?php
/**
 * Yii2 test controller
*
* @category  Web-yii2-example
* @package   yii2-curl-example
* @author    Nils Gajsek <info@linslin.org>
* @copyright 2013-2015 Nils Gajsek<info@linslin.org>
* @license   http://opensource.org/licenses/MIT MIT Public
* @version   1.0.5
* @link      http://www.linslin.org
*
*/

namespace app\module\admin\controllers;

use yii\web\Controller;
use linslin\yii2\curl;

class ApiController extends Controller
{

	/**
	 * Yii action controller
	 */
	public function actions()
	{
		return [
				'error' => [
						'class' => 'yii\web\ErrorAction',
				],
		];
	}


	/**
	 * cURL GET example
	 */
	public function actionGetgurubesar()
	{
		//Init curl
		$curl = new curl\Curl();

		//get http://example.com/
		$response = $curl->get('http://api.usu.ac.id/1.0/functional_positions?position=Guru%20Besar');
		$jdec = json_decode($response);
		$count=array(0,0,0,0,0);
		$tahun = 2015;
		
		foreach ($jdec->data as $value){
			$real = substr($value->valid_date, 0, 4);
			if($real<=$tahun){
				$count[0] += 1;
			}else if($real==$tahun+1){
				$count[1] += 1;
			}else if($real==$tahun+2){
				$count[2] += 1;				
			}else if($real==$tahun+3){
				$count[3] += 1;				
			}else if($real==$tahun+4){
				$count[4] += 1;				
			}
		}
		
// 		echo $response;
// 		return $count;
		
		$i=0;
		$results = '{';
		foreach ($count as $val){
			$results = $results.' "tahun'.($tahun+$i).'" : "'.$val.'",';
// 			var_dump($tahun+$i.' = '.$val);
			$i++;
		}
		$results = substr_replace($results, '}', -1);
		
		echo $results;
		
	}


	/**
	 * cURL POST example with post body params.
	 */
	public function actionPostExample()
	{
		//Init curl
		$curl = new curl\Curl();

		//post http://example.com/
		$response = $curl->setOption(
				CURLOPT_POSTFIELDS,
				http_build_query(array(
						'myPostField' => 'value'
				)
						))
						->post('http://example.com/');
	}


	/**
	 * cURL multiple POST example one after one
	 */
	public function actionMultipleRequest()
	{
		//Init curl
		$curl = new curl\Curl();


		//post http://example.com/
		$response = $curl->setOption(
				CURLOPT_POSTFIELDS,
				http_build_query(array(
						'myPostField' => 'value'
				)
						))
						->post('http://example.com/');


						//post http://example.com/, reset request before
						$response = $curl->reset()
						->setOption(
								CURLOPT_POSTFIELDS,
								http_build_query(array(
										'myPostField' => 'value'
								)
										))
										->post('http://example.com/');
	}


	/**
	 * cURL advanced GET example with HTTP status codes
	 */
	public function actionGetAdvancedExample()
	{
		//Init curl
		$curl = new curl\Curl();

		//get http://example.com/
		$response = $curl->post('http://example.com/');

		// List of status codes here http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
		switch ($curl->responseCode) {

			case 'timeout':
				//timeout error logic here
				break;

			case 200:
				//success logic here
				break;

			case 404:
				//404 Error logic here
				break;
		}
	}


	/**
	 * cURL timeout chaining/handling
	 */
	public function actionHandleTimeoutExample()
	{
		//Init curl
		$curl = new curl\Curl();

		//get http://www.google.com:81/ -> timeout
		$response = $curl->post('http://www.google.com:81/');

		// List of status codes here http://en.wikipedia.org/wiki/List_of_HTTP_status_codes
		switch ($curl->responseCode) {

			case 'timeout':
				//timeout error logic here
				break;

			case 200:
				//success logic here
				break;

			case 404:
				//404 Error logic here
				break;
		}
	}
}