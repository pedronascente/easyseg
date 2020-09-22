
<h4>Preencha seus dados e Solicite agora mesmo uma Cotação Exclusiva.</h4>
<form method="post" action="<?=base_url('rastreamento/save-carro')?>" id="contactform">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" id="" name="_nome" required="" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Telefone<span>*</span></label>
                <input type="text" id="" name="_telefone"  maxlength="14" class="form-control" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Email:<span>*</span></label>
                <input type="email" id="" name="_email" class="form-control" required="" >
            </div>
        </div>
    </div>
   
    <div class="row text-center">
        <div class="col-md-12"> 
            <div class="form-group"> 
                <input type="hidden" class="form-control" name="_origem" value="<?= base_url(uri_string());?>">
                <input type="hidden" class="form-control" name="_servico" value="rastreamento_carro">
                <input type="submit" value="Enviar"  style="  width: 100%; padding: 12px 36px;background: #e94e1b; font-size:18px; border-radius: 38px" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
            </div>
        </div>           
    </div>
</form> 