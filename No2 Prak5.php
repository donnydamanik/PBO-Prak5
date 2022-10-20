<!--- Nama    : AHMAD DONNY DAMANIK
      NIM     : 21091397008
      Kelas   : 2021 B---> 
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBO - Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2>Soal Nomor 2</h2>

        <?php
class Pegawai
{
	public  $nama;
	public $gaji;
	public	function __construct($nama, $gaji)
	{
		$this->nama = $nama;
		$this->gaji = $gaji;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
}
class Manajer extends Pegawai
{
	private $tunjangan;
	public	function __construct($nama, $gaji, $tunjangan)
	{
		parent::__construct($nama, $gaji);
		$this->tunjangan = $tunjangan;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoTunjangan()
	{
		return $this->tunjangan;
	}
}
class Programmer extends Pegawai
{
	private $bonus;
	public	function __construct($nama, $gaji, $bonus)
	{
		parent::__construct($nama, $gaji);
		$this->bonus = $bonus;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoBonus()
	{
		return $this->bonus;
	}
}
class Bayaran
{
	public function hitungBayaran($peg)
	{
		$uang = $peg->infoGaji();
		
		return $uang;
	}
	public static function main($args)
	{
		echo "Ahmad Donny Damanik - 21091397008";
        echo "<br>";
		$man = new Manajer("Donny", 9700000, 8500000);
        echo "<br>", "<br>";
		$prog = new Programmer("samsudin", 5000000, 7000000); 
        echo "<br>", "<br>";
		$hr = new Bayaran();
		echo "<br> Gaji Manajer nama: ". $man->nama." = Rp. ".strval($hr->hitungBayaran($man)) , "\n";
        echo "<br>", "<br>";
		echo "<br>Gaji Programmer nama: ".$prog->nama. " = Rp. ".strval($hr->hitungBayaran($prog)) , "\n";
      
	}
}
Bayaran::main(array());
        ?>
        <!-- END PHP  -->
    </div>
</body>
</html>