<?php
abstract class Bebidas
{
    private static $idActual=0;
    private $id;
    private $litros;
    private $precio;
    private $marca;

    public function __construct($litros,$precio,$marca)
    {
        self::$idActual++;
        $this->setId(self::$idActual);
        $this->setLitros($litros);
        $this->setPrecio($precio);
        $this->setMarca($marca);
    }

    
    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getLitros()
    {
        return $this->litros;
    }

    public function setLitros($litros)
    {
        $this->litros = $litros;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function visualizar(){
        print('id: '.self::getId().'<br> litros: '.self::getLitros().'<br> precio: '.self::getPrecio().'<br> marca: '.self::getMarca().'<br>');
    }
}
?>