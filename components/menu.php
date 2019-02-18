<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
			<a class="navbar-brand" href="../index.php" onClick="gtag('event', 'logo', {'event_category' : 'header', event_label' : 'clickLogotipo'})"><img class="img-responsive" src="./images/logotipoClienteSatisfeito.png" height="80px" alt="Logotipo da Meu Cliente Satisfeito"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?php echo $menuAtivo == 'books' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickBooks'})" href="#">E-books</a>
					</li>
					<li class="nav-item <?php echo $menuAtivo == 'contato' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickContato'})" href="#">Contato</a>
					</li>
					<li class="nav-item <?php echo $menuAtivo == 'sobre' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickSobre'})" href="#">Sobre</a>
					</li>
					<li class="nav-item <?php echo $menuAtivo == 'arquivo' ? 'active' : '' ?>">
						<a class="nav-link" onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickArquivo'})" href="#">Arquivo</a>
					</li>
				</ul>
			</div>
	</div>
</nav>