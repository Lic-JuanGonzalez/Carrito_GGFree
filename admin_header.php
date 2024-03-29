<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Administrador<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Panel de Control</a>
         <a href="admin_productos.php">Productos</a>
         <a href="admin_ordenes.php">Órdenes</a>
         <a href="admin_contactos.php">Mensajes</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Usuario : <span><?php echo $_SESSION['admin_nombre']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">salir</a>
         <div><a href="login.php">volver a ingresar</a> | <a href="registro.php">registrarse</a> </div>
      </div>

   </div>

</header>