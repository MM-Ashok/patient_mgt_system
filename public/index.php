<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require_once '../controllers/AuthController.php';
require_once '../controllers/AdminController.php';
require_once '../controllers/DoctorController.php';

$page = $_GET['page'] ?? 'home';

$authController = new AuthController();
$adminController = new AdminController();
$doctorController = new DoctorController();

switch ($page) {
    case 'appointment':
        $authController->appointment();
        break;
    case 'login':
        $authController->login();
        break;
    case 'dashboard':
        $authController->dashboard();
        break;
    case 'admin_login':
        $adminController->admin_login();
        break;
    case 'admin_dashboard':
        $adminController->admin_dashboard();
        break;
    case 'add_doctor':
        $adminController->add_doctor();
        break;
        case 'add_specialization':
            $adminController->add_specialization();
            break;
        case 'doctor_login':
            $doctorController->doctor_login();
            break;

            case 'getTodaysAppointmentsByDoctor':
                $doctorController->getTodaysAppointmentsByDoctor();
                break;

                case 'patient_list':
                    $doctorController->patient_list();
                    break;
                    case 'getpatientById':
                        $doctorController->getpatientById();
                        break;
                        case 'addMedicalHistory':
                            $doctorController->addMedicalHistory();
                            break;

                            case 'patientMedicalData':
                                $doctorController->patientMedicalData();
                                break;
                            

                        
        case 'doctor_dashboard':
            $doctorController->doctor_dashboard();
            break;
            case 'search_patient':
                $doctorController->search_patient();
                break;
        case 'doctor_list':
            $adminController->doctor_list();
            break; 
            case 'doctor_session':
                $doctorController->doctor_session();
                break; 

            case 'add_staff':
                $adminController->add_staff();
                break;

                // case 'appointment':
                //     $authController->appointment();
                //     break; 
                    case 'book_appointment':
                        $authController->book_appointment();
                        break; 
            case 'home': // Added case for home
                $authController->home();
                break;
    default:
        $authController->home();
}


?>


