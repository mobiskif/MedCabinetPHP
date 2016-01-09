<?php 
//header("Content-Type: text/html; charset=utf-8");

require_once ('../configuration.php');
$config = new JConfig();

$mysql = mysql_connect($config->host, $config->user, $config->password);
mysql_select_db( $config->db );

$r ='<?xml version="1.0" encoding="utf-8"?>';
$r.='<query>';

$query = isset($_REQUEST["query"]) ? $_REQUEST["query"] : "SELECT * FROM jos_session";
/*
$result = mysql_query( $query );
while ($obj=mysql_fetch_object($result)){
	$vars=get_object_vars($obj);
	$keys=array_keys($vars);
	$r.='<row>';
	foreach ($keys as $k) {
		$r.='<'.$k.'>';
		$r.=mb_convert_encoding($obj->$k,"UTF8", "CP1251");
		$r.='</'.$k.'>';		
	}
	$r.='</row>';
}
$r.='</query>';
echo ($r);
*/
echo "kuku";
/**/
?>