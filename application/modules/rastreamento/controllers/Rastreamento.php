<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rastreamento extends MX_Controller {

    private $Dados;
    private $_location = "rastreamento/obrigado";
    private $_location_error = "error";

    public function __construct() {
        parent::__construct();         
    }

    public function index() {
         $this->loadPage('rastreamento/paginas/index');
    }

    public function carro() {
         $this->loadPage('rastreamento/paginas/carro');
    }

    public function moto() {
         $this->loadPage('rastreamento/paginas/moto');
    }

    public function caminhao() {
         $this->loadPage('rastreamento/paginas/caminhao');
    }

    public function saveCarro(){
        $url = base_url();    

        if($this->input->post()==null){
           header('Location:'.$url.'rastreamento/carro');
           exit(); 
        } 
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function saveMoto(){
        $url = base_url();    
        if($this->input->post()==null){
           header('Location:'.$url.'rastreamento/moto');
           exit(); 
        }  
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function saveCaminhao(){
        $url = base_url();  
        if($this->input->post()==null){
           header('Location:'.$url.'rastreamento/caminhao');
           exit(); 
        }  
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function obrigado(){
        $this->loadPage('rastreamento/paginas/obrigado');   
    }

/*
* ****************************************************************************************************************************************************
* METODOS PRIVADOS :
* ****************************************************************************************************************************************************
*/

    private function sendEmail($data) {
        $mensagem = '<ul>
        <li><b>_nome:</b>'.$data['_nome'].'</li>
        <li><b>_email:</b>'.$data['_email'].'</li>
        <li><b>_telefone:</b>'.$data['_telefone'].'</li>
        <li><b>_servico:</b>'.$data['_servico'].'</li>
        <li><b>_origem:</b>'.$data['_origem'].'</li>
        </ul>';
        $this->email->from("easyseg@easyseg.com", "LAEAD");
        $this->email->to("contato@easyseg.com", $data['_nome']);
        $this->email->cc("desenvolvimento@grupovolpato.com", $data['_nome']);
        $this->email->subject("FORMULARIO PAGINA : RASTREAMENTO");
        $this->email->message($mensagem);
       return $this->email->send();      
    }

    private function loadPage($moduleRoute, $parameters = '') {
        $data['assets'] = $this->loadAssets($moduleRoute);
        $data['content'] = $this->load->view($moduleRoute, $parameters, TRUE);
        $this->load->view('page', $data);
    }

    private function loadAssets($moduleRoute) {
        $url = base_url();

        $_css_index= '<!-- BASE CSS -->
        <link href="'.$url.'/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/style.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/menu.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/responsive.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/elegant_font.min.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/fontello.min.css" rel="stylesheet">
        <link href="'.$url.'/assets/css/magnific-popup.min.css" rel="stylesheet">

        <!-- LayerSlider stylesheet -->
        <link href="'.$url.'/assets/css/layerslider.css" rel="stylesheet">

        <!-- SPECIFIC CSS -->
        <link href="'.$url.'/assets/css/grey.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css">';

         $javaScript_default =' <!-- Common scripts -->
        <script src="'.$url.'/assets/js/jquery-2.2.4.min.js"></script>
        <script src="'.$url.'/assets/js/common_scripts_min.js"></script>
        <script src="'.$url.'/assets/js/functions.js"></script>

        <!-- LayerSlider script files -->
        <script src="'.$url.'/assets/js/greensock.js"></script>
        <script src="'.$url.'/assets/js/layerslider.transitions.js"></script>
        <script src="'.$url.'/assets/js/layerslider.kreaturamedia.jquery.js"></script>
        <script src="'.$url.'/assets/js/slider_func.js"></script>
        
        <!-- Specific scripts -->
        <script src="'.$url.'/assets/js/jquery.validate.js"></script>
        <script src="'.$url.'/assets/js/jquery.stepy.min.js"></script>
        <script src="'.$url.'/assets/js/quotation-validate.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>';      

        return array(
            'css' => $_css_index,
            'javaScriptHeader' => '',
            'javaScriptFooter' => $javaScript_default
        );
    }
}