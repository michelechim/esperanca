<meta charset="utf-8"/>
<?php 
	include "conecta.php";
	if(isset($_POST['Enviar']));
	{
		$nome= $_POST['nome'];
		$dt_nasc=$_POST['dt_nasc'];
		$endereco = $_POST['endereco'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$id_categoria= (int) $_POST['id_categoria']; 

		$sql ="INSERT INTO pessoa(nome,dt_nasc,endereco,email,senha)
				VALUES('$nome','$dt_nasc','$endereco','$email','$senha')";
 		$resultado= pg_query($conexao, $sql);

		$id_pessoa = "SELECT id_pessoa 
						FROM pessoa 
						WHERE nome='$nome'";
		$resultado= pg_query($conexao, $id_pessoa);
		$registro=pg_fetch_array($resultado);

		$id_pessoa =$registro['id_pessoa'];
		$sql ="INSERT INTO pessoa_categoria(id_pessoa,id_categoria)
				VALUES ('$id_pessoa','$id_categoria')";
		$resultado =pg_query($conexao, $sql);
		if($resultado)
		{
			echo " Cadastro realizado com sucesso!";
			header('Location:formulario.php');
		}else 
		{
			echo " Erro ao inserir as informaçoes no banco de dados!";
		}
	}
?>