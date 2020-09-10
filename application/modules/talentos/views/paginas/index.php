<?php   echo $this->load->view("layout/nav");?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="<?=base_url('assets/img/bancodetalentos.png')?>" data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Banco de Talentos</h1>
            <p>"Uma empresa prospera é feita de pessoas que desejam prosperar"</p>
        </div>
    </div>
</section>
<main>
    <div class="container margin_60">
        <div class="row">       
             <div class="col-md-12 ">
                <?=$this->load->view("../formulario/talentos"); ?>
            </div>
        </div>
    </div>
</main>
<?php  echo $this->load->view("footer"); ?>