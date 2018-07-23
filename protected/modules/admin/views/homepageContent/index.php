<?php
/* @var $this HomepageContentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
    'Homepage Contents',
);

$this->menu = array(
    array('label' => 'Create HomepageContent', 'url' => array('create')),
    array('label' => 'Manage HomepageContent', 'url' => array('admin')),
);
?>

<h1>Homepage Contents</h1>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
