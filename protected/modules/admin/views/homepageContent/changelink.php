<div class="container-fluid innerpage">
    <div class="container">
        <div class="questionimage">
            <?php $heading='';
            
            if(!empty($_GET['id']))
            {
                $k=$_GET['id'];
                if($k=="facebook_link")
                {
                    $heading="Change Facebook Link";
                }else if($k=="twitter_link")
                {
                    $heading="Change Twitter Link";
                }else if($k=="pinterest_link")
                {
                    $heading="Change Pinterest Link";
                }else if($k=="youtube_link")
                {
                    $heading="Change Youtube Link";
                }else if($k=="linkedin_link")
                {
                    $heading="Change LInkedIn Link";
                }else if($k=="instagram_link")
                {
                    $heading="Change Instagram Link";
                }else{
                    echo "N/A";
                }
            }
            
            ?>
            
            
            <h1><?php echo $heading; ?></h1>
            <?php if(Yii::app()->user->hasFlash('update')){ ?>
         <div style="margin-top:18px;" class="alert alert-success fade in">
           <a title="close" aria-label="close" data-dismiss="alert" class="close" href="#">×</a>
            <strong>Success!</strong> <?php echo Yii::app()->user->getFlash('update'); ?>.
          </div>
            <?php } ?>
               <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'social-link-form',
                // Please note: When you enable ajax validation, make sure the corresponding
                // controller action is handling ajax validation correctly.
                // There is a call to performAjaxValidation() commented in generated controller code.
                // See class documentation of CActiveForm for details on this.
                'enableAjaxValidation' => false,
            ));
            ?>
            <div class="row">
                    <?php echo $form->labelEx($model, 'content'); ?>
                    <?php echo $form->textField($model, 'content', array('class' => 'form-control input-lg')); ?>
                    <?php echo $form->error($model, 'content'); ?>
                </div>
           
        </div>
         <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary btn-block btn-lg')); ?>
            </div>
             <?php $this->endWidget(); ?>
    </div>
        
</div>