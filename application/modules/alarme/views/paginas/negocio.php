<?php   echo $this->load->view("layout/nav");?>
<main>
	<div id="booking_container_alarme">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-7">
					<div class="intro_title_booking">
						<h2>ALARME PARA SEU NEGÓCIO</h2>
						<p>Tecnologia com registro de Imagens.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-5">
					<div id="book">
						<h3>Contato Rápido</h3>						
						<p>Preencha o formulario em breve entraremos em contato.</p>
						<?php  echo $this->load->view("formulario/formNegocio"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?=$this->load->view("includes/servicos");?>
	<?=$this->load->view("includes/beneficios"); ?> 
	<?=$this->load->view("formulario/calculadora"); ?>	
	<?=$this->load->view("includes/depoimentos"); ?>
</main>
<?=$this->load->view("footer"); ?>