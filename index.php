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
			'send_to': 'AW-761531403',,
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
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1900" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect fill="#777" width="100%" height="100%"></rect><text fill="#555" dy=".3em" x="50%" y="50%">First slide</text></svg>
        <img src="images/banner/a-pergunta-definitiva-1900x400" />
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carousel-item-next carousel-item-left">
        <img src="images/banner/nps-nas-empresas-brasileiras-1900x400.jpg" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Descubra o poder do NPS</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="1900" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Third slide"><title>Placeholder</title><rect fill="#555" width="100%" height="100%"></rect><text fill="#333" dy=".3em" x="50%" y="50%">Third slide</text></svg>
        <img src="images/banner/nps-o-que-e-1900x400.jpg" />
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
						<img src="images/post/destaque-home-01.jpg" class="rounded-circle" width="110" height="110" alt="Balão de cor com a letra N, na sigla, que significa Net"/>
						<small>Sua rede de clientes</small>
					</div>
					<div class="list-inline-item col-4 mx-0">
						<img src="images/post/destaque-home-02.jpg" class="rounded-circle" width="110" height="110" alt="Balão de cor com a letra P, na sigla, que significa Promoter"/>
						<small>Promove seu negócio?</small>
					</div>
					<div class="list-inline-item col-4 mx-0">
						<img src="images/post/destaque-home-03.jpg" class="rounded-circle" width="110" height="110" alt="Balão de cor com a letra S, na sigla, que significa Score" />
						<small>Descubra sua pontuação!</small>
					</div>
			</section>
	</section>	
	<!-- Fim do Destaque-->
	

	<section class="container">
		<section class="row">
			<main class="col-md-8">
                <div class="row">
                    <div class="row postHome">                        
                        <figure class="col-3">
                            <img src="images/post/nps-o-que-e-800x600.jpg" width="100%" class="img-thumbnail" />
                        </figure>
                        <div class="col-9">
                            <h3>NPS: O que é e porque é importante para sua empresa</h3>
                            <p>Você sabe o quanto seu cliente está satisfeito com a empresa? Descubra o que é Net Promoter Score (NPS) e saiba porque é importante para o crescimento da empresa.</p>
                        </div>
                    </div>
                    <div class="row postHome">                        
                        <figure class="col-3">
                            <img src="images/thumbs/o-basico-de-nps-100x100.jpg" width="100%" class="img-thumbnail" />
                        </figure>
                        <div class="col-9">
                            <h3>3 fatos sobre NPS que você precisa saber</h3>
                            <p>Conheça #3 fatos sobre NPS que te ajudarão a entender melhor esta tecnologia. Como surgiu, como medir e com qual frequência pode ser aplicado.</p>
                        </div>
                    </div>
                    <div class="row postHome">                        
                        <figure class="col-3">
                            <img src="images/thumbs/nps-nas-empresas-brasileiras-100x100.jpg" width="100%" class="img-thumbnail" />
                        </figure>
                        <div class="col-9">
                            <h3>5 Motivos para praticar o NPS nas empresas brasileiras</h2>
                            <p>Você já deve ter ouvido falar sobre NPS. Mas, vale a pena praticar o NPS nas empresas brasileiras? A resposta é sim, nesse artigo vamos te dizer porquê!</p>
                        </div>
				    </div>
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
