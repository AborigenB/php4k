<?
    include("assets/content/header.php");

// Создайте массив со списком студентов (5-10 фамилий) и выведите его на экран.

$students = ['Низамов','Ахматов','Калапатов','Манапов','Алепов'];

// Посчитайте количество студентов.

// Проверьте, есть ли в списке “Сидоров”.

// Удалите последнюю фамилию из списка, сохраните ее в переменную $expelled
?>

<main>
    <div class="students">
        <h2>Список студентов</h2>
        <div class="stud_list">
            <?
                foreach ($students as $key => $value) {?>
                    <div class="stud"><?echo($key+1 . ' ' . $value)?></div>
                <?}
            ?>
        </div>
        <h2>количество студентов: <?=count($students)?></h2>
        <h2>Есть ли в списке сидоров: <?=in_array('Сидоров',$students)? 'Есть' : 'Нету' ?></h2>
        <?array_pop($students);
        $expelled = $students;?>
    </div>
</main>