<?php
use app\assets\admin\table\KkrUnggulanAsset;
use app\module\admin\widgets\TableWidget;
use yii\helpers\VarDumper;

/* @var $this \yii\web\View */
/* @var $content string */

KkrUnggulanAsset::register($this);

$this->title = 'DATATABLE Dashboard USU';

?>

<!-- <section id='page-content'> -->
                <!-- Start page header -->
<!--                 <div class='header-content'> -->
<!--                     <h2><i class='fa fa-table'></i>Indikator Capaian Keunggulan Akademik USU 2015-2019</h2> -->
               <!--  </div>/.header-content -->
                <!--/ End page header 
                username
                password
                Login
                
                -->
                
<!--                 <div class='body-content animated fadeIn'> -->
<!--  <div class="form-group"> -->
<!--      <label class="col-sm-2 control-label">Dari Tahun:</label> -->
<!--      <div class="col-sm-3"> -->
<!--      	<select class="chosen-select"> -->
<!--            <option value="0" selected="selected">Tahun</option> -->
<!-- 	           <option value="2014">2016</option> -->
<!-- 	           <option value="2014">2015</option> -->
<!--               <option value="2014">2014</option> -->
<!--               <option value="2013">2013</option> -->
<!-- 	          <option value="2012">2012</option> -->
<!--     	      <option value="2011">2011</option> -->
<!--               <option value="2010">2010</option> -->
<!--               <option value="2009">2009</option> -->
<!--          </select> -->
<!--  	</div> -->
<!--  </div> -->
  <?=TableWidget::widget(['title'=>'Indikator Capaian Keunggulan Akademik USU 2015-2019'])?>
<!-- </section> -->