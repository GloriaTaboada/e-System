<?php


class ClassClient {
    
    var $nombre; 
    var $numero; 

    function __construct($nombre,$numero){ 
        $this->nombre=$nombre; 
        $this->numero=$numero;
    } 
    
    function dame_numero(){ 
      	return $this->numero; 
    }
    
    function dame_nombre(){ 
      	return $this->nombre; 
    }


}
