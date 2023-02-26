<?php
    $name = $_POST['name'];
    $address_D = $_POST['address_D'];
    $address_F = $_POST['address_F'];
 	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$order_type1 = $_POST['order_gum_type1'];
	$order_diam1 = $_POST['order_gum_diam1'];
	$order_color1 = $_POST['order_gum_color1'];
	$order_meters1 = $_POST['order_gum_meters1'];
	
	$order_type2 = $_POST['order_gum_type2'];
	$order_diam2 = $_POST['order_gum_diam2'];
	$order_color2 = $_POST['order_gum_color2'];
	$order_meters2 = $_POST['order_gum_meters2'];
	
	$order_type3 = $_POST['order_gum_type3'];
	$order_diam3 = $_POST['order_gum_diam3'];
	$order_color3 = $_POST['order_gum_color3'];
	$order_meters3 = $_POST['order_gum_meters3'];
	
	$order_type4 = $_POST['order_gum_type4'];
	$order_diam4 = $_POST['order_gum_diam4'];
	$order_color4 = $_POST['order_gum_color4'];
	$order_meters4 = $_POST['order_gum_meters4'];


	$to = "info@in-ten.cz"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Objednávka z elasticke-gumolano.cz";
	$subject2 = "Wir bedanken uns bei Ihnen für Ihre Bestellung in unserem E-shop expanderseil-online.de";
	$headers = "From: IN-TEN Familly s.r.o. <info@in-ten.cz>\r\n";
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= "Content-type:text/plain; charset=UTF-8" . "\r\n";
	$headers .= "X-Priority: 3\r\n";
	$headers .= "X-Mailer: PHP". phpversion() ."\r\n";

	
	$msg="
	Objednávka z elasticke-gumolano.cz: 
 	
	$order_type1 ( $order_color1 , $order_diam1 ) -  $order_meters1 METRŮ. 
	$order_type2 ( $order_color2 , $order_diam2 ) -  $order_meters2 METRŮ. 
	$order_type4 ( $order_color4 , $order_diam4 ) -  $order_meters4 METRŮ. 
	 
    Kontaktní osoba   : $name  
    Dodací adresa     : $address_D  
    Fakturační adresa : $address_F  
    Telefon : $phone  
    E-mail  : $email  
    Popis   : $text";
	mail($to, $subject, $msg, $headers);

    $msg2="
    Sehr geehrte(r) $name ! 	 
 	
    Wir bedanken uns bei Ihnen für Ihre Bestellung in unserem E-shop expanderseil-online.de 
	Unser Manager wird Sie in Kürze kontaktieren. 
 	
 	Bestelldetails: 
 	
	$order_type1 ( $order_color1 , $order_diam1 ) -  $order_meters1 meter. 
	$order_type2 ( $order_color2 , $order_diam2 ) -  $order_meters2 meter. 
	$order_type4 ( $order_color4 , $order_diam4 ) -  $order_meters4 meter.
 	
    Kontaktperson    : $name  
    Lieferadresse    : $address_D  
    Rechnungsadresse : $address_F  
    Telefon : $phone  
    E-mail  : $email  
    Beschreibung : $text 
    
    Vielen Dank für Ihre Bestellung!";
	mail($from, $subject2, $msg2, $headers);

?>

<!--<p>Objednávka byla odeslána</p>-->
