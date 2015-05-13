<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $this->pageTitle;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link
	href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css"
	rel="stylesheet">
<link
	href="<?php echo Yii::app()->theme->baseUrl; ?>/css/responsive.min.css"
	rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon"
	href="<?php echo Yii::app()->theme->baseUrl; ?>/ico/favicon.png">
</head>
<body>

<?php echo Yii::app()->user->ui->displayErrorConsole(); ?> Más información aquí

<section class="inverse-bg">
	<div class="container">
		<div class="row-fluid">
			<div class="span4">
				<p><img src="http://www.defensoriarionegro.gov.ar/drn/wp-content/themes/dprionegro/img/logo.png" alt="" class="logo-noie"> </p>
			</div>
			<div class="span8">
				<h2>Defensor&iacute;a del Pueblo de R&iacute;o Negro</h2>
			</div>
		</div>
	</div>
</section>


	<div class="navbar navbar-static-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="#">Consulta de Tr&aacute;mites</a>
				
				<div class="nav-collapse collapse pull-right"> 

				<?php /*
				$this->widget('zii.widgets.CMenu',array(
					//paso la clase de estilo al menú. Utilizo la prop htmlOptions
					'htmlOptions'=>array("class"=>"nav"),
					'items'=>array(
						array('label'=>'Inicio', 'url'=>array('/site/index')),
						array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
						//array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Iniciar sesion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); */?>			
				
				
				<?php $this->widget('zii.widgets.CMenu',array(
					//paso la clase de estilo al menú. Utilizo la prop htmlOptions
					'htmlOptions'=>array("class"=>"nav"),						
					'items'=>array(							
						array('label'=>Yii::t('app', 'Home'), 'url'=>array('/site/index')),
						array('label'=>Yii::t('app', 'About'), 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>Yii::t('app', 'Contact'), 'url'=>array('/site/contact')),
						array('label'=>'Administrar Usuarios'
							, 'url'=>Yii::app()->user->ui->userManagementAdminUrl
							, 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>Yii::t('app', 'Login')
							, 'url'=>Yii::app()->user->ui->loginUrl
							, 'visible'=>Yii::app()->user->isGuest),
						array('label'=>Yii::t('app', 'Logout').' ('.Yii::app()->user->name.')'
							, 'url'=>Yii::app()->user->ui->logoutUrl
							, 'visible'=>!Yii::app()->user->isGuest),
					),
				)); ?>
				<!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</div>
	
	<?php if(isset($this->breadcrumbs) and $this->breadcrumbs !== array() ):?>	
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					//aplico estilo, es una buena práctica no hacerlo. Cambiar a su hoja de estilo correspondiente
					'htmlOptions'=>array("style"=>"margin: 10px 0;"),
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			</div>
		</div>
	</div>		
	<?php endif?>	
	<!--/  breadcrumbs -->
	<!-- imprimir el contenido -->
	<?php echo $content; ?>

	<footer class="footer bg-ft clearfix pd4">
		<div class="container">
			<!--footer container-->
			<div class="row-fluid">
				<div class="span3">
					<section>
						<h4>
							<span>Contactanos</span>
						</h4>
						<!--  
						<p>
							Gustalh Creative<br> 123456 <br> Bogot&aacute; Colombia<br> <strong>phone:</strong>
							<a href="tel:123456789" class="tele">123456789</a><br> <strong>fax:</strong>
							123456789<br> <span class="overflow"><strong>email:</strong> <a
								href="mailto:email@domain.com">email@companydomain.com</a></span>
						</p>
						-->
					</section>
					<!--close section-->
					<!--  
					<section>
						<h4>
							<span>Follow Us</span>
						</h4>
						<div class="social">
							<a href="#"><i class="icon-facebook facebook"></i></a> <a
								href="#"><i class="icon-twitter twitter"></i></a> <a href="#"><i
								class="icon-linkedin linkedin"></i></a> <a href="#"><i
								class="icon-google-plus google-plus"></i></a>
						</div>
					</section>
					-->
					<!--close section-->
				</div>
				<!-- close .span3 -->

				<!--section containing newsletter signup and recent images-->
				<div class="span5">
					<!-- 
					<section>
						<h4>
							<span>Stay Updated</span>
						</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
							do eius.</p>
						<form action="#" method="post">
							<div class="input-append append-fix custom-append row-fluid">
								<input type="email" class="span8" placeholder="Email Address"
									name="email">
								<button class="btn btn-primary">Sign Up</button>

							</div>
						</form>
						<!--close input-append--
					</section>
					-->
					<!--close section-->
				</div>
				<!-- close .span5 -->

				<!--section containing blog posts-->
				<div class="span4">
					<section>
						<h4>
							<span>Acerca de nosotros</span>
						</h4>
						<p>Alumnos de la carrera Licenciatura en Sistemas de la UNRN. Proyecto para la materia Pr&aacute;ctica profesional 2015.</p>
					</section>
				</div>
				<!-- close .span4 -->
			</div>
			<!-- close .row-fluid-->
		</div>
		<!-- close footer .container-->
	</footer>


	<section class="footer-credits">
		<div class="container">
			<ul class="clearfix">
				<li>&copy; 2015 - Licenciatura en Sistemas</li>
				<li><a href="www.unrn.edu.ar/">UNRN</a></li>
			</ul>
		</div>
		<!--close footer-credits container-->
	</section>

	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
	<script
		src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>

</body>
</html>
