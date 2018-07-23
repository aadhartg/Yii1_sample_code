<?php
/* @var $this HomepageContentController */
/* @var $model HomepageContent */
/* @var $form CActiveForm */
?>

<div class="container-fluid innerpage">
    <div class="container">
        <div class="questionimage">

            <?php if (Yii::app()->user->hasFlash('success')) { ?>
                <div role="alert" class="alert alert-success alert-dismissible">
                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            <?php } ?>
            <?php
            $form1 = $this->beginWidget('CActiveForm', array(
                'id' => 'slider-form-1',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true
                ),
            ));
            ?>


            <h1>Slider 1 content</h1>

            <div class="row">
                <?php echo $form1->labelEx($model1, 'heading'); ?>
                <?php echo $form1->textField($model1, 'heading', array('class' => 'form-control input-lg head1')); ?>
                <?php echo $form1->error($model1, 'heading'); ?>
            </div>


            <div class="row">
                <?php echo $form1->labelEx($model1, 'content'); ?>
                <?php echo $form1->textArea($model1, 'content', array('class' => 'ckeditor')); ?>
                <?php echo $form1->error($model1, 'content'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model1->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-block btn-lg', 'name' => 'cbtn1')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->

        <div class="questionimage">

            <?php if (Yii::app()->user->hasFlash('success')) { ?>
                <div role="alert" class="alert alert-success alert-dismissible">
                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            <?php } ?>
            <?php
            $form2 = $this->beginWidget('CActiveForm', array(
                'id' => 'slider-form-2',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true
                ),
            ));
            ?>


            <h1>Slider 2 content</h1>

            <div class="row">
                <?php echo $form2->labelEx($model2, 'heading'); ?>
                <?php echo $form2->textField($model2, 'heading', array('class' => 'form-control input-lg head2')); ?>
                <?php echo $form2->error($model2, 'heading'); ?>
            </div>


            <div class="row">
                <?php echo $form2->labelEx($model2, 'content'); ?>
                <?php echo $form2->textArea($model2, 'content', array('class' => 'ckeditor')); ?>
                <?php echo $form2->error($model2, 'content'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model2->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-block btn-lg', 'name' => 'cbtn2')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->

        <div class="questionimage">

            <?php if (Yii::app()->user->hasFlash('success')) { ?>
                <div role="alert" class="alert alert-success alert-dismissible">
                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            <?php } ?>
            <?php
            $form3 = $this->beginWidget('CActiveForm', array(
                'id' => 'slider-form-3',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true
                ),
            ));
            ?>


            <h1>Slider 3 content</h1>

            <div class="row">
                <?php echo $form3->labelEx($model3, 'heading'); ?>
                <?php echo $form3->textField($model3, 'heading', array('class' => 'form-control input-lg')); ?>
                <?php echo $form3->error($model3, 'heading'); ?>
            </div>


            <div class="row">
                <?php echo $form3->labelEx($model3, 'content'); ?>
                <?php echo $form3->textArea($model3, 'content', array('class' => 'ckeditor')); ?>
                <?php echo $form3->error($model3, 'content'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model3->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-block btn-lg', 'name' => 'cbtn3')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->

        <div class="questionimage">

            <?php if (Yii::app()->user->hasFlash('success')) { ?>
                <div role="alert" class="alert alert-success alert-dismissible">
                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <?php echo Yii::app()->user->getFlash('success'); ?>
                </div>
            <?php } ?>
            <?php
            $form4 = $this->beginWidget('CActiveForm', array(
                'id' => 'slider-form-4',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true
                ),
            ));
            ?>


            <h1>Slider 4 content</h1>

            <div class="row">
                <?php echo $form4->labelEx($model4, 'heading'); ?>
                <?php echo $form4->textField($model4, 'heading', array('class' => 'form-control input-lg')); ?>
                <?php echo $form4->error($model4, 'heading'); ?>
            </div>


            <div class="row">
                <?php echo $form4->labelEx($model4, 'content'); ?>
                <?php echo $form4->textArea($model4, 'content', array('class' => 'ckeditor')); ?>
                <?php echo $form4->error($model4, 'content'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model4->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-block btn-lg', 'name' => 'cbtn4')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->


    </div></div>
