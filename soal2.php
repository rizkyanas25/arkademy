<html>
<head>
    <title>Jawaban No.2</title>
</head>
<body>

<?php
function check_specialchar($string) {
	return preg_match('/[^a-zA-Z\d]/', $string);
}

function check_capital($string) {
	return preg_match('/[A-Z]/', $string);
}

function valid_data($password) {
	$is_valid_lenght = false;
	$is_valid_capital = false;
	$is_valid_specialchar = false;

	//check panjang karakter
	if (strlen($password) == 8) {
		$is_valid_lenght = true;	# code...
	}

	//check kapital
	if (check_capital($password)) {
		$is_valid_capital = true;
	}

	//check spesial karakter
	if (check_specialchar($password)) {
		$is_valid_specialchar = true;
	}

	if ($is_valid_lenght == true && $is_valid_capital == true && $is_valid_specialchar == true) {
		return "OK<br>";
	} else {
		return "Tidak OK<br>";
	}

}
echo valid_data('Qwerty_A');
echo valid_data('ssdga_AA');
echo valid_data('SUPER.oi');
echo valid_data('12345678');
echo valid_data('abcdefgh');
echo valid_data('lalalala');
?>
</body>
</html>