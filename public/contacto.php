
<?php include('head.php') ?>
<?php include('header.php') ?>


<section class="contacto_box">
    <h2>Contacto</h2>
    <div>
        <form action="enviar_consulta.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="contacto_input">
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="contacto_input">
            <br>
            <label for="edad">Edad:</label>
            <input type="number" name="edad" class="contacto_input">
            <br>
            <label for="email">Correo electrónico:</label>
            <input type="email" id="email" name="email" class="contacto_input">
            <br>
            <label for="mensaje">Mensaje:</label>
            <textarea type="text" name="mensaje" class="contacto_input" cols="30" rows = "10">
            </textarea>
            <br>
            <button class="contact-button" type="submit">Enviar Mensaje</button>
        </form>
        <?php
        if (isset($_GET['ok'])){
            echo '<p>Mensaje enviado con éxito.</p>';
        }?>
    </div>

</section>

<?php include ('footer.php')?>