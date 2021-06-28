<?php

// Questões de PHP - MySql
// Funções e arrays
// 1 - Dado o array de funcionarios abaixo, escreva:
// a) Uma função que retorne o nome do funcionário mais jovem;
// b) Uma função que gere um novo array agrupando os funcionarios por organizacao (organização como index);
// c) Uma função que retorne a média de salários;
// d) Uma função que ordene os funcionarios pelo nome;
echo "<pre>";
$funcionarios = [
    [
        'nome' => 'Alessandra',
        'idade' => 18,
        'organizacao' => '1',
        'salario' => '5000'
    ],
    [
        'nome' => 'Leandro',
        'idade' => 25,
        'organizacao' => '3',
        'salario' => '1900',
    ],
    [
        'nome' => 'Bruno',
        'idade' => 23,
        'organizacao' => '1',
        'salario' => '1800',
    ],
    [
        'nome' => 'Gustavo',
        'idade' => 20,
        'organizacao' => '2',
        'salario' => '2000',
    ]
];


// a) Uma função que retorne o nome do funcionário mais jovem;
$idade = 0;

foreach ($funcionarios as $f) {
    if($idade == 0 || $idade > $f["idade"]){
        $idade = $f["idade"];
        $nome = $f["nome"];
	} 
}
echo "1 - Dado o array de funcionarios abaixo, escreva:";
echo "<br>";
echo "a) Uma função que retorne o nome do funcionário mais jovem:  ";
echo "O funcionário mais jovem é ".$nome;
echo "<br>";
echo "<br>";
// c) Uma função que retorne a média de salários;

echo "c) Uma função que retorne a média de salários:  ";
$salario = 0;
foreach ($funcionarios as $f) {
	$salario +=$f["salario"];
	$media = $salario/sizeof($funcionarios);
	
}
echo "A média dos salários é R$ ".$media;
echo "<br>";
echo "<br>";

// d) Uma função que ordene os funcionarios pelo nome;

echo "d) Uma função que ordene os funcionarios pelo nome:  ";
asort($funcionarios);
foreach ($funcionarios as $f) {
	echo $f["nome"];
	echo "/";
}
echo "<br>";
echo "<br>";
/*
// Funções recursivas
// 2 - Crie uma função para imprimir em tela o menor número inteiro divisível 
// por 4, 5 e 6 ao mesmo tempo, utilizando as seguintes técnicas: 
// - Recurção

*/

echo "2 - Crie uma função para imprimir em tela o menor número inteiro divisível por 4, 5 e 6 ao mesmo tempo, utilizando as seguintes técnicas:";
echo "<br>";
echo "a) Recurção:  ";
recurcao(0);
function recurcao($numero){
	if($numero % 4 == 0 &&  $numero % 5 == 0 && $numero % 6 == 0 && $numero !== 0){
		echo $numero;
	} else{
		$numero++;
		recurcao($numero);
	}
}
echo "<br>";


/*
// - Com laços de repetição. 

*/
echo "b) Laços de repetição:  ";
$finalizaFor = 0;
for($i=1; $finalizaFor < 1; $i++){
	if($i % 4 == 0 &&  $i % 5 == 0 && $i % 6 == 0){
		$finalizaFor = 1;
		echo $i;
	} 
	
}

echo "<br>";
echo "<br>";

echo("Qual técnica gastária mais desempenho da máquina?   ");
echo("R: Laços de Repetição");

/*
// Orientação a objeto e Padrão de projeto
// 3 - Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que 
// concatene e retornando os 3 em uma string.

*/
echo "<br>";
echo "<br>";
echo "3 - Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que concatene e retornando os 3 em uma string:  ";

class Teste {
  private $nome;
  private $cpf;
  private $nivelConhecimento;
  
  public function getNome() {
    return $this->nome;
  }
  
  public function setNome($name) {
    $this->nome= $name;
  }
  
  
  public function getCpf() {
    return $this->cpf;
  }
  
  public function setCpf($cpf) {
    $this->cpf = $cpf;
  }
  
  
  public function getNivelConhecimento() {
    return $this->nivelConhecimento;
  }
  
  public function setNivelConhecimento($nivel) {
    $this->nivelConhecimento = $nivel;
  }

  public function concatenar(){
  	echo "O {$this->getNome()} possui o CPF {$this->getCpf()} e o nível de conhecimento dele é {$this->getNivelConhecimento()}";
  }

}


$bruno = new Teste();
$bruno->setNome("Bruno");
$bruno->setCpf("14070892660");
$bruno->setNivelConhecimento("Intermediário");
$bruno->concatenar();

echo "<br>";
echo "<br>";

