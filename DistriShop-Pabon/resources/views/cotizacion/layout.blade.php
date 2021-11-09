<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>.::Distrishop Pabon::.</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="/cotizaciones">
          <span class="align-middle">DistriShop Pabon</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Cotizaciones
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="index">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Inicio</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="create">
              <i class="align-middle" data-feather="upload"></i> <span class="align-middle">Cargar Cotizacion</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="show">
              <i class="align-middle" data-feather="clipboard"></i> <span class="align-middle">cantidad de productos a comprar</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="edit">
              <i class="align-middle" data-feather="edit-2"></i> <span class="align-middle">Editar Cotizacion</span>
            </a>
					</li>



					<li class="sidebar-header">
						Herramienta y utilidades
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="/passwords/pages-sign-in">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Cerrar Sesión</span>
            </a>
					</li>

		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">0</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										<a href="#" class="text-muted font-weight-light">
											<i class="align-middle" data-feather="bell"></i>
											<span class="align-middle">Alertas</span>
										</a>
									</div>
								</div>

								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>

						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="/cotizaciones" data-bs-toggle="dropdown">
                <span class="text-dark">Admin Pabon</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">

								<a class="dropdown-item" href="/pages-sign-in">Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			</main>


			@yield('content')
</body>







<!-- footer -->



<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a class="text-muted" href="/" target="_blank"><strong>.::DistriShop Pabon::.</strong></a> &copy;
                </p>
            </div>
            <div class="col-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-muted" href="/create" target="_blank">crear</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="/show" target="_blank">mostrar</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="/edit" target="_blank">edicion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/feather.min.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="js/app.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
var gradient = ctx.createLinearGradient(0, 0, 0, 225);
gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
// Line chart
</script>
<script href=''></script>

@yield('footer')


</html>
