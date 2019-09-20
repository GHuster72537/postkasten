<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'https://postkasten.cf/',
	'homepage_url' => 'https://postkasten.cf/index.html',
	'icon' => '',
	'version' => '16.2.1.0',
	'sitename' => 'Postkasten.cf',
	'lang_code' => 'de-DE',
	'public_folder' => '',
	'salt' => 'w6h0waayolv2c3myplv96rkbdyirzdnjgc6tdsls4zu8g6xw58',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false,
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Wortprüfung:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'notification_public_key' => 'e700b3ad00253c02',
	'notification_private_key' => 'a11d65a048253633',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Sehr geehrter Kunde,<br /><br />Vielen Dank für Ihren Einkauf. Hiermit erhalten Sie eine Zusammenfassung Ihrer Bestellung.<br /><br />Nachstehend finden Sie die Liste der bestellten Produkte, die Rechnungsinformationen sowie Hinweise zu der von Ihnen gewählten Versand- und Zahlungsart.',
	'email_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team.',
	'email_digital_shipment_opening' => 'Sehr geehrte Kundin, sehr geehrter Kunde,<br /><br />vielen Dank für Ihren Einkauf. Nachstehend finden Sie die Liste der Download-Links für die bestellten Produkte:',
	'email_digital_shipment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'email_physical_shipment_opening' => 'Sehr geehrte Kundin, sehr geehrter Kunde,<br /><br />vielen Dank für Ihren Einkauf. Nachstehend finden Sie die Liste der an Sie versendeten Produkte:',
	'email_physical_shipment_closing' => 'Für weitere Informationen stehen wir Ihnen gern zur Verfügung.<br /><br />Mit freundlichen Grüßen, Ihr Vertriebs-Team',
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => '',
	'vat_type' => 'included'
));

$ecommerce->setDigitalProductsData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();
/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(
	'template' => array(
),
	'pages' => array(

	)
);

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 16.2.1 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFF800" style="background-color: #FFF800;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Open Sans\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Open Sans\'; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Die in dieser E-Mail enthaltenen Informationen sind ausschließlich für den genannten Empfänger bestimmt.<br>Sollten Sie diese E-Mail fälschlicherweise erhalten haben, informieren Sie bitte umgehend den Absender und  löschen Sie die Nachricht, ohne Kopien zu erstellen.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#FFF800';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Open Sans\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Open Sans;';

// End of file x5settings.php