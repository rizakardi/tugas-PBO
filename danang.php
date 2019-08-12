<h1> evercroos STORE</h1>
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
$evercroos = new smartphone();
$evercroos->setmerk('evercroos 6A');
$evercroos->setharga('2.000.000');
$evercroos->setram('2');
$evercroos->setcamera('13mp');
$evercroos->setcsnapdragon('636');
$evercroos->cetak();
echo "<br>";
echo "<br>";
$evercroos = new smartphone();
$evercroos->setmerk('evercroos 5A');
$evercroos->setharga('1.500.000');
$evercroos->setram('2');
$evercroos->setcamera('16mp');
$evercroos->setcsnapdragon('736');
$evercroos->cetak();
echo "<br>";
echo "<br>";
$evercroos = new smartphone();
$evercroos->setmerk('evercroos S 2');
$evercroos->setharga('1.800.000');
$evercroos->setram('4');
$evercroos->setcamera('21mp');
$evercroos->setcsnapdragon('850');
$evercroos->cetak();
echo "<br>";
echo "<br>";
 ?>