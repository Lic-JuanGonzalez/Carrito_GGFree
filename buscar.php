<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['agregar_al_carrito'])){

    $id_producto = $_POST['id_producto'];
    $nombre_producto = $_POST['nombre_producto'];
    $precio_producto = $_POST['precio_producto'];
    $imagen_producto = $_POST['imagen_producto'];
    $cantidad_producto = $_POST['cantidad_producto'];

    $comprobar_carrito = mysqli_query($conn, "SELECT * FROM `carrito` WHERE pnombre = '$nombre_producto' AND user_id = '$user_id'") or die('falló la query');

    if(mysqli_num_rows($comprobar_carrito) > 0){
        $message[] = 'ya ha sido agregado al carrito';
    }else{
        mysqli_query($conn, "INSERT INTO `carrito`(user_id, pid, pnombre, pprecio, pcantidad, pimagen) VALUES('$user_id', '$id_producto', '$nombre_producto', '$precio_producto', '$cantidad_producto', '$imagen_producto')") or die('falló la query');
        $message[] = 'producto agregado al carrito';
    }

}

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Búsqueda</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>Buscar</h3>
    <p> <a href="home.php">Home</a> / Buscar</p>
</section>

<section class="search-form">
    <form action="" method="POST">
        <input type="text" class="box" placeholder="buscar productos.." name="input">
        <input type="submit" class="btn" value="Buscar" name="buscar_btn">
    </form>
</section>

<section class="productos" style="padding-top: 0;">

   <div class="box-container">

      <?php
        if(isset($_POST['buscar_btn'])){
         $input = mysqli_real_escape_string($conn, $_POST['input']);
         $select_productos = mysqli_query($conn, "SELECT * FROM `productos` WHERE nombre LIKE '%{$input}%'") or die('la query falló');
         if(mysqli_num_rows($select_productos) > 0){
            while($fetch_productos = mysqli_fetch_assoc($select_productos)){
      ?>
      <form action="" method="POST" class="box">
         <a href="vista_producto.php?pid=<?php echo $fetch_productos['id']; ?>" class="fas fa-eye"></a>
         <div class="precio">$<?php echo $fetch_productos['precio']; ?>/-</div>
         <img src="uploaded_img/<?php echo $fetch_productos['imagen']; ?>" alt="" class="imagen">
         <div class="nombre"><?php echo $fetch_productos['nombre']; ?></div>
         <input type="number" name="cantidad_producto" value="1" min="0" class="qty">
         <input type="hidden" name="id_producto" value="<?php echo $fetch_productos['id']; ?>">
         <input type="hidden" name="nombre_producto" value="<?php echo $fetch_productos['nombre']; ?>">
         <input type="hidden" name="precio_producto" value="<?php echo $fetch_productos['precio']; ?>">
         <input type="hidden" name="imagen_producto" value="<?php echo $fetch_productos['imagen']; ?>">
         <input type="submit" value="agregar al carrito" name="agregar_al_carrito" class="btn">
      </form>
      <?php
         }
            }else{
                echo '<p class="title">no se han encontrado resultados!</p>';
            }
        }else{
            echo '<p class="title">busca algo!</p>';
        }
      ?>

   </div>

</section>


<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>