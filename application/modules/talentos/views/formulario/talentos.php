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
                        <input type="text" name="_dataNascimento" class="form-control"  placeholder=""  required="" >
                    </div>
                </div> 
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Estado Civil:</label>
                        <input type="text" name="_estadoCivil" class="form-control"  placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>N.º Filhos:</label>
                        <input type="text"  name="_nFilhos" class="form-control"  placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Tel./Tlm:</label>
                        <input type="text"   name="_telefone"  class="form-control"  placeholder=""  required="">
                    </div>
                </div> 
            </div>   
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nacionalidade:</label>
                        <input type="text" name="_nascionalidade" class="form-control" placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Naturalidade:</label>
                        <input type="text"  name="_naturalidade" class="form-control"  placeholder="" required="">
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
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Bairro/Cidade:</label>
                        <input type="text"  name="_bairroCidade" class="form-control" placeholder=""  required="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CNH:</label>
                        <select  name="_cnh" class="form-control"  required="">
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
            <div class="form-group row">
                <label class="col-md-12 col-form-label">Possui conta no banco ITAU? :</label>
                <div class="col-md-2">
                    <select  name="_contaItau" class="form-control"  required="">
                        <option value="s">SIM</option>
                        <option value="n">não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-12 col-form-label">Conhece alguém que tenha trabalhado ou trabalhe na VOLPATO ?</label>
                <div class="col-md-2">
                    <select  name="_conheceAlguemQueTrabalhouNaEmpresa" class="form-control"  required="">
                        <option value="s">SIM</option>
                        <option value="n">não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-12 col-form-label"><q>Quem</q> ?</label>
                <div class="col-md-12">
                    <input type="text"  name="_quemTrabalhaNaEmpresa" class="form-control"  placeholder=""  required="">
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading text-center" style="background:#e94e1b; color: #fff">INFORMAÇÕES COMPLEMENTARES</div>
        <div class="panel-body">
            <!--
                <div class="form-group row">
                    <label class="col-md-12 col-form-label">Disponibilidade para trabalhar em regime de:</label>
                    <div class="col-md-2">
                        <select  name="_disponibilidadeDeHorario"  class="form-control">
                            <option value="s">SIM</option>
                            <option value="n">não</option>
                        </select>
                    </div>
                </div>
            -->
            <div class="form-group row">
                <label class="col-md-12 col-form-label">Disponibilidade para flexibilidade de horário:</label>
                <div class="col-md-2">
                    <select  name="_disponibilidadeHorario" class="form-control"  required="">
                        <option value="s">SIM</option>
                        <option value="n">não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-12 col-form-label">Motivação para participar em acções de formação para adquirir ou aprofundar conhecimentos /competências:</label>
                <div class="col-md-2">
                    <select  name="_motivacaoAprofundarConhecimento" class="form-control"  required="">
                        <option value="s">SIM</option>
                        <option value="n">não</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-12 col-form-label"> ÁREA / SERVIÇO A QUE SE CANDIDATA</label>
                <div class="col-md-12">
                    <input type="text"  name="_areaPretendida" class="form-control"  placeholder="">
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-warning" >
        <div class="panel-heading text-center" style="background: #e94e1b; color: #fff">FALE UM POUCO SOBRE VOCÊ ? </div>
        <div class="panel-body">
            <div class="form-group">
                <label>Descrema em poucas palavras, algum conhecimneto ou acontecimento que você julgue importante para essa Vaga.</label>
                <textarea class="form-control"  name="_faleDeVoce" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-danger"  style="background: #e94e1b;float: right">Enviar Dados</button>
</form>