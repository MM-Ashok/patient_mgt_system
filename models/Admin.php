
<?php
require_once __DIR__ . '/../config/config.php';

class Admin {
    public static function admin_login($username, $password) {
        global $connection;
        
        $stmt = mysqli_prepare($connection, "SELECT * FROM admins WHERE username = ?");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $admin = mysqli_fetch_assoc($result);
            
            if ($admin) {
                // Compare the provided password's MD5 hash with the stored hash
                if (md5($password) === $admin['password']) {
                    return $admin; // Return admin details on success
                }
            }
        }
        return false; // Return false if login fails
    }
}
?>






