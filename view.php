<?php
    require_once 'services/data.php';
    require_once 'services/renderer.php';

    $id = $_GET['id'];
    
    $PageContent = Render('src/product.php', ['item' => $items_list[$id-1]]);
    $LayoutContent = Render('src/layout.php', ['title' => 'Каталог', 'content' => $PageContent, 'category' => null]);
    print($LayoutContent);
?>