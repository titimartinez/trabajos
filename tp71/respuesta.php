<title>php tp71</title>
<?php
echo '<h1>php tp71</h1>';
$largo=$_REQUEST['num1'];
$ancho=$_REQUEST['num2'];

class Persona {
    private $largo, $ancho;

    function inicializador($l,$a) {
      $this->largo = $l;
      $this->ancho = $a;
    }
    function perimetro(){
      return $this->largo * 2 + $this->ancho * 2;
    }
  
    function area(){
      return $this->largo * $this->ancho;
    }
    public function mostrarDatos(){
        echo "Largo: $this->largo <br>";
        echo "Ancho: $this->ancho <br>";
        echo "Perimetro: ". $this->perimetro() ."<br>";
        echo "Largo: ". $this->area() ."<br>";
    }
  }
  
$per1=new Persona();
$per1->inicializador($largo, $ancho);
$per1->mostrarDatos();
?>