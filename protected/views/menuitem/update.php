<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */

$this->breadcrumbs=array(
	'Menuitems'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Menuitem', 'url'=>array('index')),
	array('label'=>'Create Menuitem', 'url'=>array('create')),
	array('label'=>'View Menuitem', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Menuitem', 'url'=>array('admin')),
);
?>

<h1>Update Menuitem <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>