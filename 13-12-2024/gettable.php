<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

    <?php
    require_once 'dbconf.php';
    require_once 'myfun.php';

    student($connect);
    ?>

</body>
</html>