echo "4 - Descreva e utilize um padrão de projeto de sua escolha para encapsular a criação da sua classe: ";
echo "<br>";
	echo "R: Foi utilizado private pois estou pertimindo o acesso apenas dentro da própria classe que foi declarado. Trazendo mais segurança para o código e evitando alguns erros, principalmente por parte do usuario final;";
    echo "<br>";
    echo "<br>";
/*
// Testes - PHP UNIT
// 5 - Escolha duas questões acima já resolvidas e escreva os cenários de teste para elas

Exercicio 2 - 

$this->assertEquals(60,$numero);

Exercicio 1- letra a -

$this->assertEquals(Alessandra,$nome);

// Melhoria de código
// Dado o bloco de código:
function armazenarConhecimentos($conhecimentos) {
    $pessoa = new StdClass;
    $nome = "Meu nome"; $pessoa->organizacao = "Nova Organização";
    $pessoa->nome = $nome;
    $pessoa->conhecimentos = ["None", "None", "None", "None"];
    $c = [];
    $pessoa->telefone = "Telefones";
    foreach($conhecimentos as $k => $conhecimento) {
        $c[$k] = $conhecimento;
    }
    foreach($c as $j => $d) {
        $pessoa->conhecimentos[$j] = $d;
    }
    $pessoa->emails="Emails";
    return $pessoa->conhecimentos;
}

$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs",
];

print_r(armazenarConhecimentos($conhecimentos));

*/
echo "Exercicio 5 está contido apenas dentro do código";
echo "<br>";
echo "<br>";

echo "Melhoria de código: ";
echo "<br>";
function armazenarConhecimentos($conhecimentos) {
    $pessoa = new StdClass; 
    $pessoa->organizacao = "Nova Organização";
    $pessoa->nome = "Meu nome";
    $pessoa->conhecimentos = $conhecimentos;
    $pessoa->telefone = "Telefones";
    $pessoa->emails="Emails";
    return $pessoa->conhecimentos;
}

$conhecimentos = [
    "Js",
    "Php",
    "C#",
    "NodeJs"
];

print_r(armazenarConhecimentos($conhecimentos));

/*

// Questões de SQL - MySql
// Considere o seguinte modelo
CREATE DATABASE tsa_teste_backend_bd;
USE tsa_teste_backend_bd;

CREATE TABLE organizacao(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    nome VARCHAR(200) NOT NULL,
    data_fundacao DATE NOT NULL,
    PRIMARY KEY(id)
);

INSERT INTO organizacao(nome, data_fundacao) VALUES ('empresa_1', '2020-07-01');
INSERT INTO organizacao(nome, data_fundacao) VALUES ('empresa_2', '1980-05-12');

CREATE TABLE colaborador(
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    organizacao_id INT UNSIGNED NOT NULL,
    data_nascimento DATE NOT NULL,
    salario DOUBLE(9,2),
    PRIMARY KEY(id),
    FOREIGN KEY (organizacao_id) REFERENCES organizacao (id)
);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Alessandra', '1998-02-06', 5000, 1);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Leandro', '1990-04-09', 1900, 2);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Bruno', '1987-12-08', 1800, 1);

INSERT INTO colaborador(nome, data_nascimento, salario, organizacao_id) 
VALUES('Gustavo', '1995-10-17', 2000, 2);

// 1 - Escreva uma query que retorne:
// a) O nome da organização que foi fundada por ultimo

select nome from organizacao order by data_fundacao asc limit 1;

// b) O nome do colaborador com salário maior

select nome from colaborador order by salario desc limit 1;

// c) O nome e data de nascimento dos colaboradores ordenada por salário, do maior para o menor.

select nome,data_nascimento from colaborador order by salario desc;

// d) A idade dos colaboradoes

select timestampdiff(YEAR, data_nascimento, curdate()) from colaborador;

// e) O nome dos colaboradores e da empresa que ele faz parte

select colaborador.nome, organizacao.nome from colaborador left join organizacao on colaborador.organizacao_id  = organizacao.id;

// 2 - Escreva uma query que encontre a organização que paga o maior salário

select organizacao.nome  from colaborador  left join organizacao on colaborador.organizacao_id  = organizacao.id order by salario desc limit 1;

// 3 - Escreva uma query que encontre a média de salários pagos por cada empresa

select organizacao_id,organizacao.nome, avg(salario)  from colaborador  left join organizacao on colaborador.organizacao_id  = organizacao.id group by organizacao_id;

// 4 - Escreva uma query que encontre a organização que tem o funcionário mais novo

select organizacao.nome  from colaborador  left join organizacao on colaborador.organizacao_id  = organizacao.id order by data_nascimento desc limit 1;

*/