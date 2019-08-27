<?php  
// File para obtener ip LINEA 
// include 'get_client_ip.php';
// include 'db_connection.php';
// $IP = get_client_ip_server();

// Llamando a los campos
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$numero = $_POST['numero'];
$ruc = $_POST['ruc'];
$erp = $_POST['plan'];
$ip = $IP;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=UTF-8' . "\r\n";

// Datos para el email
 $destinatario = "ventas@erp-solutionsperu.com";

// Pruebas con el envio
// $destinatario = 'rafael.martinez.v224@gmail.com';
// $destinatario = "leosoria96@gmail.com"; 
// $destinatario = "fernandofb0112@gmail.com";

$message = "<b>CONTACTO:</b>   $nombre <br><br>";
$message .= "<b>numero:</b>   $numero <br><br>";
$message .= "<b>R.U.C.:</b>   $ruc <br><br>";
$message .= "<b>Version:</b>   $plan <br><br>";
// $message .= "<b>ESTA ES MI IP:</b>   $ip <br></br>";

// Additional headers
$headers .= 'From:'.$email. "\r\n";
$headers .= 'Cc: jpun@erp-solutionsperu.com' . "\r\n";
$headers .= 'Bcc: pruebac579@gmail.com' . "\r\n";
// Enviando Mensaje
mail($destinatario, $asunto, $message, $headers);

// PRUEBA COMENTANDO ESTO
header('Location:index.php'); 

// $IP = get_client_ip_server();
// $conn= OpenCon();
// $sql = "INSERT INTO ip_detect (ip, correo) VALUES ('$IP', '$correo');";
// if($conn->query($sql) === FALSE) {
//     echo "Error: " . $sql;
// }
// CloseCon($conn);
