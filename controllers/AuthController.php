<?php
require_once '../models/Doctor.php';
require_once '../models/Appointment.php';
//require_once __DIR__ . './models/User.php';

class AuthController {
    public function home() {
        // Logic for displaying the home page
        echo "Welcome to the Home Page!";
        // Include your home page view or any additional logic here
    require_once  '../views/home.php';
   // require_once  './index.php';

    }

    public function appointment() {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name     = $_POST['name'];
            $email    = $_POST['email'];
            $phone    = $_POST['phone'];
            $dob      = $_POST['dob'];
            $gender   = $_POST['gender'];
            $address  = $_POST['address'];
            $doctor_name = $_POST['doctor_name'];
            $doctor_specialization = $_POST['doctor_specialization'];
            $appointment_date = $_POST['appointment_date'];
            $time_slot = $_POST['time_slot'];
            $payment = $_POST['payment'];

             // Handle file upload
             if (isset($_FILES['document']) && $_FILES['document']['error'] === UPLOAD_ERR_OK) {
                $document = $_FILES['document'];
                $upload_dir = '../public/uploads/'; // Ensure this directory exists and is writable
                $upload_file = $upload_dir . basename($document['name']);
            

              // Move the uploaded file
              if (move_uploaded_file($document['tmp_name'], $upload_file)) {
                // Call the method to add an appointment
                $result = Appointment::appointment(
                    $name,
                    $email,
                    $phone,
                    $dob,
                    $gender,
                    $address,
                    $doctor_name,
                    $doctor_specialization,
                    $appointment_date,
                    $time_slot,
                    $payment,
                    $upload_file
                );

                if ($result) {
                    header('Location: /patient_mgt_system/public/index.php?page=home');
                    exit(); // Make sure to exit after redirection
                } else {
                    echo "Failed to book appointment.";
                }
            }
            else {
                echo "Failed to move uploaded file.";
            }
        }
    }
       
        require_once  '../views/book_appointment.php';
    }
    
    



}

?>

 