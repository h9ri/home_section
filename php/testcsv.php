<?php
require_once 'parsecsv.lib.php';
$csv =new parseCSV('data/header.csv');
echo "<pre>";
print_r($csv->data);
echo "</pre>";
$arr=$csv->data;
$arr1=$arr[0];
echo "<pre>";
print_r($arr1);
echo "</pre>";
echo "<pre>";
print_r($arr1['Menu_1']);
foreach ($arr1 as $key => $value) {
  print_r($value);
  echo " ";
}
echo "</pre>";
// print_r $arr1['Menu1'];
$csv_2=new parseCSV('data/labinfo.csv');
echo "<pre>";
print_r($csv_2);
echo "</pre>";

?>
