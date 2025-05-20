<?php

//       A N O T A Ç Õ E S    
//  
//     *FEITO*
//  Ambiente -> sitio 
//
//       *FEITO*
//  Atributos -> animais de diferentes especies
//
//  Metodos ->  1.Todos os animais tinham patas em diferentes números
//
//              2.Todos os animais possuíam algum tipo de pele, seja com pelos ou penas;
//
//              3.Todos os animais podiam emitir sons;
//
//              4.Todos os animais podiam se movimentar, embora alguns fizessem isso pelo chão e outros voando.
//
//               (ao menos 5 animais devem ser criados).


class sitio
{ //ambiente


    //atributos

    public $especie;      // Variedade de animais
    public $patas;       // Patas em diferentes números
    public $pele;        // Pele com pelos ou penas
    public $sons;        // Sons emitidos
    public $movimento;   // Movimentação pelo chão ou voando

    //metodos

   
    public function __construct($especie, $patas, $pele, $sons, $movimento)
    {

        $this->especie   =  $especie;
        $this->patas     =  $patas;
        $this->pele      =  $pele;
        $this->sons      =  $sons;
        $this->movimento =  $movimento;
    }

    public function Caracteristicas()
    {


        return "
      |===========================================================================
      | Sobre $this->especie !!                                                         
      |===========================================================================
      | A quantidade que $this->especie tem de patas é: $this->patas patas.
      | A cor do $this->especie é: $this->pele.
      | A $this->especie faz: $this->sons.
      | O movimento do $this->especie é: $this->movimento.
      |===========================================================================";
       
    }
}

//Imprimir


    $galinha  = new sitio("Galinha",  2, "branca",         "Có có có",    "Caminhar");
    $cachorro  = new sitio("Cachorro", 4, "Marrom",         "AU AU",       "Caminhar, alguns podem Nadar");
    $porco  = new sitio("Porco",    4, "Rosa",           "Oinc Oinc",   "Caminhar");
    $vaca  = new sitio("Vaca",     4, "Branco e Preto", "Muuuu",       "Caminhar");
    $peru  = new sitio("Peru",     2, "Marrom/Preto",   "Glugluglu",   "Caminhar e Voar");
    $pato  = new sitio("Pato",     2, "Branco",         "Quack Quack", "Caminhar, Voar e Nadar");

    print $galinha->Caracteristicas() . "\n";
    print $cachorro->Caracteristicas() . "\n";
    print $porco->Caracteristicas() . "\n";
    print $vaca->Caracteristicas() . "\n";
    print $peru->Caracteristicas() . "\n";
    print $pato->Caracteristicas() . "\n\n";


