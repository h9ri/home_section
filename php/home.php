<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WTL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/home.js" charset="utf-8"></script>
  </head>
  <body>
<?php
require_once 'parsecsv.lib.php';
$csv_1 =new parseCSV('data/header.csv');
$arr_header=$csv_1->data[0];
$csv_2=new parseCSV('data/labinfo.csv');
$csv_3=new parseCSV('data/job.csv');
$csv_4=new parseCSV('data/internship.csv');
$arr_labinfo=$csv_2->data[0];
$arr_jobinfo=$csv_3->data[0];
$arr_internshipinfo=$csv_4->data[0];
$nos=count($csv_3->data)+count($csv_4->data);
echo "<div class=\"header__\">";
echo "<div class=\"title__\">";
echo "<h1>".$arr_labinfo['Title']."</h1>"."<h2>/ ".$arr_labinfo['Subtitle']."</h2>";
echo "</div>";
echo "<div  class=right_floter>"; //error
echo "<a href=\"#hom_sec\" class=\"news__\"><div class=\"nos__\">".$nos."</div>".$arr_header['Menu_1']."</a>"; //error
echo "<div class=\"nav_menus__\">";
$count=0;
foreach ($arr_header as $key => $value) {
    if($count!=0){
    echo "<a href=\"#".$value."\">".$value."</a>";
  }
  $count=1;
}
echo "</div>";
echo "</div>";
echo"<span style=\"cursor:pointer\" class=\"sandwichbutton__\" onclick=\"openNav()\">"."&#9776;"."</span>";
echo "</div>";
echo "<div class=\"sidenav__\" id=\"mySidenav\">";
$count=0;
echo "<a class=\"closebtn__\" onclick=\"closeNav()\">"."&times;"."</a>";
foreach ($arr_header as $key => $value) {
    if($count!=0){
    echo "<a href=\"#".$value."\">".$value."</a>";
  }
  $count=1;
}
echo "<div href=\"#hom_sec\" class=\"news__\"><div class=\"nos\">".$nos."</div>".$arr_header['Menu_1']."</div>"; //error
echo "</div>";
?>
  

  </body>
</html>
