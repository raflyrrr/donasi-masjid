<header class="main-header light-bg">
    <a href="<?php echo base_url('admin') ?>" class="logo dark-bg">Mariberamal</a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="hidden-xs">Admin </span><i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <form action="<?php echo base_url('admin/login/logout'); ?>" method="post" class="chart-box-admin">
                            <li><button type="submit" class="btn btn-info"><i class="fa fa-sign-out"></i> Logout</button></li>
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>