<?php

namespace app\module\admin\controllers;

use yii\web\Controller;

class TableController extends Controller
{
    public $layout = 'lay-admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionDefault(){
        return $this->render('default');
    }
    
    public function actionColor(){
        return $this->render('color');
    }
    
    public function actionDatatable(){
        return $this->render('data-table');
    }
    
    public function actionDatatablemahasiswa(){
    	return $this->render('data-table-mahasiswa');
    }
    
    public function actionKkrcapaian(){
    	return $this->render('kkr-capaian');
    }
    
    public function actionKkrunggulan($semester = false)
    {
    	$semester = $semester ? [
    		'semester' => $semester	
    	] : false;
    	
    	return $this->render('kkr-unggulan', [
    			'semester' => $semester
    	]);
    }
    
    public function actionKkrtarget(){
    	return $this->render('kkr-target');
    }
    
    /* public function behaviors()
    {
    	return [
    		'corsFilter' => [
    			'class' => \yii\filters\Cors::className(),
    				'cors' => [
    					// restrict access to
    					'Origin' => ['http://api.usu.ac.id', 'https://api.usu.ac.id'],
    					'Access-Control-Request-Method' => ['POST', 'PUT'],
    					// Allow only POST and PUT methods
    					'Access-Control-Request-Headers' => ['X-Wsse'],
    					// Allow only headers 'X-Wsse'
    					'Access-Control-Allow-Credentials' => true,
    					// Allow OPTIONS caching
    					'Access-Control-Max-Age' => 3600,
    					// Allow the X-Pagination-Current-Page header to be exposed to the browser.
    					'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
    				],
    				
    		],
    	];
    } */
}
