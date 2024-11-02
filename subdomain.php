<?php
	
	function cloudflare_add_record($apikey,$email,$domain,$zoneid,$record_name,$value,$proxy=false,$ttl=1,$type='A'){

					$ch = curl_init("https://api.cloudflare.com/client/v4/zones/".$zoneid."/dns_records");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
					curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
					curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'X-Auth-Email: '.$email.'',
					'X-Auth-Key: '.$apikey.'',
					'Cache-Control: no-cache',
				        'Content-Type: multipart/form-data; charset=utf-8',
				    'Content-Type:application/json',
					'purge_everything: true'
					
					));
				
					$data = array(
					
						'type' => ''.$type.'',
						'name' => ''.$record_name.'',
						'content' => ''.$value.'',
						'zone_name' => ''.$domain.'',
						'zone_id' => ''.$zoneid.'',
						'proxiable' => 'true',
						'proxied' => $proxy,
						'ttl' => $ttl
					);
					
					$data_string = json_encode($data);

					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);	
					curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data_string));

					$sonuc = curl_exec($ch);

					curl_close($ch);	

					return $sonuc;

	}
	

	$apikey = '8314a2477fdd0c9c027d1ad993d5f20645b50';
	$email = 'www.uno.mom@gmail.com';
	$domain = 'uno.mom';
	$zoneid = 'a94af746d4f3c607f141dd084b266399';
	
	$record_name = $_GET['record_name'];
	$type = $_GET['type'];
	$value = $_GET['value'];
	
?>
<form method="GET" action="subdomain.php">
<br>Subdomain <input type="text" name="record_name" value="">.uno.mom<br>
A <input type="radio" name="type" value="A">
NS <input type="radio" name="type" value="NS"> 
CNAME <input type="radio" name="type" value="CNAME"><br>
Content <input type="text" name="value" value=""><br>
<input type="submit" value="Register"><br>
</form>
