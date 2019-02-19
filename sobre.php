<!DOCTYPE html>
<html lang="pt-BR">
  <head>
		

	
    <meta charset="UTF-8">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url" content="https://meuclientesatisfeito.com"/>
	<meta property="og:type" content="blog"/>
	<meta property="og:title" content="Meu cliente satisfeito"/>
	<meta property="og:description" content=""/>
	<meta property="og:image" content="https://meuclientesatisfeito.com/images/institucional.png"/>

	<title>Meu cliente satisfeito</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet">
		



	
<?php  $menuAtivo = 'home';
	  include('components/analytics.html'); ?>
	<script>
		gtag( 'event', 'page_view', {
			'send_to': 'UA-134713675-1',
		} );
	</script>
</head>
<body>
	<?php include('components/menu.php'); ?>	

	<section class="container">
		<section class="row">
			<main class="col-md-8">
			<h1>Sobre</h1>
			<p>A Meuclientesatisfeito.com é uma mídia dedicada a estar à frente de todas as novidades gestoriais do mercado brasileiro.
			Não se trata de publicar informação, mas trazer o conteúdo mais relevante, desde à macro visão até os pormenores do cenário corporativo.
			</p>
			<p>Na Era Digital onde o Mindset Lean é cada vez mais difundido as empresas e negócios que não se modernizam são engolidas
			pelos competidores numa velocidade alucinante.
			</p>
			<p>No cenário brasileiro a mídia digital possui um papel importante de informar o público gestor, auxiliando corporações brasileiras
			à permanecerem relevantes em um mercado globalizado.
			</p>
				
			</main>
			<aside class="col-md-3 offset-md-1">
				<?php include('components/sidebar.php'); ?>
			</aside>
		</section>
	</section>	
	
	<!-- Inicio do Loop de posts-->
		
	<!-- Fim do Loop de posts-->	
	<?php include('components/footer.php'); ?>
		<script>
		$('.carousel').carousel({
  			interval: 2500
})
	</script>
</body>
</html>
