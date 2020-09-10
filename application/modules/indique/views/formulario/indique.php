<form method="post" action="indique/save" id="contactform">
    <h4>Digite seus dados:</h4>
    <br>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="text" class="form-control" id="name_contact" name="_nome" required=""  placeholder="Seu Nome">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="text" id="phone_contact" name="_telefone"  maxlength="14" class="form-control" required="" placeholder="Seu Telefone">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="email" id="email_contact" name="_email" class="form-control" required="" placeholder="Seu E-mail">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="text" id="" name="_cpf" class="form-control" required="" placeholder="Seu Cpf">
            </div>
        </div>
    </div>
    <hr>
    <h4>Digite os dados do seu Amigo:</h4> 
    <br>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="text" class="form-control" id="name_contact" name="_nome_amigo" required=""  placeholder="Nome">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="text" id="phone_contact" name="_telefone_amigo"  maxlength="14" class="form-control" required="" placeholder="Telefone">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <input type="email" id="email_contact" name="_email_amigo" class="form-control" required="" placeholder="E-mail">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"> 
            <div class="form-group"> 
                <select class="form-control" name="_servico" required=""> 
                    <option value="">-- Indicação para o serviço --</option> 
                    <option value="rastreamento_veicular">Rastreamento Veícular </option>
                    <option value="alarme">Alarme Monitorado </option> 
                    <option value="portaria">Portaria Virtual </option> 
                </select> 
            </div>
            <input type="hidden" class="form-control" name="_origem" value="<?=base_url(uri_string());?>">           
        </div> 
    </div>
    <div class="row text-center">
        <div class="col-md-12"> 
            <div class="form-group"> 
                <input type="submit" value="Enviar Agora" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
            </div>
        </div>           
    </div>
</form> 