<?=$this->load->view("layout/nav");?>
<main>
	<?=$this->load->view("includes/full-slider-rastreamento"); ?>
	<?=$this->load->view("includes/cta-filantropia");?>
	<?=$this->load->view("includes/beneficios_rastreamento"); ?>
	<div class="container margin_60_25">
		<?=$this->load->view("includes/servico_rastreamento"); ?>
		<hr class="add_bottom_30">
	</div>
	<?=$this->load->view("includes/depoimentos"); ?>
</main>
<?=$this->load->view("footer"); ?>