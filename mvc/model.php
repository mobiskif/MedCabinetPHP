<?php
class Model {
    function __construct() {
        $this->name="Model";
		$this->template="template1";
    }

	function action($a,$r) {
		$this->result='';
		switch ($a) {
			case "default":
				$this->result='Welcome!';
				break;
			case "video":
				$this->result='<object width=322 height=259><param name="allowfullscreen" value="true"></param><param name="allowscriptaccess" value="always"></param><param name="flashvars" value="channel=TEST&broadcast=true"></param><param name="movie" value="http://talxy.com/i/p2p.swf"></param><embed src="http://talxy.com/i/p2p.swf" allowfullscreen="true" allowscriptaccess="always" flashvars="channel=TEST&broadcast=true" type="application/x-shockwave-flash" width=322 height=259></embed></object>';
				break;
			case "patient":
				$this->result=sql_select("select * from objects where type='$a'","table");
				break;
			case "doctor":
				$this->result=sql_select("select name, CONCAT('<img src=\"images/', image, '\" width=\"128\" />') as img from jos151_contact_details","table");
				break;
			case "illness":
				$this->result=sql_select("select count(addr) as cnt, agent from log group by agent order by cnt desc limit 25","table");
				break;
			case "center":
				$this->result=sql_select("select * from objects where type='$a'","table");
				break;
			case "search":
				//$this->result=$r["query"];
				$this->result=mail($r["query"], 'subject', 'Тестовое сообщение');
				break;
			case "login":
				$this->result=$r["login"];
				break;
			case "mvc":
				$this->result='<object width=100% height=380><param name="allowfullscreen" value="true"></param><param name="allowscriptaccess" value="always"></param><param name="flashvars" value="channel=TEST&broadcast=true"></param><param name="movie" value="media/MVC.jpg"></param><embed src="media/MVC.jpg" allowfullscreen="true" allowscriptaccess="always" flashvars="channel=TEST&broadcast=true" type="application/x-shockwave-flash" width=100% height=380></embed></object>';
				break;
		}
	}

}
?>