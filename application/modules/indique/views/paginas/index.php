<?=$this->load->view("layout/nav");?>
<section class="parallax_window_in short" data-parallax="scroll" data-image-src="<?=base_url('assets/img/slides/slide_indique2.jpg');?>" data-natural-width="1400" data-natural-height="350">
    <div id="sub_content_in">
        <div class="container">
            <h1>Indique um  Amigo e Ganhe <b style="color: #97ff00">"$$$"</b></h1>
            <p>"Agora Você Ganha Dinheiro, ao indicar  nossos Produtos para seus amigos."</p>
        </div>
    </div>
</section>
<main>
    <div class="container margin_60">
        <div class="row">
            <div class="col-sm-4">
                <h3>Qual a Missão da Associação de Assistência Á Criança Deficiente?</h3>
                <p>Conforme informações colhidas no site oficial da Associação de Assistência à Criança Deficiente a principal missão da instituição se encontra em fornecer todos os tipos de assistência para pessoas que sofrem de deficiência física.</p>
                <p>Para fazer isso não cobrar nenhum centavo dos pacientes. Os médicos e trabalhadores da organização possuem a missão de promover os atos de reabilitar e aumentar o nível de prevenção.</p>
                <img src="<?=base_url('assets/img/indique-e-ganhe-programa-de-afiliados.png');?>" alt="" width="100%" class="img-responsive">
            </div>
            <div class="col-sm-7 col-sm-offset-1">
                <ul class="feat" id="about">
                    <li>
                        <h4>SAIBA COMO VOCÊ TAMBÉM PODE CONTRIBUIR PARA AJUDAR NOSSAS CRIANÇAS DO NOSSO BRASIL</h4>
                    </li>
                    <li>
                        <i class="icon_check_alt2"></i>
                        <h4>Passo #1</h4>
                        <p>Você Contrata um de nossos Serviços, Vira nosso parceiro.</p>
                    </li>
                    <li>
                        <i class="icon_check_alt2"></i>
                        <h4>Passo #2</h4>
                        <p>A EASYSEG Faz o repasse financeiro para a  ong Assistência à Criança Deficiente (AACD) </p>
                    </li>
                    <li>
                        <i class="icon_check_alt2"></i>
                        <h4>Passo #3</h4>
                        <p>
                          Assistência à Criança Deficiente (AACD) Tem o propósito de Trabalhar nas frentes necessárias para que as pessoas com deficiência física possam atingir seu máximo potencial, evoluindo além de suas limitações e contribuindo para uma sociedade que acolhe melhor a diversidade.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row text-center">
            <div class="col-md-12">
                <img src="<?=base_url('assets/img/indique-carteira.png');?>" alt="" width="140" class="img-responsive">
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col-md-12">                 
                <a href="" class="btn btn-success hidden-xs " data-toggle="modal" data-target="#myModalCTA"
                style=" padding: 12px 36px;background: #49ca37; font-size:26px; border-radius: 36px">QUERO INDICAR UM AMIGO</a>
                <a href="" class="btn btn-success  visible-xs " data-toggle="modal" data-target="#myModalCTA"
                    style=" background: #49ca37;width: 100%; padding: 15px 0; border-radius: 36px">QUERO FAZER A DIFERENÇA</a>
            </div>
        </div>
    </div>
    <?=$this->load->view("includes/depoimentos"); ?>
</main>

<?=$this->load->view("footer"); ?>
<!-- Modal : CTA -->
<div id="myModalCTA" class="modal fade" role="dialog" >
    <div class="modal-dialog"  style="max-width: 400px">
        <div class="modal-content">
            <div class="modal-header" style=" margin: 0; padding: 0">
                
                <div class="col-md-7">
                    <img src="<?=base_url('assets/img/8320fb44f6e99055522be86bd1153d0de73d78d68952c9803c5ef1a7fb0eb318.png');?>"  width="100%" class="img-responsive">
                </div>
                <div class="col-md-5 text-center" style="    background: #e94e1b;
    padding-bottom: 39px;
    padding-top: 31px;
}">
                <h3 style="color: #FFF">Quero Indicar meu Amigo!</h3>
                </div>
            </div>
            <div class="modal-body " >
                <?=$this->load->view("formulario/indique"); ?>
            </div>
        </div>
    </div>   
</div>

<!--
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
-->