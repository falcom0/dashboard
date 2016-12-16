<?php
header("Access-Control-Allow-Origin: *");

use app\assets\admin\table\KkrUnggulanAsset;
use app\module\admin\widgets\TableWidget;
use yii\helpers\VarDumper;

/* @var $this \yii\web\View */
/* @var $content string */
use keltstr\simplehtmldom\SimpleHTMLDom as SHD;
use app\module\admin\widgets\LoginDss;
KkrUnggulanAsset::register($this);

$this->title = 'DATATABLE Dashboard USU';
$login = new LoginDss('administrator', 'administrator');

$html = SHD::str_get_html(
	$login->getPage(
		'https://dss.usu.ac.id/mahasiswa-terdaftar/berdasarkan-jenis-kelamin.html',
		$semester
	)
);

$result = $html->find('table[class=table_wrapper]', 0);
?>
<section id='page-content'>
<div class='header-content'> 
                     <h2><i class='fa fa-table'></i>Indikator Capaian Keunggulan Akademik USU 2015-2019</h2> 
               </div>
<div class='body-content animated fadeIn'>
        <div class='row'>
            <div class='col-md-12'>

                <!-- Start repeater -->
                <div class='panel rounded shadow no-overflow'>
                    <div class='panel-heading'>
                        <div class='pull-left'>
                            <h3 class='panel-title'>Test</h3>
                        </div>
                        <div class='pull-right'>
                            <button class='btn btn-sm' data-action='refresh' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Refresh'><i class='fa fa-refresh'></i></button>
                            <button class='btn btn-sm' data-action='collapse' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Collapse'><i class='fa fa-angle-up'></i></button>
                            <button class='btn btn-sm' data-action='remove' data-container='body' data-toggle='tooltip' data-placement='top' data-title='Remove'><i class='fa fa-times'></i></button>
                        </div>
                        <div class='clearfix'></div>
                    </div>
<!-- <div id="crawltable"> -->
<div class='panel-body'>
                        <!-- Start repeater -->
                        <div class='fuelux'>
                        <div class='repeater-viewport'>
                                    <div class='repeater-canvas'>
                                   <div id="crawltable">
<!--                                     <div class="repeater-list" data-preserve="shallow"> -->
<!--                                     <div class="repeater-list-wrapper" data-infinite="true" data-preserve="shallow"> -->
<!--                                     <table aria-readonly="true" class="table" data-container="true" data-preserve="shallow" role="grid"> -->
    									<?php echo $result ?>
    									</div>                                
<!--     									</div> -->
<!--     									</div> -->
                                    </div>
                                </div>
	
	</div>
	</div>
<!-- </div> -->
</div><!-- /.panel -->
                <!--/ End repeater -->

               

            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->

    </div>
</section>
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
<!--   //TableWidget::widget(['title'=>'Indikator Capaian Keunggulan Akademik USU 2015-2019']) -->
<!-- </section> -->