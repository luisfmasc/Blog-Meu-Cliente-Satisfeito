<!-- Acionadores  -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalForm">ModalForm</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalErro">ModalErro</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalOk">ModalOK</button>



<!-- Modais funcionando -->
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
                </form>
            </section>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="modalErroTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div id="FormErro" class="modal-content no-header">
        <div class="close">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <div class="modal-body">
        <section class="p-5">
            <h1>Ooops :(</h1>
            <p>Tente novamente.</p>
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