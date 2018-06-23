<?PHP 

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller{


	public function actionMessage($msg = null){
		return $this->render('message',['param'=>$msg]);
	}
}


?>