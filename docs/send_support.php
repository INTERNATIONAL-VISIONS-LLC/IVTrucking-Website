<?php
function clean_text($value){ return trim(str_replace(["\r","\n"], ' ', strip_tags($value ?? ''))); }
$name = clean_text($_POST['name'] ?? '');
$phone = clean_text($_POST['phone'] ?? '');
$address = clean_text($_POST['address'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL) ? $_POST['email'] : '';
$message = trim(strip_tags($_POST['message'] ?? ''));

$to = 'support@internationalvisionsllc.org';
$subject = 'New IVLLC general contact inquiry';
$body = "<html><body style='font-family:Arial,sans-serif;background:#071019;color:#f5f8fc;padding:24px;'><div style='max-width:720px;margin:auto;background:#0c1723;border:1px solid rgba(255,255,255,.12);border-radius:20px;padding:24px;'><h1 style='color:#e0c174;'>International Visions LLC Support Inquiry</h1><p><strong>Name:</strong> ".htmlspecialchars($name)."</p><p><strong>Telephone:</strong> ".htmlspecialchars($phone)."</p><p><strong>Email:</strong> ".htmlspecialchars($email)."</p><p><strong>Address:</strong> ".htmlspecialchars($address)."</p><p><strong>Message:</strong><br>".nl2br(htmlspecialchars($message))."</p></div></body></html>";
$headers = "MIME-Version: 1.0\r\nContent-Type: text/html; charset=UTF-8\r\nFrom: International Visions LLC <support@internationalvisionsllc.org>\r\n";
if($email){ $headers .= "Reply-To: ".$email."\r\n"; }
@mail($to,$subject,$body,$headers);
if($email){
  $confirm = "<html><body style='font-family:Arial,sans-serif;background:#071019;color:#f5f8fc;padding:24px;'><div style='max-width:720px;margin:auto;background:#0c1723;border:1px solid rgba(255,255,255,.12);border-radius:20px;padding:24px;'><h1 style='color:#e0c174;'>Thank you for contacting International Visions LLC</h1><p>Our team has received your message and will respond as soon as possible.</p><p>If your request is freight-pricing related, you can also complete the full quote form with pickup, destination, weight and preferred delivery details.</p><p style='color:#aab8c4;'>The Heartbeat of Shipping</p></div></body></html>";
  @mail($email,'International Visions LLC received your message',$confirm,$headers);
}
header('Location: support.php?sent=1');
exit;
?>