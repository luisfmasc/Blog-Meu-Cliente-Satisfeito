<!doctype html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="https://meuclientesatisfeito.com"/>
	<meta property="og:type" content="post"/>
	<meta property="og:title" content="Meu cliente satisfeito"/> <!---->
	<meta property="og:description" content=""/> <!---->
	<meta property="og:image" content="https://meuclientesatisfeito.com/images/institucional.png"/> <!--tumb-->
	<title>NPS: O quê e porquê| Meu cliente satisfeito</title> <!---->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
	<?php  $menuAtivo = 'post';
	  include('components/analytics.html'); ?>
	<script>
		gtag( 'event', 'page_view', {
			'send_to': 'UA-134713675-1',
		} );
	</script>
</head>
<body>
	<header>
		<?php include('components/menu.php'); ?>
	</header>

	<main id="post" class="container">
		<section class="row">
			<main class="col-md-8">
				<h1 class="mt-5">NPS: O que é e porque é importante para sua empresa</h1> <!---->
				<small>18 de fevereiro de 2019, Izabella Martins, NPS</small><br>
				<figure class="figure my-5">
					<img src="images\1_XkAbdFvgce6DzrLnS5rU6g.jpeg" class="figure-img img-fluid rounded" alt="NPS: O que é e porque é importante para sua empresa"> <!---->
					<figcaption class="figure-caption">NPS: O que é e porque é importante para sua empresa</figcaption>
				</figure>
				<ul class="tagsFooter list-inline my-3">
					<li class="list-inline-item"><a href="#">NPS</a></li>
					<li class="list-inline-item"><a href="#">O que é NPS</a></li>
					<li class="list-inline-item"><a href="#">Importância do NPS	</a></li>
					<li class="list-inline-item"><a href="#">Como funciona NPS	</a></li>
					<li class="list-inline-item"><a href="#">Como medir satisfação dos clientes</a></li>
					<li class="list-inline-item"><a href="#">Satisfação de clientes</a></li>
				</ul>
			</main>
			<aside class="col-md-3 offset-md-1">
				<?php include('components/sidebar.php'); ?>
			</aside>
		</section>
	</main>
	<?php include('components/footer.php'); ?>
</body>
</html>