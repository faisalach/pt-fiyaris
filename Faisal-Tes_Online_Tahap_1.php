<style>
	table{
		display: inline-block;
	}
</style>
<?php
// Soal No  1
echo "1.";
echo "<br>";
echo "i. ";

$print 	= '';
for ($i=1; $i < 16; $i+=2) { 
	$print .= $i.',';
}
$print = rtrim($print,',').'.';
echo $print;
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";


echo "2.";
echo "<br>";


echo "i.";
$tgl 		= date_create("2020-11-23");
echo date_format($tgl,'m-y-d');
echo "<br>";

echo "ii.";
$tgl 		= "2020-11-23";
echo date('Y-m-d',strtotime('+6 month',strtotime($tgl)));
echo "<br>";

echo "iii.";
$tgl 		= date_create("2020-11-23");
$tgl_lahir 	= date_create('2001-09-21');
$diff 		=  date_diff($tgl,$tgl_lahir);
echo "$diff->y Tahun $diff->m Bulan $diff->d Hari";
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";


echo "3.";
echo "<br>";
$arr 	= [20,10,100,30,15,5];


echo "i.";
sort($arr);
echo "<table border='1' cellpadding='10' cellspacing='0'>";
foreach ($arr as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo " ";


echo "ii.";
array_push($arr, '120');
echo "<table border='1' cellpadding='10' cellspacing='0'>";
foreach ($arr as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo " ";

echo "iii.";
$dicari 		= 10;
$index 			= array_search($dicari,$arr);
$banyak_data 	= 1;
array_splice($arr, $index,$banyak_data);
echo "<table border='1' cellpadding='10' cellspacing='0'>";
foreach ($arr as $key => $value) {
	echo "<tr>";
	echo "<td>";
	echo $key;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo "</td>";
	echo "</tr>";
}
echo "</table>";
echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";


echo "4.";
echo "<br>";
echo "i.";
$string 	= "Aku Suka Makan Nasi Padang";
$exp 		= explode(" ", $string);
$array1 	= [];
for ($i = 0 ; $i < count($exp); $i++) {
	$str 	= '';
	if ($i-1 >= 0) {
		$str 		= $array1[count($array1)-1];
	}
	$array1[]	= $str.' '.$exp[$i];
	
}
$exp2 	= $exp;
for ($i = count($exp2)-1; $i >= 0; $i--) {
	$str 	= '';
	if (($i+1) <=  count($exp2)-1 ) {
		$str 		= $array1[count($array1)-1];
	}
	$array1[]	= $str.' '.$exp2[$i];
}


print_r($array1);



// $a=array("red","green");
// $b=[];
// array_push($b,"blue","yellow","asd","asdsad");
// sort($b);
// print_r($b);

// $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
// $a2=array("a"=>"purple","b"=>"orange");
// array_splice($a1,3,1);
// print_r($a1);

// $tgl1 = date('Y-m-d');
// $tgl2 = date('Y-m-d', strtotime('-19 year -6 month -1 day', strtotime($tgl1)));
// echo $tgl2;

