<?php
/*
** 
** author          :Irving Brito @ibritosistemas
** date            :24-12-2017
** description     : Controlador SiteController
**/
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteController extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$datos['titulo']        = 'ISS-DATA';
        $datos['author']        = APP_AUTHOR;
        $datos['lang']          = APP_LANG;
        $datos['description']   = APP_DESCRIPTION;
        $datos['app']           = APP_NAME;

		$this->load->view('site/headers',$datos);
		$this->load->view('site/index',$datos);
	}

	
}
