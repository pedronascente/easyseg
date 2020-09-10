<?=$this->load->view("layout/nav");?>
<main>
    <?=$this->load->view("includes/full-slider-alarme"); ?> 
    <?=$this->load->view("includes/cta-filantropia");?>
    <div class="container margin_60_25">
        <div class="row">
            <div class="col-sm-6">
                <figure class="animated">
                    <a href="<?=base_url('alarme/casa');?>">
                        <img src="<?=base_url('assets/img/alarme/alarme-casa.jpg');?>" alt="" class="img-responsive">
                    </a>
                </figure>
                <h3 class="text-center">A Sua Casa</h3>
            </div>
            <div class="col-sm-6">
                <figure class="animated">
                    <a href="<?=base_url('alarme/negocio')?>">
                        <img src="<?=base_url('assets/img/alarme/alarme-negocio.jpg');?>" alt="" class="img-responsive">
                    </a>
                </figure>
                <h3 class="text-center">O seu Negócio</h3>          
            </div>
        </div>
        <hr class="add_bottom_30">
    </div>
    <?=$this->load->view("includes/beneficios"); ?> 
    <?=$this->load->view("formulario/calculadora"); ?>  
    <?=$this->load->view("includes/depoimentos"); ?>
</main>
<?php  echo $this->load->view("footer"); ?>