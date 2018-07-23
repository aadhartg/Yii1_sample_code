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
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'homepage-content-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>

            <p class="note">Fields with <span class="required">*</span> are required.</p>

            <?php if (isset($_GET['key']) && $_GET['key'] == 'video') { ?>
                <label>Enter video url</label><input type="text" name="HomepageContent[video]" class="form-control input-lg">
            <?php } ?>
            <?php if (isset($_GET['key']) && $_GET['key'] != 'video') { ?>

                <div class="row">
                    <?php echo $form->labelEx($model, 'heading'); ?>
                    <?php echo $form->textField($model, 'heading', array('class' => 'form-control input-lg')); ?>
                    <?php echo $form->error($model, 'heading'); ?>
                </div>


                <div class="row">
                    <?php echo $form->labelEx($model, 'content'); ?>
                    <?php echo $form->textArea($model, 'content', array('class' => 'ckeditor')); ?>
                    <?php echo $form->error($model, 'content'); ?>
                </div>
            <?php } ?>
            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-block btn-lg')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div></div>