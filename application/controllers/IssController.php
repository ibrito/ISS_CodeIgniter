<?php
/*
** 
** author          :Irving Brito @ibritosistemas
** date            :24-12-2017
** description     : Controlador IssController
**/
defined('BASEPATH') OR exit('No direct script access allowed');

class IssController extends CI_Controller {


	function __construct(){
		parent::__construct();

	}

    /**
     * Index
     * 
     */

	public function index()
	{
            $datos['titulo']= 'ISS-DATA';
            $datos['app']= APP_NAME;
            $data['ubicacion']= $this->issLocation();
            $data['tiempo_paso']= $this->issPassTimes();
            $data['personas']= $this->issPeopleSpace();
            $this->load->view('iss/headers',$datos);
            $this->load->view('iss/index',$data);

	}

    /**
     * issLocation returns $data array with JSON content
     * @return  $data 
     */

	public function issLocation() {
                $fichero= 'http://api.open-notify.org/iss-now.json';
                ($fichero);
                $url=$fichero;   
                $url_content = '';  
                $file = @fopen($url, 'r');  
                if($file){  
                        while(!feof($file)) {  
                        $url_content .= @fgets($file, 4096);  
                        }  
                        fclose ($file);         
                }
                $ubicacion=json_decode($url_content);
                foreach ($ubicacion as $key => $value) {
                	 $data['data'][$key]=$value;
                }
                return $data;
	}

     /**
     * issPassTimes returns $data array with JSON content
     * @return  $data 
     */
    public function issPassTimes($LAT=10.4805937,$LON=-66.90360629999998) {
            $fichero= 'http://api.open-notify.org/iss-pass.json?lat='.$LAT.'&lon='.$LON;
            ($fichero);
            $url=$fichero;   
            $url_content = '';  
            $file = @fopen($url, 'r');  
            if($file){  
                    while(!feof($file)) {  
                    $url_content .= @fgets($file, 4096);  
                    }  
                    fclose ($file);         
            }
            $ubicacion=json_decode($url_content);
            foreach ($ubicacion as $key => $value) {
                     $data['data'][$key]=$value;
            }
            
            return $data;
    }

    /**
     * issPeopleSpace returns $data array with JSON content
     * @return  $data 
     */
    public function issPeopleSpace() {
            $fichero= 'http://api.open-notify.org/astros.json';
            ($fichero);
            $url=$fichero;   
            $url_content = '';  
            $file = @fopen($url, 'r');  
            if($file){  
                    while(!feof($file)) {  
                    $url_content .= @fgets($file, 4096);  
                    }  
                    fclose ($file);         
            }
            $ubicacion=json_decode($url_content);
            foreach ($ubicacion as $key => $value) {
                     $data['data'][$key]=$value;
            }
            
            return $data;
    }
}

