<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- С помощью функции реализовать валидацию формы, которая состоит из 
следующих полей:

имя (на пустоту, на длину)

email (на пустоту, на длину, на формат)

номер телефона (на пустоту, на количество символов)

При несоответствии валидации функция прекращает работу и возвращает 
ошибк -->
<?
    
    if(isset($_POST['sendForm'])){
        $name = $_POST['name'];
        $errorName = '';
        $errorName = checkVoid($name)?checkVoid($name):checkLength($name,6);

        $email = $_POST['email'];
        $errorEmail = '';
        $errorEmail = checkVoid($email)? checkVoid($email): (checkLength($email,10)? checkLength($email,10) : checkFormat($email));

        $tel = $_POST['tel'];
        $errorTel = '';
        $errorTel = checkVoid($tel)?checkVoid($tel):checkLength($tel,11);   
    }

    function checkVoid($text){
        if(!$text) return 'Поле незаполнено';
        else return false;
    }
    function checkLength($text, $length){
        if(strlen($text) < $length) return 'Недостаточно символов';
        else return false;
    }

    function checkFormat($text){
        if(!preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i',$text)) return 'Формат не соответсвует почте';
        else return false;
    }



    ?>

    <form method="post">
        <div class="input">
            <input type="text" name="name" placeholder="name" value="<?=$name??''?>">
            <p><?=$errorName?></p>
        </div>
        
        <div class="input">
            <input type="text" name="email" placeholder="email" value="<?=$email??''?>">
            <p><?=$errorEmail?></p>
        </div>
        <div class="input">
            <input type="text" name="tel" placeholder="tel" value="<?=$tel??''?>">
            <p><?=$errorTel?></p>
        </div>
        <input type="submit" value="отправить" name="sendForm">

        <?if(!$errorEmail || !$errorName || !$errorTel){echo'успешно';}?>
    </form>

    
</body>
</html>