<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Name:
            <input type="text" name="name"><br>

            Email:
            <input type="text" name="email"><br>

            Phone:
            <input type="text" name="phone"><br><br>

           Township:
           <select id="towm" name="township">
               <option value="Sagaing">Sagaing</option>
               <option value="Monywa">Monywa</option>
               <option value="Mandalay">Mandalay</option>
               <option value="Myaung">Myaung</option>

           </select><br><br>
           
           Grade:
           <input type="radio" name="grade" value="First Year">
           <label>First Year</label>

           <input type="radio" name="grade" value="Second Year">
           <label>Second Year</label>

           <input type="radio" name="grade" value="Third Year">
           <label>Third Year</label>

           <input type="radio" name="grade" value="Final Year">
           <label>Final Year</label><br>

           Subject:
           <input type="checkbox" name="subject[]" value="Java">Java
           

           <input type="checkbox" name="subject[]" value="Php">Php
        

           <input type="checkbox" name="subject[]" value="Css">Css<br><br>
           

           

           <input type="submit" value="submit" value="submit">
       </form>

       
       

    </body>
</html>
  <?PHP
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $township=$_POST['township'];
        $grade=$_POST['grade'];
        $subject=$_POST['subject'];

        if(empty($name)){
            echo "Name is empty";
        }else {
            echo $name. "<br>";
        }

        if(empty($email)){
            echo "Email is empty";
        }else {
            echo  $email. "<br>";
        }

        if(empty($phone)) {
            echo "Phone NO is empty";
        }else {
            echo $phone. "<br>";
        }

        if(empty($township)) {
            echo "Township is empty";
        }else{
            echo $township. "<br>";
        }

        if(empty($grade)) {
            echo "Grade is Empty";
        }else{
            echo $grade. "<br>";

        }

        if(empty($subject)) {
            echo "Subject is empty";

        }
        else
        {
            foreach($subject as $s)
            echo "Subject is ".$s ."<br>";
        }
        




    }
    ?>