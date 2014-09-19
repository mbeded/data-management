<?php

class NominalRollController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','registerArea','addSingleData','removeSingleData','printSewa','createList'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

    public function actionPrintSewa($id)
    {
        $NominalRoll = NominalRoll::model()->findByPk($id);
        $NominalRollDetail = NominalRollDetail::model()->findAll('nominal_roll_id=:id', array(':id'=>$id));
        $params['NominalRoll'] = $NominalRoll;
        $params['NominalRollDetail'] = $NominalRollDetail;
        $this->renderPartial('_printSewa',$params);
    }

    public function actionAddSingleData($nominal_roll_id,$user_id)
    {
        $UserData = Sewadars::model()->findByPk($user_id);

        $model = new NominalRollDetail();
        $exist = $model->exists(
            'nominal_roll_id=:nonimal_id AND sewadar_id=:user_id',
            array(':nonimal_id' => $nominal_roll_id, ':user_id' => $user_id)
        );
        if (!$exist) {
            if ($UserData->gender == 'FEMALE' ) {
                basic::addTotalSewadarCount($nominal_roll_id, 'Female');
                $model->order = 2;
            } else {
                basic::addTotalSewadarCount($nominal_roll_id, 'Male');
                $model->order = 1;
            }

            $model->nominal_roll_id = $nominal_roll_id;
            $model->sewadar_id = $user_id;
            if ($model->save()) {
                Yii::app()->user->setFlash('success','Sewadar Added Successfully');
                $this->redirect(array('update','id'=>$nominal_roll_id));
            }
        } else {
            Yii::app()->user->setFlash('error','Sewadar Already Added');
            $this->redirect(array('update','id'=>$nominal_roll_id));
        }
    }

    public function actionRemoveSingleData($id)
    {
        $model = NominalRollDetail::model()->findByPk($id);
        $UserData = Sewadars::model()->findByPk($model->sewadar_id);
        if ($UserData->gender == 'FEMALE' ) {
            basic::removeTotalSewadarCount($model->nominal_roll_id, 'Female');
        } else {
            basic::removeTotalSewadarCount($model->nominal_roll_id, 'Male');
        }

        if ($model->delete()) {
            Yii::app()->user->setFlash('success','Sewadar Removed Successfully');
            $this->redirect(array('update','id'=>$model->nominal_roll_id));
        }
    }

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new NominalRoll;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['NominalRoll']))
		{
			$model->attributes=$_POST['NominalRoll'];
            $model->created_on = new CDbExpression('NOW()');
            $model->sewa_not_sent_reason = $_POST['NominalRoll']['sewa_not_sent_reason'];
			if($model->save())
				$this->redirect(array('update','id'=>$model->nominal_roll_id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
        $sewadarModel = new Sewadars();

        $criteria = new CDbCriteria;
        $criteria->condition = 'nominal_roll_id=:id';
        $criteria->params = array(':id'=>$id);
        $criteria->order = 't.order';
        $NominalRollUserList = NominalRollDetail::model()->with('sewadars')->findAll($criteria);

        $ListData  = array();

        if (isset($_REQUEST['Sewadars'])) {
            $sewadarModel->attributes = $_REQUEST['Sewadars'];
            $criteria = new CDbCriteria;
            $criteria->compare('badge_no',$sewadarModel->badge_no,false,'OR');
            $criteria->compare('serial_no',$sewadarModel->serial_no,false,'OR');
            $criteria->compare('sewadar_name',$sewadarModel->sewadar_name,true);
            $ListData = $sewadarModel->findAll($criteria);
        }

        if (isset($_POST['NominalRoll'])) {
			$model->attributes=$_POST['NominalRoll'];
            $model->sewa_not_sent_reason = $_POST['NominalRoll']['sewa_not_sent_reason'];
            $model->sewa_not_sent_reason = $_POST['NominalRoll']['sewa_not_sent_reason'];
            $model->sewadar_id  = $_POST['NominalRoll']['sewadar_id'];

            if ($model->sewadar_id) {
                $SewadarData = Sewadars::model()->findByPk($model->sewadar_id);
                $model->incharge_badge_no = $SewadarData->badge_no;
                $model->incharge_mobile_no = $SewadarData->mobile_primary;

                $data = NominalRollDetail::model()->find("t.order='0' AND t.nominal_roll_id = '$model->nominal_roll_id'");
                if ($data === null){

                    NominalRollDetail::model()->updateAll(array('order' => '0'),"nominal_roll_id='$model->nominal_roll_id' AND sewadar_id='$model->sewadar_id'");

                } else if ($data->sewadar_id != $model->sewadar_id) {
                    $UserData = Sewadars::model()->findByPk($data->sewadar_id);
                    if ($UserData->gender == 'FEMALE' ) {
                        NominalRollDetail::model()->updateByPk($data->nominal_roll_detail_id, array('order'=>'2'));
                    } else {
                        NominalRollDetail::model()->updateByPk($data->nominal_roll_detail_id, array('order'=>'1'));
                    }
                    NominalRollDetail::model()->updateAll(
                        array(
                            'order'=>'0'
                        ),
                        'nominal_roll_id=:nominal_id AND sewadar_id=:user_id',
                        array(
                            ':nominal_id' => $model->nominal_roll_id,
                            ':user_id' => $model->sewadar_id
                        )
                    );
                }
            }

            if ($model->save()) {
				$this->redirect(
                    array(
                        'update',
                        'id' => $model->nominal_roll_id
                    )
                );
            }
		}

		$this->render(
            'update',
            array(
                'model'=>$model,
                'sewadarModel'=>$sewadarModel,
                'ListData'=>$ListData,
                'NominalRollUserList'=>$NominalRollUserList,
		    )
        );
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('NominalRoll');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new NominalRoll('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['NominalRoll']))
			$model->attributes=$_GET['NominalRoll'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=NominalRoll::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='nominal-roll-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


    public function actionCreateList($term,$roll_id)
    {
        $query = Sewadars::model()->findAll('sewadar_name LIKE :match',array(':match' => "$term%"));
        $list = array();
        foreach($query as $q){
            $data['value']= $q['sewadar_id'];
            $data['label']= $q['sewadar_name']. " | F/D/S/W : ".$q['father_dauther_son_wife_of']. " | Address : ".$q['address1']." ".$q['address2']." ".$q['address3'];
            $data['name']= $q['sewadar_name'];
            $data['href'] = Yii::app()->createUrl('nominalRoll/addSingleData',array('nominal_roll_id'=>$roll_id,'user_id'=>$q['sewadar_id']));
            $list[]= $data;
            unset($data);
        }

        echo json_encode($list);
    }
}
