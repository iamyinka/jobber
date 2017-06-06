<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\Category;

class CategoryController extends \yii\web\Controller
{	
		public function actionIndex()
    {
				//		Create Query
				$query = Category::find();
			
				$pagination = new Pagination([
					'defaultPageSize' => 20,
					'totalCount' => $query -> count(),
				]);
			
				$categories = $query -> orderBy('name')
					->offset($pagination->offset)
					->limit($pagination->limit)
					->all();
			
        return $this->render('index', [
					'categories' => $categories,
					'pagination' => $pagination,
				]);
    }
	
    public function actionCreate()
		{
		    $category = new Category();

		    if ($category->load(Yii::$app->request->post())) {
		        if ($category->validate()) {
		            // form inputs are valid, do something here
		        		$category->save();

		        		// Flash Message
		        		Yii::$app->getSession()->setFlash('success', "Category Added Successfully");

		            return $this->redirect('index.php?r=category');
		        }
		    }

		    return $this->render('create', [
		        'category' => $category,
		    ]);
		}

}
