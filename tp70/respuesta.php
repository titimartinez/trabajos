<title>php tp70</title>
<?php
echo '<h1>php tp70</h1>';
$nombre=$_REQUEST['num1'];
$horas=$_REQUEST['num2'];
$pesos=$_REQUEST['num3'];

class Persona {
    private $nombre, $horas, $pesos;
    public function inicializar($n, $h, $p)
    {
      $this->nombre=$n;
      $this->horas=$h;
      $this->pesos=$p;
    }
    public function multiplicar(){
      $mult = $this->horas * $this->pesos;
      return $mult;
  }
    public function imprimir()
    {
        echo 'El nombre de la persona es: ';
        echo $this->nombre;
        echo '<br>';
        echo "Cobra un total de: ". $this->multiplicar() ." pesos";
    }
  }
  
$per1=new Persona();
$per1->inicializar($nombre, $horas, $pesos);
$per1->imprimir();
$per1->multiplicar();
?>
