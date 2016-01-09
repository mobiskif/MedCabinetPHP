<title><?php echo $this->name; ?></title>
</head>
<body>
<div class="wrap">
	<table width="100%" class="middle"><tr>
		<td><a href="." title="<?php echo $this->name; ?>"><img src="<?php echo $this->model->template;?>/webcam.gif" alt="*"/></a></td>
		<td>
		<h1><a href="." title="<?php echo $this->name; ?>"><?php echo $this->name;?></a></h1>
		<h2><?php echo $this->name; ?></h2>
		</td>
        <td>
        <form style="text-align:right;" action="." id="loginform">
        	<label for="login">Login</label> <input type="text" name="login" id="login" /><br/>
            <label for="pass">Pass</label> <input type="password" name="pass" id="pass" />
            <input type="submit" value="&nbsp;" /><input type="hidden" name="action" value="login" />
        </form>
        </td>
	</tr></table>
</div>

<div class="wrap">
	<div class="middle">
	<div class="border">
        <form action="."><label>Search</label> <input type="text" name="query"/><input type="hidden" name="action" value="search" /></form>
<?php echo $this->topmenu; ?>
        </div>
	<div class="crumb">breadcrumb</div>
	</div>
</div>
&nbsp;
<div class="wrap">
	<div class="middle">        
		<div class="left">
			<?php echo $this->leftmenu; ?>
		</div>
		<div class="right">
			<?php echo $this->model->result; ?>
		</div>
	</div>
</div>
&nbsp;
<div class="wrap">
	<div class="middle">
		<div class="border">&copy;2010 Applications Inc.</div>
		<div class="crumb"><a href="http://validator.w3.org/check?uri=referer">XML</a></div>
	</div>
</div>
