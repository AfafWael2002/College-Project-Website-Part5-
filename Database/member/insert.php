<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Task</title>
    <link rel="stylesheet" href="style-form.css">
</head>

<body>
    <div class="table">
        <table class="s1">
            <thead>
            <tr id="head">
                <th>كود_العضو</th>
                <th>اسم_العضو</th>
                <th>عنوان_العضو</th>
                <th>المجلس</th>
            </tr>
        </thead>
        <tbody>
            <tr>
               <th>1</th>
               <td>سارة</td>
               <td>بنها</td>
               <td>j</td>
            </tr>
            <tr>
                <th>1</th>
               <td>سارة</td>
               <td>بنها</td>
               <td>y</td>
            </tr>
        <th>1</th>
            <td>سارة</td>
            <td>بنها</td>
            <td>d</td>
            </tr>
            <tr>
                <th>1</th>
                <td>سارة</td>
                <td>بنها</td>
                <td>u</td>
            </tr>
        </tbody>
        </table>
    </div>
    <section>
        <button id="b1">ادخال</button>
        <button id="b2"><a href="update.html" target="_self" class="a1">تعديل</a></button>
        <button id="b3"><a href="delete.html" target="_self" class="a1">حذف</a></button>

        <form method="post" action="response.html" enctype="multipart/form-data">
            <div>
                <label for="na">كود_العضو</label><br>
                <input class="input" id="na" name="LCODE" type="number" required minlength="10" maxlength="50">
            </div>

            <div>
                <label for="na">اسم_العضو</label><br>
                <input class="input" id="na" name="LDEVICE_NUM" type="number" required minlength="10" maxlength="50">
            </div>
            <div>
                <label for="Device_number"> وظيفة العضو</label><br>
                <input class="input" name="LDEVICE_NAME" id="Device_number" type="text" required>
            </div>
          
            <div id="submit">
         
                <button>ادخال</button>
            </div>


        </form>
        </section>


</body>

</html>