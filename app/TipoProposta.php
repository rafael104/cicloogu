<?php


namespace App;


class  TipoProposta
{
    public $nomeTipo;
    public $descricaoTipo;

    public function __construct( $_nomeTipo, $_descricaoTipo)
    {
        $this->nomeTipo = $_nomeTipo;
        $this->descricaoTipo = $_descricaoTipo;
    }

}
