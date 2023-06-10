<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url() ?>/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/dist/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/dashboard.css">
    <script src="<?= base_url() ?>/js/jquery.js"> </script>

</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> -->
        <!-- <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="/logout">Sign out</a>
            </div>
        </div> -->
    </header>



    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul id='Navbar' class="nav flex-column">
                        <li class="nav-item">

                            <a class="nav-link <?= uri_string() == 'admin/dashboard' ? 'active' : '' ?>" aria-current="page" href="/admin/dashboard">
                                <span data-feather="home" class="align-text-bottom"></span>
                                Dashboard
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file" class="align-text-bottom"></span>
                                Orders
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link <?= uri_string() == 'admin/produk' ? 'active' : '' ?>" href="/admin/produk">
                                <span data-feather="shopping-cart" class="align-text-bottom"></span>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= uri_string() == 'admin/transaksi' ? 'active' : '' ?>" href="/admin/transaksi">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Transaksi User
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                                Reports
                            </a>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers" class="align-text-bottom"></span>
                                Integrations
                            </a>
                        </li> -->
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <!-- <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text" class="align-text-bottom"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul> -->
                </div>
            </nav>

            <?php $this->renderSection('content') ?>

        </div>
    </div>





</body>


<script src="<?= base_url() ?>/dist/js/bootstrap.min.js">
</script>

<script src="<?= base_url() ?>/js/custom.js"> </script>

</html>