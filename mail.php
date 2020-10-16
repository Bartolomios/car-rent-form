<?php
$name = isset($_POST['name']) ? $_POST['name'] : "";
$email = isset($_POST['email']) ? $_POST['email'] : "";
$surname = isset($_POST['surname']) ? $_POST['surname'] : "";
$phone = isset($_POST['phone']) ? $_POST['phone'] : "";

$startDate = isset($_POST['startDate']) ? $_POST['startDate'] : null;
$startHour = isset($_POST['startHour']) ? $_POST['startHour'] : null;
$startLocation = isset($_POST['startLocation']) ? $_POST['startLocation'] : null;
$endDate = isset($_POST['endDate']) ? $_POST['endDate'] : null;
$endHour = isset($_POST['endHour']) ? $_POST['endHour'] : null;
$endLocation = isset($_POST['endLocation']) ? $_POST['endLocation'] : null;
$segment = isset($_POST['segment']) ? $_POST['segment'] : null;
$standard = isset($_POST['standard']) ? $_POST['standard'] : null;
$deposit = isset($_POST['deposit']) ? $_POST['deposit'] : null;
$ac = isset($_POST['ac']) ? $_POST['ac'] : null;
$limit = isset($_POST['kmLimit']) ? $_POST['kmLimit'] : null;
$costPerDay = isset($_POST['costPerDay']) ? $_POST['costPerDay'] : null;
$accesories = isset($_POST['accesories']) ? $_POST['accesories'] : null;
$days = isset($_POST['days']) ? $_POST['days'] : null;
$totalPrice = isset($_POST['totalPrice']) ? $_POST['totalPrice'] : null;

   



$to      = '*@mail.pl';
$subject = 'Wycena Online';

$headers = "Content-Type: text/html; charset=UTF-8\r\n" . 'From: net-rent.com.pl' . "\r\n" .
    'Reply-To: kontakt@net-rent.com.pl' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$message = 
'<h2>Wycena Online</h2>
<p><strong>Imię i nazwisko:</strong> ' . $name . ' ' . $surname . ' </p>
<p><strong>email: </strong> ' . $email . '</p>
<p><strong>Telefon: </strong>' . $phone . '</p>
<br/>
<p><strong>DATA WYDANIA: </strong>' . $startDate .'</p>
<p><strong>GODZINA WYDANIA:</strong> ' . $startHour .'</p>
<p><strong>MIEJSCE WYDANIA: </strong>' . $startLocation .'</p>
<br/>
<p><strong>DATA ZWROTU: </strong>' . $endDate .'</p>
<p><strong>GODZINA ZWROTU: </strong>' . $endHour .'</p>
<p><strong>MIEJSCE ZWROTU: </strong>' . $endLocation .'</p>
<br/>
<p><strong>SEGMENT:</strong> ' . $segment .'</p>
<p><strong>STANDARD:</strong> ' . $standard .'</p>
<p><strong>KAUCJA: </strong>' . $deposit .' zł</p>
<p><strong>UDZIAŁ WŁASNY ZA SZKODY AC: </strong>' . $ac .' zł</p>
<p><strong>LIMIT KM / 1 DOBA:</strong> ' . $limit .' zł</p>
<p><strong>DODATKI: </strong>' . $accesories .'</p>
<p><strong>CZYNSZ NAJMU / doba:</strong> ' . $costPerDay .' zł</p>
<p><strong>ŁĄCZNA ILOŚĆ DÓB:</strong> ' . $days .'</p>
<br/>
<p><strong>CAŁKOWITY CZYNSZ NAJMU: </strong>' . $totalPrice .' zł</p>
';



mail($to, $subject, $message, $headers);

$message2 ='
<center><p>Dziękujemy za przesłanie formularza. Wkrótce nasz konsultant skontaktuje się z Państwem.</p></center>';


mail($email, $subject, $message2, $headers);


?>

<!-- $to      = ''; -->