<?php

    function camada(){
        $dados = array("A", "B", "C");

        $this->camada2($dados);
        
    }

    function camada2($dados){
        $reverso = array_reverse($dados);
        var_dump($reverso);
        return $reverso;
        
    }

    function camada3($reverso){
        $reverse = $reverso;
        return $reverso;
    }



