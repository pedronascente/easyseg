<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'home/index';

$route['home'] = 'home/index';
$route['save'] = 'home/save';
$route['obrigado'] = 'home/obrigado';
$route['error'] = 'home/error';

$route['alarme'] = 'alarme/index';
$route['alarme/casa'] = 'alarme/casa';
$route['alarme/negocio'] = 'alarme/negocio';
$route['alarme/calculadora'] ='alarme/calculadora';
$route['alarme/save-casa'] ='alarme/saveCasa';
$route['alarme/save-negocio'] ='alarme/saveNegocio';
$route['alarme/save-calculadora'] ='alarme/saveCalculadora';
$route['alarme/obrigado'] ='alarme/obrigado';



$route['causa'] = 'causa/index';
$route['causa/save'] = 'causa/save';
$route['causa/obrigado'] = 'causa/obrigado';

$route['contato'] = 'contato/index';
$route['contato/save'] = 'contato/save';
$route['contato/sucesso'] = 'contato/obrigado';

$route['talentos'] = 'talentos/index';
$route['talentos/save'] = 'talentos/save';
$route['talentos/obrigado'] = 'talentos/obrigado';

$route['portaria'] = 'portaria/index';
$route['portaria/virtual'] = 'portaria/virtual';
$route['portaria/fisica'] = 'portaria/fisica';
$route['portaria/save-virtual'] = 'portaria/saveVirtual';
$route['portaria/save-fisica'] = 'portaria/saveFisica';
$route['portaria/sucesso-virtual'] = 'portaria/obrigadoVirtual';
$route['portaria/sucesso-fisica'] = 'portaria/obrigadoFisica';

$route['rastreamento'] = 'rastreamento/index';
$route['rastreamento/carro'] = 'rastreamento/carro';
$route['rastreamento/moto'] = 'rastreamento/moto';
$route['rastreamento/caminhao'] = 'rastreamento/caminhao';
$route['rastreamento/save'] = 'rastreamento/save';
$route['rastreamento/save-carro'] = 'rastreamento/saveCarro';
$route['rastreamento/save-moto'] = 'rastreamento/saveMoto';
$route['rastreamento/save-caminhao'] = 'rastreamento/saveCaminhao';
$route['rastreamento/obrigado'] = 'rastreamento/obrigado';

$route['indique'] = 'indique/index';
$route['indique/save'] = 'indique/save';