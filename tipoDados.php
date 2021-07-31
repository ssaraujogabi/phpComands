<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
     /* Escalares */

     //string
     $nome = "gabi <br>";
     var_dump($nome);

     if (is_string($nome)):
     	echo "É string";
     else:
     	echo "nao é string";
     endif;

     echo "<hr>";

     // int 
     $numero = 1;
     var_dump($numero);
     
     echo "<hr>";

      // float
     $decimal = 1.2;
     var_dump($decimal);

      echo "<hr>";
     
      // boolean
     $boole = true;
     var_dump($boole);


      echo "<hr>";

     // array
     $lista = array("carro", 1, 1.2,true);
     var_dump($lista);

      echo "<hr>";

      
      class Cliente
      {
        public $nomeCli;

        public function atribuirNome($nomeCli){
        $this->$nomeCli = $nomeCli;
        }
      }

     $Cliente = new Cliente();
     var_dump($Cliente);









	  ?>

</body>
</html>