<?php

class Person1Controller extends Controller
{
    public function actionView()
    {

        $person1 = Person1::model();

        $search = $person1->personSearchInterest();

        var_dump($search);
    }
	public function actionIndex()

	{
        $person1 = Person1::model()->findAll();
        //$interest = Interest::model()->findAll();

        //var_dump($person1);
        echo "<h1>Sample many to many relationship</h1>";
        foreach($person1 as $person)
        {

            echo "My name is ".$person->name. " ";
            echo "And my hobbies are ";
            foreach ($person->interests as $interest){

                echo " ".$interest->interest.",";
            }
            echo "<br>";
        }

    }
    public function actionAdmin()
    {
        $model=new Person1('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Person1']))
            $model->attributes=$_GET['Person'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }














	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}