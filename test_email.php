<!-- <!DOCTYPE html> -->
<?php
	@require 'PHPMailer-master/PHPMailerAutoload.php';
	
	date_default_timezone_set('Asia/Bangkok');
?>
	<!-- <head>
		<link rel="stylesheet" href="css/css/bootstrap.min.css">

	</head>
	<body>
		<div class="container text-center">
			<div class="row">
				&nbsp;
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
					<form method="POST" action="test_email.php">
						<div class="row">
							<div class="col-sm-4 form-group">
								<input class="form-control" id="nama" name="nama" placeholder="Name" type="text" required>
							</div>
							<div class="col-sm-4 form-group">
								<input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
							</div>
							<div class="col-sm-4 form-group">
								<input type="email" class="form-control" name="emaildari" id="emaildari" placeholder="Email" required>
							</div>
						</div>

						<textarea class="form-control" id="pesan" name="pesan" placeholder="Message" rows="5"></textarea>
						<br>

						<div class="row">
							<div class="col-sm-10"></div>
							<div class="col-sm-2">
								<input type="submit" class="btn btn-primary btn-block" name="test" value="Test Kirim Email">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html> -->
<?php
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];
		$phone = $_POST['phone'];
		$nama = $_POST['nama'];
		/*$email = 'team@abangdesa.id';
		$nama = 'Testing';
		$nohp = '+6282255868729';
		$mail = true;

		$apiKey = 'aa1577b80d40f2cf373611e7946ddc4d-us19';
	    $listID = '002fcde3d5';
	    
	    // MailChimp API URL
	    $memberID = md5(strtolower($email));
	    $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
	    $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
	    
	    // member information
	    $json = json_encode([
	        'email_address' => $email,
	        'status'        => 'subscribed',
	        'merge_fields'  => [
	            'Nama Lengkap'     => $nama,
	            'Nomor Handphone'  => $nohp
	        ]
	    ]);
	    
	    // send a HTTP POST request with curl
	    $ch = curl_init($url);
	    curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
	    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	    $result = curl_exec($ch);
	    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	    curl_close($ch);
	    
	    // store the status message based on response code
	    if ($httpCode != 200) {
	        $mail = false;
	    }*/
			
		$mail = new PHPMailer;
		
		/* Lewati pengecekan sertifikat, taruh dibawah new PHPMailer */
		
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		
		/* Selesai lewati pengecekan sertifikat */
		$smtp = "santanu.iixcp.rumahweb.com";	//@abangdesa.id (SSL/TLS)
		// $smtp = "smtp.gmail.com"; 				//GMAIL
		// $smtp = "mail.abangdesa.id";  				//@abangdesa.id (Non-SSL)
		$auth = true;
		$emailsupport = "support@abangdesa.id";
		// $emailsupport = "rikopratama990@gmail.com";
		$passwordsupport = "ayobangundesa";
		// $passwordsupport = "9977053342";
		$secure = 'TLS';
		$port = 587;
		$timeout = 180;
		$emailsupportfrom = $email;

		$mail->SMTPDebug = 4;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		// $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->Host = $smtp;
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		// $mail->Username = 'rikopratama990@gmail.com';                 // SMTP username
		$mail->Username = $emailsupport;
		$mail->Password = $passwordsupport;                           // SMTP password
		$mail->SMTPSecure = $secure;                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = $port;                                    // TCP port to connect to
		$mail->Timeout = $timeout;
		
		$mail->setFrom($emailsupport, $emailsupportfrom);
		$mail->addAddress("virelinez@gmail.com");     // Penerima email
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $nama . " ( " . $phone . " )";
		$mail->Body = " " . $pesan;

		if(!$mail->send()) {
			echo $mail->ErrorInfo;
		}else{
?>
	<script>
		alert('Berhasil mengirim!');
		window.location = "index.php";
	</script>
<?php

		}
	}
?>