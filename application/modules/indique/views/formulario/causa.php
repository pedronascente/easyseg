<form method="post" action="causa/save" id="contactform">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" id="name_contact" name="_nome" required="" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Telefone<span>*</span></label>
                <input type="text" id="phone_contact" name="_telefone"  maxlength="14" class="form-control" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Email:<span>*</span></label>
                <input type="email" id="email_contact" name="_email" class="form-control" required="" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"> 
            <div class="form-group"> 
                <label>Tipo de Serviço<span>*</span></label>
                <select class="form-control" name="_servico" required=""> 
                    <option value="">-- Selecione -- </option> 
                    <option value="rastreamento_veicular">Rastreamento Veícular </option>
                    <option value="alarme">Alarme Monitorado </option> 
                    <option value="portaria">Portaria</option> 
                </select> 
            </div>
            <input type="hidden" class="form-control" name="_origem" value="<?= base_url(uri_string());?>">           
        </div> 
    </div>
    <div class="row text-center">
        <div class="col-md-12"> 
            <div class="form-group"> 
                <input type="submit" value="Enviar" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
            </div>
        </div>           
    </div>
</form> 