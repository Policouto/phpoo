<?php
require ("Pessoa.php");
require ("Retangulo.php");
class Fruta{
    // atributos
    public $nome;
    public $cor;

    //Métodos
    function __construct($nome, $cor)
    {
        $this-> nome = $nome;
        $this-> cor = $cor;

    }
    function set_name($nome){
        $this-> nome = $nome;

    }
    function get_name(){
        return $this->nome;
    }
    function set_cor($cor){
        $this-> cor = $cor;

    }
    function get_cor(){
        return $this->cor;
    }
 }
 //criando um objeto
 $maca = new Fruta("Maçã_ifsp_turmaB", "vermelha");
 $banana = new Fruta("banana_ifsp_turmaB", "amarelo");


$maca->set_name("Maçã_ifsp_turmaB", "vermelha");
$banana->set_name("banana_ifsp_turmaB");


    echo $maca->get_name(); 
    echo "<br>" .$banana->get_name(); 

    echo "<br>" .$maca->get_cor(); 
    echo "<br>" .$banana->get_cor();
    
    $aluno1 = new Pessoa("Poliana", 17, "Garota de programa");
    $aluno2 = new Pessoa("Berreca", 17, "Sou a universal");


    echo "<br>" .$aluno1->apresentar();
    echo "<br>" .$aluno2->apresentar();

    $retangulo = new Retangulo(2,4);
    echo "<br>Àrea do retangulo = ".$retangulo->calcular_area();
    echo"<br>Perimetro do retangulo = ". $retangulo->calcular_perimetro();
?>