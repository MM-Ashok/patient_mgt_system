<?php
require_once __DIR__ . '/../config/config.php';

class Appointment {
    public static function appointment($name, $email, $phone, $dob, $gender, $address, $doctor_name, $doctor_specialization, $appointment_date, $time_slot, $payment, $document_path) {
        global $connection;
        $stmt = mysqli_prepare($connection, "INSERT INTO appointments (name, email, phone, dob, gender, address, doctor_name, doctor_specialization, appointment_date, time_slot, payment, document_path) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
    
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'ssssssssssss', $name, $email, $phone, $dob, $gender, $address, $doctor_name, $doctor_specialization, $appointment_date, $time_slot, $payment, $document_path);
            if (!mysqli_stmt_execute($stmt)) {
                // Output the error
                echo "Error: " . mysqli_error($connection);
                return false; // In case of failure
            }
            return true; // Registration successful
        } else {
            echo "Statement preparation failed: " . mysqli_error($connection);
            return false;
        }
    }
    

      // Function for fetch the daily Appointment 

        public static function getTodaysAppointmentsByDoctor($doctorName) {
            global $connection;
            
            // Get today's date in the format 'YYYY-MM-DD'
            $today = date('Y-m-d');
            
            // Prepare the statement to fetch appointments for today and the specified doctor
            $stmt = mysqli_prepare($connection, "SELECT * FROM appointments WHERE appointment_date = ? AND doctor_name = ?");
            
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, 'ss', $today, $doctorName);
                mysqli_stmt_execute($stmt);
                
                // Get the result
                $result = mysqli_stmt_get_result($stmt);
                
                // Fetch all appointments for today for the specified doctor
                $appointments = mysqli_fetch_all($result, MYSQLI_ASSOC);
                
                return $appointments; // Return the array of appointments
            } else {
                echo "Statement preparation failed: " . mysqli_error($connection);
                return false;
            }
        }
   

    // Function for fetch the all patient list  
    public static function getAllPatients($doctorName){
        global $connection;
        $patients[] = null;
        $stmt = mysqli_prepare($connection, "SELECT * FROM appointments WHERE  doctor_name = ?");
        if($stmt){
            mysqli_stmt_bind_param($stmt, 's',  $doctorName);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
           while ($patient = mysqli_fetch_assoc($result)){
            $patients[] = $patient;
           }
        }
        return $patients;
    }
    

// Function for fetch the patient information and Medical records information 
public static function getPatientById($patient_id) {
    global $connection;

    $stmt1 = mysqli_prepare($connection, "SELECT * FROM appointments WHERE id = ?");
    $patient = null;

    if ($stmt1) {
        mysqli_stmt_bind_param($stmt1, 'i', $patient_id);
        mysqli_stmt_execute($stmt1);
        $result1 = mysqli_stmt_get_result($stmt1);
        $patient = mysqli_fetch_assoc($result1);
        mysqli_stmt_close($stmt1);
    }

    $stmt2 = mysqli_prepare($connection, "
        SELECT a.*, mh.* 
        FROM appointments a 
        JOIN medicalhistory mh ON a.id = mh.patient_id 
        WHERE a.id = ?");
    
    $medicalHistory = [];

    if ($stmt2) {
        mysqli_stmt_bind_param($stmt2, 'i', $patient_id);
        mysqli_stmt_execute($stmt2);
        $result2 = mysqli_stmt_get_result($stmt2);
        while ($row = mysqli_fetch_assoc($result2)) {
            $medicalHistory[] = $row;
        }
        mysqli_stmt_close($stmt2);
    }

    return [
        'patient' => $patient,
        'medicalHistory' => $medicalHistory
    ];
}


// Function for add medical history information of the patient
public static function add_medical($patient_id, $symptoms, $medicines, $nextAppointment,$diet){
    global $connection;
    $stmt = mysqli_prepare($connection , "INSERT INTO medicalhistory (patient_id, symptoms, medicines, nextAppointment, diet) VALUES(?,?,?,?,?)");
    if($stmt) {
        mysqli_stmt_bind_param($stmt, 'sssss', $patient_id, $symptoms, $medicines, $nextAppointment,$diet);
        if(!mysqli_stmt_execute($stmt)){
            echo "Error: " . mysqli_error($connection);
            return false; // In case of failure
        }
        return true; 
        
        }
    }


}










?>
