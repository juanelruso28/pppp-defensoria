<?php
#http://localhost/yii/facilito/hola/index
class HolaController extends Controller
{
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 * Los controladores tienen acciones prefijo actionXxx(param)
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		
		//consulta a la base la tbl del 
		$model = CActiveRecord::model("Users")->findAll();
		
		//variables que le envio a la vista.
		$twitter="@codigofacilito";
		
		//renderizo la vista...con la vista que invoco y variable/es que quiera 
		$this->render('index',array("model"=>$model, "twitter"=>$twitter));
	}
}