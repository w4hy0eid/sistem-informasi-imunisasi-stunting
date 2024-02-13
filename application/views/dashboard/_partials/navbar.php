<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="<?= base_url() ?>">SIPENTING</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <!-- <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li> -->
                <li><a class="dropdown-item" type="submit" href="<?= base_url() ?>login/logout"><i class="fa fa-print fa-lg"></i> Logout</a></>
            </ul>
        </li>
    </ul>
</header>