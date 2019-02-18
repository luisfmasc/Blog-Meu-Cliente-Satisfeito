<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php" onClick="gtag('event', 'logo', {'event_category' : 'header', event_label' : 'clickLogotipo'})"><img class="img-responsive" src="./images/logotipoClienteSatisfeito.png" height="90px" alt="Logotipo da Meu Cliente Satisfeito"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item <?php echo $menuAtivo == 'books' ? 'active' : '' ?>">
			<a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickBooks'})" href="#">E-books</a>
		  </li>
		<li class="nav-item <?php echo $menuAtivo == 'contato' ? 'active' : '' ?>">
			<a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickContato'})" href="#">Contato</a>
		  </li>
		<li class="nav-item <?php echo $menuAtivo == 'sobre' ? 'active' : '' ?>">
			<a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickSobre'})" href="#">Sobre</a>
		  </li>
		<li class="nav-item <?php echo $menuAtivo == 'arquivo' ? 'active' : '' ?>">
			<a onClick="gtag('event', 'botaoMenu', {'event_category' : 'header', event_label' : 'clickArquivo'})" href="#">Arquivo</a>
		  </li>
	  </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>