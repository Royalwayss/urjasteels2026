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
	
	if(isset($data['company']) && $data['company'] != ''){
		$company = $data['company'];
	}else{
		$company ='';
		$err = 1; 	
	} 
	
	if(isset($data['whatsapp_mobile']) && $data['whatsapp_mobile'] != ''){
		$whatsapp_mobile = $data['whatsapp_mobile'];
	}else{
		$whatsapp_mobile ='';
		
	}
	
	if(isset($data['product']) && $data['product'] != ''){
		$product = $data['product'];
	}else{
		$product ='';
		$err = 1; 	
	}
	
	if(isset($data['message']) && $data['message'] != ''){
		$message = $data['message'];
	}else{
		$message ='';
		$err = 1; 	
	}
	
   if(isset($data['city']) && $data['city'] != ''){
		$city = $data['city'];
	}else{
		$city ='';
			
	}
	
	 if(isset($data['state']) && $data['state'] != ''){
		$state = $data['state'];
	}else{
		$state ='';
			
	}

 if(isset($data['country']) && $data['country'] != ''){
		$country = $data['country'];
	}else{
		$country ='';
		$err = 1; 	
	}



if(isset($data['quantity']) && $data['quantity'] != ''){
		$quantity = $data['quantity'];
	}else{
		$quantity ='';
		$err = 1; 	
	}
	
	if( $err == '' ) {
		
		
		
		
		 
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
			   
   } 
		
		
		
		
		
		
		
		
		
		 
		
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
		
		
		$sql = "INSERT INTO contacts (first_name,last_name,email,mobile,whatsapp_mobile,product,company,state,city,country,quantity,message) VALUES ('".$first_name."','".$last_name."','".$email."','".$mobile."','".$whatsapp_mobile."','".$product."','".$company."','".$state."','".$city."','".$country."','".$quantity."','".$message."')";
		mysqli_query($conn,$sql);
						
				/*
				
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
				*/
				
				
				
				 $mail_message = '<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Enquiry Notification</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333333;
    }
    .email-container {
      max-width: 600px;
      margin: 20px auto;
      background-color: #ffffff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .header {
      background-color: #1c2b4a;
      text-align: center;
      padding: 20px;
    }
    .header img {
      max-height: 50px;
    }
    .sub-header {
      background-color: #d9a51c;
      color: #1c2b4a;
      font-weight: bold;
      padding: 10px 20px;
      text-align: center;
      font-size: 14px;
    }
    .content {
      padding: 20px;
    }
    .content p {
      margin: 10px 0;
    }
    .enquiry-table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 15px;
    }
    .enquiry-table td {
      padding: 8px 5px;
      border-bottom: 1px solid #e0e0e0;
    }
    .enquiry-table td.label {
      font-weight: bold;
      width: 40%;
    }
    .product-interest {
      display: inline-block;
      background-color: #e0e7ff;
      color: #1c2b4a;
      padding: 5px 10px;
      border-radius: 4px;
      font-weight: bold;
      margin-bottom: 15px;
    }
    .footer {
      background-color: #f4f4f4;
      color: #777777;
      text-align: center;
      padding: 15px;
      font-size: 12px;
    }
    
    
    
a{
    color: #d9a51c;
    margin-top: 10px;
    font-size: 14px;
    letter-spacing: 1px;
     text-decoration:none !important;
}
    
  a:hover{
    color: #d9a51c;
    margin-top: 10px;
    font-size: 14px;
    letter-spacing: 1px;
    text-decoration:none !important;
}  
    
    
    
  </style>
</head>
<body>
  <div class="email-container">
    
    <!-- Header -->
    <div class="header">
      <img src="https://www.urjasteels.com/images/urja/urja-logo.png" alt="Urja Steels Logo">
      <p style="color:#d9a51c; margin-top: 10px; font-size: 14px; letter-spacing: 1px;">
        <a href="https://www.urjasteels.com/round-bars-manufacturer-india">ROUND BARS</a>  <a href="https://www.urjasteels.com/bright-bars-manufacturer-india">BRIGHT BARS</a>  <a href="https://www.urjasteels.com/hot-rolled-coils">HR COIL</a>  <a href="https://www.urjasteels.com/steel-pipes-and-honed-tubes">PIPES</a>  <a href="https://www.urjasteels.com/steel-billets-manufacturers">BILLETS</a> 
      </p>
    </div>

    <!-- Sub-header / Alert -->
    <div class="sub-header">
      ⚡ NEW ENQUIRY RECEIVED — ACTION REQUIRED
    </div>

    <!-- Content -->
    <div class="content">
      <p>Hello Team,</p>
      <p>A new enquiry has been submitted via the Urja Steels website contact form.</p>
      <p style="font-size:12px; color:#555555;">
        Received: '.date('Y-m-d H:i:s').' | Source: <a href="https://urjasteels.com/contact-us" style="color:#1c2b4a; text-decoration:none;">urjasteels.com/contact-us</a>
      </p>

      <div class="product-interest">
        📦 PRODUCT INTEREST: '.$product.'
      </div>

      <table class="enquiry-table">
        <tr>
          <td class="label">Full Name</td>
          <td>'.$first_name.' '.$last_name.'</td>
        </tr>
        <tr>
          <td class="label">Company Name</td>
          <td>'.$company.'</td>
        </tr>
        <tr>
          <td class="label">Mobile</td>
          <td>'.$mobile.'</td>
        </tr>
        <tr>
          <td class="label">WhatsApp</td>
          <td>'.$whatsapp_mobile.'</td>
        </tr>
        <tr>
          <td class="label">Email</td>
          <td>'.$email.'</td>
        </tr>
        <tr>
          <td class="label">City / State</td>
          <td>'.$city.' '.$state.'</td>
        </tr>
		<tr>
          <td class="label">Country</td>
          <td>'.$country.'</td>
        </tr>
        <tr>
          <td class="label">Quantity Required</td>
          <td>'.$quantity.'</td>
        </tr>
      </table>
    </div>

    <!-- Footer -->
    <div class="footer">
      &copy; '.date('Y').' Urja Steels. All rights reserved.
    </div>

  </div>
</body>
</html>';
               
				
				
				if($_SERVER['HTTP_HOST'] != 'localhost'){
				
				
				$recipient = ADMIN_MAIL;
				$message = $mail_message;  
			
				$headers = "Content-Type: text/html; charset=UTF-8\r\n";
				$headers .= 'From: '.trim(WEBSITE_NAME). '<'.FROM_MAIL.'>'."\r\n";
				 $subject = 'New contact form has been recived from '.WEBSITE_NAME.'. date - '.date('d-m-Y');
				$headers .= 'Cc: manjit@rtpltech.com' . "\r\n"; 

				mail($recipient, $subject, $message, $headers); 
				
				
				
			  }

				
				
				
				
				
				
				
				
			       echo '{ "alert": "alert alert-success alert-dismissable", "message": "Your message has been sent successfully!" }';
			  
			  
	}else{
		echo '{ "alert": "alert alert-danger alert-dismissable", "message": "Your message could not been sent!" }';
	}
	
	
	
	
	
	
	
?>