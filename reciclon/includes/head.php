<?php include_once 'head-scripts.php'; ?>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
		<div class="container">
			<a href="index.php" class="navbar-brand"> <img src="img/logo2.png" width="40" height="40"> </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Cursos
						</a>
						<div class="dropdown-menu" aria-labelledby="menu-categorias">
							<a href="curso.php?curso=0K" class="dropdown-item">Kinder</a>
							<a href="curso.php?curso=1B" class="dropdown-item">1° Básico</a>
							<a href="curso.php?curso=2B" class="dropdown-item">2° Básico</a>
							<a href="curso.php?curso=3B" class="dropdown-item">3° Básico</a>
							<a href="curso.php?curso=4B" class="dropdown-item">4° Básico</a>
							<a href="curso.php?curso=5B" class="dropdown-item">5° Básico</a>
							<a href="curso.php?curso=6B" class="dropdown-item">6° Básico</a>
							<a href="curso.php?curso=7B" class="dropdown-item">7° Básico</a>
							<a href="curso.php?curso=8B" class="dropdown-item">8° Básico</a>
							<a href="curso.php?curso=I" class="dropdown-item">1° Medio</a>
							<a href="curso.php?curso=II" class="dropdown-item">2° Medio</a>
							<a href="curso.php?curso=III" class="dropdown-item">3° Medio</a>
							<a href="curso.php?curso=IV" class="dropdown-item">4° Medio</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="ranking.php" class="nav-link">Ranking</a>
					</li>
					<li class="nav-item">
						<a href="index.php#contacto" class="nav-link">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
