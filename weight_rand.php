<?

	//simple
	$db_arr = array('db1','db1','db2','db3');
	$db = $db_arr[rand(0,3)];
	echo $db;
	
	
	//common
	function getRandomWeightedElement(array $values, array $weights) {
		$weightedValues = array_combine($values, $weights);
		$rand = mt_rand(1, (int) array_sum($weightedValues));
		
		foreach ($weightedValues as $key => $value) {
			$rand -= $value;
			if ($rand <= 0) {
				return $key;
			}
		}
	}
	$db = getRandomWeightedElement(array('db1','db2','db3'), array(50,25,25));
	echo $db;
?>
