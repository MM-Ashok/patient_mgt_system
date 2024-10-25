<?php
require_once '../models/Admin.php';
require_once '../models/Doctor.php';
require_once '../models/Staff.php';



class AdminController {
    public function admin_login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $admin = Admin::admin_login($username, $password);

            if ($admin) {
                session_start();
                $_SESSION['admin'] = $admin;
                header('Location: ../public/index.php?page=admin_dashboard');
            } else {
                echo "Invalid credentials!";
            }
        }
       
        require_once '../views/admin_login.php';
    }

    public function admin_dashboard() {
        // session_start();
        if (!isset($_SESSION['admin'])) {
            header('Location: ../public/index.php?page=admin_login');
            exit();
        }
        
        require_once '../views/admin_dashboard.php';
    }

    public function logout() {
        session_start();
        // Unset all of the session variables
        $_SESSION = array();
        // Destroy the session
        session_destroy();
        // Redirect to the login page
        header('Location: ../public/index.php?page=admin_login');
        exit();
    }


    // Function for Add the doctor information in the doctor table in the database .

    public function add_doctor() {
       // session_start();
        if(!isset($_SESSION['admin'])){
            header('Location: ../public/index.php?page=admin_login');
            exit();
        }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $specialization = $_POST['specialization'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $docFees = $_POST['docFees'];


        if(Doctor::add_doctor($username, $password,$name, $specialization,$email,$phone,$docFees)){
            echo"Doctor Added Successfully";
            header('Location: ../public/index.php?page=admin_dashboard');
            exit();
        }
        else{
            echo" Failed to Add Doctor";
        }
    }
    require_once '../views/add_doctor.php';
}


public static function add_specialization()
{
    if(!isset($_SESSION['admin'])){
        header('Location: ../public/index.php?page=admin_login');
        exit();
    }
    if($_SERVER['REQUEST_METHOD'] == 'POST' ){
        $specialization = $_POST['specialization'];
        if( Doctor :: add_specialization($specialization))
        {
            echo"Specialization Added Successfully";
            header('Location: ../public/index.php?page=admin_dashboard');
            exit();   
        }
        else{
            echo " Failed to add specailization";
        }
    }
    require_once '../views/add_specialization.php';
}
//Function to fetch all the doctors information from the database 
public function doctor_list() {
    if(!isset($_SESSION['admin'])){
        header('Location: ../public/index.php?page=admin_login');
        exit();
    }
    $doctors = Doctor::get_doctors();


    require_once '../views/doctor_list.php';
}

//Function to fetch all the Patient information from the database 
// public function patient_list() {
//     if(!isset($_SESSION['admin'])){
//         header('Location: ../public/index.php?page=admin_login');
//         exit();
//     }
//     $doctors = Patient::get_patients();


//     require_once '../views/patient_list.php';
// }



// Function to add_staff to the database 
      public function add_staff(){
     if(!isset($_SESSION['admin'])){
        header('Location: ../public/index.php?page=admin_login');
        exit();
     }
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name     = $_POST['name'];
        $email    = $_POST['email'];
        $phone    = $_POST['phone'];
        $gender   = $_POST['gender'];
        $staff_type = $_POST['staff_type'];
        $technical_staff = $_POST['technical_staff'] ?? null;
        $non_technical_staff = $_POST['non_technical_staff'] ?? null;

        if(Staff :: add_staff($username, $password ,$name,$email,$phone,$gender,$staff_type,$technical_staff,$non_technical_staff)){
            echo"Staff Added Successfully";
            header('Location: ../public/index.php?page=admin_dashboard');
            exit();
        } else {
            echo"Failed to Add Staff";
        }
     }
     require_once '../views/add_staff.php';
      }


}

?>

