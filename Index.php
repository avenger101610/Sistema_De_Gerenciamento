<?php 
    include_once 'Y_conection.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System</title>
    <link rel="shortcut icon" href="Images\PNG lista tarefas.png" type="image/x-icon">
</head>
<body>
     <header> <!-- cabeçalho do projeto -->
        <div class="row rowtitle">
            <div class="flex">
                <h1><b>Sistema de Gerenciamento de Tarefas</b></h1>
                <img class="sino" src="Images\Sino.png" alt="sino">
            </div>
            <p>Otimizador de Trabalho</p>
        </div>
    </header>
     <div> <!-- tela de tarefas atuais -->
        <div class="tasks" id="">
            <h3>Tarefas atuais: </h3> <!-- título da tela de tarefas-->
            <div class="card">
                <div class="flex spaceBetween">
                    <h1 id="bloco">Tarefa 1</h1> <!-- lista das tarefas -->
                    <img class="edit" src="Images\PNG icone de editar.png" alt="Editar">
                </div>
                <h2 id="bloco">Descrição: </h2>
                <p id="bloco"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt laudantium nostrum quam rerum esse tempore temporibus provident assumenda quos nisi ipsum nesciunt dolorem possimus, iusto autem earum dolorum. Vitae.</p>
                <p id="bloco"><strong>Em progresso</strong></p>
            </div>
            <div class="card">
                <div class="flex spaceBetween">
                    <h1 id="bloco">Tarefa 2</h1>      
                    <img class="edit" src="Images\PNG icone de editar.png" alt="Editar">
                </div>
                <h2 id="bloco">Descrição: </h2>
                <p id="bloco"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt laudantium nostrum quam rerum esse tempore temporibus provident assumenda quos nisi ipsum nesciunt dolorem possimus, iusto autem earum dolorum. Vitae.</p>
                <p id="bloco"><strong>Em progresso</strong></p>
            </div>
            <div class="card">
                <div class="flex spaceBetween">
                    <h1 id="bloco">Tarefa 3</h1>      
                    <img class="edit" src="Images\PNG icone de editar.png" alt="Editar">
                </div>
                <h2 id="bloco">Descrição: </h2>
                <p id="bloco"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt laudantium nostrum quam rerum esse tempore temporibus provident assumenda quos nisi ipsum nesciunt dolorem possimus, iusto autem earum dolorum. Vitae.</p>
                <p id="bloco"><strong>Em progresso</strong></p>
            </div>
            <div class="card">
                <div class="flex spaceBetween">
                    <h1 id="bloco">Tarefa 4</h1>
                    <img class="edit" src="Images\PNG icone de editar.png" alt="Editar">
                </div>
                <h2 id="bloco">Descrição: </h2>
                <p id="bloco"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis deserunt laudantium nostrum quam rerum esse tempore temporibus provident assumenda quos nisi ipsum nesciunt dolorem possimus, iusto autem earum dolorum. Vitae.</p>
                <p id="bloco"><strong>Em progresso</strong></p>
            </div>
            
            <div><h3>Novas Tarefas:</h3></div>
            
            <div class="card">
                <h1 id="bloco">Tarefa nova:</h1>
                
                <?php 
                    // Código ativar código dos banco de dados
                    $ativo = false;
                    
                    function criar(){
                        $ativo = true;
                    }
                    
                    // Código para por dados no banco de dados
                    $data = filter_input_array(INPUT_POST);
                    if($ativo == true)
                    {
                        //var_dump($data);
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
                    
                        $criacao = "SELECT * FROM info_tarefa ORDER BY id DESC";
                        $ajust = $conn->prepare($criacao);
                        $criar = $conn->query($criacao);
                    
                        print_r($criar);
                    }
                        
                    
                ?>
                
                <form name="add_tarefa" action="" method="post">
                    <div class="flexrow">
                        <label for="titletxt" id="bloco">Título da tarefa:</label>
                        <input type="text" class="txt" name="titletxt" required>
                    </div>
                    <div class="flexcolumn">
                        <label for="desctxt" id="bloco">Descrição da Tarefa:</label>
                        <textarea type="textarea" class="txt2" name="desctxt" required></textarea>
                    </div>
                    <div class="alignLeft">
                        <label for="conctxt" id="bloco">Concluído</label>
                        <input type="radio" name="stattxt" id="conctxt" required>
                        <label for="inconctxt" id="ibloco">Inconcluído</label>
                        <input type="radio" name="stattxt" id="inconctxt" required >
                    </div>
                    <div class="alignLeft">
                        <button type="submit" name="Send" action="criar">Criar Nova Tarefa</button>
                        <button type="reset">Resetar</button>
                    </div>
                </form>
            </div>
    
        </div>
        
        <div class="divB"> <!-- Botões de adicionar e remover tarefa -->
            <!-- <input type="button" value="Adicionar nova Tarefa" class="button" id="add" onclick="add()"> -->
            <input type="button" value="Remover uma Tarefa" class="button" id="remove">
        </div>
        
    </div>
    
    <script src="Script.js"></script>   
</body>
</html>