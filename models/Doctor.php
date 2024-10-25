<?php
require_once __DIR__ . '/../config/config.php';

class Doctor {

    public static function add_doctor($username, $password, $name, $specialty,$email,$phone,$docFees){
        global $connection;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = mysqli_prepare($connection, "INSERT INTO doctors (username, password, name, specialization, email, phone, docFees) VALUES(?,?,?,?,?,?,?)");
        if($stmt){
            mysqli_stmt_bind_param( $stmt,'sssssss', $username,  $hashedPassword, $name,$specialty, $email,$phone,$docFees);
            if(mysqli_stmt_execute($stmt)){
                return true;
            }
            else{
                echo "Error: .mysqli_error($connection);";
            }
        }
    }



    
// public function for add doctor specializations 
   public static function add_specialization($specialization){
    global $connection;
    $stmt = mysqli_prepare($connection , "INSERT INTO doctorspecializations (specialization) VALUES(?)");
    if($stmt){
        mysqli_stmt_bind_param($stmt, "s" , $specialization);
        if(mysqli_stmt_execute($stmt)){
            return true;
        }
        else{
            echo "Error: .mysqli_error($connection);";
        }
    }
   }




    public static function doctor_login($username, $password) {
        global $connection;
        $stmt = mysqli_prepare($connection, "SELECT * FROM doctors WHERE username = ?");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            // Check if a doctor was found
            if ($doctor = mysqli_fetch_assoc($result)) {
                // Check password
                if (password_verify($password, $doctor['password'])) {
                    return $doctor;
                } else {
                    // Password does not match
                    echo "Password mismatch!";
                }
            } else {
                // No doctor found with that username
                echo "No doctor found with that username!";
            }
        } else {
            echo "Database query failed!";
        }
        
        return false;


    }

//  Function for check the daily appointments 
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
            print_r($appointments);
            
            return $appointments; // Return the array of appointments
        } else {
            echo "Statement preparation failed: " . mysqli_error($connection);
            return false;
        }
    }

    // function for get all doctors information from the database 
    public static function get_doctors(){
        global $connection;
        $doctors =[];
        $stmt = mysqli_prepare( $connection , "SELECT * FROM doctors");
        if($stmt){
          // Execute the Statement 
          mysqli_stmt_execute($stmt);
          // Get the result 
          $result = mysqli_stmt_get_result($stmt);

          // Fetch all doctors into an array 
          while ($doctor = mysqli_fetch_assoc($result)){
            $doctors[] = $doctor;
          }
        
        } else{
          //  Handle Error if statement prepartion fails 
          echo "Error preparing statement:" . mysqli_error($connection);
        }
        return $doctors;
    }
   

    public static function doctor_session($doctorId, $doctorName, $doctorSpecialization, $session, $appointment_day){
        global $connection;
        $stmt = mysqli_prepare($connection, "INSERT INTO doctor_session (doctor_id, doctor_name, doctor_specialization, sessions, appointment_day) VALUES(?,?,?,?,?)");
        if($stmt){
            mysqli_stmt_bind_param( $stmt,'sssss', $doctorId, $doctorName, $doctorSpecialization, $session, $appointment_day);
            if(mysqli_stmt_execute($stmt)){
                return true;
            }
            else{
                echo "Error: .mysqli_error($connection);";
            }
        }
    }

//  Original working  implementation 
    // public static function get_doctor_by_id($doctor_id) {
    //     global $connection;
    //     //$stmt = mysqli_prepare($connection, "SELECT name, specialization FROM doctors WHERE id = ?");
    //     $stmt = mysqli_prepare($connection, "
    //     SELECT d.name, d.specialization, ds.sessions
    //     FROM doctors d
    //     LEFT JOIN doctor_session ds ON d.id = ds.doctor_id 
    //     WHERE d.id = ? 
    // ");
        
    //     if ($stmt) {
    //         mysqli_stmt_bind_param($stmt, 's', $doctor_id);
    //         mysqli_stmt_execute($stmt);
    //         mysqli_stmt_bind_result($stmt, $name, $specialization,$sessions);
    //         mysqli_stmt_fetch($stmt);
    //         mysqli_stmt_close($stmt);
            
    //         return [
    //             'name' => $name,
    //             'specialization' => $specialization,
    //             'sessions' => $sessions,
    //         ];
    //     }
        
    //     return null; // Doctor not found
    // }

   


//    Testing 
public static function get_doctor_by_id($doctor_id) {
        global $connection;
        $stmt = mysqli_prepare($connection, "
        SELECT d.name, d.specialization, d.docFees, ds.sessions
        FROM doctors d
        LEFT JOIN doctor_session ds ON d.id = ds.doctor_id 
        WHERE d.id = ?
    ");
        
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 's', $doctor_id,);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $name, $specialization, $doctor_fees,$sessions );
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
            
            return [
                'name' => $name,
                'specialization' => $specialization,
                'sessions' => $sessions,
                'docFees'=> $doctor_fees
                
            ];
        }
        
        return null; // Doctor not found
    }

   

    // Search the patient from phone number 
    public static function get_patient_by_phone($phone){
        global $connection;
        $stmt = mysqli_prepare($connection, "SELECT * FROM appointments WHERE phone = ?");
        if($stmt){
            mysqli_stmt_bind_param($stmt,'s',$phone);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // check if the patient not exist 
            if($patient = mysqli_fetch_assoc($result));
            return $patient;
            // else{
            //     echo" No Patient found for this phone number ";
            // }
        }
    }
















}














?>
