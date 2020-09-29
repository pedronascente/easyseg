<?=$this->load->view("layout/nav");?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="<?=base_url('assets/img/contato0002.png')?>" data-natural-width="1400" data-natural-height="350">
	<div id="sub_content_in">
		<div class="container">
			<h1>Contato</h1>
			<p>"Deixe seus dados abaixo, que em breve entraremos em contato." </p>
		</div>
	</div>
</section>
<main>
    <div class="container margin_60_35">
    	<div class="row">
	        <div class="col-md-9">        
	          	<div id="message-contact"></div>
	          	<?=$this->load->view("formulario/contato"); ?> 


	       	</div>          
       		<div class="col-md-3">
            	<div class="box_style_2">
                    <h5>Localizações</h5>
                    <ul>
                        <li><strong>AV. Paulista, 771 São Paulo - Brasil</strong></li>
                        <li><strong>Rua Arabutan, 657 Porto Alegre - Brasil</strong></li>
                        <li><strong>Florida na 1100 South Federal Hwy - Deerfield Beach - E.U.A.</strong></li>  
                    </ul>
                    <h5>Contatos</h5>
                    <ul>
                    	<li><strong>Capitais e regiões metropolitanas</strong><br><a href="tel://30039363">55 51 3003-9363</a></li>
                        <li><strong>demais regiões</strong><br><a href="tel://08008889696">0800-888-9696</a></li>
                        <li><strong>Geral</strong><br><a href="mailto:contato@easyseg.com">contato@easyseg.com</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row margin_60_35">
            <div class="col-md-12"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13820.482637765617!2d-51.1943176!3d-30.0046916!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31188b737da9454b!2sEasyseg!5e0!3m2!1spt-BR!2sbr!4v1601399181939!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
        </div> 
    </div>
</main>
<?=$this->load->view("footer"); ?>