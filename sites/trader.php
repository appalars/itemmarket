<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo $mainURL ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"> 
    <title>DragonEra Shop</title>
</head>
<body>
    <?php require_once SITES_DIR . '/header.php'; ?>
    <main>

        <h1><?php echo $_SESSION['traderName'] ?> Händler</h1>

        <div class="itemContainer">
            <?php $items = GetAllItems($_SESSION['traderName']);
                foreach ($items as $item) {
                    $itemID = $item['id'];
                    include COMPONENTS_DIR . '/itemCard.php';
                }
            ?>
        </div>
    </main>
</body>
</html>