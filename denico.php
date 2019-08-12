<h1> samsung STORE</h1>
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
$samsung = new smartphone();
$samsung->setmerk('samsung m20');
$samsung->setharga('2.000.000');
$samsung->setram('2');
$samsung->setcamera('13mp');
$samsung->setcsnapdragon('636');
$samsung->cetak();
echo "<br>";
echo "<br>";
$samsung = new smartphone();
$samsung->setmerk('samsung j2');
$samsung->setharga('1.500.000');
$samsung->setram('2');
$samsung->setcamera('16mp');
$samsung->setcsnapdragon('736');
$samsung->cetak();
echo "<br>";
echo "<br>";
$samsung = new smartphone();
$samsung->setmerk('samsung m10');
$samsung->setharga('2.500.000');
$samsung->setram('4');
$samsung->setcamera('21mp');
$samsung->setcsnapdragon('850');
$samsung->cetak();
echo "<br>";
echo "<br>";
 ?>