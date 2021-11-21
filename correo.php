<?php
    if (isset ($_POST['enviar'])) {
        if ( !empty ($_POST['nombre'] ) && !empty($_POST['resumen']) && !empty($_post['informe']) && !empty($_POST['correo'])){
            $nombre = $_POST['nombre'];
            $correo = $_POST['correo'];
            $resumen = $_POST['resumen'];
            $informe = $_POST['informe'];

            $header = "from: noreply@example.com" . "\r\n";
            $header = "Reply-to: noreply@example.com" . "\r \n";
            $header = "X-Mailer: PHP/". phpversion()()
            $mail = @mail($correo,$resumen,$informe,$header);
            if($mail){
                echo "<h3> Informe enviado </h3>";
            }
        }
    }
?>