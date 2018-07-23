<?php

class HomepageContentController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/admin/adminlayout';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'slidercontent','changelink', 'create' and 'update' actions
                'actions' => array('create', 'update', 'slidercontent','changelink'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate($key = null) {

        $model = HomepageContent::model()->findByAttributes(array("label_keys" => $key));


        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['HomepageContent'])) {
            $model->attributes = $_POST['HomepageContent'];

            if (isset($key) && $key == 'video') {

                $model->heading = 'Presentaion';
                $model->content = $_POST['HomepageContent']['video'];
            } else {


                $model->heading = $_POST['HomepageContent']['heading'];
                $model->content = $_POST['HomepageContent']['content'];
            }
            if ($model->save()) {
                Yii::app()->user->setFlash('success', 'Content updated successfully.');
                $this->refresh();
            }
           
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    public function actionchangeLink($id=null)
    {
        
        $model=  HomepageContent::model()->findByAttributes(array("label_keys"=>$id));

        if(isset($_POST['HomepageContent']))
        {
         $model->content=$_POST['HomepageContent']['content'];
         $model->update();
         Yii::app()->user->setFlash('update','Link has been updated successfully.');
         $this->redirect(Yii::app()->baseUrl.'/admin/homepageContent/changelink?id='.$id);
        }
        $this->render('changelink',array("model"=>$model));
    }

    /*
    * Manage Slider content
    * cbtn1 is for First slider , cbtn2 for 2nd slider on home page ...cbtn4 for slider4
    */
    public function actionSliderContent() {
        $model1 = HomepageContent::model()->findByAttributes(array("label_keys" => 'slider1'));
        $model2 = HomepageContent::model()->findByAttributes(array("label_keys" => 'slider2'));
        $model3 = HomepageContent::model()->findByAttributes(array("label_keys" => 'slider3'));
        $model4 = HomepageContent::model()->findByAttributes(array("label_keys" => 'slider4'));

        if (isset($_POST['cbtn1'])) {

            $model1->heading = $_POST['HomepageContent']['heading'];
            $model1->content = $_POST['HomepageContent']['content'];
            $model1->save();
            Yii::app()->user->setFlash('success', 'Content for slider banner 1 has been updated successfully.');
            $this->refresh();
        } else if (isset($_POST['cbtn2'])) {
            $model2->heading = $_POST['HomepageContent']['heading'];
            $model2->content = $_POST['HomepageContent']['content'];
            $model2->save();
            Yii::app()->user->setFlash('success', 'Content for slider banner 2 has been updated successfully.');
            $this->refresh();
        } else if (isset($_POST['cbtn3'])) {
            $model3->heading = $_POST['HomepageContent']['heading'];
            $model3->content = $_POST['HomepageContent']['content'];
            $model3->save();
            Yii::app()->user->setFlash('success', 'Content for slider banner 3 has been updated successfully.');
            $this->refresh();
        } else if (isset($_POST['cbtn4'])) {
            $model4->heading = $_POST['HomepageContent']['heading'];
            $model4->content = $_POST['HomepageContent']['content'];
            $model4->save();
            Yii::app()->user->setFlash('success', 'Content for slider banner 4 has been updated successfully.');
            $this->refresh();
        }


        $this->render('slidercontent', array(
            'model1' => $model1,
            'model2' => $model2,
            'model3' => $model3,
            'model4' => $model4,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['HomepageContent'])) {
            $model->attributes = $_POST['HomepageContent'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('HomepageContent');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new HomepageContent('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['HomepageContent']))
            $model->attributes = $_GET['HomepageContent'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return HomepageContent the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = HomepageContent::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param HomepageContent $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'homepage-content-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
