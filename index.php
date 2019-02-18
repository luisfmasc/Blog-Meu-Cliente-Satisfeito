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
			'send_to': 'UA-110534198-4',
		} );
	</script>
</head>
<body>
	<?php include('components/menu.php'); ?>

	<?php include('components/footer.php'); ?>
</body>
</html>
