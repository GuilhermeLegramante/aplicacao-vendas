<?php

class Documento{

    private $numero;
    private $total;
    private $confirmado;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        $this->total = $total;
    }

    public function getConfirmado()
    {
        return $this->confirmado;
    }

    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;
    }
}