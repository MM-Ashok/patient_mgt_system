<?php
require_once '../models/Doctor.php'; 
require_once '../models/Appointment.php'; 

class DoctorController {
public function doctor_login() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $doctor = Doctor::doctor_login($username, $password);

        if ($doctor) {
            session_start();
            $_SESSION['doctor'] = $doctor;
            header('Location: ../public/index.php?page=doctor_dashboard');
        } else {
            echo "Invalid credentials!";
        }
    }
   
    require_once '../views/doctor_login.php';
}



public function doctor_dashboard() {
    // session_start();
    if (!isset($_SESSION['doctor'])) {
        header('Location: ../public/index.php?page=doctor_login');
        exit();
    }
    
    require_once '../views/doctor_dashboard.php';
}



//  Function for get Daily Appointments 
public function getTodaysAppointmentsByDoctor() {
    // session_start(); // Start the session if not already started

    if (isset( $_SESSION['doctor']['name'])) {
        $doctorName = $_SESSION['doctor']['name'];
        $todaysAppointments = Appointment::getTodaysAppointmentsByDoctor($doctorName);
        // Output appointments in a table format
        if ($todaysAppointments) {
            echo "<table border='1'>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Doctor Name</th>
                        <th>Appointment Date</th>
                        <th>Time Slot</th>
                        <th>Payment</th>
                        <th> Action </th>
                    </tr>";

            foreach ($todaysAppointments as $appointment) {
                echo "<tr>
                        <td>" . htmlspecialchars($appointment['name']) . "</td>
                        <td>" . htmlspecialchars($appointment['email']) . "</td>
                        <td>" . htmlspecialchars($appointment['phone']) . "</td>
                        <td>" . htmlspecialchars($appointment['doctor_name']) . "</td>
                        <td>" . htmlspecialchars($appointment['appointment_date']) . "</td>
                        <td>" . htmlspecialchars($appointment['time_slot']) . "</td>
                        <td>" . htmlspecialchars($appointment['payment']) . "</td>
                        
                        <td>
                        <a href='../public/index.php?page=getpatientById&id=" . urlencode($appointment['id'] ?? 'N/A') . "' class='btn btn-primary'>View Details</a>
                    </td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "No appointments found for today.";
        }
    } else {
        echo "Doctor not logged in.";
    }
}

// function for patient list 
public function patient_list() {
    $patients = null;
    if(!isset($_SESSION['doctor'])){
        header('Location: ../public/index.php?page=doctor_login');
        exit();
    }

    if(isset($_SESSION['doctor'] ['name'])){
        $doctorName = $_SESSION['doctor']['name'];
        $patients = Appointment::getAllPatients($doctorName);
    }
    

    require '../views/patient_list.php';
}


// Function for getting patient details by ID
public function getPatientById() {
    if (!isset($_SESSION['doctor'])) {
        header('Location: ../public/index.php?page=doctor_login');
        exit();
    }

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $patient_id = (int)$_GET['id'];
        $patientDetails = Appointment::getPatientById($patient_id);
    } else {
        $patientDetails = null;
    }

    require '../views/view_patient.php'; 
}


// Function for add paient medical history 

public function addMedicalHistory() {
    if (!isset($_SESSION['doctor'])) {
        header('Location: ../public/index.php?page=doctor_login');
        exit();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $patient_id      = $_POST['patient_id'] ?? '';
        $symptoms        = $_POST['symptoms'] ?? '';
        $medicines       = $_POST['medicines'] ?? '';
        $nextAppointment = $_POST['nextAppointment'] ?? '';
        $diet            = $_POST['diet'] ?? '';

            $result = Appointment::add_medical($patient_id, $symptoms, $medicines, $nextAppointment,$diet);
            if ($result) {
                header('Location: ../public/index.php?page=doctor_dashboard'); // Redirect to a success page
                exit();
            } else {
                $error = "Failed to add medical history.";
            }
        
    }

    // Load the view with any potential errors
    require '../views/view_patient.php';
}



//  Search the patient by phone number 
public function search_patient(){
    $patient = null; // Default to null or an empty array
    if(!isset($_SESSION['doctor'])){
        header('Location: ../public/index.php?page=doctor_login');
        exit();
    }
    $phone = $_POST['phone'] ?? null;

    if($phone) {
        $patient = Doctor::get_patient_by_phone($phone);
        require_once '../views/search_patient.php'; // Pass $patient to the view if needed
     } 
  
    require_once '../views/search_patient.php';
}






public function doctor_session() {
    // session_start();
     if(!isset($_SESSION['doctor'])){
         header('Location: ../public/index.php?page=doctor_login');
         exit();
     }
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $doctorId = $_SESSION['doctor']['id'];
    $doctorName = $_SESSION['doctor']['name'];
    $doctorSpecialization = $_SESSION['doctor']['specialization'];
        // Get the selected sessions and join them into a single string
        $sessions = isset($_POST['sessions']) ? implode(', ', $_POST['sessions']) : '';

        $days = isset($_POST['days']) ? $_POST['days'] : [];

    foreach ($days as $day) {
        Doctor::doctor_session($doctorId, $doctorName, $doctorSpecialization, $sessions, $day);
    }
    header('Location: ../public/index.php?page=doctor_dashboard');
    exit();
 }
 require_once '../views/doctor_session.php';
}




public function logout() {
    session_start();
    // Unset all of the session variables
    $_SESSION = array();
    // Destroy the session
    session_destroy();
    // Redirect to the login page
    header('Location: ../public/index.php');
    exit();
}



}
?> 

