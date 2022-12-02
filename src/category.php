<div class='categories'>
    <ul>
        <?php foreach ($categories as ['id' => $id, 'name' => $name]){
            print("
                <li id='$id'>
                    <a href='?category_id=$id'>$name</a>
                </li>
            ");
        }
        ?>
    </ul>
</div>