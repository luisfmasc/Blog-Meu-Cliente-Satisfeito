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

	<title>Meu cliente satisfeito - Blog</title>
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
	
	

	<section class="container">
		<section class="row">
			<main class="col-md-8">
                <div class="row">
                    
                    
                    
                    <div class="row postHome">                        
                        <figure class="col-3">
                           <a href="https://meuclientesatisfeito.com/blog/descubra-o-nps/nps-o-que-e.php" target="_blank">
                            <img src="images/post/nps-o-que-e-800x600.jpg" width="100%" class="img-thumbnail" /></a>
                        </figure>
                        <div class="col-9">
                            <h3>NPS: O que é e porque é importante para sua empresa</h3>
                            <p>Você sabe o quanto seu cliente está satisfeito com a empresa? Descubra o que é Net Promoter Score (NPS) e saiba porque é importante para o crescimento da empresa.</p>
          <a href="https://meuclientesatisfeito.com/blog/descubra-o-nps/nps-o-que-e.php" target="_blank">Leia Mais</a>

                        </div>
                    </div>
                    <div class="row postHome">                        
                        <figure class="col-3">
                            <a href="https://meuclientesatisfeito.com/blog/descubra-o-nps/3-fatos-sobre-nps.php" target="_blank"> <img src="images/thumbs/o-basico-de-nps-100x100.jpg" width="100%" class="img-thumbnail" /></a>
                        </figure>
                        <div class="col-9">
                            <h3>3 fatos sobre NPS que você precisa saber</h3>
                            <p>Conheça #3 fatos sobre NPS que te ajudarão a entender melhor esta tecnologia. Como surgiu, como medir e com qual frequência pode ser aplicado.</p>
                            <a href="https://meuclientesatisfeito.com/blog/descubra-o-nps/3-fatos-sobre-nps.php" target="_blank">Leia Mais</a>
                        </div>
                    </div>
                    <div class="row postHome">                        
                        <figure class="col-3">
                          <a href="https://meuclientesatisfeito.com/blog/nps-na-pratica/nps-nas-empresas-brasileiras.php" target="_blank">  <img src="images/thumbs/nps-nas-empresas-brasileiras-100x100.jpg" width="100%" class="img-thumbnail" /></a>
                        </figure>
                        <div class="col-9">
                            <h3>5 Motivos para praticar o NPS nas empresas brasileiras</h2>
                            <p>Você já deve ter ouvido falar sobre NPS. Mas, vale a pena praticar o NPS nas empresas brasileiras? A resposta é sim, nesse artigo vamos te dizer porquê!</p>
                            <a href="https://meuclientesatisfeito.com/blog/nps-na-pratica/nps-nas-empresas-brasileiras.php" target="_blank">Leia Mais</a>
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
