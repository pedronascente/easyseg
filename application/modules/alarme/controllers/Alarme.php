<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alarme extends MX_Controller {

    private $Dados;
    private $_location = "obrigado";
    private $_location_error = "error";

    public function __construct() {
        parent::__construct();         
    }

    public function index() {
         $this->loadPage('alarme/paginas/index');
    }

    public function alarme() {
         $this->loadPage('alarme/paginas/alarme');
    }

    public function casa() {
         $this->loadPage('alarme/paginas/casa');
    }

    public function negocio() {
         $this->loadPage('alarme/paginas/negocio');
    }
    
    public function calculadora() {
         $this->loadPage('alarme/paginas/calculadora');
    }

    public function saveCasa(){
        $url=base_url();
        if($this->input->post()==null){
           header('Location:'.$url.'alarme/casa');
           exit(); 
        }  
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function saveNegocio(){
        $url=base_url();
        if($this->input->post()==null){
           header('Location:'.$url.'alarme/negocio');
           exit(); 
        }  
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function saveCalculadora(){
        $url=base_url();
        if($this->input->post()==null){
           header('Location:'.$url.'alarme');
           exit(); 
        }  
        if($this->sendEmail($this->input->post())){
            header('Location:'.$url.$this->_location);
        }else{
            header('Location:'.$url.$this->_location_error);
        }
    }

    public function obrigado(){
        $this->loadPage('alarme/paginas/obrigado');   
    }

/*
* ****************************************************************************************************************************************************
* METODOS PRIVADOS :
* ****************************************************************************************************************************************************
*/

    private function sendEmail($data){
        if($data['_servico']=='calculadora'){
            $mensagem = 
            '<ul>
                <li><b>_nome:</b>'.$data['_nome'].'</li>
                <li><b>_sobre_nome:</b>'.$data['_sobre_nome'].'</li>
                <li><b>_email:</b>'.$data['_email'].'</li>
                <li><b>_telefone:</b>'.$data['_telefone'].'</li>
                <li><b>message_general:</b>'.$data['message_general'].'</li>
                <li><b>localizacao:</b>'.$data['localizacao'].'</li>
                <li><b>porta_blindada:</b>'.$data['porta_blindada'].'</li>
                <li><b>janelas:</b>'.$data['janelas'].'</li>
                <li>';

                for ($i=0; $i<count($data['accesses']);$i++) {

                    if($i<=count($data['accesses'])){
                        $mensagem .= '<ul>
                            <li><b>acesso:</b>'.$data['accesses'][$i].'</li>
                            
                        </ul>';   
                    }
                }
                     
              $mensagem .='   <li><b>despesas:</b>'.$data['despesas'].'</li>
                <li><b>terms:</b>'.$data['terms'].'</li>
                <li><b>_origem:</b>'.$data['_origem'].'</li>
                <li><b>_servico:</b>'.$data['_servico'].'</li>
            </ul>';
        }else{
            $mensagem .= 
            '<ul>
                <li><b>_nome:</b>'.$data['_nome'].'</li>
                <li><b>_email:</b>'.$data['_email'].'</li>
                <li><b>_telefone:</b>'.$data['_telefone'].'</li>
                <li><b>_servico:</b>'.$data['_servico'].'</li>
                <li><b>_origem:</b>'.$data['_origem'].'</li>
            </ul>';
        }


        $this->email->from("easyseg@easyseg.com", "LAEAD");
        $this->email->to("desenvolvimento@grupovolpato.com", $data['_nome']);
        $this->email->subject("FORMULARIO PAGINA :ALARME [{$data['_servico']}]");
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
        <link href="'.$url.'/assets/css/grey.css" rel="stylesheet">';

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
        <script src="'.$url.'/assets/js/quotation-validate.js"></script>';      

        return array(
            'css' => $_css_index,
            'javaScriptHeader' => '',
            'javaScriptFooter' => $javaScript_default
        );
    }
}