<h1> OPPO STORE</h1>
<?php 
class smartphone{
	var $merk;
	var $harga;
	var $ram;
	var $camera;
	var $snapdragon;
	public function setmerk ($merk=''){
		$this->merk=$merk;
	}
		public function setharga ($harga=''){
		$this->harga=$harga;
	}
		public function setram ($ram=''){
		$this->ram=$ram;
	}
		public function setcamera ($camera=''){
		$this->camera=$camera;
	}
		public function setcsnapdragon ($snapdragon=''){
		$this->snapdragon=$snapdragon;
	}
	public function cetak (){
		echo 'merk:'.$this->merk;
		echo "<br>";
		echo 'harga:'.$this->harga;
		echo "<br>";
		echo 'ram:'.$this->ram;
		echo "<br>";
		echo 'camera:'.$this->camera;
		echo "<br>";
		echo 'snapdragon:'.$this->snapdragon;
	}

}
$oppo = new smartphone();
$oppo->setmerk('oppo A7');
$oppo->setharga('2000.000');
$oppo->setram('4');
$oppo->setcamera('15mp');
$oppo->setcsnapdragon('636');
$oppo->cetak();
echo "<br>";
echo "<br>";
$oppo = new smartphone();
$oppo->setmerk('oppo j7');
$oppo->setharga('3000.000');
$oppo->setram('4');
$oppo->setcamera('16mp');
$oppo->setcsnapdragon('836');
$oppo->cetak();
echo "<br>";
echo "<br>";
$oppo = new smartphone();
$oppo->setmerk('oppo c3');
$oppo->setharga('2000.000');
$oppo->setram('4');
$oppo->setcamera('21mp');
$oppo->setcsnapdragon('850');
$oppo->cetak();
echo "<br>";
echo "<br>";
 ?>