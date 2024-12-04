<?php include ('head.php')?>

<!-- <h2>emprendimientos</h2> -->

<section class = "cards-nav">
    <ul>
        <a href="cards.php?nombre=eco">ecologico</a>
        <a href="cards.php?nombre=ia">inteligencia artificial</a>
        <a href="cards.php?nombre=prog">programacion</a>
    </ul>
</section>

<?php

if (isset($_GET['nombre'])) {
    $cards = $_GET['nombre'];
    switch ($cards) {
        case 'eco':
            $nombre = "Proyectos Ecologicos";
            $descripcion = "Proyectos que buscan mejorar el medio ambiente";
            $contacto = "Gerardo Daglio";
            $imagen = "./img/nanoplants.jpg";
            break;

        case 'ia':
            $nombre = "Inteligencia Artificial";
            $descripcion = "Proyectos que implican el uso de Inteligencia Artificial";
            $contacto = "Gerardo Daglio";
            $imagen = "./img/ia.jpeg";
            break;
        
        case 'prog':
            $nombre = "Programacion Imperativa";
            $descripcion = "Programacion imperativa orientada a la tokenizacion";
            $contacto = "Gerardo Daglio";
            $imagen = "./img/token.jpeg";
        break;
    }
}

?>

<section class = "contenedor">
    <h3> <?php echo $nombre?> </h3>
    <p> <?php echo $descripcion ?> </p>
    <p> Contacto: <?php echo $contacto ?> </p>
    <img src="<?php echo $imagen ?>" alt="imagen:  <?php echo $nombre ?> ">

</section>

<form class= "button" action="index.php" method="get">
        <button type="submit">Inicio</button>
</form>

<?php include ('footer.php')?>

