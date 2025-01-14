<?php
if(isset($_GET['loggout'])){
    Painel::loggout();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/4367d2e41a.js" crossorigin="anonymous"></script>
      <!-- Adicionando jQuery local -->
  <script src=" <?php echo INCLUDE_PATH; ?>js/config/jquery-3.7.1.min.js"></script>
    <script src="<?php echo INCLUDE_PAINEL_PATH;?>js/sideBar.js"></script>
    <link rel="stylesheet" href="<?php echo INCLUDE_PAINEL_PATH;?>style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Controle</title>
<body>


<header class="nav-adm">
    <div class="bars">
    <i class="fa-solid fa-bars"></i>
    </div>
    <a href="<?php echo INCLUDE_PAINEL_PATH;?>?loggout=true"><i class="fa-solid fa-right-from-bracket"></i></a>
</header>



<div class="side-menu">
        <?php if($_SESSION['img'] == ''){
                ?>
        <div class="perfil-pessoal">
        <i class="fa-solid fa-user"></i>
        </div>
        <?php }else{?>
            <div class="user-img">
                <img src="<?php echo INCLUDE_PAINEL_PATH;?>imagens/<?php echo $_SESSION['img']?>">
            </div>
        }
        <?php }?>
        <div class="user">
        <p><?php echo $_SESSION['nome']; ?></p>
         </div>
        <ul>
            <li class="categoria">CADASTROS</li>
            <li><a href="">CADASTRAR SERVIÇOS</a></li>
            <li><a href="">CADASTRAR DEPOIMENTO</a></li>      
            <li><a href="">CADASTRAR SLIDES</a></li>   
             
            <li class="categoria" >GESTÃO</li>   
            <li><a href="">LISTAR SERVIÇOS</a></li>
            <li><a href="">LISTAR DEPOIMENTO</a></li>     
            <li><a href="">LISTAR SLIDES</a></li>      

            <li class="categoria" >ADMINISTRAÇÃO</li>   
            <li><a href="">EDITAR USUÁRIO</a></li>
            <li><a href="">ADICIONAR USUÁRIO</a></li>     


            <li class="categoria" >CONFIGURAÇÃO GERAL</li>   
            <li><a href="">EDITAR</a></li>
               
               
               
        </ul>
    </div>


<div class="side-menu-mobile">
       <ul>
            
            <li><a href="">SERVIÇOS</a></li>
            <li><a href="">DEPOIMENTO</a></li>   
              
        </ul>
</div>


    <section class="dashBoard">

    <div class="dashboard-elements">
        <h2>10 Usuarios Online!</h2>
        <i class="fa-solid fa-users"></i>
        
    </div>

    <div class="dashboard-elements">
        <h2>10 Total de Visitas!</h2>
        <i class="fa-solid fa-envelope"></i>
        
    </div>

    <div class="dashboard-elements">
        <h2>10 Visitas Hoje!</h2>
        <i class="fa-solid fa-phone"></i>
    
    </div>

    </section>
    
</body>
</html>
