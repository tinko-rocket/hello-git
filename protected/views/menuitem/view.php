<?php
/* @var $this MenuitemController */
/* @var $model Menuitem */

$this->breadcrumbs=array(
	'Menuitems'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Menuitem', 'url'=>array('index')),
	array('label'=>'Create Menuitem', 'url'=>array('create')),
	array('label'=>'Update Menuitem', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menuitem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menuitem', 'url'=>array('admin')),
);
?>

<h1>View Menuitem #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'sort',
		'menuname',
		'parent',
		'title',
	),
)); ?>
