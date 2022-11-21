<?php
include_once "Bebidas.php";
include_once "BebidasAzucaradas.php";
include_once "AguaMIneral.php";
class Almacen
{

    private $estanteria = array();

    public function __construct($filas, $columnas)
    {
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $this->estanteria[$i][$j] = 0;
            }
        }
    }
    public function agregarProducto($objeto)
    {
        $exit = false;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if (!is_object($this->estanteria[$i][$j])) {
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
    public function calcularPrecio()
    {
        $precio = 0;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if (is_object($this->estanteria[$i][$j])) {
                    print 'hey';
                    $precio += $this->estanteria[$i][$j]->getPrecio();
                }
            }
        }
        print "Precio Total de las bebidas: " . $precio . "<br>";
    }

    public function calcularPrecioMarca($marca)
    {
        $precio = 0;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if (is_object($this->estanteria[$i][$j])) {
                    if ($this->estanteria[$i][$j]->getMarca() == $marca)
                        $precio += $this->estanteria[$i][$j]->getPrecio();
                }
            }
        }
        print "Precio Total de la marca" . $marca . ": " . $precio . "<br>";
    }

    public function calcularPrecioEstanteria($columna)
    {
        $precio = 0;
        for ($i = 0; $i < count($this->estanteria); $i++) {
            if (is_object($this->estanteria[$i][$columna])) {
                $precio += $this->estanteria[$i][$columna]->getPrecio();
            }
        }
        print "Precio Total Estanteria: " . $precio . "<br>";
    }


    public function eliminarProducto($id)
    {
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if (is_object($this->estanteria[$i][$j])) {
                    if ($this->estanteria[$i][$j]->getId() == $id) {
                        $this->estanteria[$i][$j] = 0;
                    }
                }
            }
        }
        print "Producto Borrado<br>";
    }

    public function mostrarInformacion()
    {
        for ($i = 0; $i < count($this->estanteria); $i++) {
            for ($j = 0; $j < count($this->estanteria[$i]); $j++) {
                if (is_object($this->estanteria[$i][$j])) {
                   $this->estanteria[$i][$j]->visualizar();
                }
            }
        }
    }

}

?>