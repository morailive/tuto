$wrd_1 = strtolower($wrd_1);
	$wrd_2 = strtolower($wrd_2);

	for($iter=0; $iter < strlen($wrd_1); $iter++) {
		$char = substr($wrd_1, $iter, 1);
		if (substr_count($wrd_1,$char)!=substr_count($wrd_2,$char)) {
			return false;
		}
	}
	for($iter=0; $iter< strlen($wrd_2); $iter++) {
		$char = substr($wrd_2, $iter, 1);
		if (substr_count($wrd_1, $char) != substr_count($wrd_2, $char)) {
			return false;
		}
	}
	return true;