<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Blog App</h1>
    <?php $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Articles List', 'url' => array('//articles/index')),
//            array('label' => 'Comments List', 'url' => array('//comments/index')),
            array('label' => 'New Article', 'url' => array('//articles/new')),
        )
    )); ?>
    <hr/>
    <?php echo $content; ?>
</body>
</html>