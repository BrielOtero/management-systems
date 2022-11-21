<?php
class BebidasAzucaradas extends Bebidas
{
    private $azucar;
    private $promocion;

    public function __construct($azucar, $promocion, $litros, $precio, $marca)
    {
        parent::__construct($litros, $precio, $marca);

        self::setAzucar($azucar);
        self::setPromocion($promocion);
    }

    public function getAzucar()
    {
        return $this->azucar;
    }

    public function setAzucar($azucar)
    {
        $this->azucar = $azucar;
    }

    public function getPromocion()
    {
        return $this->promocion;
    }

    public function setPromocion($promocion)
    {
        $this->promocion = $promocion;
    }

    public function getPrecio()
    {
        if (self::getPromocion()) {
            return Bebidas::getPrecio() * 0.9;
        } else {
            return parent::getPrecio();
        }
    }

    public function getId(){
        return parent::getId();
    }

    public function visualizar(){
        parent::visualizar();
        print('azucar: '.self::getAzucar().'<br promocion: >'.self::getPromocion().'<br>');
    }
}

?>