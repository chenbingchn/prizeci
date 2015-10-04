<html>
    <head>
        <title>Prize list</title>
    </head>
    <body>
        <h1>PRIZE LIST</h1>
        <?php foreach($prize as $row): ?>
            <?=$row->prize_type_zh?>
                <?php
                    $current_type_zh = $row->prize_type_zh;
                    if($row->prize_type_zh = $current_type_zh) {
                        echo "<li>".$row->mobile."</li>";
                    }
                ?>
        <?php endforeach; ?>
    </body>
</html>