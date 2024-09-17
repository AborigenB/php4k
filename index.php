<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 курс php</title>
</head>
<body>
    <?
        $page = $_GET['page']??'home';

        switch($page){
            case 'Array': include('Arrays/array.php'); break;
            case 'home': include('assets/includes/home.php'); break;
            default : include('assets/includes/home.php'); break;
        }
    ?>

</body>
</html>