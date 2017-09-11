<?php
/* Smarty version 3.1.30, created on 2017-09-01 21:26:02
  from "C:\wamp64\www\bootstrap\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a95fea6d2448_81947605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d2c088373b86a2e007f0508d8aaf08c70a60154' => 
    array (
      0 => 'C:\\wamp64\\www\\bootstrap\\templates\\index.html',
      1 => 1504169248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a95fea6d2448_81947605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '296259a95fe90b9ff3_57555927';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>BootstrapTest</title>
		
		<!-- Bootstrap core CSS -->
		<link href="./css/bootstrap.css" rel="stylesheet">
	
	</head>
	
	<body>
		<div class="container-fluid">
			<!--
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12">
				  <img src="https://i.pinimg.com/736x/2d/87/79/2d87791a60c1ab99dfb63ad786274862--kittens-playing-serval-kitten.jpg"  class="img-fliud" alt="Responsive image">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
				  <img src="https://s-media-cache-ak0.pinimg.com/736x/53/f6/46/53f646c5ee828a20478daf6d30c66e9e--serval-kitten-big-cats.jpg"  class="img-fliud" alt="Responsive image">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12">
				  <img src="https://s-media-cache-ak0.pinimg.com/736x/8e/43/b6/8e43b6306e594bc1977b19046ecadd48--langford-colin-odonoghue.jpg"  class="img-fliud" alt="Responsive image">
				</div>
			</div>
			-->
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<a href="#" type="button" class="btn btn-primary btn-block" id="button0"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<a href="#" type="button" class="btn btn-success btn-block" id="button1"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<a href="#" type="button" class="btn btn-info btn-block" id="button2"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<a href="#" type="button" class="btn btn-warning btn-block" id="button3"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<a href="#" type="button" class="btn btn-danger btn-block" id="button4"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<a href="#" type="button" class="btn btn-link btn-block" id="button5"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
				</div>
			</div>

			<div class="row">

				<div class="col-lg-3 col-md-6 col-sm-12 justify-content-center">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
						點我看藪貓
					</button>
				</div>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">藪貓視窗</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								
								<div class="container-fluid">
									<div class="row">
										<div class="col-xl-auto col-lg-auto col-md-auto col-sm-auto col-auto">
											<div class="media">
												<img src="https://i.pinimg.com/736x/a9/7c/2e/a97c2ee23d349f08a9c7cdc88bf96f8b--baby-cubs-photo-shoot.jpg" class="img-fliud img-thumbnail" alt="Responsive image" style="height: 100%; width: 100%;">
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">喜歡嗎？</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<body>
				
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<?php echo '<script'; ?>
 src="./js/jquery-3.2.1.slim.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./js/popper.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./js/bootstrap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="./js/main.js"><?php echo '</script'; ?>
>
</body></html><?php }
}
