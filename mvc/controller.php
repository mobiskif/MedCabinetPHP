<?php
class Controller {
    function __construct($m) {
        $this->name="Controller";
		$this->model=$m;
    }

	function processInput($r) {
		$template = isset($r["template"]) ? $r["template"] : $template = isset($r["_templ"]) ? $r["_templ"] : "template1";
		$this->model->template=$template;
		setcookie("_templ", $this->model->template);

		$action = isset($r["action"]) ? $r["action"] : "default";
		$this->model->action($action, $r);
		setcookie("_action", $action);
	}

}
?>