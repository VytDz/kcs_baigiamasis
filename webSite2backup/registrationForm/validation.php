<?php
/* validate.php */
//2018-04-26
//Vytenis_d
define('HOST','localhost');
define('MYSQL_USERNAME','root');
define('MYSQL_PASSWORD','root');
define('DB_NAME','artgym');
//jungiames prie DB 'artgym'
//$connection = mysqli_connect([$host,$user,$password,$database,$port,$socket])







/* form.php */
    session_start();
    $_SESSION['message'] = '';
    $mysqli =  mysqli_connect(HOST,MYSQL_USERNAME,MYSQL_PASSWORD,DB_NAME);
//the form has been submitted with post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {

        //define other variables with submitted values from $_POST
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);

        //md5 - is old ,use hash password for security
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        //path were our avatar image will be stored
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);

        //make sure the file type is image
        if (preg_match("!image!",$_FILES['avatar']['type'])) {

            //copy image to images/ folder
            if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){

                //set session variables to display on welcome page
                $_SESSION['username'] = $username;
                $_SESSION['avatar'] = $avatar_path;

                //insert user data into database
                $sql =
                "INSERT INTO users (username, email, password, avatar) "
                . "VALUES ('$username', '$email', '$password', '$avatar_path')";

                //check if mysql query is successful
                if ($mysqli->query($sql) == true){
                    $_SESSION['message'] = "Registration successful!"
                    . "Added $username to the database!";
                    //redirect the user to welcome.php
                    header("location: index.php");
                }}
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();
            }
            else {
                $_SESSION['message'] = 'File upload failed!';
            }
        }
        else {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
 //if ($_SERVER["REQUEST_METHOD"] == "POST")
