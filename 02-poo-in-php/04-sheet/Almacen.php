<?php
include_once "Bebidas.php";
include_once "BebidasAzucaradas.php";
include_once "AguaMIneral.php";
class Almacen
{

    private $estanteria = array();

    public function __construct()
    {
        for ($i = 0; $i < 10; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $this->estanteria[$i][$j] = null;
            }
        }
    }
    public function calcularPrecioTodasBebidas()
    {
        $precio = 0;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if ($this->estanteria[$i][$j] != null) {
                    $precio += $this->estanteria[$i][$j]->getPrecio();
                }
            }
        }
        print "Precio Total de las bebidas: " . $precio . "<br>";
    }

    public function calcularPrecioTotalMarcaBebida($marca)
    {
        $precio = 0;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if ($this->estanteria[$i][$j] != null) {
                    if ($this->estanteria[$i][$j]->getMarca() == $marca)
                        $precio += $this->estanteria[$i][$j]->getPrecio();
                }
            }
        }
        print "Precio Total de la marca" . $marca . ": " . $precio . "<br>";
    }

    public function calcularPrecioTotalEstanteria($columna)
    {
        $precio = 0;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            if ($this->estanteria[$i][$columna] != null) {
                $precio += $this->estanteria[$i][$columna]->getPrecio();
            }
        }
        print "Precio Total Estanteria: " . $precio . "<br>";
    }

    public function agregarProducto($objeto)
    {
        $exit = false;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if ($this->estanteria[$i][$j] == null) {
                    $this->estanteria[$i][$j] = $objeto;
                    $exit = true;
                }
                if ($exit) {
                    break;
                }
            }
            if ($exit) {
                break;
            }
        }
    }
    public function eliminarProducto($id)
    {
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if ($this->estanteria[$i][$j] != null) {
                    if ($this->estanteria[$i][$j]->getIdentificador() == $id) {
                        $this->estanteria[$i][$j] = null;
                    }
                }
            }
        }
        print "Product Deleted<br>";
    }

    public function mostrarInformacion()
    {
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if ($this->estanteria[$i][$j] != null) {
                    print "Identificador: " . $this->estanteria[$i][$j]->getIdentificador() . "<br>";
                    print "Cantidad LIbros: " . $this->estanteria[$i][$j]->getCantidadLitros() . "<br>";
                    print "Precio: " . $this->estanteria[$i][$j]->getPrecio() . "<br>";
                    print "Marca: " . $this->estanteria[$i][$j]->getMarca() . "<br>";
                }
            }
        }
    }

}

?>