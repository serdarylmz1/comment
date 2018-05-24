<?php

namespace kouosl\comment\controllers\frontend;

use Yii;
use kouosl\comment\models\Comment;
use kouosl\user\models\User;

use kouosl\comment\models\CommentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * CommentController implements the CRUD actions for Comment model.
 */
class CommentsController extends Controller
{
    

    /**
     * Lists all Comment models.
     * @return mixed
     */
    public function actionIndex()
    {
        $comments = Comment::find()->asArray()->all();
        $priority = array();
        $users = array();

        foreach ($comments as $key => $row)
        {
            $priority[$key] = $row['priority'];
        } 
        array_multisort($priority, SORT_ASC, $comments);
        foreach ($comments as $key => $row)
        {
            $users[$key] = $this->findModel($row['author'])['username'];
        }
        return $this->render('index',[ 'model' => $comments,'users' => $users]);
    }


    /**
     * Finds the Comment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Comment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
