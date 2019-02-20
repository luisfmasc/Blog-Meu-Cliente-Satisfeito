<head>
<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
<link rel="manifest" href="images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
			<a class="navbar-brand" href="../index.php" onClick="gtag('event', 'logo', {'event_category' : 'header', event_label' : 'clickLogotipo'})"><img class="img-responsive" src="../images/logotipoClienteSatisfeito.png" height="80px" alt="Logotipo da Meu Cliente Satisfeito"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav offset-6">
					<li class="nav-item <?php echo $menuAtivo == 'books' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickBooks'})" href="../materiais.php">E-books</a>
					</li>
					<li class="nav-item <?php echo $menuAtivo == 'contato' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickContato'})" href="../contato.php">Contato</a>
					</li>
					<li class="nav-item <?php echo $menuAtivo == 'sobre' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickSobre'})" href="../sobre.php">Sobre</a>
					</li>
					<li class="nav-item <?php echo $menuAtivo == 'arquivo' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickArquivo'})" href="../arquivo.php">Arquivo</a>
					</li>
				</ul>
			</div>
	</div>
</nav>