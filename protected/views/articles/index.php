<h2>List of Articles:</h2>

<?php foreach($articles as $article){
    echo CHtml::link($article->theme, array('//articles/view', 'id'=>$article->id)), '<br/>';
}
