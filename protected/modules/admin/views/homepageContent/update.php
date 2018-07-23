<?php
/* @var $this HomepageContentController */
/* @var $model HomepageContent */

$this->breadcrumbs = array(
    'Homepage Contents' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List HomepageContent', 'url' => array('index')),
    array('label' => 'Create HomepageContent', 'url' => array('create')),
    array('label' => 'View HomepageContent', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage HomepageContent', 'url' => array('admin')),
);
?>

<h1>Update HomepageContent <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>