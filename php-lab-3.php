
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit"])) {
   $name =($_POST['name']);
   $email =  $_POST['email'] ;
   $group =  $_POST['gp-number'] ;
   $details =  $_POST['details'] ;
   $gender =  $_POST['gender'] ;

   
//    echo $name;
//    echo $email;
//    echo $group;
//    echo $details;
//    echo $gender;
   
    if (!preg_match("/[^A-Za-z]/",$_POST['name'] ) || strlen($user) == 0) {
        $nameError = '<span style="color:red;">You must type a name and must be in alphabet characters only</span>';
        echo "error 1";
    }

    if(strlen($email) == 0){
        $emailError = '<span style="color:red;">You must Enter your email</span>';
        echo "error 2";
    }

    if(!isset($nameError) && !isset($emailError)){
        echo "<h2>Your given values are as: </h2> <br>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Group Number: $group <br>";
        echo "Class Details: $details <br>";
        echo "Gender: $gender<br>";
        if(isset($_POST["subject"])){
            $subject = $_POST['subject'];
            echo "Subject(s): "." ";
            if (is_array($subject) || is_object($subject)){
                foreach ($_POST['subject'] as $subject)
                    echo $subject . ", ";
            }else{
                echo "No Selected Subjects ";
            }
        }
    }
}
?>

<html>
    <head>
        <style>
            form input{
                margin: 20px 0 20px 0;
            }
            
        </style>
    </head>
   <body>
    <h2>Application name: AAST_BIS class registration</h2>
    <h5 style="color:red;" >* Required Field</h5>
    <form action = "" method = "POST">
        Name: <input type = "text" name = "name" /> <span style="color:red;">*</span>
        <?php if(isset($nameError)) echo $nameError ?>
        <br>

        Email: <input type = "text" name = "Email" /> <span style="color:red;">*</span>
        <?php if(isset($emailError)) echo $emailError ?><br>
        
        Group #: <input type = "text" name = "gp-number" /> <br><br>
        
        Class Details: <textarea name = "details" cols = " 30 " rows = " 5 " > </textarea><br>
        
        Gender: <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Male">Male <span style="color:red;">*</span><br>
        
        Select Courses: <select name="course" multiple>
                            <option value="PHP">PHP</option>
                            <option value="JAVA">JAVA</option>
                            <option value="MYSQL">MYSQL</option>
                            <option value="HTML">HTML</option>
                            <option value="C">C</option>
                            <option value="Python">Python</option>
                        </select><br>

        Agree: <input type = "checkbox" /><span style="color:red;">*</span><br>
        
        <input type = "submit" value="submit"/>
    </form>
      
   </body>
</html>