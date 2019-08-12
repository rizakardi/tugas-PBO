<h1> asus STORE</h1>
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
$asus = new smartphone();
$asus->setmerk('asus maxpro');
$asus->setharga('1.000.000');
$asus->setram('1');
$asus->setcamera('13mp');
$asus->setcsnapdragon('636');
$asus->cetak();
echo "<br>";
echo "<br>";
$asus = new smartphone();
$asus->setmerk('asus m2');
$asus->setharga('1.500.000');
$asus->setram('2');
$asus->setcamera('16mp');
$asus->setcsnapdragon('736');
$asus->cetak();
echo "<br>";
echo "<br>";
$asus = new smartphone();
$asus->setmerk('asus go');
$asus->setharga('2.500.000');
$asus->setram('2');
$asus->setcamera('21mp');
$asus->setcsnapdragon('850');
$asus->cetak();
echo "<br>";
echo "<br>";
 ?>