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
	<title>Titulo do post | Meu cliente satisfeito</title> <!---->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="../css/style.css" rel="stylesheet">
	<?php  $menuAtivo = 'post';
	  include('analytics.html'); ?>
	<script>
		gtag( 'event', 'page_view', {
			'send_to': 'UA-134713675-1',
		} );
	</script>
</head>
<body>
	<header>
		<?php include('menu.php'); ?>
	</header>

	<main id="politica" class="container">
		<section class="row">
			<main class="col-md-8">
				<h1 class="mt-5">Titulo do post</h1> <!---->
				<small>18 de fevereiro de 2019, Autor, Categoria</small> <!---->
				<figure class="figure my-5">
					<img src="../images/bridge-2060820_1280.jpg" class="figure-img img-fluid rounded" alt="A caption for the above image."> <!---->
					<figcaption class="figure-caption">A caption for the above image.</figcaption> <!---->
				</figure>
				<p>Lorem ipsum dolor sit amet, consect</p> <!---->
				<ul class="tagsFooter list-inline my-3">
					<li class="list-inline-item"><a href="#">Tag1</a></li> <!---->
				</ul>
			</main>
			<aside class="col-md-3 offset-md-1">
				<?php include('sidebar.php'); ?>
			</aside>
		</section>
	</main>
	<?php include('footer.php'); ?>
</body>
</html>