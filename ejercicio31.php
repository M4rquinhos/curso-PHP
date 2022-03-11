<?php

$nombre = "";
$rdbLenguaje = "";
$chkphp = "";
$chkhtml = "";
$chkcss = "";
$lsAnime = "";
$txtComentario = "";


if ($_POST) {
    $nombre = (isset( $_POST['nombre'])) ? $_POST['nombre'] : "";
    $rdbLenguaje = (isset( $_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
    $chkphp = (isset( $_POST['chkphp']) == "si") ? "checked" : "";
    $chkhtml = (isset( $_POST['chkhtml']) == "si") ? "checked" : "";
    $chkcss = (isset( $_POST['chkcss']) == "si") ? "checked" : "";
    $lsAnime = (isset($_POST['lsAnime'])) ? $_POST['lsAnime'] : "";
    $txtComentario = (isset($_POST['comentario'])) ? $_POST['comentario'] : "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
   <?php if($_POST){ ?>
    Hola <?php echo$nombre; ?>
    <br>
    Tu lenguaje es: <?=$rdbLenguaje; ?><br>
    Estás aprendiendo: <br>
    <?=($chkphp == "checked")? "- PHP": "";?><br>
    <?=($chkhtml == "checked")? "- HTML": "";?><br>
    <?=($chkcss == "checked")? "- CSS": "";?><br>
    <br>
    El anime que te gusta es: <?=$lsAnime; ?><br>
    <br>
    Tu comentario o duda es: 
    <?=$txtComentario; ?>
    <br>
    <?php } ?>
    <br>
    <form action="ejercicio31.php" method="post">
        Nombre: <br>
        <input type="text" name="nombre" value="<?=$nombre?>" id="nombre">
        <br>
        <br>
        ¿Te gusta?... <br>
        PHP:<input type="radio" <?=($rdbLenguaje=="php") ?"checked":"";?> name="lenguaje" value="php" id="php"> <br>
        HTML:<input type="radio" <?=($rdbLenguaje=="html") ?"checked":"";?> name="lenguaje" value="html" id="html"> <br>
        CSS:<input type="radio" <?=($rdbLenguaje=="css") ?"checked":"";?> name="lenguaje" value="css" id="css"><br>
        <br>
        Estas aprendiendo...<br/>
        PHP:<input type="checkbox" <?=$chkphp;?> name="chkphp" value="si" id="chkphp"><br/>
        HTML:<input type="checkbox" <?=$chkhtml;?> name="chkhtml" value="si" id="chkhtml"><br/>
        CSS:<input type="checkbox" <?=$chkcss;?> name="chkcss" value="si" id="chkcss"><br/>
        <br>
        ¿Qué anime te gusta?...
        <br>
        <select name="lsAnime" id="">
            <option value="">[Ningun anime]</option>
            <option value="bleach" <?=($lsAnime=="bleach") ? "selected" : "";?>>Bleach</option>
            <option value="one piece" <?=($lsAnime=="one piece") ? "selected" : "";?>>One Piece</option>
            <option value="naruto" <?=($lsAnime=="naruto") ? "selected" : "";?>>Naruto</option>
        </select>
        <br/>
        <br>

        ¿Tines alguna duda?<br>
        <textarea name="comentario" id="comentario" cols="30" rows="10">
            <?=$txtComentario;?>
        </textarea>
        <br>
        <input type="submit" value="Enviar informacion">

    </form>
</body>
</html>