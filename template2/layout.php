<title><?php echo $this->name; ?></title>
</head>
<body>
<div class="wrap">
	<table width="100%" class="middle"><tr>
		<td><a href="." title="<?php echo $this->name; ?>"><img src="<?php echo $this->model->template;?>/logo.png" alt="*"/></a></td>
		<td>
		<h1><a href="." title="<?php echo $this->name; ?>"><?php echo $this->name;?></a></h1>
		<h2><?php echo $this->name; ?></h2>
		</td>
	</tr></table>
</div>

<div class="wrap">
	<div class="middle">
		<div class="border">top</div>
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
		<div class="border">footer</div>
		<div class="crumb"><a href="http://validator.w3.org/check?uri=referer">XML</a></div>
	</div>
</div>
