<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard | <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="public/css/app.css" rel="stylesheet" />
    <link rel="stylesheet" href="public/assets/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="public/assets/font-awesome/css/font-awesome.min.css">

    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body class="sb-nav-fixed">
    <?php include('partials/topMenu.html.php') ?>
    <div id="layoutSidenav">
        <?php include('partials/leftMenu.html.php') ?>
        <div id="layoutSidenav_content">
            <?= $container ?>
            <?php include('partials/footer.html.php') ?>
        </div>
    </div>
    <script src="public/js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="public/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="public/assets/demo/chart-area-demo.js"></script>
    <script src="public/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="public/js/datatables-simple-demo.js"></script>
</body>

</html>