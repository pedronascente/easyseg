<form method="post" action="contato/save" id="contactform">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" id="name_contact" name="_nome" required="" >
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <label>Email</label>
                <input type="email" id="email_contact" name="_email" class="form-control" required="" >
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" id="phone_contact" name="_telefone" class="form-control" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label>Sua Mensagem</label>
                <textarea rows="5" id="message_contact" name="_menssagem" class="form-control" style="height:100px;"></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Você é humano? 3 + 1 =</label>
                <input type="text"  name="_verify_contact" id="verify_contact" class=" form-control">
            </div>
            <input type="hidden" class="form-control" name="_origem" value="<?= base_url(uri_string());?>">
            <input type="submit" value="Enviar" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
        </div>
    </div>
</form> 