<?php
    include_once("conexiones/conexion.php");
    
    $titulo = $_POST['titulo'];
    $resena = $_POST['resena'];
    $noticia = $_POST['noticia'];
    $clasificacion = $_POST['clasificacion'];
    $lugar = $_POST['lugar'];
    //$foto = $_POST['foto'];
    $autor = $_POST['autor'];
    $fecha_pub = $_POST['fecha_pub'];
    $fecha_ext = $_POST['fecha_ext'];

    //Sacamos el valor del archivo.
    $foto = $_FILES['foto']['name'];
    $ruta_origen = $_FILES['foto']['tmp_name'];
    
    //crear nombre del archivo con la fecha y hora
    $extension_archivo= pathinfo($foto, PATHINFO_EXTENSION);
    $fecha = date('Y-m-d');
    $hora = date('H-i-s');
    $nombre_archivo = 'archivo-' . $fecha . $hora . ".".$extension_archivo;
    $destino = "img/".$nombre_archivo; 

    $insertar = "INSERT INTO noticias(titulo, resena, noticia, clasificacion, lugar, foto, autor, fecha_pub, fecha_ext)
     VALUES ('$titulo','$resena','$noticia','$clasificacion','$lugar','$foto','$autor','$fecha_pub','$fecha_ext')";

    $correcto = mysqli_query($conn,$insertar);
    if($correcto == TRUE){
        copy($ruta_origen,$destino);
        echo "<script>alert('Se ah registrado la noticia de manera exitosa'); windows.location='/frmNoticias'<script>";
    }else{
        echo "<script>alert('El registro no se pudo aplicar'); windows.history.go(-1);<script>";
    }
    $conex->close();
?>