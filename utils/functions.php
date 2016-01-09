<?php
	function sql_select($q, $type="xml") {
		$mysql = mysql_connect("mysql2.freehostia.com", "johdoe428_ei", "router");
		mysql_select_db( "johdoe428_ei" );
		mysql_query("set names utf8"); //SET character_set_server=koi8r;
		$result = mysql_query( $q );
		if ($type=="xml") {
			$r ='<?xml version="1.0" encoding="utf-8"?>';
			$r.='<query>';
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
		}
		else {
			$r ='<table>';
			while ($obj=mysql_fetch_object($result)){
				$vars=get_object_vars($obj);
				$keys=array_keys($vars);
				$r.='<tr>';
				foreach ($keys as $k) {
					//$r.=mb_detect_encoding ($obj->$k);
					//$r.='<td>'.mb_convert_encoding($obj->$k,"UTF8", "CP1251").'</td>';
					//$r.='<td>'.mb_convert_encoding($obj->$k,"cp-1251","auto").'</td>';
					//iconv('UTF-8', 'ASCII', $obj->$k);
					$r.='<td>'.$obj->$k.'</td>';

				}
				$r.='</tr>';
			}
			$r.='</table>';
		}
		return $r;
	}
?>