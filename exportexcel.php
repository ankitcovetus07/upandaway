<?php 
echo $_REQUEST['eventid'];
die;
$r='{"firstn":"Grace","lastn":"Belo","email":"gracebelo@gmail.com","Numberofadult":"2","adult_name":["Grace","Micheal"],"adult_radio1":"Discover Ski2","adult_radio2":"Discover Ski2","menu-607":"5","age":["7","9","10","12","13"],"radio1_":"Discover Ski1","radio2_":"Discover Ski1","radio3_":"Discover Ski1","radio4_":"Discover Ski1","radio5_":"Discover Ski1"}';
$data=json_decode($r,true);
#print_r($v);

 function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $content=array();
  foreach($data as $k=>$v) {
   
   echo $title[]=$k. "\t";
   $content[]=$v;
      
  }
   echo "\r";
  foreach($content as $v)
  {
   if(count($v)>1)
   {
    $r='';
    foreach($v as $kk)
    {
     $r.=$kk.',';
    }
    echo $r. "\t";
   }
   else
   {
    echo $v. "\t"; 
   }
  }
  exit;

?>