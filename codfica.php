<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
  class Conta
{
    private $numero;
    private $banco;
    private $saldo;

    public function depositar(){
        ...
    }
    public function sacar(){
        ...
    } }
?>
<?php
class Adulto
{
    private $peso = 0;

    public function engordar ($quilos){
      $this->peso = $this->peso + $quilos;  
    }

    public function emagrecer ($quilos)
    {
       if ($this->peso - $quilos > 0) {
           $this->peso = $this->peso - $quilos;
    } 
}
}
?>
<?php
class Televisão
{
    private $status;
    private $canal;
    private $volume;

    public function __construct(){
        $this->status = false;
        $this->canal = 3;
        $this->volume = 10;
    }

    public function ligaDesliga (){
        $this->status = !$this->status;
    }

    public function aumentaCanal(){
        if ($this->status){
            if($this->canal > 100) {
                $this->canal = 3;
            } else {
            $this->canal++;
            }
        }
    }

    public function diminuiCanal(){
        if ($this->status){
            if($this->canal <= 3) {
                $this->canal = 100;
            } else {
            $this->canal;
            }
        }
    }

    public function aumentaVolume(){
        if ($this->status){
            if($this->volume < 100) {
                $this->volume = 0;
            } else {
            $this->volume++;
            }
        }
    }

    public function diminuiVolume(){
        if ($this->status){
            if($this->volume > 0) {
                $this->volume = 100;
            } else {
            $this->volume--;
            }
        }
    }

    public function mostraCanal(){
        return $this->canal;
    }

    public function mostraVolume(){
        return $this->volume;
    }
}
?>
<?php
class Aeroporto {
    private$nome;
    private$cidade;
    public function getNome () {
        return $this ->nome;
    }
    public function setNome ($nome) {
        $this->nome = $nome;
    }
    public function getCidade () {
        return $this->cidade;
    }
    public function setCidade ($cidade){
        $this->cidade = $cidade;
    }
}
?>
<?php
class Quadrado {
    private $lado;
    public function setLado ($lado){
        $this->lado = $lado;
    }
    public function calculaArea(){
        $resultado = $this ->lado * $this->lado;
        return $resultado;
    }
}
class Triangulo{
    private $base;
    private $altura;
    public function setBase ($base){
        $this -> base = $base;
    }
    public function setAltura ($altura){
        $this -> altura = $altura;
    }
    public function calculaArea(){
        $resultado = ($this ->base* $this ->altura)/2;
        return $resultado;

    }
}
?>
<?php
if (isset ($_POST["botao"])){
    include_once ("Retangulo.class.php");
    $retangulo = new Retangulo ();
    $retangulo ->setLadoMaior ($_POST["largura"]);
    $retangulo ->setLadoMenor ($_POST["altura"]);
    $area = $retangulo ->calculaArea();
    echo "A aréa é : ".$area;
}
else{
?>
<form action= "retangulo.php">
Informe a largura: <input type = "text" name= "largura"><br>
Informe a Altura: <input type = "text" name="altura"><br>
<input type="submit" name="botao" value="calcula Área">
</form>
<?php
}
?>
<?php
if (isset($_POST["botao"])){
    include_once ("Sequencia.class.php");
    $sequencia = new Sequencia ();
    $sequencia ->setInicio($_POST["inicio"]);
    $sequencia ->setFim($_POST["fim"]);
    if($_POST["mostrar"] == "todos")
      $sequencia->exibirTodosNumeros();
    elseif($_POST["mostrar"] == "pares")
    $sequencia->exibirPares ();
    elseif($_POST["mostrar"] == "impares")
    $sequencia->exibirImpares ();
}
else{
    
}
?>
<form action= "sequencia.php" method="post">
    Selecione o valor inicial:
    <select name="inicio">
    <option value="1" selected>1</option>;
    <?php
      for($i =2; $i <= 100; $i++){
          echo '<option value=" '.$i.' ">'.$i. '</option>';
      }
    ?>  
    </select>
    <select name="fim">
    <?php
      for($i = 1; $i <= 99; $i++){
        echo '<option value=" '.$i.' ">' .$i.'</option>';
}
?>
<option value= "100" selected>100</option>;
</select>
Mostrar: <br>
<input type= "radio" name="mostrar" value="todos" cbecked>
Todos<br>
<input type="radio" name="mostrar" value="pares"> Apenas os pares<br>
<input type="radio" name="mostrar" value= "impares"> Apenas os ímpares<br>
<input type="submit" name="botao" value="enviar">
</form>

<?php
class Sequencia{
    private $inicio;
    private $fim:
    public function setInicio($inicio) {
        $this->inicio = $inicio;
    }
    public function setFim($fim){
        $this->fim = $fim;
    }
    public function exibirTodosNumeros(){
        for($i = $this->inicio; $i <= $this->fim; $i++){
            echo $i. "<br>";
        }
    }
    public function exibirPares(){
        for($i = $this->inicio; $i <= $this->fim; $i++){
            if($i%2 == 0) {
                echo $i. "<br>";
            }
        }
    }
    public function exibirImpares(){
        for($i = $this->inicio; $i <= $this->fim; $i++){
            if($i%2 == 1){
                echo $i. "<br>";
            }
        }
    }
}
?>
    
</body>
</html>