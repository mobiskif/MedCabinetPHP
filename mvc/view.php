<?php
class View {
	function __construct($m, $c) {
	$this->name="Application";
        $this->model=$m;
        $this->controller=$c;

$this->topmenu='<ul class="menu">
<li><a href="?action=about">About</a></li>
<li><a href="?action=contacts">Contacts</a></li>
<li><a href="?template=template1">Light</a></li>
<li><a href="?template=template2">Dark</a></li>
</ul>';

$this->leftmenu='<ul class="menu">
<li><a href="?action=patient">Patient</a></li>
<li><a href="?action=doctor">Doctor</a></li>
<li><a href="?action=illness">Illness</a></li>
<li><a href="?action=center">Center</a></li>
<li>&nbsp;</li>
<li><a href="?action=video">Video</a></li>
<li><a href="?action=mvc">MVC</a></li>
</ul>';
    }

	function showModel() {
		//header('Content-Type: text/html; charset=utf-8'); 
		include ("head.html");
		include ($this->model->template."/layout.php");
		include ("foot.html");
	}
}
?>