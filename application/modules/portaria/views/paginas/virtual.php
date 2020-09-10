<?=$this->load->view("layout/nav");?>
<main>
	<div id="booking_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-7">
					<div class="intro_title_booking">
						<h2>Condominío Vertical</h2>
						<p>Reduza em até 50% dos custos com sua portaria tradicional.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-5">
					<div id="book">
						<h3>Contato Rápido</h3>						
						<p>Preencha o formulario em breve entraremos em contato.</p>
						<div id="message-booking"></div>
						<?=$this->load->view("formulario/formVirtual"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="feat_home">
		<div class="container margin_60_25">
			<div class="row">
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="<?php echo base_url('assets/img/svg_icons/pt-atendimento.png');?>" alt=""></span>
						<h3>Pronto Atendimento</h3>
						<p>Disponibilizamos Unidades de Pronto Atendimento para a realização de rondas diárias a nível de apoio e supervisão aos porteiros.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="<?php echo base_url('assets/img/svg_icons/central-m.png');?>" alt=""></span>
						<h3>Central de Monitoramento</h3>
						<p>Possuímos duas centrais de monitoramento. É através delas que monitoramos e supervisionamos nossos porteiros diariamente.</p>
					</div>
				</div>
			</div><!-- End row -->
			<div class="row">
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="<?php echo base_url('assets/img/svg_icons/sistema-cftv.png');?>" alt=""></span>
						<h3>Sistema De CFTV</h3>
						<p>Disponibilizamos um sistema completo de CFTV que será instalado na guarita a nível de supervisão e apoio aos porteiros.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="<?php echo base_url('assets/img/svg_icons/supervisao_motorizada.png');?>" alt=""></span>
						<h3>CHECK-IN Porteiro</h3>
						<p>O Check-in Porteiro serve para manter uma comunicação constante do porteiro para com os nossos fiscais.A cada 15 ou 30 minutos essa central de controle se auto arma lembrando o porteiro de plantão a digitar uma senha pessoal que informa que o local está sem alteração.</p>
					</div>
				</div>
			</div><!-- End row -->
			<div class="row">
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="<?php echo base_url('assets/img/svg_icons/bt-panico.png');?>" alt=""></span>
						<h3>Botão De Pânico e Celular Própri</h3>
						<p>Instalamos em nossos postos de portaria um botão de pânico em local discreto para os porteiros acionarem em situações que necessitarem de apoio das viaturas. Disponibiliza um celular aos postos de portaria para os porteiros terem contato 24hs com nossa central de operações.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="<?php echo base_url('assets/img/svg_icons/clipboard.svg');?>" alt=""></span>
						<h3>Supervisão 24 Horas - Inspetor</h3>
						<p>Nossos porteiros passam a ser acompanhados diariamente por Inspetores, que avaliam o asseio pessoal, postura e atenção, bem como o grau de satisfação do cliente com relação ao serviço que está sendo prestado.</p>
					</div>
				</div>
			</div>
		</div>
		<hr class="add_bottom_30">
		<?=$this->load->view("includes/depoimentos"); ?>
	</main>
	<?=$this->load->view("footer"); ?>