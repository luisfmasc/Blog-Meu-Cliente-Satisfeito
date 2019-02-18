<!doctype html>
<html>
  <head>

	
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url"                content="https://meuclientesatisfeito.com" />
	<meta property="og:type"               content="blog" />
	<meta property="og:title"              content="Meu cliente satisfeito" />
	<meta property="og:description"        content="" />
	<meta property="og:image"              content="https://meuclientesatisfeito.com/images/institucional.png" />

    <title>Titulo do post | Meu cliente satisfeito</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="../css/style.css" rel="stylesheet">
	<?php  $menuAtivo = 'privacidade';
		include('components/analytics.html'); ?>
		
	<script>gtag('event', 'page_view', {
		  'send_to': 'UA-110534198-4',
		});
	</script>		
  </head>


<body>








	<section id="Form1" class="my-5">
		<h4>FORMULÁRIO FIXO (ARRUMAR UM NOME)</h4>
		<p>Texto sobre como vai ser legal se vc cadastrar o e-mail para receber informações sobre NPS.</p>
		<form id="contato">
			<div class="form-group">
				<input type="text" class="form-control" id="nomeSobrenome" placeholder="Seu nome e sobrenome" required>
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="E-mail" required>
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>
	</section>
	<section id="tagsSidebar" class="my-5">
		<h4>Tags</h4>
		<ul class="tags_footer list-inline">
			<li class="list-inline-item"><a href="#">Tag1</a></li>
			<li class="list-inline-item"><a href="#">Tag2</a></li>
			<li class="list-inline-item"><a href="#">Tag3</a></li>
			<li class="list-inline-item"><a href="#">Tag4</a></li>
			<li class="list-inline-item"><a href="#">Tag5</a></li>
			<li class="list-inline-item"><a href="#">Tag6</a></li>
			<li class="list-inline-item"><a href="#">Tag7</a></li>
			<li class="list-inline-item"><a href="#">Tag8</a></li>
			<li class="list-inline-item"><a href="#">Tag9</a></li>
		</ul>
	</section>
	<section id="maisLidas" class="my-5">
		<h4>Mais Lidas</h4>
		<ul class="maisLidas list-unstyled">
				<li class="media">
					<svg class="bd-placeholder-img mr-3" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:100x100"><rect fill="#868e96" width="100%" height="100%"></rect><text fill="#dee2e6" dy="0.15em" x="20%" y="50%">100x100</text></svg>
					<div class="media-body">
						<h5><a href="#">Título do Post</a></h5>
						Pode ter texto aqui, um bigode?
					</div>
				</li>
				<li class="media my-3">
					<svg class="bd-placeholder-img mr-3" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:120x100"><rect fill="#868e96" width="100%" height="100%"></rect><text fill="#dee2e6" dy="0.15em" x="20%" y="50%">100x100</text></svg>
					<div class="media-body">
						<h5><a href="#">Título do Post</a></h5>
						Pode ter texto aqui, um bigode?
					</div>
				</li>
				<li class="media my-3">
					<svg class="bd-placeholder-img mr-3" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:100x100"><rect fill="#868e96" width="100%" height="100%"></rect><text fill="#dee2e6" dy="0.15em" x="20%" y="50%">100x100</text></svg>
					<div class="media-body">
						<h5><a href="#">Título do Post</a></h5>
						Pode ter texto aqui, um bigode?
					</div>
				</li>
		</ul>


	</section>
	<script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>

	<script src="main.js"></script>