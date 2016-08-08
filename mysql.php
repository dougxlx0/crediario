<?php
class database {
    var $host       = 'localhost';
    var $usuario    = 'douglas_master';
    var $senha      = 'morpheu10@84';
    var $banco      = 'douglas_multicredito';
    var $conexao    = null;
    var $query      = null;
    function conecta() {
        $this->conexao = mysql_connect($this->host, $this->usuario, $this->senha);
        $status = mysql_select_db($this->banco, $this->conexao);
        return $status;
    }
    function consulta($query) {
        $this->query = mysql_query($query);
        return $this->query;
    }
  function inserir($tabela, $campos, $conexao){
    $values = implode("','", $campos);
    $campos = implode(",", array_keys($campos));
    $query = "INSERT INTO $tabela ($campos) values ('$values')";
		$result = mysql_query($query) or die(mysql_error());
		$ultimo_id = mysql_insert_id($conexao);
		return $ultimo_id;
	}
}
?>