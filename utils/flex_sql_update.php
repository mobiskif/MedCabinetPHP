<?php
require_once ('../configuration.php');
$config = new JConfig();

$mysql = mysql_connect($config->host, $config->user, $config->password);
mysql_select_db( $config->db );

$r ='<?xml version="1.0" encoding="utf-8"?>';
$r.='<query>';

$query = isset($_REQUEST["query"]) ? $_REQUEST["query"] : "SELECT * FROM jos_session";

$result = mysql_query( $query );
?>