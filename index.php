<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $startPage = '<form method="post" action="api.php">
                    <h2> Welcome! Choose a city</h2>
                    <input type="submit" value="Stockholm" name="user">
                    <input type="submit" value="London" name="user">
                </form>';

        echo $startPage;
    ?>
</body>
</html>
