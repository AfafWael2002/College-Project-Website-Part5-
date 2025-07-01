<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="delete.css">


</head>

<body>
    <div class="table">
        <table class="s1">
            <thead>
                <tr id="head">
                    <th>كود_العضو</th>
                    <th>اسم_العضو</th>
                    <th>عنوان_العضو</th>
                    <th>اسم اللجنة</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'selectphp.php'; ?>
               
            </tbody>
        </table>
    </div>
    <section>
        <button id="b1"><a href="insert.php" target="_self" class="a1">ادخال </a></button>
        <button id="b2"><a href="update.php" target="_self" class="a1">تعديل</a></button>
        <button id="b3">حذف</button>
        <div class="sa">
            <form action="deletephp.php" >
                <div>
                    <label for="del">ادخل كود العضو</label>
                    <input id="del" name ="delete"type="number" min="0" required>
                    <button name="delete">حذف</button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>