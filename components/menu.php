		<nav class="navbar navbar-default">
		  <div class="container"> 
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
			  <a class="navbar-brand" href="../index.php" onClick="gtag('event', 'logo', {'event_category' : 'header', event_label' : 'clickLogotipo'})"><img class="img-responsive" src="http://intelectomg.com/images/mdpi/logo-ipog@1x.png" alt="Logotipo do Intelecto, conveniada do IPOG"></a></div>
			<div class="collapse navbar-collapse" id="defaultNavbar1">
			  <ul class="nav navbar-nav navbar-right">
				<li <?php echo $menuAtivo == 'books' ? 'class="active"' : '' ?>><a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickBooks'})" href="#">E-books</a></li>
				<li <?php echo $menuAtivo == 'contato' ? 'class="active"' : '' ?>><a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickContato'})" href="#">Contato</a></li>
				<li <?php echo $menuAtivo == 'sobre' ? 'class="active"' : '' ?>><a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickSobre'})" href="#">Sobre</a></li>
				<li <?php echo $menuAtivo == 'arquivo' ? 'class="active"' : '' ?>><a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickArquivo'})" href="#">Arquivo</a></li>
			  </ul>
			</div>
		  </div>
		</nav>