<form method="post" action="<?=base_url('portaria/save-fisica')?>" id="check_avail" autocomplete="off">
    <div class="row">
         <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="_telefone"  maxlength="20" placeholder="Telefone"  required="">
            </div>
        </div>
        <div class="col-md-12 col-sm-6">
            <div class="form-group">
                <input type="text" class="form-control" name="_nome"  placeholder="Digite seu nome" required="">
            </div>
        </div>
        <div class="col-md-12 col-sm-6">
            <div class="form-group">
                <input type="email" class="form-control" name="_email"  placeholder="Digite um email válido"  required="">
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="hidden" class="form-control" name="_origem" value="<?= base_url(uri_string());?>">
                <input type="hidden" class="form-control" name="_servico" value="portaria_fisica">        
                <input type="submit" value="Enviar" class=" button_intro" style="width: 100%">
            </div>
        </div>
    </div>
</form>