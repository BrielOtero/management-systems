<?php
abstract class Bebidas
{
    private $identificador;
    private $cantidadLitros;
    private $precio;
    private $marca;

    public function __construct($identificador, $cantidadLitros,$precio,$marca)
    {
        $this->setIdentificador($identificador);
        $this->setCantidadLitros($cantidadLitros);
        $this->setPrecio($precio);
        $this->setMarca($marca);
    }

    

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of precio
     */ 
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */ 
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of cantidadLitros
     */ 
    public function getCantidadLitros()
    {
        return $this->cantidadLitros;
    }

    /**
     * Set the value of cantidadLitros
     *
     * @return  self
     */ 
    public function setCantidadLitros($cantidadLitros)
    {
        $this->cantidadLitros = $cantidadLitros;

        return $this;
    }

    /**
     * Get the value of identificador
     */ 
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set the value of identificador
     *
     * @return  self
     */ 
    public function setIdentificador($identificador)
    {
        $this->identificador = $identificador;

        return $this;
    }
}
?>