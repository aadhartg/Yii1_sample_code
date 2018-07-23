<?php
/* @var $this HomepageContentController */
/* @var $model HomepageContent */

$this->breadcrumbs = array(
    'Homepage Contents' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List HomepageContent', 'url' => array('index')),
    array('label' => 'Manage HomepageContent', 'url' => array('admin')),
);
?>
<div class="container-fluid innerpage">
    <div class="container"> 
<h1>Create Homepage Content</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>
</div>
</div>
