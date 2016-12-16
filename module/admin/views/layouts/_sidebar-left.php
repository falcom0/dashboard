 
<aside id="sidebar-left" class="<?php echo !empty($classLeft)? $classLeft : 'sidebar-circle' ?>">

    <!-- Start left navigation - profile shortcut -->
    <div class="sidebar-content">
        <div class="media">
            <a class="pull-left has-notif avatar" href="<?= Yii::$app->getUrlManager()->createUrl('admin/page/profile') ?>">
                <img src="http://img.djavaui.com/?create=50x50,4888E1?f=ffffff" alt="admin">
                <i class="online"></i>
            </a>
            <div class="media-body">
                <h4 class="media-heading">Hello, <span>Lee</span></h4>
                <small>Web Designer</small>
            </div>
        </div>
    </div><!-- /.sidebar-content -->
    <!--/ End left navigation -  profile shortcut -->

    <!-- Start left navigation - menu -->
    <ul class="sidebar-menu">

        <!-- Start navigation - dashboard -->
        <li class="<?= (Yii::$app->controller->id == 'dashboard') ? 'active' : '' ?>">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/dashboard/index') ?>">
                <span class="icon"><i class="fa fa-home"></i></span>
                <span class="text">Dashboard</span>
                <?= (Yii::$app->controller->id == 'dashboard') ? '<span class="selected"></span>' : '' ?>
            </a>
        </li>
        <!--/ End navigation - dashboard -->

        <!-- Start category apps -->
        <li class="sidebar-category">
            <span>AKADEMIK</span>
            <span class="pull-right"><i class="fa fa-trophy"></i></span>
        </li>
        <!--/ End category apps -->

		<li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Mahasiswa Terdaftar</span>
                <span class="plus"></span>
            </a>
            <ul>
                <!-- Start level 1 -->
                <li class="submenu">
                    <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/datatablemahasiswa') ?>">
                        <span class="text">Berdasarkan Jenis Kelamin</span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Asal Propinsi</span>
                        
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Agama</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Jalur Masuk</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Pendidikan Orang Tua</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Pekerjaan Orang Tua</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Penghasilan Orang Tua</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Perkembangan Jumlah Siswa</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Mahasiswa Baru</span>
                <span class="plus"></span>
            </a>
            <ul>
                <!-- Start level 1 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Jenis Sekolah</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Asal Propinsi</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Jenis Kelamin</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Agama</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Jalur Masuk</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Pendidikan Orang Tua</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Pekerjaan Orang Tua</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Penghasilan Orang Tua</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Perkembangan Jumlah Penerimaan Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Rasio Lulus dan Terdaftar</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Umur</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Status Pernikahan</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Sumber Biaya</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Proses Akademik</span>
                <span class="plus"></span>
            </a>
            <ul>
                <!-- Start level 1 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">AEE dan Produktivitas</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Jumlah Mahasiswa Mengundurkan Diri/Drop Out (DO)</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Jumlah Mahasiswa Perpanjangan Studi</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Jadwal Kuliah</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Distribusi Nilai</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Rentang Indeks Prestasi (IP)</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Rentang Indeks Prestasi Kumulatif (IPK)</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Jumlah Mahasiswa Aktif per Tahun Angkatan</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Berdasarkan Jenis Kelamin</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Jumlah Mahasiswa Penundaan Kegiatan Akademik (PKA)</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Rasio Jumlah Dosen Terhadap Mahasiswa</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Kebutuhan Dosen</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Utilasi Ruang Kuliah</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="submenu">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Lulusan</span>
                <span class="plus"></span>
            </a>
            <ul>
                <!-- Start level 1 -->
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Perkembangan Jumlah Mahasiswa Lulus</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Perkembangan Rata-Rata IPK Kelulusan</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Perkembangan Lama Studi Kelulusan</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Perkembangan Lama Bimbingan Tugas Akhir</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);">
                        <span class="text">Rentang IPK Kelulusan</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <span class="text">Rentang IPK Kelulusan Berdasarkan Tahun Wisuda</span>
                    </a>
                </li>
            </ul>
        </li>
        
        <li class="sidebar-category">
            <span>KONTRAK KERJA REKTOR</span>
            <span class="pull-right"><i class="fa fa-trophy"></i></span>
        </li>
        <!--/ End category apps -->

		<li class="submenu">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/kkrcapaian') ?>">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Indikator Capaian Akreditasi Institusi, Program Studi dan Laboratorium</span>
                <span class="plus"></span>
            </a>
        </li>
        
        <li class="submenu">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/kkrunggulan') ?>">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Indikator Capaian Keunggulan Akademik USU</span>
                <span class="plus"></span>
            </a>
        </li>
        
        <li class="submenu">
            <a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/table/kkrtarget') ?>">
                <span class="icon"><i class="fa fa-align-left"></i></span>
                <span class="text">Target Kinerja USU</span>
                <span class="plus"></span>
            </a>
        </li>
        
        <li class="submenu <?= (Yii::$app->controller->id == 'form') ? 'active' : '' ?>">
            <a href="javascript:void(0);">
                <span class="icon"><i class="fa fa-list-alt"></i></span>
                <span class="text">Forms</span>
                <span class="arrow"></span>
                <?= (Yii::$app->controller->id == 'form') ? '<span class="selected"></span>' : '' ?>
            </a>
            <ul>
                <li class="<?= (Yii::$app->controller->action->id == 'element') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/element') ?>">Element</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'advanced') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/advanced') ?>">Advanced</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'layout') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/layout') ?>">Layout</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'validation') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/validation') ?>">Validation</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'wizard') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/wizard') ?>">Wizard</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'wysiwyg') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/wysiwyg') ?>">Text Editor</a></li>
                <li class="<?= (Yii::$app->controller->action->id == 'xeditable') ? 'active' : '' ?>"><a href="<?= Yii::$app->getUrlManager()->createUrl('/admin/form/xeditable') ?>">X-Editable</a></li>
            </ul>
        </li>
    </ul><!-- /.sidebar-menu -->
    <!--/ End left navigation - menu -->

    <!-- Start left navigation - footer -->
    <div class="sidebar-footer hidden-xs hidden-sm hidden-md">
        <a id="setting" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Setting"><i class="fa fa-cog"></i></a>
        <a id="fullscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Fullscreen"><i class="fa fa-desktop"></i></a>
        <a id="lock-screen" data-url="index.php?r=admin%2Fpage%2Flockscreen" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Lock Screen"><i class="fa fa-lock"></i></a>
        <a id="logout" data-url="index.php?r=admin%2Fpage%2Fsignin" class="pull-left" href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-title="Logout"><i class="fa fa-power-off"></i></a>
    </div><!-- /.sidebar-footer -->
    <!--/ End left navigation - footer -->

</aside><!-- /#sidebar-left -->
