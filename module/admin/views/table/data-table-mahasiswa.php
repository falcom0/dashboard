<?php

use app\assets\admin\table\DataTableAsset;
use app\module\admin\widgets\TableWidget;

/* @var $this \yii\web\View */
/* @var $content string */

DataTableAsset::register($this);
$this->title = 'DATATABLE Dashboard USU';
?>


<?= TableWidget::widget(['title'=>'Mahasiswa Terdaftar','tableTitle'=>'Berdasarkan Jenis Kelamin']) ?>
<!-- /#page-content -->