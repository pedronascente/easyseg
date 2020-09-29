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
						<?=$this->load->view("formulario/formVertical"); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?=$this->load->view("includes/servicos"); ?>
	<?=$this->load->view("includes/beneficio"); ?>
	<?=$this->load->view("includes/depoimentos"); ?>
</main>
<?=$this->load->view("footer"); ?>