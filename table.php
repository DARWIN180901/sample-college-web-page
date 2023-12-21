<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
       
            <tr>
                <th class="no">S.no</th>
                <th class="name">Name</th>
                <th class="b_day">Birth Day</th>
                <th class="father_name">Father Name</th>
                <th class="course">Course</th>
            </tr>
       <tr>
        <td>1</td>
        <td>Raja</td>
        <td>22-01-22</td>
        <td>Vijayan</td>
        <td>CSE</td>
       
       </tr>
    </table>
    
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $sno=filter_input(INPUT_POST,"no",FILTER_SANITIZE_SPECIAL_CHARS);
    $name=filter_input(INPUT_POST,"name",FILTER_SANITIZE_SPECIAL_CHARS);
    $bday=filter_input(INPUT_POST,"b_day",FILTER_SANITIZE_SPECIAL_CHARS);
    $father_name=filter_input(INPUT_POST,"father_name",FILTER_SANITIZE_SPECIAL_CHARS);
    $course=filter_input(INPUT_POST,"course",FILTER_SANITIZE_SPECIAL_CHARS);

        
    $sql="SELECT*FROM registration (reg_id,username,b_day,father_name,course) values('$sno','$name','$bday','$father_name','$course') ";

    mysqli_error($conn);

}


?>