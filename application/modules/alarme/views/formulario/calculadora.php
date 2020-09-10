	
		<div class="container margin_60_35">
			<div class="row add_bottom_30">
				<div class="col-md-4">
					<div class="box_quote">
						<h3><strong>Calcule AGORA</strong> o preço do seu Alarme</h3>
						<p class="lead">Responda a essas perguntas em menos de um minuto.</p>
						<ul>
							<li><i class="icon_check_alt2"></i>Mais fácil</li>
							<li><i class="icon_check_alt2"></i>Mais fácil</li>
							<li><i class="icon_check_alt2"></i>Sem a obrigação</li>
							<li><i class="icon_check_alt2"></i>30% de desconto</li>
						</ul>
					</div>
				</div>
				<div class="col-md-8">
                <form id="custom" method="POST" class="add_bottom_30">
					<!-- Leave for security protection, read docs for details. Delete this comment before to publish. -->
						<fieldset title="Passo 1">
							<legend>Instalação</legend>
							<h3>Onde você precisa instalar o alarme?</h3>
							<div class="form-group">
								<label><input type="radio" value="Apartamento" id="apartment" name="localizacao" class="icheck">Apartamento</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="Moradia" id="villa" name="localizacao" class="icheck">Moradia</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="Escritório" id="office" name="localizacao" class="icheck">Escritório</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="Comercio" id="shop" name="localizacao" class="icheck">Comercio</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="Armazém" id="warehouse" name="localizacao" class="icheck">Armazém</label>
							</div>
						</fieldset><!-- End Step one -->

						<fieldset title="Passo 2">
							<legend>Detalhes da casa</legend>
							<h3>Por favor responda às seguintes perguntas?</h3>
							<div class="form-group">
								<label>Você tem a porta blindada? Se sim, quantos?</label>
								<div class="styled-select">
									<select name="porta_blindada" id="armored_door">
										<option value="" selected="">Quantidade</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="Mais de 3">Mais de 3</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Quantas janelas você deseja proteger?</label>
								<div class="styled-select">
									<select name="janelas" id="windows">
										<option value="" selected="">Quantidade</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="Mais de 3">Mais de 3</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Quantas áreas você deseja proteger?</label>
								<div class="styled-select">
									<select name="areas" id="zones">
										<option value="" selected="">Quantidade</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="Mais de 3">Mais de 3</option>
									</select>
								</div>
							</div>
						</fieldset>
						<fieldset title="Passo 3">
							<legend>Opções da casa</legend>
							<h3>A casa tem acessos secundários?</h3>
							<div class="form-group">
								<label><input type="checkbox" value="Jardim" id="garden" name="accesses[]" class="icheck">Jardim</label>
							</div>
							<div class="form-group">
								<label><input type="checkbox" value="Varanda ou terraço" id="balcony_terrace" name="accesses[]" class="icheck">Varanda ou terraço</label>
							</div>
							<div class="form-group">
								<label><input type="checkbox" value="Ninguém" id="no_one" name="accesses[]" class="icheck">Ninguém</label>
							</div>
							<div class="form-group">
								<label><input type="checkbox" value="Não estou interessado em proteger áreas externas" id="not_interested" name="accesses[]" class="icheck">Não estou interessado em proteger áreas externas</label>
							</div>
						</fieldset>

						<fieldset title="Passo 4">
							<legend>Despesas</legend>
							<h3>Qual é o seu orçamento?</h3>
							<div class="form-group">
								<label><input type="radio" value="R$300-R$500" id="budget_1" name="despesas" class="icheck">R$300-R$500</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="R$500-R$1000" id="budget_2" name="despesas" class="icheck">R$500-R$1000</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="Mais de R$1000" id="budget_3" name="despesas" class="icheck">Mais de R$1000</label>
							</div>
							<div class="form-group">
								<label><input type="radio" value="Eu não sei" id="budget_4" name="despesas" class="icheck">Eu não sei</label>
							</div>
						</fieldset><!-- End Step four -->

						<fieldset title="Passo 5">
							<legend>Seus detalhes</legend>
							<div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" id="firstname_quote" name="_nome">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Sobre nome</label>
                                        <input type="text" class="form-control" id="lastname_quote" name="_sobre_nome">
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" id="email_quote" name="_email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Telefone</label>
                                        <input type="text" class="form-control" id="phone_quote" name="_telefone">
                                    </div>
                                </div>
                            </div><!-- End row -->
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Descreva o seu tipo de imóvel, tanto quanto possível: salas, equipamentos elétricos, volumes, etc.</label>
                                        <textarea name="message_general" id="message_general" style="height:100px" class="form-control"></textarea>
                                    </div>
									<div class="form-group">
										<input name="terms" type="checkbox" value="Yes" class="icheck"> 
										<a data-toggle="modal" data-target="#myModal" href="#0">
											Aceito termos e condições 
										</a>
									</div>
                                </div>
                            </div>
						</fieldset>
						<input type="hidden" class="form-control" name="_origem" value="<?= base_url(uri_string());?>">
						<input type="hidden" class="form-control" name="_servico" value="calculadora">
						<input type="submit" class="finish" value="Finalizar!">
					</form>
				</div>
			</div><!-- End row -->
			<hr>
		</div><!-- End container -->
