
header('refresh:3; url=/cuzdan/login/login.php');
	
echo "<div class='after-register'>$text</div>";

echo "<style 
type='text/css'>
div.after-register {
    position: absolute;
    background: #3abebf1f;
    padding: 20px 50px;
    border-radius: 5px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
	font-size: 18px;
	
}

div.after-register b:after {
  content: '.';
  animation: dots 1.5s steps(5, end) infinite;
  }

@keyframes dots {
  0%, 20% {
    color: rgba(0,0,0,0);
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  40% {
    color: black;
    text-shadow:
      .25em 0 0 rgba(0,0,0,0),
      .5em 0 0 rgba(0,0,0,0);}
  60% {
    text-shadow:
      .25em 0 0 black,
      .5em 0 0 rgba(0,0,0,0);}
  80%, 100% {
    text-shadow:
      .25em 0 0 black,
      .5em 0 0 black;}}
</style>";

/*
$user_data = [
    'name' => $_POST['name'],
    'surname' => $_POST['surname'],
    'mail' => $_POST['mail'],
	'password' => $_POST['password'],
	'phone' => $_POST['phone'],
	'brith_day' => $_POST['brith_day'],
	'gender' => $_POST['gender'],
	'commercial_title' => $_POST['commercial_title'],
	'company_type' => $_POST['company_type'],
	'mersis_no' => $_POST['mersis_no'],
	'registration_number' => $_POST['registration_number'],
	'tax_admin' => $_POST['tax_admin'],
	'tax_number' => $_POST['tax_number'],
	'address' => $_POST['address'],
	'country' => $_POST['country'],
	'city' => $_POST['city'],
	'identity_number' => $_POST['identity_number'],
	'bank' => $_POST['bank'],
	'iban' => $_POST['iban'],
	'currency' => $_POST['currency']
];
*/



// Variables

$gender = isset( $_POST['gender'] ) ? $_POST['gender'] : '';

$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$commercial_title = $_POST['reg_type'] == 'business' ? $_POST['commercial_title'] : '';

$company_type = $_POST['reg_type'] == 'business' ? $_POST['company_type'] : '';

$mersis_no = $_POST['reg_type'] == 'business' ? $_POST['mersis_no'] : '';

$registration_number = $_POST['reg_type'] == 'business' ? $_POST['registration_number'] : '';

$tax_admin = $_POST['reg_type'] == 'business' ? $_POST['tax_admin'] : '';

$tax_number = $_POST['reg_type'] == 'business' ? $_POST['tax_number'] : '';

// Start sql object...

$insert = $db->prepare( "INSERT INTO users ( ad, soyad, mail, sifre, telefon, dogum_tarihi, cinsiyet, ticari_unvan, sirket_tipi, mersis_no, sicil_no, vergi_dairesi, vergi_no, adres, ulke, sehir, kimlik_no, banka, iban, doviz_tipi, reg_date, reg_type  )
VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" );

$insert->execute( [$_POST['name'], $_POST['surname'], $_POST['mail'], $password , $_POST['phone'], $_POST['brith_day'], $gender, $commercial_title, $company_type, $mersis_no, $registration_number, $tax_admin, $tax_number, $_POST['address'], $_POST['country'], $_POST['city'], $_POST['identity_number'], $_POST['bank'], $_POST['iban'], $_POST['currency'], date('d-m-y h:i:s'), $_POST['reg_type']] );

// And sql object

?>