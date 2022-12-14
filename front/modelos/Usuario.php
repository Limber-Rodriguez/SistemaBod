<?php 
    require_once '../config/conexion.php';

    Class Usuario{
        public function __construct()
        {}
        public function insertar($nombre,$apellido,$email,$user,$pasword){
            $token = $this->getToken();
            $sql = "INSERT INTO usuario(nombre,apellido,login,password,email,tipo_usuario,token, fecha_token)
                    VALUES ('$nombre','$apellido','$user','$pasword','$email','novios','$token', CURDATE())";
            return ejecutarConsulta_retornarId($sql);
        }

        public function obtener_usuario($idusuario) {
            $sql = "SELECT *
                FROM usuario
                WHERE idusuario = '$idusuario'";
            return ejecutarConsulta_simpleFila($sql);
        }

        public function verificar($login,$clavehash){
            $sql = "SELECT * FROM usuario WHERE (login = '$login' OR nombre = '$login') AND password='$clavehash'";
            return ejecutarConsulta($sql);
        }
        public function validar_token($idusuario,$token){
            $sql = "SELECT * FROM usuario WHERE idusuario=$idusuario AND token='$token' AND fecha_token > now()";	
            return ejecutarConsulta($sql);
        }
        public function restablecer_password($idusuario,$clave,$token){
            $sql = "SELECT * FROM usuario WHERE idusuario=$idusuario AND token='$token'";
            $resp =ejecutarConsulta($sql);
            $fetch= $resp->fetch_object();
            if(isset($fetch)){
                $sql= "UPDATE usuario SET password='$clave', token='' where idusuario=$idusuario";
                return ejecutarConsulta($sql);
            }else{
                return 0;
            }
            
        } 
        public function validar_email($email){
            $sql ="SELECT * FROM usuario WHERE email='$email'";
            $resp = ejecutarConsulta($sql);
            $fetch=$resp->fetch_object();
            if (isset($fetch)){
                $token = $this->getToken();
                $sql = "UPDATE usuario SET token='$token',fecha_token=DATE_ADD(now(), INTERVAL +1 HOUR) where idusuario=$fetch->idusuario";
                ejecutarConsulta($sql);
                $asunto= "Para restablecer su contrase??a ingrese en el siguiente enlace </br>
                <a href='http://localhost/bodas/front/vistas/principal.php?id=$fetch->idusuario&token=$token'> Cambiar Contrasena</a>";
                return $this->enviar_email($email,$asunto);
            } else {
                return "Email no valido";
            }
        }
        public function getToken(){
            $alpha = "123qwertyuiopa456sdfghjklzxcvbnm789";
            $qrrand="";
            $longitud=20;
            for($i=0;$i<$longitud;$i++){      
                $qrrand .= $alpha[rand(0, strlen($alpha)-1)];
            }
            return $qrrand;
        }
        function enviar_email($email, $asunto){
		
            $emailadmin="info@beautyhome.com.mx";
    
            $to = $email;
            $from = $emailadmin;
            $fromName = 'Recuperaci??n de Password';
            $subject = 'Recuperaci??n de Password'; 
            $htmlContent =$asunto;
            $headers = "From: $fromName"." <".$from.">";
            $semi_rand = md5(time()); 
            $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
            $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
            $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
            "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
            $message .= "--{$mime_boundary}--";
            $returnpath = "-f" . $from;
            $mail=mail($to, $subject, $message, $headers, $returnpath); 
            if($mail){
                echo "Email enviado";	
            }else{
                echo "No se pudo enviar email".$mail;
            }
        }
    }
?>