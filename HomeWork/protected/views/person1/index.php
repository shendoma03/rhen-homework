<?php
/* @var $this Person1Controller */

$this->breadcrumbs=array(
	'Person1',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>



<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
