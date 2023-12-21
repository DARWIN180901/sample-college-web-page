<?php
    include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image.jpg" href="image/zhanhui-li-1iuxWsIZ6ko-unsplash.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abc college</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link rel="stylesheet" href="proper.css">
</head>
<body>

    
    <header>
        <div class="right" style="width: 50%;">
            <div class="logo">
            <img src="image/alexander-grey-eMP4sYPJ9x0-unsplash.jpg" alt="testimg" width="100px" height="100px"></div>

        <div style="margin: 10px;">
        abc EDUCATIONS
        </div>
        </div>
        <div class="left" style="width: 50%;">
            <nav class="navbar">
            <ul class>
                <li>home</li>
                <li> <a href="#regi">registration</a></li>
                <li><a href="table.php">table</a></li>
            </ul>
            

        </nav>
        </div>
    </header>
    <main>
    <div class="bg_img">
        <div class="sec">
        <section id="top">
        
        <div class="clg">
        <div style="display: flex; justify-content: left;">
        
        <img src="image/zhanhui-li-1iuxWsIZ6ko-unsplash.jpg" height="300px" style="border-radius: 20px;">
        
       </div>
       <div class="para"><p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, accusantium, magni animi sit reiciendis quos ipsam laborum aliquid voluptas quibusdam aspernatur corporis, quaerat blanditiis ad doloribus corrupti nemo perspiciatis consequuntur.
       </p></div></div>

       <div class="clg_1">
        <div style="display: flex; justify-content: left;">
            <div class="para_1"><p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, accusantium, magni animi sit reiciendis quos ipsam laborum aliquid voluptas quibusdam aspernatur corporis, quaerat blanditiis ad doloribus corrupti nemo perspiciatis consequuntur.
               </p></div>
        
        <img src="image/alexander-grey-eMP4sYPJ9x0-unsplash.jpg" height="300px" style="border-radius: 20px;">
        
       </div>
      </div></section>
      <section id="regi">
    
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
    <div class="reg">
        <h2 style="text-shadow: 10px 5px 5px;">REGISTRATION FORM </h2>
        <label for="username">username :</label>
        <input type="name" name="username" ><br><br>
        <label for="birthday">birthday :</label>
        <input type="date" name="birthday" ><br><br>
        <label for="f_name">father name :</label>
        <input type="name" name="f_name" ><br><br>
        <label for="course">course :</label>
        <label for="cse">CSE </label>
        <input type="radio" name="course" value="cse"  >
        <label for="mech">Mechanical </label>
        <input type="radio" name="course" value="mech"  >
        <label for="ece">ECE </label>
        <input type="radio" name="course" value="ece" ><br><br>
        <input type="reset" >&nbsp;&nbsp;&nbsp;
        
        <input type="submit" >

      </div></form></section></div>
</main>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
        $birthday=filter_input(INPUT_POST,"birthday",FILTER_SANITIZE_SPECIAL_CHARS);
        $fathername=filter_input(INPUT_POST,"f_name",FILTER_SANITIZE_SPECIAL_CHARS);
        $course=filter_input(INPUT_POST,"course",FILTER_SANITIZE_SPECIAL_CHARS);

        $sql="INSERT INTO registration(username,b_day,father_name,course) values('$username','$birthday','$fathername','$course')";
        mysqli_query($conn,$sql);
        echo "your registration is successful";
         
         
    }
       

       

    
    mysqli_close($conn);





?>
      
    
     
    

