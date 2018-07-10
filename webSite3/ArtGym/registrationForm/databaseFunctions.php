<?php
//    defined variables
define( 'HOST', 'localhost' );
define( 'MYSQL_USER', 'root' );  // root
define( 'MYSQL_PASSWORD', 'root' );
define( 'DB_NAME', 'artgym' );


 $connection = mysqli_connect( HOST, MYSQL_USER, MYSQL_PASSWORD, DB_NAME);


 function getConnection() {
     global $connection;
     if ($connection) {
         //echo "Login succesfull <br>";
         return $connection;
     } else {
          echo "EROROR  login failed <br>" . mysqli_connect_error();
     }
 }



function getSelection( $nr ) {
    $my_sql = "SELECT * FROM users
                          WHERE id='$nr';
                ";
    $userCount = mysqli_query(  getConnection()  , $my_sql);
    // var_dump($userCount); // test
    if (mysqli_num_rows($userCount)  > 0) {

        $userCount = mysqli_fetch_assoc($userCount);
         return $userCount;
    }  else {
        echo "ERROR: user $nr not found <br />";
    }
}


function createUser($username, $password,$email) {
    $username = htmlspecialchars( $username, ENT_QUOTES, 'UTF-8' );
    $password = password_hash( $password, PASSWORD_DEFAULT);
    $email = htmlspecialchars( $email, ENT_QUOTES, 'UTF-8' );


    $my_sql = "INSERT INTO users
                       VALUES ('', '$username', '$password', '', '$email', '', '', '', '');
                ";
    $x = mysqli_query(  getConnection() , $my_sql);
    if ($x) {
        echo "User creation susccessfull <br>";
    }
}




// gydytojo salinimas
function deleteUser( $nr ) {
    $my_sql = "DELETE FROM users
                       WHERE id=$nr
                       LIMIT 1;
                ";
    mysqli_query( getConnection() , $my_sql);
}
// deleteUser(12);

// atnaujinti gydytoja
function updateUser($id, $username, $email) {

    // sprintf - % vietoj kiekvieno %s isves kintamuosius
    $my_sql = sprintf( "UPDATE users SET
                                    username = '%s',
                                    email = '%s'
                                    WHERE id = '%s'
                                    LIMIT 1 ;
                         ",
                  htmlspecialchars( $username, ENT_QUOTES, 'UTF-8' ),
                  htmlspecialchars( $email, ENT_QUOTES, 'UTF-8' ),
                  htmlspecialchars( $id, ENT_QUOTES, 'UTF-8' )

                 );
    // %s - s - string, f- (float) skaicius su kableliu
    // sprintf("Vakar %s isejo i %s" , $vardas, $vieta);

    mysqli_query( getConnection(), $my_sql);
    header("location: ../pages/artist_portfolios.php");
}
//

?>
