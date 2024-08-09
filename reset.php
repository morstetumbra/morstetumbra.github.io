<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['reset'])){
		$email = $_POST['email'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code=substr(str_shuffle($set), 0, 15);
			try{
				$stmt = $conn->prepare("UPDATE users SET reset_code=:code WHERE id=:id");
				$stmt->execute(['code'=>$code, 'id'=>$row['id']]);
				
				$message = "
					<h2>Recuperar password</h2>
					<p>Tu cuenta:</p>
					<p>Email: ".$email."</p>
					<p> Pulsa en el boton de abajo para recuperar password.</p>
					<a href='http://localhost/ecommerce/password_reset.php?code=".$code."&user=".$row['id']."'>Recuperar Password</a>
				";
	    		require 'vendor/autoload.php';

	    		$mail = new PHPMailer(true);                             
			    try {
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                               
			        $mail->Username = 'testsourcecodester@gmail.com';     
			        $mail->Password = 'mysourcepass';                    
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        $mail->setFrom('testsourcecodester@gmail.com');
			        
			        $mail->addAddress($email);              
			        $mail->addReplyTo('testsourcecodester@gmail.com');
			       
			        $mail->isHTML(true);                                  
			        $mail->Subject = 'ECommerce Site Password Reset';
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['success'] = 'Recuperar Password';
			     
			    } 
			    catch (Exception $e) {
			        $_SESSION['error'] = ' Error el mensaje no pudo ser enviado: '.$mail->ErrorInfo;
			    }
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}
		else{
			$_SESSION['error'] = 'Email no encontrado';
		}

		$pdo->close();

	}
	else{
		$_SESSION['error'] = 'Email asociado a otra cuenta';
	}

	header('location: password_forgot.php');

?>