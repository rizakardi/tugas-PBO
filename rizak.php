<h1> XIOMI STORE</h1>
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
$XIOMI = new smartphone();
$XIOMI->setmerk('XIOMI 6A');
$XIOMI->setharga('2.000.000');
$XIOMI->setram('2');
$XIOMI->setcamera('13mp');
$XIOMI->setcsnapdragon('636');
$XIOMI->cetak();
echo "<br>";
echo "<br>";
$XIOMI = new smartphone();
$XIOMI->setmerk('XIOMI 5A');
$XIOMI->setharga('1.500.000');
$XIOMI->setram('2');
$XIOMI->setcamera('16mp');
$XIOMI->setcsnapdragon('736');
$XIOMI->cetak();
echo "<br>";
echo "<br>";
$XIOMI = new smartphone();
$XIOMI->setmerk('XIOMI S 2');
$XIOMI->setharga('2.500.000');
$XIOMI->setram('4');
$XIOMI->setcamera('21mp');
$XIOMI->setcsnapdragon('850');
$XIOMI->cetak();
echo "<br>";
echo "<br>";
 ?>