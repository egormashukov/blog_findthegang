<?php

class ArticlesController extends CController
{

    function actionIndex()
    {
        $model = new Article;
        $articles = $model->model()->findAll();
        $this->render('index', array('articles' => $articles));
    }

    function actionNew()
    {
        $model = new Article;
        $this->render('new', array(
            'model' => $model,
        ));
    }

    function actionCreate()
    {
        $model = new Article;

        if (isset($_POST['Article'])) {
            $model->attributes = $_POST['Article'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('new', array(
            'model' => $model,
        ));
    }

    public function actionView($id)
    {
        $model = new Article;
        $comments_articles = new ArticleComment;
        $comment_model = new Comment;
        $comments = $comments_articles->model()->findAll('article_id='.(int)$id);

        $ids = array();
        if ($comments){
            foreach($comments as $comment){
                $ids[] = (int)$comment['id'];
            }
            $comments = $comment_model->model()->findAll('id IN ('.implode(',',$ids).')');
        }

        $this->render('view', array(
            'article' => $model->model()->findByPk($id),
            'comments' => $comments
        ));

    }

}
