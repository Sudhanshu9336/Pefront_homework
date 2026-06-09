<?php 
// echo "<pre>";
// echo $_GET['number'];
// echo "<br>";
// print_r($_GET);


//server side validation this is:
// if(empty($_GET['name']))
// {
//     echo "please enter the name";
// }

//     else 
//         {echo "name is written";
// }

// if(isset($_GET['name']))
// {
//     echo $_GET['name'];
// }

//     else 
//         {echo "name is not came written";
// }




// echo $_GET['gender'];
// print_r($_GET['skills']);




?>
<!-- Ab formatting aur spaces preserve ho jate hain, isliye array padhna aasaan ho jata hai. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form action ="" class="card" method="GET">
        <div class="row">
            <div class="col-sm-4">
                <!-- //Is box me email bharna hai ki is filed mai kya bharna hai. -->

                <!-- Agar user "Name" text par click kare:
                Cursor automatically: name ke ander chala jata hai  -->

          <label class="label" for="hi">Name</label>
           <input class="form-control" type="text" name="name" id="hi">
           <label  class="label" for="">Phone</label>
           <input class="form-control" type="number" name="number">
           <label class="label" for="" >Email:</label>
           <input class="form-control"  type="email" name="email">
           <input type="radio" name="gender" value="male">Male:
           <input type="radio" name ="gender" value="femalerrrr">Females:
            <br>
           <input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="Java"> Java
           <button class="btn btn-sucess" style="background-color:blue" >Submit</button> 
            </div>
        </div>
    </form>
</body>
</html>