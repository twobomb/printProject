<?PHP 

namespace app\controllers;

use yii\web\Controller;

class ProductController extends AppController{


    public $defaultAction = 'show-product';

	public function actionMessage($msg = null){
		return $this->render('message',['param'=>$msg]);
	}

	public function actionShowProduct(){

	    return $this->render("showProduct");
    }
}


?>