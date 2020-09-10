<?php   echo $this->load->view("layout/nav");?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="assets/img/contato0002.png" data-natural-width="1400" data-natural-height="350">
	<div id="sub_content_in">
		<div class="container">
			<h1>Contato</h1>
			<p>"A vida é feita de relacionamentos e ninguém faz grandes obras sozinho"</p>
		</div>
	</div>
</section>
<main>
    <div class="container margin_60_35">
    	<div class="row">
            <div class="col-md-9">        
                <div id="message-contact"></div>
                <?php  echo $this->load->view("../formulario/contato"); ?>                   
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
                    	 <li><strong>Capitais e regiões metropolitanas</strong><br><a href="tel://555130039363">55 51 3003-9363</a></li>
                        <li><strong>demais regiões</strong><br><a href="tel://55518006465551">0800-888-9696</a></li>
                        <li><strong>Geral</strong><br><a href="mailto:info@domain.com">contato@easyseg.com</a></li>
                        
                    </ul>
                </div>
                <div class="quote_banner">
                    <a href="calculadora">
                        Calcule AGORA o preço do seu Alarme
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php  echo $this->load->view("footer"); ?>