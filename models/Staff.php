<?php
require_once __DIR__ . '/../config/config.php';

class staff {
    public static function add_staff( $username , $password, $name, $email, $phone,  $gender, $staff_type, $technical_staff, $non_technical_staff){
        global $connection;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($connection,"INSERT INTO staff(username, password, name, email, phone,  gender, staff_type, technical_staff, non_technical_staff) VALUES (?,?,?,?,?,?,?,?,?)");
        if($stmt){
            mysqli_stmt_bind_param( $stmt,'sssssssss', $username,  $hashedPassword, $name, $email,$phone, $gender,$staff_type, $technical_staff,$non_technical_staff);
            if(mysqli_stmt_execute($stmt)){
                return true;
            }
            else{
                echo "Error: .mysqli_error($connection);";
            }
        }
        }


    


}








































?>
