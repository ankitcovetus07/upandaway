
<?php
  $city =$_GET['term'];
  
  #$link="http://airportcode.riobard.com/search?q=".$city."&fmt=JSON";
  $link="http://maps.googleapis.com/maps/api/geocode/json?address=airport%20".$city."&sensor=false";$resArr = array(); 

 $resArr= json_decode(file_get_contents($link),true);
    #$response = get_web_page($link);

	
	#$resArr = json_decode($response,true);
	$count = count($resArr["results"]);

 $arr= array(); 

 for($i=0;$i<$count;$i++)
     $arr[$i]=$resArr["results"][$i]["formatted_address"];
     
	 //$arr[$i]=$resArr[$i]->code.','.$resArr[$i]->name.','.$resArr[$i]->location;

 echo json_encode($arr);

function get_web_page($url) {
    $options = array (CURLOPT_RETURNTRANSFER => true, // return web page
    CURLOPT_HEADER => false, // don't return headers
    CURLOPT_FOLLOWLOCATION => true, // follow redirects
    CURLOPT_ENCODING => "", // handle compressed
    CURLOPT_USERAGENT => "test", // who am i
    CURLOPT_AUTOREFERER => true, // set referer on redirect
    CURLOPT_CONNECTTIMEOUT => 120, // timeout on connect
    CURLOPT_TIMEOUT => 120, // timeout on response
    CURLOPT_MAXREDIRS => 10 ); // stop after 10 redirects

    $ch = curl_init ( $url );
    curl_setopt_array ( $ch, $options );
    $content = curl_exec ( $ch );
    $err = curl_errno ( $ch );
    $errmsg = curl_error ( $ch );
    $header = curl_getinfo ( $ch );
    $httpCode = curl_getinfo ( $ch, CURLINFO_HTTP_CODE );

    curl_close ( $ch );

    $header ['errno'] = $err;
    $header ['errmsg'] = $errmsg;
    $header ['content'] = $content;
    return $header ['content'];
}
?>
 

