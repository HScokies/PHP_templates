<div class='catalog'>
    <?php $category_id = empty($_GET['category_id'])? null : $_GET['category_id'];?>
    <?php foreach ($items as $item):?>
        <?= $item['category_id']==$category_id || $category_id==null ? Render('src/item.php', ['item' => $item]) : null?>
    <?php endforeach; ?>
</div>