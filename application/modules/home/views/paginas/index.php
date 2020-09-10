<?=$this->load->view("layout/nav");?>
<main>
	<?=$this->load->view("includes/full-slider-home");?>
	<?=$this->load->view("includes/cta-filantropia");?>
	<div id="feat_home">
		<div class="container margin_60_25">	
			<div class="row">
				<div class="col-sm-4">
					<figure class="animated"><a href="rastreamento"><img src="assets/img/service_home_1.jpg" alt="" class="img-responsive"></a></figure>
					<h3 class="text-center">Rastreamento Veicular</h3>
					<p class="text-justify">
						Nossa tecnologia funciona através de um dispositivo que é instalado em um local estratégico do seu veículo ou do veículo da sua empresa. Você poderá então acessar as informações emitidas pelo rastreador através do nosso aplicativo ou plataforma na web, e através disso, controlar os percursos que o seu veículo realiza e a localização atual. 
					</p>
				</div>
				<div class="col-sm-4">
					<figure class="animated"><a href="alarme"><img src="assets/img/service_home_2.jpg" alt="" class="img-responsive"></a></figure>
					<h3 class="text-center">Alarme Monitorado</h3>
					<p class="text-justify">
						A Easyseg disponibiliza os mais completos e avançados sistemas de alarmes residenciais e comerciais. Através de soluções integradas, que se adaptam ao seu estilo de vida, é possível proporcionar-lhe uma maior tranquilidade, garantindo a proteção e segurança da sua família, casa e empresa.
					</p>
				</div>
				<div class="col-sm-4">
					<figure class="animated"><a href="portaria"><img src="assets/img/service_home_3.jpg" alt="" class="img-responsive"></a></figure>
					<h3 class="text-center">Portaria Virtual</h3>
					<p class="text-justify">
						A Portaria Virtual Easyseg é uma solução inovadora de gerenciamento remoto do controle de acessos em condomínios que garante mais segurança e controle através da tecnologia. Toda a comunicação é realizada remotamente, tudo registrado tanto por voz, quanto por imagens.
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row margin_60_25" > 
		<div class="groupInOneColumn col-xs-12 col-sm-12 col-md-12 "> 
			<h1 style="text-align: center;">
				<img alt="" src="assets/img/icone_lider.png" style="width: 82px; height: 82px;">&nbsp;
				<span style="font-size:30px;">
					<strong>Somos a empresa&nbsp;<span style="color:#e94e1b;">Líder em Segurança</span>.&nbsp;</strong>
				</span>
			</h1> 
		</div> 
	</div>
	<div class="container margin_60_25">
		<div class="row">
			<div class="col-md-6">
				<div class="box_feat">
					<span><img src="assets/img/svg_icons/shield.svg" alt=""></span>
					<h3>Full Protection</h3>
					<p>Lorem ipsum dolor sit amet, no movet simul laoreet pri, aperiri fabulas expetenda ei pro. Sed vero assentior ad, est vide liber viris ne. Mea saperet evertitur intellegebat ei, an labore cetero eos.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box_feat">
					<span><img src="assets/img/svg_icons/mobile.svg" alt=""></span>
					<h3>Management via App</h3>
					<p>Mea saperet evertitur intellegebat ei, an labore cetero eos. Quo no facilisis contentiones, enim graeci vim ea, justo graecis ne qui. His tation theophrastus intellegebat ut, hinc fierent nam ea.</p>
				</div>
			</div>
		</div><!-- End row -->
		<div class="row">
			<div class="col-md-6">
				<div class="box_feat">
					<span><img src="assets/img/svg_icons/video-camera.svg" alt=""></span>
					<h3>HD Video Camera</h3>
					<p>Lorem ipsum dolor sit amet, no movet simul laoreet pri, aperiri fabulas expetenda ei pro. Sed vero assentior ad, est vide liber viris ne. Mea saperet evertitur intellegebat ei, an labore cetero eos.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box_feat">
					<span><img src="assets/img/svg_icons/microphone.svg" alt=""></span>
					<h3>Microphone</h3>
					<p>Mea saperet evertitur intellegebat ei, an labore cetero eos. Quo no facilisis contentiones, enim graeci vim ea, justo graecis ne qui. His tation theophrastus intellegebat ut, hinc fierent nam ea.</p>
				</div>
			</div>
		</div><!-- End row -->
		<div class="row">
			<div class="col-md-6">
				<div class="box_feat">
					<span><img src="assets/img/svg_icons/settings.svg" alt=""></span>
					<h3>Tecnical Support</h3>
					<p>Lorem ipsum dolor sit amet, no movet simul laoreet pri, aperiri fabulas expetenda ei pro. Sed vero assentior ad, est vide liber viris ne. Mea saperet evertitur intellegebat ei, an labore cetero eos.</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="box_feat">
					<span><img src="assets/img/svg_icons/clipboard.svg" alt=""></span>
					<h3>Certifications</h3>
					<p>Mea saperet evertitur intellegebat ei, an labore cetero eos. Quo no facilisis contentiones, enim graeci vim ea, justo graecis ne qui. His tation theophrastus intellegebat ut, hinc fierent nam ea.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid margin_60_25 " style="background: #f3f3f3; padding-bottom: 70px">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-offset-2 text-center ">

						<h2>Receba <span  style="color: #e94e1b">GRÁTIS</span> nossa consultoria   <br> <span  style="color: #e94e1b"> de segurança</span></h2>
						<!--<p class="lead">Preencha os seus dados que em breve nossos consultores entrará em contato</p>-->
				</div>
				<div class="col-md-9 col-md-offset-2 ">
					<?=$this->load->view("formulario/home"); ?>	
				</div>
			</div>    
		</div>
	</div>
	<?=$this->load->view("includes/depoimentos"); ?>
</main>
<?=$this->load->view("footer"); ?>