<?=$this->load->view("layout/nav");?>
<main>
    <?=$this->load->view("includes/full-slider-alarme"); ?> 
    <?=$this->load->view("includes/cta-filantropia");?>
    <?=$this->load->view("includes/servicos");?>
    <?=$this->load->view("includes/beneficios"); ?> 
    <?=$this->load->view("formulario/calculadora"); ?>  
    <?=$this->load->view("includes/depoimentos"); ?>
</main>
<?php  echo $this->load->view("footer"); ?>