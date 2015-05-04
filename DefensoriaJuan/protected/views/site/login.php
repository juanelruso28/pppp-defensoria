<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Iniciar sesion';
$this->breadcrumbs=array(
	'Iniciar sesion',
);
?>

<h1>Iniciar Sesi&oacute;n</h1>

<p>Por favor completa el formulario con tus credenciales:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><span class="required">*</span> Campos obligatorios.</p>

	<div>
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Contrase&ntilde;a'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
			Ayuda: puedes iniciar sesi&oacute;n con <kbd>demo</kbd>/<kbd>demo</kbd> o <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>
	</div>

	<div class="rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'recuerdame'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton('Iniciar sesion',array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
