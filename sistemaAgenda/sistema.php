<?php
session_start();
include_once('config.php');
    //print_r($_SESSION);

    if((!isset($_SESSION['email'] ) == true) and (!isset($_SESSION['senha'])==true)){
        
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');
    }
    $logado=$_SESSION['email'];

    $sql= "SELECT * FROM reunioes ORDER BY idreuniao DESC";
    
    $result = $conexao->query($sql);
    
    //print_r($result);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sistema.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Pagina Inicial</title>
</head>
<body>

<!-- Imagem e texto -->
    <nav class="navbar navbar-light bg-light">
        
            <a class="navbar-brand" href="#">
                <class="d-inline-block align-top" alt="">
                Agenda Leucotron
           
      
        <div class="d-flex">
            <a href="sair.php" class= "btn btn-danger me-5">Sair</a>
            </a>
        </div>
    </nav>
    <br>
   
    <div class="m-5">
        <table class="table text-black table-bg">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Palestrante</th>
                <th scope="col">Titulo</th>
                <th scope="col">Data</th>
                <th scope="col">Inicio</th>
                <th scope="col">Duração</th>
                <th scope="col">Localização</th>
                <th scope="col">Descrição</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo"<td>".$user_data['idreuniao']."</td>";
                        echo"<td>".$user_data['autor']."</td>";
                        echo"<td>".$user_data['titulo']."</td>";
                        echo"<td>".$user_data['datas']."</td>";
                        echo"<td>".$user_data['horasInicio']."</td>";
                        echo"<td>".$user_data['duracao']."</td>";
                        echo"<td>".$user_data['localizacao']."</td>";
                        echo"<td>".$user_data['descricao']."</td>";
                        echo"<td>
                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[idreuniao]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                            </svg>
                            </a>

                            <a  class='btn btn-sm btn-danger' href='delete.php?id=$user_data[idreuniao]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                </svg>
                            </a>
                               
                        
                            </td>";
                            
                            
                            
                        echo"</tr>";
                      
                    }
                    echo"<td>
                                
                    <a  class='btn btn-sm btn-primary' href='formulario.php?'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-journal-plus' viewBox='0 0 16 16'>
                    <path fill-rule='evenodd' d='M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z'/>
                    <path d='M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z'/>
                    <path d='M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z'/>
                  </svg>
                    </a>
                    </td>";
                    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
