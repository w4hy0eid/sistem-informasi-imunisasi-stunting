<aside class="app-sidebar">
    <div class="app-sidebar__user"><i class="fa fa-user-circle fa-3x pr-4"></i>
        <div>
            <p class="app-sidebar__user-name"><?= $user->nama_lengkap ?></p>
            <p class="app-sidebar__user-designation"><?= $user->level ?></p>
        </div>
    </div>
    <?php if($user->level == 'Admin'){?>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Dashboard</span></a></li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterdata/dataposyandu"><i class="icon fa fa-circle-o"></i>Data Posyandu</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>masterdata/dataall"><i class="icon fa fa-circle-o"></i>Data Balita</a></li>
            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Imunisasi</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/imunisasi"><i class="icon fa fa-circle-o"></i> Pelayanan Imunisasi</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Timbangan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/timbangan"><i class="icon fa fa-circle-o"></i> Pelayanan Timbangan</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Sertifikat</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>sertifikat/data_lengkap"><i class="icon fa fa-circle-o"></i> Data Imunisasi Lengkap</a></li>
            </ul>
        </li> -->

        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterlaporan/laporanbulanposyandu"><i class="icon fa fa-circle-o"></i>Laporan Bulanan Posyandu</a></li>
            </ul>
        </li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-whatsapp"></i><span class="app-menu__label">Whatsapp Broadcast</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/perangkat"><i class="icon fa fa-circle-o"></i> Perangkat Whatsapp</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/kirim"><i class="icon fa fa-circle-o"></i> Whatsapp Broadcast</a></li>
            </ul>
        </li> -->

        <li><a class="app-menu__item" href="<?= base_url() ?>masterdata/user"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">User</span></a></li>
        <li><a class="app-menu__item" href="<?= base_url() ?>masterdata/edukasi"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Edukasi</span></a></li>
    </ul>
    <?php }?>
    <?php if($user->level == 'Bidan'){?>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Dashboard</span></a></li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
        
                <li><a class="treeview-item" href="<?= base_url() ?>masterdata/dataall"><i class="icon fa fa-circle-o"></i>Data Balita</a></li>
            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Imunisasi</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/imunisasi"><i class="icon fa fa-circle-o"></i> Pelayanan Imunisasi</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Timbangan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/timbangan"><i class="icon fa fa-circle-o"></i> Pelayanan Timbangan</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Sertifikat</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>sertifikat/data_lengkap"><i class="icon fa fa-circle-o"></i> Data Imunisasi Lengkap</a></li>
            </ul>
        </li> -->

        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterlaporan/laporanbulanposyandu"><i class="icon fa fa-circle-o"></i>Laporan Bulanan Posyandu</a></li>
            </ul>
        </li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-whatsapp"></i><span class="app-menu__label">Whatsapp Broadcast</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/perangkat"><i class="icon fa fa-circle-o"></i> Perangkat Whatsapp</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/kirim"><i class="icon fa fa-circle-o"></i> Whatsapp Broadcast</a></li>
            </ul>
        </li> -->

     
        <li><a class="app-menu__item" href="<?= base_url() ?>masterdata/edukasi"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Edukasi</span></a></li>
    </ul>
    <?php }?>
    <?php if($user->level == 'Posyandu'){?>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Dashboard</span></a></li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
    
                <li><a class="treeview-item" href="<?= base_url() ?>masterdata/dataall"><i class="icon fa fa-circle-o"></i>Data Balita</a></li>
            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Imunisasi</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/imunisasi"><i class="icon fa fa-circle-o"></i> Pelayanan Imunisasi</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Timbangan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/timbangan"><i class="icon fa fa-circle-o"></i> Pelayanan Timbangan</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Sertifikat</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>sertifikat/data_lengkap"><i class="icon fa fa-circle-o"></i> Data Imunisasi Lengkap</a></li>
            </ul>
        </li> -->

        <!-------------------------------------------------->
      
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-whatsapp"></i><span class="app-menu__label">Whatsapp Broadcast</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/perangkat"><i class="icon fa fa-circle-o"></i> Perangkat Whatsapp</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/kirim"><i class="icon fa fa-circle-o"></i> Whatsapp Broadcast</a></li>
            </ul>
        </li> -->

     
        <li><a class="app-menu__item" href="<?= base_url() ?>masterdata/edukasi"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Edukasi</span></a></li>
    </ul>
    <?php }?>
    <?php if($user->level == 'Puskesmas'){?>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Dashboard</span></a></li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterdata/dataall"><i class="icon fa fa-circle-o"></i>Data Balita</a></li>
            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Imunisasi</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/imunisasi"><i class="icon fa fa-circle-o"></i> Pelayanan Imunisasi</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Timbangan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/timbangan"><i class="icon fa fa-circle-o"></i> Pelayanan Timbangan</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Sertifikat</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>sertifikat/data_lengkap"><i class="icon fa fa-circle-o"></i> Data Imunisasi Lengkap</a></li>
            </ul>
        </li> -->

        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterlaporan/laporanbulanposyandu"><i class="icon fa fa-circle-o"></i>Laporan Bulanan Posyandu</a></li>
            </ul>
        </li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-whatsapp"></i><span class="app-menu__label">Whatsapp Broadcast</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/perangkat"><i class="icon fa fa-circle-o"></i> Perangkat Whatsapp</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/kirim"><i class="icon fa fa-circle-o"></i> Whatsapp Broadcast</a></li>
            </ul>
        </li> -->

     
        <li><a class="app-menu__item" href="<?= base_url() ?>masterdata/edukasi"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Edukasi</span></a></li>
    </ul>
    <?php }?>
    <?php if($user->level == 'Puskesmas'){?>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url() ?>"><i class="app-menu__icon fa fa-home"></i><span class="app-menu__label">Dashboard</span></a></li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterdata/dataall"><i class="icon fa fa-circle-o"></i>Data Balita</a></li>
            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Imunisasi</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/imunisasi"><i class="icon fa fa-circle-o"></i> Pelayanan Imunisasi</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Timbangan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>pelayanan/timbangan"><i class="icon fa fa-circle-o"></i> Pelayanan Timbangan</a></li>

            </ul>
        </li>
        <!-------------------------------------------------->
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Sertifikat</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>sertifikat/data_lengkap"><i class="icon fa fa-circle-o"></i> Data Imunisasi Lengkap</a></li>
            </ul>
        </li> -->

        <!-------------------------------------------------->
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-hdd-o"></i><span class="app-menu__label">Master Laporan</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>masterlaporan/laporanbulanposyandu"><i class="icon fa fa-circle-o"></i>Laporan Bulanan Posyandu</a></li>
            </ul>
        </li>
        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-whatsapp"></i><span class="app-menu__label">Whatsapp Broadcast</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/perangkat"><i class="icon fa fa-circle-o"></i> Perangkat Whatsapp</a></li>
                <li><a class="treeview-item" href="<?= base_url() ?>whatsapp/kirim"><i class="icon fa fa-circle-o"></i> Whatsapp Broadcast</a></li>
            </ul>
        </li> -->

     
    </ul>
    <?php }?>
</aside>