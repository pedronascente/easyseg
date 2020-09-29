<script src="<?=base_url('assets/js/jquery-2.2.4.min.js')?>"></script>
<script type="text/javascript">
	$(function(){
		$('body').css( "background", "red" );
		setTimeout(function(){
				window.location = "/"			
		}, 10000)
	});
</script>
<!-- END SEND MAIL SCRIPT -->   
<div id="success">
	<div class="icon icon--order-success svg">
	<img src="<?=base_url('assets/img/atencao.jpg');?>" alt="" class="img-responsive">
	<h4><span>Não foi possivel enviar sua Solicitação!</span><br>Tente Novamente daqui 05 minutos. </h4>
	<small>Você será redirecionado de volta em 10 segundos.</small>
	</div>
</div>