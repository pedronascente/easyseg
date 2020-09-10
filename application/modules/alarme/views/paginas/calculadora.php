<?=$this->load->view("layout/nav");?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="<?=base_url('assets/img/subheader_in_2.jpg')?>" data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Calculadora</h1>
            <p>"Responda estas perguntas e tenha o preço do seu alarme em menos de um minuto:"</p>
        </div>
    </div>
</section>
<main>
    <?=$this->load->view("formulario/calculadora"); ?>  
</main>
<?=$this->load->view("footer"); ?>