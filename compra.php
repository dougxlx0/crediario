<?php

include ("mysql.php");

$cpf = $_POST['cpf'];
$taxa =5;

$con = new database();
	
	$con -> conecta();
	
	$sql = "select cpf, limite from consumidores where cpf = $cpf";
	
	$resultado = $con -> consulta($sql, $con->conexao);
	$qnt = mysql_num_rows($resultado);
	if ($qnt < 1) {
		echo "Nenhum registro encontrado!";
		exit();
	}else{


?>

<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
<meta charset=”UTF-8”>
<link rel=”stylesheet” type=”text/css” href=”estilo.css”>
<title></title>
</head>
<body>
 <?
	
while ($linha  = mysql_fetch_array($resultado)) {
?>







<form action="" method="post">
<fieldset>

<legend>Dados da venda</legend>
CPF:<? echo $linha["cpf"];?>
    Valor da venda: <input type="text" name="valor_unitario" id="valor_unitario" />
    
    Valor da entrada: <input type="text" name="qnt" id="qnt" value="0" />
    
    <p><label>Repassar Custo?<select name="select">
  <option value="value1">Sim</option> 
  <option value="value2" selected>Não</option>
 </select></label></p>
    
</fieldset>


<fieldset>

<legend>Limites</legend>  
  
    2x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    3x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    4x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    5x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    6x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    7x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    8x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    9x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    10x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    11x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    12x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    
</fieldset>    
  </form>

Limite:<? echo $linha["limite"];?></br>
Taxa:<? echo $taxa;?>

<?
}

	
	}
	?>

<script type="text/javascript">
function id(el) {
  return document.getElementById( el );
}
function total( un, qnt ) {
  return parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10);
}
window.onload = function() {
  id('valor_unitario').addEventListener('keyup', function() {
    var result = total( this.value , id('qnt').value );
    id('total').value = String(result.toFixed(2)).formatMoney();
  });

  id('qnt').addEventListener('keyup', function(){
    var result = total( id('valor_unitario').value , this.value );
    id('total').value = String(result.toFixed(2)).formatMoney();
  });
  

  
}

String.prototype.formatMoney = function() {
  var v = this;

  if(v.indexOf('.') === -1) {
    v = v.replace(/([\d]+)/, "$1,00");
  }

  v = v.replace(/([\d]+)\.([\d]{1})$/, "$1,$20");
  v = v.replace(/([\d]+)\.([\d]{2})$/, "$1,$2");
  v = v.replace(/([\d]+)([\d]{3}),([\d]{2})$/, "$1.$2,$3");

  return v;
};
</script>

</body>
</html>