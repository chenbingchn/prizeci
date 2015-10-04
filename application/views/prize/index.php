<html>
    <head>
        <title>Prize list</title>
    </head>
    <body>
        <h1>PRIZE LIST</h1>
        <?php foreach($prize as $row): ?>
            <?=$row->prize_type_zh?>

                <?php
                    $current_type = null;
                    if($row->prize_type != $current_type) {
                        $current_type = $row->pirze_type;
                    }
                ?>


            <li>
                <?=$row->mobile?>
            </li>
        <?php endforeach; ?>
    </body>
</html>