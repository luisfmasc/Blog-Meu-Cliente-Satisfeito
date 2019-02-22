<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="https://meuclientesatisfeito.com/landing-page"/>
        <meta property="og:type" content="product"/>
        <meta property="og:title" content="Conteúdo Gratuito | Meu cliente satisfeito"/>
        <meta property="og:description"        content="Você empreendedor que está na luta para conseguir mais clientes, oferecemos a você um conteúdo gratuito perfeito para facilitar seu entendimento e colocar na pratica o Net Promoter Score. Vai perder essa oportunidade?" />
        <meta property="og:image" content="https://meuclientesatisfeito.com/images/institucional.png"/>
        <meta name="description" content="Você empreendedor que está na luta para conseguir mais clientes, oferecemos a você um conteúdo gratuito perfeito para facilitar seu entendimento e colocar na pratica o Net Promoter Score. Vai perder essa oportunidade?"/>
        <meta property="og:locale" content="pt_BR"/>
        <title>Conteúdo Gratuito | Meu cliente satisfeito </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://meuclientesatisfeito.com/css/stylePages.css" rel="stylesheet">
        <?php include('../components/analytics.html'); ?>
    </head>
    <body>
	<section id="bannerInstitucional">
		<header class="container" >
			<div id="logo" class="col-sm-3">
				<a href="https://meuclientesatisfeito.com"> <img class="img-responsive" src="https://meuclientesatisfeito.com/images/logotipoClienteSatisfeitoNegativo.png" alt="Logotipo da Meu Cliente Satisfeito" height="100" /></a>
			</div>
		</header>
		<section class="container">
			<div class="row">
				<div class="col-md-7">
						<h1 class="grande longo">Um Cliente satisfeito é sua melhor estratégia de negócios!</h1>
					<div class="negativo">
						<p>Esse material é exclusivo para você que mata um leão por dia no mundo dos negócios e quer que sua marca seja referência no seu segmento. Com esse material vamos te ensinar táticas simples, eficaz e muito usada pelos grandes players do mercado para fidelizar seus clientes e ganhar muito mais dinheiro com isso, mesmo se você está começando agora e até para as grandes empresas que querem vender mais.  Tudo isso com uma metodologia descomplicada de coleta do feedback do cliente. Não deixe de pegar seu conteúdo GRATUITO e fazer parte desse grupo seleto das empresas mais rentáveis do mundo.</p>
                        <figure><img src="https://meuclientesatisfeito.com/images/logotipos.png" alt="Gráfico com logotipos de empresas que usan NPS" height="40" width="250" /></figure>
                        <button type="button" class="azulClaro" data-toggle="modal" data-target="#modalForm">Quero participar desse grupo agora</button>
					</div>
				</div>
				<div class="col-md-4 offset-md-1" >
					<figure><img src="https://meuclientesatisfeito.com/images/mockup-book.png" alt="Gráfico ilustrando o e-book" width="100%" /></figure>
				</div>
			</div>
		</section>
    </section>
		<section class="container my-5">
			<div id="content" class="row">
                <div class="col-md-8 offset-2">
                    <h2>O conteúdo</h2>
                    <p>Resolvi criar esse conteúdo para que juntos possamos descobrir o quanto os clientes estão satisfeitos com sua marca, aplicando uma metodologia rápida, prática e altamente efetiva para fidelizar seu cliente, e nada melhor que um cliente fiel, que além de comprar com você vai recomendar sua marca para outras pessoas sem que você gaste 1 real a mais, isso mesmo Custo de Aquisição 0 (zero!) para mais clientes qualificados e com intenção clara de aquisição!</p>
                    <p>Mas não posso fazer isso sozinho, preciso que você se comprometa a ler todo o material, usar a planilha, exercitar na prática e caso tenha alguma dúvida nós da <a href="https://meuclientesatisfeito.com">Meu Cliente Satisfeito</a> estamos aqui para te ajudar, é só nos enviar um e-mail com as dúvidas!</p>                  
                    <h3>O que você vai encontrar no material:</h3>
                    <ol>
                        <li>Como satisfazer seu cliente;</li>
                        <li>Como aprender com seu cliente;</li>
                        <li>Como fidelizar seu cliente;</li>
                        <li>Como implantar e extrair os resultados do NPS;</li>
                        <li>Como agir para melhorar seus resultados;</li>
                        <li>Uma Planilha pronta para você começar a executar.</li>
                    </ol>
                    <button type="button" class="azulEscuro" data-toggle="modal" data-target="#modalForm">Ok, você me convenceu, me dá logo esse material!</button>
                </div>

			</div>
		</section>
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalFormTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content no-header">
            <div class="close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
            </button>
            </div>
          <div class="modal-body">
            <section id="Form2">
                <h1>Conteúdo exclusívo</h1>
                <p>Inscreva-se em nossa newsletter para receber conteúdo gratuito sobre NPS e Gestão de Experiência.</p>
                <form id="modal-contato">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nomeSobrenome" placeholder="Seu nome e sobrenome" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp" placeholder="E-mail" required>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pt-3 float-right">
                        <button id="cancelaForm" data-dismiss="modal" class="btn btn-secondary" onClick="gtag('event', 'Formulário', {'event_category' : 'aside', event_label' : 'Desistiu'})">Não, obrigado (a)</button>
                        <button id="enviarForm" type="submit" class="btn btn-primary" onClick="gtag('event', 'Formulário', {'event_category' : 'aside', event_label' : 'Cadastrou'})">Cadastrar</button>
                    </div>
                    <div class="clearfix"></div>
                    <small class="float-right">Não se preocupe, não fazemos spam</small>
                    <div class="sucesso" style="display: none">Cadastro realizado com sucesso!</div>
                </form>
            </section>
            </div>            
        </div>
      </div>
    </div>
        
<div class="modal fade" id="modalOk" tabindex="-1" role="dialog" aria-labelledby="modalOkTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div id="FormOk" class="modal-content no-header">
        <div class="close">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <div class="modal-body">
        <section class="p-5">
            <h1>Obrigado ;)</h1>
            <p>Seu cadastro foi realizado com sucesso!</p>
        </section>
        </div>
    </div>
  </div>
</div>
<footer class="bgAzulEscuro">
	<div class="container">
		<div class="row">
			<div class="col center" id="endereco" onClick="gtag('event', 'endereco', {'event_category' : 'footer', 'event_label' : 'selecionaEndereco'})">
				<a class="AzulClaro" href="mailto:contato@meuclientesatisfeito.com">contato@meuclientesatisfeito.com</a>
			</div>
		</div>
	</div>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function(){
        $('#modal-contato').submit(function(){
            $(this).find('.sucesso').fadeIn();
            return false;
        }); 
    });
</script>
        
    <!--Firebase -->
    <script src="https://www.gstatic.com/firebasejs/5.8.3/firebase.js"></script>
    <script src="https://meuclientesatisfeito.com/js/main.js"></script>  </body>
</html>
