<title>Logado</title>
<?php
include("cabecalho.php");
	echo "<h3> Recuperando dados</h3>";
	echo "Nome: ".$_REQUEST['nome'];
	echo "<br>";
	echo "E-mail: ".$_REQUEST['email'];
include("rodape.php");
	?>