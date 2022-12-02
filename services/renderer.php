<?php
    function Render($view, $data){
        extract($data);
        ob_start();
        require $view; 
        $output = ob_get_clean();
        return $output;
    }
    
    $PageContent = Render('src/main.php', ['items' => $items_list]);
    $CategoryInfo = Render('src/category.php', ['categories' => $categories_list]);

    $LayoutContent = Render('src/layout.php',
    ['title' => 'Каталог', 'content' => $PageContent, 'category' => $CategoryInfo]);
?>