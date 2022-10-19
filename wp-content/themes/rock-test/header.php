<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Rock Test</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<div id="main-menu">
				<nav class="navbar navbar-expand-lg">
					<div class="container-fluid">
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Mamãe e bebê</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Dicas de casa</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Beleza</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Lorem ipsum</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Na brasa</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">É de casa</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Dica da Nutri</a>
								</li>
								<li class="nav-item menu-img">
									<a href="#" class="nav-link"></a>
									<div class="form-menu-search">
										<form class="form-inline my-2 my-lg-0"><input class="form-control mr-sm-2" type="search" aria-label="Search"></form>
									</div>
								</li>
							</ul>
							<div id="mobile-form">
								<form class="d-flex" role="search">
									<input class="form-control me-2" type="search" placeholder="Digite..." aria-label="Search">
									<button id="btn-search-mobile" class="btn btn-outline-success" type="submit">Pesquisar</button>
								</form>
							</div>
						</div>
					</div>
				</nav>
			</div>
			<!-- end of #main-menu-->
			<div id="slider">
				<div class="container-fluid">
					<div id="main-carousel" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="carousel-item-backdrop"></div>
								<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/10/img-banner.jpg" class="d-block w-100" alt="First slide">
								<div class="carousel-caption">
									<h2>Lorem ipsum dolor sit amet, consecte adipiing elit. Vivamus da Viva</h2>
									<p><span class="date-slider">10/12/2021</span><a href="#">Tags</a></p> <!-- Tags will be considered links -->	
								</div>
							</div>
							<div class="carousel-item">
								<div class="carousel-item-backdrop"></div>
								<img src="<?php bloginfo('url'); ?>/wp-content/uploads/2022/10/img-banner.jpg" class="d-block w-100" alt="Second slide">
								<div class="carousel-caption">
									<h2>Lorem ipsum dolor sit amet, consecte adipiing elit. Vivamus da Viva</h2>
									<p><span class="date-slider">10/12/2021</span><a href="#">Tags</a></p>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#main-carousel" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#main-carousel" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
			<!--end of #slider-->
		</header>
		</div>
	</body>
</html>