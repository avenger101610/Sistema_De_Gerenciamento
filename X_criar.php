<?php 
  include_once 'Z_0data.php';
  // mensagem do seu eu de 05/03/2024, aparentemente quando você põe if(!empty($data)) rlr até cria, porém sempre que dá F5 ele cria aquele mesmo dado novamente, descubra uma maneira de resolver isso, aliás o nome do que você tá fazendo é CRUD (Create, Read, Update, Delete), qualquer coisa você pode dar uma olhada em algo relacionado a isso, mas o que eu tentei fazer foi relacionar o 0data com o index e depois o criar com o 0data, infelizmente não funcionou.
  // Código para por dados no banco de dados
$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(!empty($data)){
  $query = "INSERT INTO info_tarefa (titletxt, desctxt, stattxt, Send) VALUES (:titletxt, :desctxt, :stattxt, NOW())";
  $cad = $conn->prepare($query);
  $cad->bindParam(':titletxt', $data['titletxt'], PDO::PARAM_STR);
  $cad->bindParam(':desctxt', $data['desctxt'], PDO::PARAM_STR);
  $cad->bindParam(':stattxt', $data['stattxt'], PDO::PARAM_BOOL);
            
  $cad->execute();

  if($cad->rowCount()){
    //echo "Criação de Tarefa concluída com exito!<br>";
  }else{
    echo "ERRO: Falha ao criar nova Tarefa, tente novamente<br>";
  }
}
    
                
                        
                    
?>