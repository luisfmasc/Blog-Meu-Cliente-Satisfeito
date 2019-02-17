<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:url"                content="https://meuclientesatisfeito.com" />
	<meta property="og:type"               content="blog" />
	<meta property="og:title"              content="Meu cliente satisfeito" />
	<meta property="og:description"        content="" />
	<meta property="og:image"              content="https://meuclientesatisfeito.com/images/institucional.png" />

    <title>Meu cliente satisfeito</title>
	<link href="css/bootstrap-4.2.1.css" rel="stylesheet">
    
    <!-- CSS PARA OS SOCIAIS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet" >

    <link href="css/bootstrap-social.css" rel="stylesheet" >
    
	<?php  $menuAtivo = 'home';
	  include('components/analytcs.html'); ?>
	<script>gtag('event', 'page_view', {
		  'send_to': 'UA-110534198-4',
		});
	</script>		
  </head>
  <body>
<?php include('components/brand.php'); ?>
<?php include('components/menu.php'); ?>
	  
<?php include('components/footer.php'); ?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.2.1.js"></script>
    
    <!-- Para uso das redes sociais -->
    <script src="js/docs.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>
