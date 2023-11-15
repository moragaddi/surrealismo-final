<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    
    <title>doc</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<header>
   <input type="checkbox" name="" id="chk1">
       <div class="logo"><a href="index.html"><h1>S</h1></a></div>
       <div class="search-box">
           <form action="resultados_buscar.php" method="POST">
               <input type="text" name="buscar" id="srch" placeholder="Search">
               <button type="submit"><i class="fa fa-search"></i></button>
           </form>
       </div>
       <ul>
           <li><a href=vanguardia.html>Vanguardia</a></li>
           <li><a href=artistas.html>Artistas</a></li>
           <li><a href=galeria.html>Galeria</a></li>
           <li><a href=contacto.html>Contacto</a></li>
           <li><a href="login.html"><i class="fa-solid fa-user"></i></a>

           </li>
       </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
 
</header>

<div class="fondo">
<img src="images/mov_surrealismo2.jpg" >  
</div> 

    <div class="divL"></div>
    <div class="divR"></div>
    </h1>
    <h4>ARTISTAS</h4>
    
     <main>

            <div class="form-container">
            <p class="title">INICIAR SESIÓN</p>
            <form class="form" method= "POST" action="login.php">
                <div class="input-group">
                    <label for="username">Usuario</label>
                    <input type="text" name="usuario" id="username" style="width: 95%">
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="clave" id="password" style="width: 95%">
                    <div class="forgot">
                        <a rel="noopener noreferrer" href="#"></a>
                    </div>
                </div>
                <button class="sign">Iniciar</button>
            </form>
            <div class="social-message">
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <p class="signup">¿No tenes una cuenta?
                <a rel="noopener noreferrer" href="registro.html" class="">Registrate</a>
            </p>
        </div>
        </main>

</body>
 <script src="https://kit.fontawesome.com/06d0e98269.js" crossorigin="anonymous"></script>
</html>