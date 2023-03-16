<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	

if(isset($_POST['formsubmit'])){
	
	
	$fname=$_POST['v1'];
	$email=$_POST['v2'];
	$num=$_POST['v3'];
	$cc=$_POST['v4'];
	$enquiry=$_POST['v5'];
	$nation=$_POST['v6'];
	$additional=$_POST['v7'];
	
	$sql = "INSERT INTO mytable (fname1, email1, num1,cc1,enquiry1,nation1,additional1) VALUES ('$fname', '$email', '$num','$cc','$enquiry','$nation','$additional')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Your Trip planner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="icon" href="img/favicon.png" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
  
  
  <!--  lightbox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top " style=" background-color:#ffffff !important">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-12 align-items-center justify-content-lg-between text-center">

          <p class="text-white mb-4 mt-4 mylogotext text-center" >
		  <span style="color:#000000; font-size:20px">Incredible </span><span style="color:#FF0000;font-size:30px">!</span><span style="color:#000000;font-size:20px">ndia</span>
		  </p>


        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
 
 <section id="" class="about justify-content-center text-center p-0 m-0">
  <div class="container-fluid p-0 m-0" style="position:relative">
    	<div class="row">
        	
        	<img style="margin-top:80px;" src="images/gallery/tajmahal.jpg" />
            
            
            
        </div>
    </div>
</section>
  <main id="main">

  <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">
 <div class="container">
       
        <div class="row text-center">
          <div class="col-md-12">
           		<div class="section-title">
          <h2 style="color:#000000">About India</h2>
          
        </div>
              
              <p>India is part of the continent of Asia. Most of India forms a peninsula, which means it is surrounded by water on three sides. The world's highest mountain range, the Himalaya, rises in the north. The southeast is bordered by the Bay of Bengal, and the southwest is bordered by the Arabian Sea.</p>

<p>India's terrain varies widely, from the Thar Desert in the west to jungles in the northeast. A fertile area called the Ganges Plain covers much of northern India. This formation was created from soil that was deposited by rivers running from the Himalaya. In some places, this layer of silt is over 25,000 feet (7,620 meters) deep.</p>
          </div>
          <div class="col-md-12 mt-4 mb-5">
           
		   <div class="overviewbox mt-5 mb-5 text-center" style="text-align:center">
		   
		   <p style="font-weight:600" class="text-center">Start to prepare for your trip now.</p>
		  <a href=""><button class=" btn btn-dark">Apply Now!</button></a>
		   
	</div>
    </div>
	</div>
	</div>
        </div>

     
    </section>
    <!-- End About Us Section -->

   

  
 <!-- ======= Amenities Section ======= -->
    <section id="amenities" class="features bg-grey">
      <div class="container bg-grey">
    <div class="row bg-grey">
     <div class="section-title text-center">
          <h2 style="color:#000000">Climate of India</h2>
          
        </div>
                
               <div class="row">
              <div class="col-md-3">
                    
					<div class="row imgscale" id="summer" style="background-image:url('images/gallery/summer.jpg'); background-size:cover; border-radius:15px;margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Summer</p>
					</div></div>
					
				
                    
					<div class="col-md-3">
                    
					<div class="row imgscale" id="spring" style="background-image:url('images/gallery/spring.jpg'); background-size:cover; border-radius:15px;margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Spring</p>
					</div></div>
					
					<div class="col-md-3">
                    
					<div class="row imgscale" id="rainy" style="background-image:url('images/gallery/rainy.jpg'); background-size:cover; border-radius:15px; margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Rainy</p>
					</div></div>
					
					<div class="col-md-3">
                    
					<div class="row imgscale" id="winter" style="background-image:url('images/gallery/winter.jpg'); background-size:cover; border-radius:15px;margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Winter</p>
					</div></div>
					
					
					
                
			
					</div>
					
                </div>
				<div class="col-md-12 p-4">
                    
					<div class="row p-2">
						<div class="col-12 mt-4">
						<div id="summercontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">SUMMER</h4>
                        <p>During the three months from April to June it is summer in most parts of India.Generally in the month of April, many parts of India experiences high temperature.</p></div>
						
						<div id="springcontent"style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">SPRING</h4><p>The advent of spring brings us the pleasant sound wind begins to blow. It refreshes our body and mind. The countryside appears to be adorned with green leaves and flowers. Birds sing and bees hum in the flower garden.</p></div>
						
						<div id="rainycontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">RAINY</h4><p>The rainy season in India begins generally from the second week of July and continues up to the second week of October. From the second week of June humid monsoon enters various parts of India and causes rainfall everywhere in the state.</p></div>
						
						<div id="wintercontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">WINTER</h4><p>During the period from December to February there is winter season in India. During this time clouds and dry North-East Monsoon passes over different regions of India and temperature is decreased considerably. In Himalayan area the temperature is much lower (between 5°C and 10°C).</p></div>
							
							
						</div>
					
						</div>
						
					</div>
					</div>
                </div>
				
				
				
               
               
            </div>
    </div>
    </section>
 <!--end of section-->
 <div class="row text-center fixed">
 <div>
 <div style="background-image:url('images/gallery/fixedbackground.jpg');background-size:cover;background-repeat:no-repeat;background-attachment: fixed;">
 <h3 class="fixedcontainer">Take a moment to prepare your trip now.</h3>
  <a href="#products"><div class="fixed2"><button class=" btn btn-secondary  ">Apply Now!</button></div></a>
 </div>
 </div>
 </div>
    
   
    
    
    
    
    <!-- ======= Gallery Section ======= -->
    <section id="gallary" class="features">
      <div class="container" >
	  

        <div class="row">
        <div class="section-title text-center">
          <h2 style="color:#000000">Top places to visit India</h2>
          
        </div>
        <div class="col-md-12 m-0 p-0">
         <div class="ultimate-comfort m-0 p-0" id="residence">
         <div class="content-div m-0 p-0">
           
           
            <div class="h-line" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="2000"></div>
           
           <div class="photo-gallery m-0 p-0">
        <div class="container-fluid  m-0 p-0">
            <div class="intro">
            </div>
            <div class="row photos">
                
				<div class="row">
              <div class="col-md-3">
                    
					<div class="row imgscale" id="jaipur" style="background-image:url('images/gallery/jaipur.jpg'); background-size:cover; border-radius:15px; margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Jaipur</p>
					</div></div>
					
					
					<div class="col-md-3">
                    
					<div class="row imgscale" id="goa" style="background-image:url('images/gallery/goa.jpg'); background-size:cover; border-radius:15px; margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Goa</p>
					</div></div>
					
					<div class="col-md-3">
                    
					<div class="row imgscale" id="delhi" style="background-image:url('images/gallery/lotus.jpg'); background-size:cover; border-radius:15px; margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px; margin-bottom:0px;">Delhi</p>
					</div></div>
					
					<div class="col-md-3">
                    
					<div class="row imgscale" id="kerala" style="background-image:url('images/gallery/kochi.jpg'); background-size:cover; border-radius:15px; margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Kerala</p>
					</div></div>
					
					
					
                
			
					</div>
					<div class="col-md-12 p-4">
                    
					<div class="row p-2">
						<div class="col-12 mt-4">
						<div id="jaipurcontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">Jaipur</h4>
                        <p>Jaipur is often called the Pink City in reference to its distinctly colored buildings, which were originally painted this color to imitate the red sandstone architecture of Maugham cities.</p><p>The Hawa Mahal is a palace in the city of Jaipur, India. Built from red and pink sandstone, it is on the edge of the City Palace, Jaipur.</p></div>
						
						<div id="goacontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">GOA</h4><p>Goa - The Beach capital of India</p></div>
						
						<div id="delhicontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">DELHI</h4><p>Gurdwara Rakab Ganj Sahib is a historical gurdwara in Delhi, It’s located at the exact spot where Sri Guru Teg Bahadur’s headless body was cremated.</p><p>The Lotus Temple, located in Delhi, India, is a House of Worship that was dedicated in December 1986.</p><p>Qutb Minar (also spelled Qutub Minar) at 73 metres, is the tallest brick minaret in the world and second highest minar in india after Fateh burj at Mohalli(punjab)</p><p>Akshardham is a Hindu temple complex in Delhi, India. Also referred to as Delhi Akshardham or Swaminarayan Akshardham</p></div>
						
						<div id="keralacontent"style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">KERALA</h4><p>Kochi, the southern city of Kerala has optimum temperatures throughout the year, which means visiting Kochi during any time of the year, would work for travellers.</p></p></div>
							
							
						</div>
					
						</div>
						
					</div>
				</div>
				
				
			<div class="row">
              <div class="col-md-3">
                    
					<div class="row imgscale" id="mumbai" style="background-image:url('images/gallery/mumbai.jpg'); background-size:cover; border-radius:15px; margin:1px;">
				    <p style="font-weight:600 !important;font-size:20px; text-align:center; padding:25% 0%; background-color:#00000029; color:#fff;border-radius:15px;margin-bottom:0px;">Mumbai</p>
					</div></div>
					
					
					
</div>	
<div class="col-md-12 p-4">
                    
					<div class="row p-2">
						<div class="col-12 mt-4">
						<div id="mumbaicontent" style="border:1px solid #ccc; box-shadow: 0px 0px 10px #ccc;" class="p-3 bg-white text-left"><h4 style=" font-weight:600;">Mumbai</h4>
                        <p>The Gateway of India is a monument built during the British Rule in Mumbai City of Maharashtra state in Western India.</p></div>
						
						
</div>	
</div>	
</div>							
				
				
               
               
               

            </div>
        </div>
    </div>
         </div>
      </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= Gallery Section ======= -->
     <!-- ======= Floor Plan ======= -->
    <section id="products" class="features" style=" background-image:url('images/gallery/contactus.jpg'); background-size:cover;">
      <div class="container ">
	  <h2 class="mt-0 mb-5 text-center" style="color:#fff; font-weight:700">Tell us about your needs</h2>
        <div class="container-fluid">
		<div class="container mt-3 pb-5 mb-5" style="background-color:#ffffffb8; height:%; ">
		<form>
        <div class="row row1">
		 <div class="col-md-4">
		<div> <label>Full Name:<span style="color:#ff0000">*</span></label></div>
		<input type="text" id="v1" name="v1" class="input form-control" placeholder="Full Name" />
		</div>
		<div class="col-md-4">
		<div> <label>Email Address:<span style="color:#ff0000">*</span></label></div>
		<input type="email" id="v2" name="v2" class="input form-control" placeholder="Email Address" />
		</div>
		 <div class="col-md-4">
		<div> <label>Phone Number:<span style="color:#ff0000">*</span></label></div>
		<input type="text" id="v3" name="v3" class="input form-control" placeholder="Phone Number" />
		</div>
		 </div>
		 
		 <div class="row row2">
		 <div class="col-md-4">
		<div> <label>Communication Channel:</i><span style="color:#ff0000">*</span></label></div>
		<select id="v4" name="v4" class="input form-control">
		<option value="" disabled selected>Please Select</option>
		<option value="" >Whatsapp Number</option>
		<option value="" >Viber</option>
		<option value="" >Telegram</option>
		<option value="" >Skype ID</option>
		<option value="" >Signal Number</option>
		<option value="" >We Chat</option>
		<option value="" >Other</option>
		</select>
		</div>
		<div class="col-md-4">
		<div> <label>Your Enquiry:<span style="color:#ff0000">*</span></label></div>
		<select id="v5" name="v5" class="input form-control">
		<option value="" disabled selected>Please Select</option>
		<option value="" >Flight</option>
		<option value="" >Hotel</option>
		<option value="" >Tour</option>
		<option value="" >Car Rental</option>
		<option value="" >Other request</option>
		</select>
		</div>
		 <div class="col-md-4">
		<div> <label>Nationality:</label></div>
		<select id="v6" name="v6" class="input form-control">
		<option value="" disabled selected>Please Select</option>
		<option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India" selected>India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option></select>
		</div> </div>
		<div class="row row3">
		<div class="col-md-12">
		<div><label>Additional Request (s):</label></div>
		<textarea rows="5" class="form-control" placeholder="Additional Request (s)" name="v7" id="v7"></textarea>
		</div>
		</div>
		<div class="row row3 text-center">
		<div class="col-md-12">
		<button class="submit btn btn-dark" name="formsubmit">SUBMIT</submit>
		</div>
		</div>
		
		 </form>
		 </div>
		 </div>
		  </div>
		   
		   </section>
		   <div class="container">
		   <div class="row bg-white text-center">
		   <h2 class="mt-5 section-title" style="color:#004ca2; font-weight:600; color:#000000">Perfect Reasons to visit India</h2>
		   <div class="container text-center pt-5 mb-3 pb-5">
		   <div class="col-md-12" style=" margin:auto;">
		   <div class="row p-0 m-0" style="--bs-gutter-x:0px !important;background-color:#000000;"> 
		    <div class="col-md-4" style="margin-right:0px !important">
			<img class="img-fluid" src="images/gallery/mountain.jpg" width="100%"/>
			</div>
			<div class="col-md-8 m-0"  style="margin-left:0px !important">
			<div class="keypoints" style="background-color:#000000">
			
				<div class="perfect"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp Land of Peace & Spirituality</div>
				<div class="perfect"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp Heart of Performing Arts</div>
				<div class="perfect"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp Hub of Nightlife</div>
				<div class="perfect"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp Enjoy the Best Tea</div>
				<div class="perfect"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp Tour the Incredible Wildlife</div>
				<div class="perfect"><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp The Ever Smiling Faces</div>
				
			
				</div>
			</div>
			</div>
		  
		   </div>
		   </div>
		   </div>
		 </div>
		 
		<!---our company-->
		 <div class="row text-center">
		<div class="bg-grey">
		<div class="container-fluid">
		
		  <h3 class="ourcompany" style="color:#000000; mt-5; pt-5;">Our Company</h3>
		  <p style="margin:0px 20px">As per my knowledge your company is fast-growing, a well-reputed company in market and employee-oriented also and also your company provides It is the fastest growing company in India.</p><p style="mb-5; pb-5;padding-bottom:100px"> It is good reputed company. It is in number one position in India. People feel proud to be apart from our company and the Work environment is good.</p>
			
			</div>
			</div>
			</div>
			
			<!---footer-->
			 <div class="row text-center">
		<div class="bg-white">
		<div class="container-fluid">
		<h3 class="contactus pt-5 mt-5" style="color:#000000">Contact Us</h3>
		  <p style="font-size:18px; font-weight:600">Your Trip Planner.</p>
		  <div class="row mt-5 mb-5">
		  <div class="col-md-4"><h5>CALL US</h5>
		  <p><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp+91 8587081878</p>
		  
		  
		  
		  
		  
		  </div>
		  <div class="col-md-4"><h5>EMAIL US</h5>
		  <p><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp navjot171299@gmail.com</p>
		  </div>
		  
		  <div class="col-md-4"><h5>LOCAL ADDRESS</h5>
		  <p><i class="fa fa-map-pin" aria-hidden="true"></i>&nbsp <span style="font-weight:600"> In India:</span> New Delhi.</p></div>
		  </div>
		  
			
			</div>
			</div>
			</div>
		  
		 
		
		
		
		
        
		
        </div>
    </div>
         </div>
      </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= Floor Plan ======= -->

 

  <!-- ======= Footer ======= -->
  <footer id="footer">
  <div class="container">
		<p class="text-center text-white mb-0">Copyright © 2023-navjot. All Rights Reserved.</p>
		</div>
		</footer>
		
		
		
		
		
		
		
		
		
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  
  

</body>

</html>

<script>


	function closemodal(){
		$('#modalone').modal('hide');
	}
	function showmodal(){
		$('#modalone').modal('show');
	}

$(document).ready(function(){
	$("#summercontent").hide();
   $("#springcontent").hide();
   $("#rainycontent").hide();
   $("#wintercontent").hide();
   
  $("#summer").click(function(){
   $("#summercontent").slideDown("slow");
   $("#springcontent").slideUp();
   $("#rainycontent").slideUp();
   $("#wintercontent").slideUp();
  });
  /********************/
  $("#spring").click(function(){
   $("#summercontent").slideUp();
   $("#springcontent").slideDown("slow");
   $("#rainycontent").slideUp();
   $("#wintercontent").slideUp();
  });
  /***********************/
  $("#rainy").click(function(){
   $("#summercontent").slideUp();
   $("#springcontent").slideUp();
   $("#rainycontent").slideDown("slow");
   $("#wintercontent").slideUp();
  });
  /**********************/
  $("#winter").click(function(){
   $("#summercontent").slideUp();
   $("#springcontent").slideUp();
   $("#rainycontent").slideUp();
   $("#wintercontent").slideDown("slow");
  });
 $("#jaipurcontent").hide();
   $("#goacontent").hide();
   $("#delhicontent").hide();
   $("#keralacontent").hide();
   
  $("#jaipur").click(function(){
   $("#jaipurcontent").slideDown("slow");
   $("#goacontent").slideUp();
   $("#delhicontent").slideUp();
   $("#keralacontent").slideUp();
  });
  /********************/
  $("#goa").click(function(){
   $("#jaipurcontent").slideUp();
   $("#goacontent").slideDown("slow");
   $("#delhicontent").slideUp();
   $("#keralacontent").slideUp();
  });
  /***********************/
  $("#delhi").click(function(){
   $("#jaipurcontent").slideUp();
   $("#goacontent").slideUp();
   $("#delhicontent").slideDown("slow");
   $("#keralacontent").slideUp();
  });
  /**********************/
  $("#kerala").click(function(){
   $("#jaipurcontent").slideUp();
   $("#goacontent").slideUp();
   $("#delhicontent").slideUp();
   $("#keralacontent").slideDown("slow");
  });
  
   $("#mumbaicontent").hide();
   $("#some1").hide();

   $("#mumbai").click(function(){
   $("#mumbaicontent").slideDown("slow");
   $("#some1").slideUp();
	});
  $("#some").click(function(){
   $("#some1").slideDown("slow");
   $("#mumbaicontent").slideUp();
 });
  
});



 
</script>

<!--  lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>