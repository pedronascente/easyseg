<form method="post" action="talentos/save">
    <div class="panel panel-warning" >
        <div class="panel-heading text-center" style="background:#e94e1b; color: #fff">DADOS DE IDENTIFICAÇÃO DO CANDIDATO</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text"   name="_nome" class="form-control"  placeholder="" required="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Data Nascimento:</label>
                        <input type="date" name="_dataNascimento" class="form-control"  maxlength="20" placeholder=""  required="" >
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                        <label>Estado Civil:</label>
                        <input type="text" name="_estadoCivil" class="form-control"  placeholder=""  required="">
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Tel./Cel:</label>
                        <input type="text"   name="_telefone"  class="form-control"  placeholder=""  required="">
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group">
                        <label>N.º Filhos:</label>
                        <input type="text"  name="_nFilhos" class="form-control"  placeholder=""  maxlength="3" required="">
                    </div>
                </div>
            </div>   
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label>Nacionalidade:</label>
                        <input type="text" name="_nascionalidade" class="form-control" placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>UF:</label>
                        <input type="text"  name="_naturalidade" class="form-control" maxlength="2" placeholder="" required="">
                    </div>
                </div> 
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input type="text"  name="_endereco" class="form-control" placeholder=""  required="">
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Bairro:</label>
                        <input type="text"  name="_bairroCidade" class="form-control" placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label>Cidade:</label>
                        <input type="text"  name="_bairroCidade" class="form-control" placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CNH:</label>
                        <select  name="_cnh" class="form-control"  required="">
                            <option value="">===</option>
                            <option value="s">SIM</option>
                            <option value="n">não</option>
                        </select>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>RG:</label>
                        <input type="text" name="_rg" class="form-control" placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CPF:</label>
                        <input type="text" name="_cpf" class="form-control" placeholder=""  required="">
                    </div>
                </div> 
            </div>   
            
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading text-center" style="background:#e94e1b; color: #fff">INFORMAÇÕES COMPLEMENTARES</div>
        <div class="panel-body">
            <div class="form-group row">
                <label class="col-md-12 col-form-label">Disponibilidade para flexibilidade de horário:</label>
                <div class="col-md-2">
                    <select  name="_disponibilidadeHorario" class="form-control"  required="">
                        <option value="">===</option>
                        <option value="s">SIM</option>
                        <option value="n">não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-12 col-form-label">Motivação para participar em acções de formação para adquirir ou aprofundar conhecimentos /competências:</label>
                <div class="col-md-2">
                    <select  name="_motivacaoAprofundarConhecimento" class="form-control"  required="">
                        <option value="">===</option>
                        <option value="s">SIM</option>
                        <option value="n">não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label class="col-md-12 col-form-label "> ÁREA / SERVIÇO A QUE SE CANDIDATA</label>
                    <select  name="_areaPretendida" class="form-control"  required="">
                        <option value="">===</option>
                        <option value="1">Atendimento de Ocorrência</option>
                        <option value="2">Porteiro</option>
                        <option value="3">Serviços Gerais</option> 
                        <option value="4">Estágio Administração</option>  
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-warning" >
        <div class="panel-heading text-center" style="background: #e94e1b; color: #fff">FALE UM POUCO SOBRE VOCÊ ? </div>
        <div class="panel-body">
            <div class="form-group">
                <label>Descreva em poucas palavras, algum conhecimnento ou acontecimento que você julgue importante para essa Vaga.</label>
                <textarea class="form-control"  name="_faleDeVoce" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
    </div>
            <input type="submit" value="Enviar" class=" button_intro  add_bottom_30"  style="width: 100%" id="submit-contact"/>
</form>