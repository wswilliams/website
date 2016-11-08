  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading" id="panel-heading">Adicionar novos Eventos ao Sistema
         <span class="pull-right clickable" data-effect="fadeOut"><i class="fa fa-times"></i></span>
      </div>
      <div class="panel-body">

        <div class="row">
            <div id="contact-form">
                  <form id="formMensagem" action ="javascript:bntSubmitEventos();" method = "post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <input type="text" class="form-control input-lg" name="nome" id="nome" placeholder="Nome" required="required" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control input-lg" name="data" id="data" placeholder="Data" required="required" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-10">
                        <div class="form-group">
                          <input type="text" class="form-control input-lg" name="link" id="link" placeholder="Link" required="required" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="token" id="token"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea name="descricao" id="descricao" class="form-control" rows="4" cols="25" required="required"
                          placeholder="Descrição"></textarea>
                        </div>            
                        <center>
                          <button class="btn btn-primary" data-toggle="tooltip" title="Enviar Formulário">Enviar</button>
                          <button class="btn btn-default" data-toggle="tooltip" title="Redefinir campos" onclick="bntresetCamposEventos()">Limpar</button>
                        </center>
                    </div>

                      <div id="sucessoMensage" class="col-md-12">
                            <div class="alert alert-success">Mensagem enviado com sucesso.</div>
                      </div>
                      <div id="falhaMensage" class="col-md-12">
                              <div class="alert alert-danger">Desculple estamos em manutenção.</div>
                      </div>
                    </div>
                    </form>
                </div>

          <div class="col-md-8">
            <div id="sucessoAdd">
             <div class="col-md-3 text-center">
              <div class="alert alert-success">Evento adicionado com sucesso. </div>
              </div>
            </div>
              <div id="falhaFail">
                <div class="col-md-3 text-center">
                  <div class="alert alert-danger">Erro ao adicionar Evento, contate o admin do sistema.</div>
                </div>
                </div>

                <div id="falhaFail">
                 <div class="col-md-3 text-center">
                  <div class="alert alert-warning">Evento Já existe no sistema, adicione um novo evento. </div>
                  </div>
                </div>

              </div>
          
            </div>
          </div>
          </div>
          </div>
           
             
