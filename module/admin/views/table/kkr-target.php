<?php
use app\assets\admin\table\KkrTargetAsset;
use app\module\admin\widgets\TableWidget;
use yii\helpers\VarDumper;

/* @var $this \yii\web\View */
/* @var $content string */

KkrTargetAsset::register($this);

$this->title = 'DATATABLE Dashboard USU';
// $url='http://api.usu.ac.id/1.0/functional_positions?position=Guru%20Besar'; $data = false;
// $curl = curl_init();

// switch ($method)
// {
// 	case "POST":
// 		curl_setopt($curl, CURLOPT_POST, 1);

// 		if ($data)
// 			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
// 			break;
// 	case "PUT":
// 		curl_setopt($curl, CURLOPT_PUT, 1);
// 		break;
// 	default:
// 		if ($data)
// 			$url = sprintf("%s?%s", $url, http_build_query($data));
// }

// Optional Authentication:
// curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($curl, CURLOPT_USERPWD, "username:password");

// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// $result = curl_exec($curl);
// VarDumper::dump($result);
// curl_close($curl);



?>


<?= TableWidget::widget(['title'=>'Target Kinerja USU 2016 dan 2017']) ?>