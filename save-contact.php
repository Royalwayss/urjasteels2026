<?php	 

	include('config.php');
	
	$err = '';
	$data = $_POST; 
	
	if(isset($data['first_name']) && $data['first_name'] != ''){
		$first_name = $data['first_name'];
	}else{
		$first_name ='';
		$err = 1;
	}
	
	
	if(isset($data['last_name']) && $data['last_name'] != ''){
		$last_name = $data['last_name'];
	}else{
		$last_name ='';
		
	}
	
	if(isset($data['mobile']) && $data['mobile'] != ''){
		$mobile = $data['mobile'];
	}else{
		$mobile ='';
		$err = 1;
	} 
	
	if(isset($data['email']) && $data['email'] != ''){
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$err = 1;
			$email  = '';
		}else{
			$email = $data['email'];
		}
	}else{
		$err = 1;
		$email  = '';
	}
	
	if(isset($data['message']) && $data['message'] != ''){
		$message = $data['message'];
	}else{
		$message ='';
		$err = 1; 	
	}
	

	
	if( $err == '' ) {
		
		
		
		
		 /*
		if($_SERVER['HTTP_HOST'] != 'localhost'){
			
					$recaptcha_secret = RECAPTCHA_SECRET_KEY;
					$recaptcha_response = $_POST['g-recaptcha-response'];

					$recaptcha_api_url = 'https://www.google.com/recaptcha/api/siteverify';
					$rc_data = [
						'secret' => $recaptcha_secret,
						'response' => $recaptcha_response
					];

					$options = [
						'http' => [
							'method' => 'POST',
							'content' => http_build_query($rc_data)
						]
					];

					$context = stream_context_create($options);
					$api_result = file_get_contents($recaptcha_api_url, false, $context);
					$json = json_decode($api_result);

					if ($json->success) {
					  
					} else { 
					  echo '{ "alert": "alert alert-danger alert-dismissable", "message": "Your message could not been sent!" }'; die;
					} 
			   
   } */ 
		
		
		
		
		
		
		
		
		
		 
		
		$post_data = [
			'first_name' => $first_name,
			'last_name' => $last_name,
			'mobile' => $mobile,
			'email' => $email,
			'message' => $message
		];
		
		$prefix		= !empty( $_POST['prefix'] ) ? $_POST['prefix'] : '';
		$submits	= $post_data;
		$botpassed	= false;
		
		$fields = array();
		
		foreach( $submits as $name => $value ) {
		if( empty( $value ) ) {
			continue;
		}
		
		$name = str_replace( $prefix , '', $name );
		$name = function_exists('mb_convert_case') ? mb_convert_case( $name, MB_CASE_TITLE, "UTF-8" ) : ucwords($name);
		
		if( is_array( $value ) ) {
			$value = implode( ', ', $value );
		}
		
		$fields[$name] = nl2br( filter_var( $value, FILTER_SANITIZE_SPECIAL_CHARS ) );
		
		}
		
		$response = array();
		
		foreach( $fields as $fieldname => $fieldvalue ) {
			
			$fieldname = '
			<tr>
			   <td align="right" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 5px 7px 0;"><strong>' . $fieldname . '</strong>: </td>
			   ';
			   $fieldvalue = '
			   <td align="left" valign="top" style="border-top:1px solid #dfdfdf; font-family:Arial, Helvetica, sans-serif; font-size:13px; color:#000; padding:7px 0 7px 5px;">' . $fieldvalue . '</td>
			</tr>
			';
		$response[] = $fieldname . $fieldvalue;
		
		}
		
		$first_name = mysqli_real_escape_string($conn, $first_name);
		$last_name = mysqli_real_escape_string($conn, $last_name);
		$message = mysqli_real_escape_string($conn, $message);
		
		
		$sql = "INSERT INTO contacts (first_name,last_name,email,mobile,message) VALUES ('".$first_name."','".$last_name."','".$email."','".$mobile."','".$message."')";
		mysqli_query($conn,$sql);
						
				$mail_message = 
				'<!DOCTYPE html>
				<html>
				   <head>
					  <meta charset="UTF-8">
					  <meta name="viewport" content="width=device-width, initial-scale=1.0">
					  <title>Email</title>
					  <style>
						 body{
						 margin:0;
						 padding:0;
						 background:#f4f4f4;
						 font-family: Arial, Helvetica, sans-serif;
						 }
						 .container{
						 max-width:600px;
						 margin:auto;
						 background:#ffffff;
						 }
						 .header{
						 background: linear-gradient(135deg, #23346b, #1e2a5a, #667cb9) !important;
						 text-align:center;
						 }
						 .header img{
						 max-width:100px;
						 }
						 .title{
						 text-align:center;
						 padding:20px;
						 font-size:20px;
						 font-weight:bold;
						 color:#333;
						 }
						 .content{
						 padding:20px;
						 }
						 .content table{
						 width:100%;
						 border-collapse:collapse;
						 }
						 .content td{
						 padding:10px;
						 border-bottom:1px solid #eee;
						 font-size:14px;
						 }
						 .label{
						 font-weight:bold;
						 color:#555;
						 width:40%;
						 }
						 .footer{
						 text-align:center;
						 padding:15px;
						 font-size:12px;
						 color:#fff;
						 background: linear-gradient(135deg, #23346b, #1e2a5a, #667cb9) !important;
						 }
						 @media only screen and (max-width:600px){
						 .container{
						 width:100% !important;
						 }
						 .content td1{
						 display:block;
						 width:100%;
						 }
						 .label{
						 padding-bottom:5px;
						 }
						 }
					  </style>
				   </head>
				   <body>
					  <table width="100%" cellpadding="0" cellspacing="0" border="0">
						 <tr>
							<td align="center">
							   <table class="container" cellpadding="0" cellspacing="0">
								  <tr>
									 <td class="header">
										<h2 style="color: #fff;">Urjasteels</h2>
									 </td>
								  </tr>
								  <tr>
									 <td class="title">
										Urjasteels Contact Form<br>
										<small>'.date('d-m-Y').'</small>
									 </td>
								  </tr>
								  <tr>
									 <td class="content">
										<table>
										   '.implode('', $response).'
										</table>
									 </td>
								  </tr>
								  <tr>
									 <td class="footer">
										© '.date('Y').' Urjasteels. All rights reserved.
									 </td>
								  </tr>
							   </table>
							</td>
						 </tr>
					  </table>
				   </body>
				</html>
				';
				
				
				
				if($_SERVER['HTTP_HOST'] != 'localhost'){
				
				
				$recipient = ADMIN_MAIL;
				$message = $mail_message;  
			
				$headers = "Content-Type: text/html; charset=UTF-8\r\n";
				$headers .= 'From: '.trim(WEBSITE_NAME). '<'.FROM_MAIL.'>'."\r\n";
				 $subject = 'New contact form has been recived from'.WEBSITE_NAME;
				$headers .= 'Cc: manjit@rtpltech.com' . "\r\n"; 
				mail($recipient, $subject, $message, $headers); 
				
				
				
			  }

				
				
				
				
				
				
				
				
			       echo '{ "alert": "alert alert-success alert-dismissable", "message": "Your message has been sent successfully!" }';
			  
			  
	}else{
		echo '{ "alert": "alert alert-danger alert-dismissable", "message": "Your message could not been sent!" }';
	}
	
	
	
	
	
	
	
?>