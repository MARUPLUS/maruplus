<?	
	class Banner 
	{
		public $startTime;
		public $endTime;
		public $Display;
	
		public function canDisplay()
		{
			if(in_array($_SERVER['REMOTE_ADDR'], array('10.0.0.1', '10.0.0.2'))){
				return true;
			}else{
				$now = new DateTime('NOW');
				if($now->getTimestamp() >= $this->startTime->getTimestamp() && $now->getTimestamp() <= $this->endTime->getTimestamp()){
					return true;
				}else{
					return false;				
				}
			}
		}
	}


	/////////// sample ///////////

	date_default_timezone_set('Asia/Tokyo');
	
	$banner = new banner;
	$banner->startTime = new DateTime('2014-08-10T12:00:00+0900');
	$banner->endTime = new DateTime('2015-07-11T12:00:00+0900');
	$banner->display = $banner->canDisplay();

	print_r($banner);

?>


