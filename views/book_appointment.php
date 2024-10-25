<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Patient Registration form </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="../public/patient_reg_style/fonts/linearicons/style.css">
        <!-- Bootstrap css CDN Link  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<!-- Bootstrap Js CDN Link  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="../public/patient_reg_style/css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="../public/patient_reg_style/images/image-1.png" alt="" class="image-1">
                
				<form action="" method="POST" enctype="multipart/form-data">
                <a href="../public/index.php" class="btn btn-outline-primary"> Back </a>
					<h3>Book Appointment </h3>
                     
                       <!-- Input box for Name   -->
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control"  name = "name" placeholder ="Fullname">
					</div>
                 <!-- Input box for Email   -->
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" class="form-control" name="email" placeholder="Mail">
					</div>

					<!-- Input box for Phone   -->
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" class="form-control"name ="phone" placeholder="Phone Number">
					</div>

             <!-- Date Picker Start -->
					<div class="form-holder">
						<span  style="margin-right: 30px;"> DOB </span>
						<input type ="date" class="form-control" name="dob" placeholder="Date of Birth"/> 
					</div>
            <!-- Date Picker end -->

            <!--  Gender  Radio Button  start   -->
					<div class="form-holder">
					 <span class="lnr lnr-user" ></span> 

						<label for="male" style="margin-left: 30px;">
							<input type="radio" id="male" name="gender" value="male"/> Male
						</label>
						<label for="female">
							<input type="radio" id="female" name="gender" value="female"/> Female
						</label>
						<label for="other">
							<input type="radio" id="other" name="gender" value="other"/> Other
						</label>
					</div>
					 <!-- Gender Radio Button end   -->


					 <div class ="form-holder"> 
                     <label for="Address" >Address </label>
                        <textarea class="form-control" rows= "2" name ="address" placeholder="Enter Address"> </textarea> 
                       </div>

					<div class="form-holder">
					<label for="specialization" >Doctor Specialization:</label>
                     <select id="specialization" name="doctor_specialization">
					 <option value="Select Options">Select Option </option>
                       <option value="Cardiology">Cardiology</option>
                       <option value="ENT">ENT</option>
                       <option value="Dermatology ">Dermatology </option>
                       <option value="Orthopedics">Orthopedics</option>
    </select>
	</div>
	

    <label for="doctor">Select Doctor:</label>
    <select id="doctor" name="doctor_name">
	<option value="Select Options" >Select Option </option>
        <option value="John">Dr. John</option>
        <option value="Anjana">Dr. Anjana</option>
        <option value="Startup">Dr. Startup</option>
        <option value="William">Dr. William</option>
    </select>
                                       <!-- Appointment Start -->
                            <div class="form-holder">
						
						<label for="Appointmetn_date" >Appointment_date:</label>
						<input type ="date" class="form-control" name="appointment_date" id="appointment_date" placeholder="Appointment_date"/> 
						<script>	
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('appointment_date').setAttribute('min', today);
</script>
                      </script>
					</div>
            <!-- Date Picker end -->


			<div class="form-holder"> 
			<label for="time_slot">Select Time Slot </label>
                <select class="form-control" name="time_slot" id="time_slot" required>
                <option value="" disabled selected>Select session</option>
                    <option value="10 AM">10 AM </option>
                    <option value="10:30 AM">10:30 AM </option>
                    <option value="11 AM">11 AM </option>
                    <option value="11:30 AM">11:30 PM </option>
                    <option value="12 PM">12 PM </option>
                    <option value="12:30 PM">12:30 PM </option>
                    <option value="1:30 PM">1:30 PM </option>
                    <option value="2 PM">2 PM </option>
                    <option value="2:30 PM">2:30 PM </option>
                    <option value="3 PM">3 PM </option>
                    <option value="3:30 PM">3:30 PM </option>
                    <option value="4 PM">4 PM </option>
                    <option value="4:30 PM">4:30 PM </option>
                    <option value="5 PM">5 PM </option>
                    <option value="5:30 PM">5:30 PM </option> 
                   
                </select>
			</div> 
                    
			<!-- <div class="form-holder">
    <label for="time_slot">Select Time Slot:</label>
    <select class="form-control" name="time_slot" id="time_slot" required>
        <option value="" disabled selected>Select session</option>
    </select>
</div> -->
                      <!-- Address Textarea Start  -->
					  <div> 
	<label for ="payment"> Choose Payment </label>
    <select id="payment" name ="payment" class="form-control">
       <option value = "" disabled selected> Select Option </option> 
	   <option value = "Online"> Online Payment </option>
	   <option value = "COD"> Cash On Delivery </option>
	</select>

</div>
                      
					  <div class="form-holder"> 
    <span class="lnr lnr-file"></span>
    <input type="file" id="document" name="document" class="form-control" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"> 
</div>


					
					<button type="submit"  class=" btn btn-primary">Register</button>
                    <div class="form-holder m-2">
                        <a href="../public/index.php?page=login"> Already Have an Account </a>
                    </div>
					
				</form>
				<img src="../public/patient_reg_style/images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="../public/patient_reg_style/js/jquery-3.3.1.min.js"></script>
		<script src="../public/patient_reg_style/js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>