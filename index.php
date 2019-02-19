<!DOCTYPE html>
<html lang="pt-BR">
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
	
	<!-- Inicio do carousel-->
<div id="carouselHome" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselHome" data-slide-to="0" class=""></li>
      <li data-target="#carouselHome" data-slide-to="1" class="active"></li>
      <li data-target="#carouselHome" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carousel-item-left">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect fill="#777" width="100%" height="100%"></rect><text fill="#555" dy=".3em" x="50%" y="50%">First slide</text></svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carousel-item-next carousel-item-left">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Second slide"><title>Placeholder</title><rect fill="#666" width="100%" height="100%"></rect><text fill="#444" dy=".3em" x="50%" y="50%">Second slide</text></svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect fill="#555" width="100%" height="100%"></rect><text fill="#333" dy=".3em" x="50%" y="50%">Third slide</text></svg>
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Próximo</span>
    </a>
  </div>
	<!-- Fim do carousel-->

	
	<!-- Inicio do Destaque-->
	<section id="destaqueHome" class="container my-4">
		<section class="row">
					<div class="list-inline-item col-4 mx-0">
						<svg class="bd-placeholder-img mr-1 rounded-circle" width="110" height="110" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:110x110">
							<rect fill="#868e96" width="100%" height="100%"></rect><text fill="#dee2e6" dy="0.15em" x="20%" y="50%">110x110</text>
						</svg>
						<small>texto curto sobre nps, texto curto sobre nps, texto curto sobre nps</small>
					</div>
					<div class="list-inline-item col-4 mx-0">
						<svg class="bd-placeholder-img mr-1 rounded-circle" width="110" height="110" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:110x110">
							<rect fill="#868e96" width="100%" height="100%"></rect><text fill="#dee2e6" dy="0.15em" x="20%" y="50%">110x110</text>
						</svg>
						<small>texto curto sobre nps, texto curto sobre nps, texto curto sobre nps</small>
					</div>
					<div class="list-inline-item col-4 mx-0">
						<svg class="bd-placeholder-img mr-1 rounded-circle" width="110" height="110" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder:110x110">
							<rect fill="#868e96" width="100%" height="100%"></rect><text fill="#dee2e6" dy="0.15em" x="20%" y="50%">110x110</text>
						</svg>
						<small>texto curto sobre nps, texto curto sobre nps, texto curto sobre nps</small>
					</div>
			</section>
	</section>	
	<!-- Fim do Destaque-->
	

	<section class="container">
		<section class="row">
			<main class="col-md-8">
				
				
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
