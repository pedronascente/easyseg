<?=$this->load->view("layout/nav");?>
<main>
	<div id="booking_container_rastreamento">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-7">
					<div class="intro_title_booking">
						<h2>RASTREAMENTO PARA CARRO</h2>
						<p>Central de Atendimento 24H</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-5">
					<div id="book">
						<h3>Contato Rápido</h3>
						<p>Preencha o formulario em breve entraremos em contato.</p>
						<div id="message-booking"></div>
						<?=$this->load->view("formulario/formCarro"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>		
	<?php  echo $this->load->view("includes/beneficios_rastreamento"); ?>
	<div class="container margin_60_25">
		<?php  echo $this->load->view("includes/servico_rastreamento"); ?>
		<hr class="add_bottom_30">
	</div>
	<?=$this->load->view("includes/depoimentos"); ?>
</main>
<?php  echo $this->load->view("footer"); ?>