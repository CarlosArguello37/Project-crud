<?php include("db.php") ?>

<?php include("templates/header.php") ?>

<form action="save_account.php" method="POST">

<div class="title">
    <h2>Crea un usuario:</h2>
    </div>
    <div class="inputBox">
        <input type="text" required="required" name="name">
        <span>Nombre:</span>
    </div>
    <div class="inputBox">
        <input type="text" required="required" name="last_name">
        <span>Apellido:</span>
    </div>
    <div class="inputBox">
        <input type="email" required="required" name="email">
        <span>Email:</span>
    </div>
    <div class="inputBox">
        <input type="password" required="required" name="password">
        <span>Crea una contraseña:</span>
    </div>
    <center>
    <button type="submit" name="save_account" value="Save Account">
        Enviar
    </button>
    </center>

</form>
<br/>


<?php include("templates/footer.php") ?>