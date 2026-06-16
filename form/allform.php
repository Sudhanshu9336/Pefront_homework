<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="name" placeholder="enter name..">
        <br><br>
            <input type="email" name="email" placeholder="enter name..">
        <br><br>
          
        <br><br>
            <input type="checkbox" name="skills[]" value="php"><span>PHP</span>
            <input type="checkbox" name="skills[]" value="java"><span>java</span>
             <input type="checkbox" name="skills[]" value="python"><span>Pyhton</span>
            <input type="checkbox" name="skills[]" value="cpp"><span>cpp</span>
<br>
<br>
<input type="radio" name="gender"><span>Male</span>
<input type="radio" name="gender"><span>female</span>
<input type="radio" name="gender"><span>trans</span>
<br><br>

<select name="city">
    <option value="">Select City</option>
    <option value="delhi">Delhi</option>
     <option value="mumbai">Mumbai</option>
      <option value="lucknow">Lucknow</option>
       <option value="gujart">Gujrat</option>
</select>
<br>
<br>
<textarea name="bio" placeholder="write anything.." style = "width:250px;height:100px"></textarea>
        <br><br>
        <br><br>
        <button name="button">Submit</button>
</form>
</body>
</html>

<?php
if(isset($_POST['button'])){
print_r($_POST);
echo "<br>";
echo "user name is :".$_POST['name'];
 }

?>