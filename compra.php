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

<!DOCTYPE html>
<html lang="pt-br">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Template Bootstrap</title>
  
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
 <?
	
while ($linha  = mysql_fetch_array($resultado)) {
?>







<form action="" method="post">
<fieldset>

<legend>Dados da venda</legend>
CPF:<? echo $linha["cpf"];?>
    Valor da venda: <input type="text" name="valor_unitario" id="valor_unitario" value="0" />
    
    Valor da entrada: <input type="text" name="qnt" id="qnt" value="0" />
    
    <p><label>Repassar Custo?<select name="select">
  <option value="value1">Sim</option> 
  <option value="value2" selected>N«ªo</option>
 </select></label></p>
    
</fieldset>


<fieldset>

<legend>Limites</legend>  
  
    2x<input type="checkbox"> <input type="text" name="total" id="total" readonly="readonly" /></br>
    3x<input type="checkbox"> <input type="text" name="total2" id="total2" readonly="readonly" /></br>
    4x<input type="checkbox"> <input type="text" name="total3" id="total3" readonly="readonly" /></br>
    5x<input type="checkbox"> <input type="text" name="total4" id="total4" readonly="readonly" /></br>
    6x<input type="checkbox"> <input type="text" name="total5" id="total5" readonly="readonly" /></br>
    7x<input type="checkbox"> <input type="text" name="total6" id="total6" readonly="readonly" /></br>
    8x<input type="checkbox"> <input type="text" name="total7" id="total7" readonly="readonly" /></br>
    9x<input type="checkbox"> <input type="text" name="total8" id="total8" readonly="readonly" /></br>
    10x<input type="checkbox"> <input type="text" name="total9" id="total9" readonly="readonly" /></br>
    11x<input type="checkbox"> <input type="text" name="total10" id="total10" readonly="readonly" /></br>
    12x<input type="checkbox"> <input type="text" name="total11" id="total11" readonly="readonly" /></br>
    
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
  
  return 1 * 1000 * Math.pow((1 + 5), 10) / (1 - Math.pow((1 + 5), 10));
}

function total2( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/3;
}

function total3( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/4;
}

function total4( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/5;
}

function total5( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/6;
}

function total6( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/7;
}

function total7( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/8;
}

function total8( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/9;
}

function total9( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/10;
}

function total10( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/11;
}

function total11( un, qnt ) {
  return (parseFloat(un.replace(',', '.'), 10) - parseFloat(qnt.replace(',', '.'), 10))/12;
}



window.onload = function() {
  id('valor_unitario').addEventListener('keyup', function() {
    var result = total( this.value , id('qnt').value );
    id('total').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total2( this.value , id('qnt').value );
    id('total2').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total3( this.value , id('qnt').value );
    id('total3').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total4( this.value , id('qnt').value );
    id('total4').value = String(result.toFixed(2)).formatMoney();
  });
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total5( this.value , id('qnt').value );
    id('total5').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total6( this.value , id('qnt').value );
    id('total6').value = String(result.toFixed(2)).formatMoney();
  });
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total7( this.value , id('qnt').value );
    id('total7').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total8( this.value , id('qnt').value );
    id('total8').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total9( this.value , id('qnt').value );
    id('total9').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total10( this.value , id('qnt').value );
    id('total10').value = String(result.toFixed(2)).formatMoney();
  });
    id('valor_unitario').addEventListener('keyup', function() {
    var result = total11( this.value , id('qnt').value );
    id('total11').value = String(result.toFixed(2)).formatMoney();
  });
  
    

  
  
  
  
  
  

  id('qnt').addEventListener('keyup', function(){
    var result = total( id('valor_unitario').value , this.value );
    id('total').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('qnt').addEventListener('keyup', function(){
    var result = total2( id('valor_unitario').value , this.value );
    id('total2').value = String(result.toFixed(2)).formatMoney();
  });
    id('qnt').addEventListener('keyup', function(){
    var result = total3( id('valor_unitario').value , this.value );
    id('total3').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('qnt').addEventListener('keyup', function(){
    var result = total4( id('valor_unitario').value , this.value );
    id('total4').value = String(result.toFixed(2)).formatMoney();
  });
  id('qnt').addEventListener('keyup', function(){
    var result = total5( id('valor_unitario').value , this.value );
    id('total5').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('qnt').addEventListener('keyup', function(){
    var result = total6( id('valor_unitario').value , this.value );
    id('total6').value = String(result.toFixed(2)).formatMoney();
  });
      id('qnt').addEventListener('keyup', function(){
    var result = total7( id('valor_unitario').value , this.value );
    id('total7').value = String(result.toFixed(2)).formatMoney();
  });
    id('qnt').addEventListener('keyup', function(){
    var result = total8( id('valor_unitario').value , this.value );
    id('total8').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('qnt').addEventListener('keyup', function(){
    var result = total9( id('valor_unitario').value , this.value );
    id('total9').value = String(result.toFixed(2)).formatMoney();
  });
  id('qnt').addEventListener('keyup', function(){
    var result = total10( id('valor_unitario').value , this.value );
    id('total10').value = String(result.toFixed(2)).formatMoney();
  });
  
    id('qnt').addEventListener('keyup', function(){
    var result = total11( id('valor_unitario').value , this.value );
    id('total11').value = String(result.toFixed(2)).formatMoney();
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

<!-- jQuery (necessario para os plugins Javascript do Bootstrap) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
