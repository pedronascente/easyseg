<h4>Preencha seus dados e Solicite agora mesmo uma Cotação Exclusiva.</h4>

<form method="post" action="<?=base_url('portaria/save-virtual')?>" id="check_avail" autocomplete="off">
    <div class="row">
        <div class="col-md-12 col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" name="_nome" id="name_booking" placeholder="Digite seu nome" required="">
            </div>
        </div>
        <div class="col-md-12 col-sm-6">
            <div class="form-group">
                <input type="email" class="form-control" name="_email" id="email_booking" placeholder="Email"  required="">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="_telefone" id="phone_booking" placeholder="Telephone"  required="">
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="hidden" class="form-control" name="_origem" value="<?= base_url(uri_string());?>">
                <input type="hidden" class="form-control" name="_servico" value="portaria_virtual">        
                <input type="submit" value="Enviar"  style="  width: 100%; padding: 12px 36px;background: #e94e1b; font-size:18px; border-radius: 38px" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
            </div>
        </div>
    </div>
</form>