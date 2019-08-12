<h1> lenovo STORE</h1>
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
$lenovo = new smartphone();
$lenovo->setmerk('lenovo a 1000');
$lenovo->setharga('1.000.000');
$lenovo->setram('2');
$lenovo->setcamera('13mp');
$lenovo->setcsnapdragon('636');
$lenovo->cetak();
echo "<br>";
echo "<br>";
$lenovo = new smartphone();
$lenovo->setmerk('lenovo a 7000');
$lenovo->setharga('2.500.000');
$lenovo->setram('2');
$lenovo->setcamera('16mp');
$lenovo->setcsnapdragon('736');
$lenovo->cetak();
echo "<br>";
echo "<br>";
$lenovo = new smartphone();
$lenovo->setmerk('lenovo a 6000');
$lenovo->setharga('2.000.000');
$lenovo->setram('4');
$lenovo->setcamera('21mp');
$lenovo->setcsnapdragon('850');
$lenovo->cetak();
echo "<br>";
echo "<br>";
 ?>