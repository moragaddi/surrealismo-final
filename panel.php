<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Creepster&display=swap" rel="stylesheet">
    
    <title>Exclusivo usuarios - Surrealismo</title>
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
            <li><a href="login.html"><i class="fa-solid fa-user"></i></a></li>
            <li><a href="salir.php"><i class="fa-solid fa-xmark" style="color: #ffffff;"></i></a></li>

            
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
 
</header>
    <!-- Contenido principal -->

    <?php

        if(isset($_SESSION['nombre']) ){

        echo $_SESSION['nombre']."</div>";
        ?>


<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/7.jpg" class="d-block w-100" alt="..." style="height:700px;margin-top:90px; opacity:60%;">
    </div>
    <div class="carousel-item">
      <img src="images/8.jpg" class="d-block w-100" alt="..." style="height:700px;margin-top:90px;opacity:60%;">
    </div>
    <div class="carousel-item">
      <img src="images/6.jpg" class="d-block w-100" alt="..." style="height:700px;margin-top:90px;opacity:60%;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


        <h3 style="color: #A5B381;
    font-size: 80px;
    margin-top: 150px;
    margin-bottom: 15px;
    text-align: center;
    filter: blur(5px);
    letter-spacing: 15px">DOS ARTISTAS IMPORTANTES QUE NO VISTE</h3>
        <section class="artistas">
      <div class="artista" style="opacity: 100;">
        <img src="images/tanguy.jpg" alt="Artista ">
        <h5>Yves Tanguy</h5>
        <p>Tanguy se sintió atraído por la libertad creativa y la exploración de lo subconsciente que ofrecía el surrealismo. En sus obras, Tanguy creaba paisajes oníricos y abstractos que evocaban un mundo misterioso y surreal. Sus pinturas a menudo presentaban elementos orgánicos y geométricos que desafiaban la lógica y la realidad convencional.
        A lo largo de su carrera, Tanguy desarrolló un estilo artístico distintivo que se convirtió en una contribución significativa al movimiento surrealista. Su participación activa en el grupo surrealista y sus amistades con otros artistas notables, como Salvador Dalí y Max Ernst, contribuyeron a su éxito y reconocimiento en el mundo del arte surrealista. Yves Tanguy continúa siendo recordado como uno de los artistas más destacados del surrealismo.</p>
      </div>

      <div class="artista" style="opacity: 100;">
        <img src="images/ManRay.jpg" alt="Artista ">
        <h5>Man Ray</h5>
        <p>Max Ernst fue un artista alemán conocido por su experimentación con la técnica del frottage (frotar un lápiz o carboncillo sobre una superficie texturizada) y el grattage (raspar la superficie de la pintura). Estas técnicas le permitieron crear imágenes evocadoras y enigmáticas.
          <br>
          <br>
          Durante la Primera Guerra Mundial, Max Ernst fue reclutado en el ejército alemán, pero su experiencia en el frente lo marcó profundamente y tuvo un impacto en su obra posterior. Después de la guerra, regresó a Colonia, Alemania, donde se involucró en el movimiento Dada y comenzó a experimentar con técnicas de collage y frottage (frotar un lápiz o carboncillo sobre una superficie texturizada).
        Durante la Segunda Guerra Mundial, Max Ernst fue arrestado por los nazis debido a su afiliación con el arte "degenerado" y su vínculo con el movimiento surrealista. Escapó de la persecución nazi y se mudó a los Estados Unidos, donde continuó su carrera artística y experimentó con nuevas formas de expresión.

        Después de la guerra, regresó a Francia y se estableció en París, donde continuó trabajando en una variedad de medios, incluyendo la pintura, la escultura y la literatura. Su obra evolucionó a lo largo de su vida y abordó temas como la mitología, la sexualidad y la guerra.

        Max Ernst falleció en París en 1976 a la edad de 84 años. Su influencia en el arte moderno y su contribución al surrealismo son ampliamente reconocidas, y su obra sigue siendo apreciada y exhibida en museos de todo el mundo.</p>
          </div>      
        </section>

  
    <div class="slider-">
        <div class="slide-track">
            <div class="slide">
                <img src="images/1.JPG" alt="">
            </div>
            <div class="slide">
                <img src="images/5.JPG" alt="">
            </div>
            <div class="slide">
                <img src="images/8.JPG" alt="">
            </div>
            <div class="slide">
                <img src="images/26.JPG" alt="">
            </div>
            <div class="slide">
                <img src="images/6.JPG" alt="">
            </div>
            <div class="slide">
                <img src="images/3.JPG" alt="">
            </div>
            <div class="slide">
                <img src="images/2.JPG" alt="">
            </div>

            <div class="slide">
                <img src="images/7.JPG" alt="">
            </div>
            
        </div>
    </div>
      

    <script>
var slideIndex = 1;
showDivs(slideIndex);
function plusDivs(n) {
showDivs(slideIndex += n);
}
function showDivs(n) {
var i;
// acá define qué elemento entra en el slider
var x = document.getElementsByClassName("mySlides");
if (n > x.length) {slideIndex = 1}
if (n < 1) {slideIndex = x.length} ;
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
x[slideIndex-1].style.display = "block";
}
 
carousel();
 
function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";
}
slideIndex++;
if (slideIndex > x.length) {slideIndex = 1}
x[slideIndex-1].style.display = "block";
setTimeout(carousel, 3000); // Cambia la imagen cada 3 segundos
}
</script>

<?php

}else{
    header ("Location: login3.html");
}
        
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/06d0e98269.js" crossorigin="anonymous"></script>
<footer>
            <p class="footer">"Vanguardia Surrealista" por Mora Gaddi. Todos los derechos reservados © 2023.</p>
</footer>
</body>

</html>
