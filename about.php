<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sobre nosotros</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3 class="title">Nosotros</h3>
    <p> <a href="home.php">Home</a> / Nosotros </p>
</section>

<section class="about">
    <center>
        <div>
            <div class="content">
                <h3 class="title">¿QUIÉNES SOMOS?</h3>
                <h4 class="subtitle">En GGFree, nos enorgullece ser una empresa pionera en la comercialización y distribución de alimentos sin gluten. Fundada en 2023, nuestra misión es brindar opciones seguras y deliciosas a las personas que padecen enfermedad celíaca o que siguen una dieta libre de gluten.</h4>
            </div>
            <br>
            <div class="content">
                <h3 class="title">NUESTRA VISIÓN</h3>
                <h4 class="subtitle">Nuestra visión es convertirnos en la principal referencia en la comercialización y distribución de alimentos celíacos a nivel nacional en un plazo de 3 años.</h4>
            </div>
            <br>
            <div class="content">
                <h3 class="title">NUESTRA MISIÓN</h3>
                <h4 class="subtitle">La misión de GGFree es mejorar la calidad de vida de las personas que padecen enfermedad celíaca y aquellos que siguen 
                    una dieta libre de gluten, al brindarles acceso a alimentos seguros, deliciosos y convenientes que satisfagan sus necesidades nutricionales y gustativas. 
                    Nos esforzamos por ser líderes en la industria de alimentos celíacos al proporcionar productos de la más alta calidad y al educar a la comunidad 
                    sobre la importancia de una dieta sin gluten.</h4>
            </div>
            <br>
            <div class="content">
                <h3 class="title">Nuestro compromiso Organizacional</h3>
                <h4 class="subtitle">En GGFree, creemos que las personas con enfermedad celíaca o que siguen una dieta libre de gluten merecen 
                   disfrutar de una alimentación. Por eso, nos comprometemos a ofrecer productos de alta calidad que cumplan con las necesidades de nuestros clientes.
                    <br>
                    En GGFree, estamos comprometidos a llenar el vacío en el mercado de alimentos sin gluten. Por eso, ofrecemos una amplia variedad de productos, desde 
                    alimentos básicos como pan y pasta hasta productos más elaborados como dulces y snacks.
                    <br>
                    <br>
                    Este párrafo destaca los siguientes puntos:
                    <br>
                    <br>
                    
                    <span>&#8226;</span> El compromiso de GGFree con la seguridad alimentaria.
                    <br>
                    <span>&#8226;</span> El compromiso de GGFree con el sabor.
                    <br>
                    <span>&#8226;</span> El compromiso de GGFree con la accesibilidad.
                    <br>
                </h4>

                <br>
                <br>
            </div>

        <div>
         <br><br>
            <div class="content">
                <p class="subtitle">¡Bienvenido a la familia GGFree!</p>
                <br>
                <br>
                <br>
                <h3 class="title">¿DÓNDE NOS PODÉS ENCONTRAR?</h3>
                <a href="contacto.php" class="btn">Contáctanos</a>
                <br>
                
            </div>
            <br>
        </div>

        <div class="content">
            <iframe style="width:60%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3350.2109215719856!2d-68.8519993109192!3d-32.89259120111864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e09054fbdf051%3A0x89f76fcd3dac5f2e!2sSan%20Lorenzo%20537%2C%20Mendoza!5e0!3m2!1ses!2sar!4v1697875833924!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </center>


</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>