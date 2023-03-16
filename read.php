<?php
    function read(){
        //Variável arquivo armazena o nome e extensão do arquivo.
      	$arquivo = "./senhas.txt";
      	
      	//Variável $fp armazena a conexão com o arquivo e o tipo de ação.
      	$fp = fopen($arquivo, "r");
      
      	//Lê o conteúdo do arquivo aberto.
      	$conteudo = fread($fp, filesize($arquivo));
      	
      	//Fecha o arquivo.
      	fclose($fp);

        $resposta = json_decode($conteudo);
      
      	//retorna o conteúdo.
      	return $resposta;
 
    }

?>