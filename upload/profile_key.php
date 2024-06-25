<?php $this->load->view('front/header/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/intlTelInput.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css" />
<header>
	<div class="container">
		<div class="row">
			<div class="col-12" style="height: 44px;"></div>
			<div class="col-12 d-flex justify-content-between align-items-center hedMain">
				<div class="leftRight"><button onclick="location.href = '<?php echo base_url();?>index.php/Cust_home/myprofile';"><img src="<?php echo base_url(); ?>assets/img/back-icon.svg"></button></div>
				<div><h1>Personal Details</h1></div>
				<div class="leftRight"><button><img src="<?php echo base_url(); ?>assets/img/edit-icon.svg"></button></div>
			</div>
		</div>
	</div>
</header>
<?php
$Photograph = $Enroll_details->Photograph;

if($Photograph=="")
{
	$Photograph=base_url()."assets/img/user.jpg";
} else {
	$Photograph=$this->config->item('base_url2').$Photograph;
}	
?>
<main class="padTop perDetailsWrapper">    
    <div class="BoxHldr">
        <div class="container comHeight scrollbarMain">
            <div class="row">
                <div class="col-12">
				<form  name="Update_profile" id="myForm" method="POST" action="<?php echo base_url()?>index.php/Cust_home/Update_img" enctype="multipart/form-data" onsubmit="return form_submit();">	
                    <div class="photoEdit d-flex flex-column mb-4">
						<div class="userImg" id="profile_pic">
						<!--<a class="cameraIcon" href="#"><img src="<?php echo base_url(); ?>assets/img/camera-icon.svg"></a>-->
						<label for="image1" class="cameraIcon"><img src="<?php echo base_url(); ?>assets/img/camera-icon.svg"></label>
						<img id="image2" src="<?php echo $Photograph; ?>"></div>
						
						<div class="editTxt">
							<input name="image1" id="image1" style="visibility:hidden; float:right;" type="file" onchange="readImage(this,'#image2');">	
						</div>
                        <div class="nameTxt" style="padding-top: 0px;!important">
                            <?php echo ucwords($Enroll_details->First_name).' '.ucwords($Enroll_details->Last_name); ?>
                        </div>
                    </div>
				</form>
                </div>
				<?php
					if(@$this->session->flashdata('error_code'))
					{
					?>
						<div class="alert bg-danger alert-dismissible" id="msgBox" role="alert" style="margin:0 auto;">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h6 class="form-label"><?php echo $this->session->flashdata('error_code'); ?></h6>
						</div>
					<?php
					}
				?>

                <div class="col-12">
                    <form class="perDetailForm" id="Updateprofile" method="post" action="<?php echo base_url();?>index.php/Cust_home/profile">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="firstName" id="firstName" value="<?php echo ucwords($Enroll_details->First_name); ?>" onblur="allLetter(this.value);" required>
                        </div>

                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" name="lastName" id="lastName" value="<?php echo ucwords($Enroll_details->Last_name); ?>" onblur="allLetter1(this.value);" required>
                        </div>

						<div id="BirthDate" class="form-group">
							<label>Date of Birth</label>
							<input type="text" class="form-control" id="datepicker1" name="dob" <?php if($Enroll_details->Date_of_birth != Null && $Enroll_details->Date_of_birth != "1970-01-01 00:00:00" && $Enroll_details->Date_of_birth != "0000-00-00 00:00:00") { ?> disabled value="<?php echo date('Y-m-d', strtotime($Enroll_details->Date_of_birth)); ?>" <?php } ?> required>
						</div>
						<?php if($Enroll_details->Date_of_birth != Null && $Enroll_details->Date_of_birth != "1970-01-01 00:00:00" && $Enroll_details->Date_of_birth != "0000-00-00 00:00:00") { ?>
						<input type="hidden" class="form-control" name="dob" value="<?php echo date('Y-m-d', strtotime($Enroll_details->Date_of_birth)); ?>">
						<?php } ?>
						
						<div class="form-group mt-4">
							<div class="w-100 pb-2">Gender</div>
							 <label class="radioBtnMain mr-4">Male
								<input type="radio" <?php if($Enroll_details->Sex=='Male') { echo "checked"; } ?> name="Sex" value="Male">
								<span class="checkmark"></span>
							</label>
							<label class="radioBtnMain mr-4">Female
								<input type="radio" <?php if($Enroll_details->Sex=='Female') { echo "checked";} ?> name="Sex" value="Female">
								<span class="checkmark"></span>
							</label>
							<label class="radioBtnMain">Other
								<input type="radio" <?php if($Enroll_details->Sex=='Other') { echo "checked"; } ?> name="Sex" value="Other">
								<span class="checkmark"></span>
							</label>
						</div>
						
                        <div class="form-group">
                            <label>Mobile Number</label>
							<input type="tel" class="form-control" placeholder="Mobile Number" name="phno" id="phno"  value="<?php echo $phnumber; ?>" maxlength="9" required>
							<div class="help-block1" style="float: center;"></div>
                        </div>
						
						<div class="form-group">
							<label>Email ID</label>
							<input type="text" class="form-control" type="email" placeholder="Email" name="userEmailId" id="userEmailId" value="<?php echo $User_email_id; ?>" onblur="checkemail();" required>
							<?php  if($Enroll_details->Email_verified == 1){ ?>
								<span class="form-ver text-success">Verified</span>
								<?php } else { ?>
									<a href="<?php echo base_url(); ?>index.php/Cust_home/Verify_email"><span class="form-ver unver text-danger">Unverified</span></a>
								<?php } ?>
								<div class="help-block" style="float: center;"></div>
								<?php   ?>
						</div>
                        
                        <div class="form-group mt-4">
                            <div class="w-100 pb-2">Martial Status</div>
                            <label class="radioBtnMain mr-4">Married
                                <input type="radio" checked="checked" name="Martial_status" value="Married" <?php if($Enroll_details->Married=='Married') { echo "checked";} ?>>
                                <span class="checkmark"></span>
                            </label>
                            <label class="radioBtnMain mr-4">Single
                                <input type="radio" name="Martial_status" value="Single" <?php if($Enroll_details->Married=='Single') { echo "checked";} ?>>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        
						<div id="AnniversaryDate" class="form-group">
							<label>Anniversary Date</label>
							<input type="text" class="form-control" id="datepicker1" name="Wedding_annversary_date" <?php if($Enroll_details->Wedding_annversary_date != Null && $Enroll_details->Wedding_annversary_date != "1970-01-01 00:00:00" && $Enroll_details->Wedding_annversary_date != "0000-00-00 00:00:00") { ?> value="<?php echo date('Y-m-d', strtotime($Enroll_details->Wedding_annversary_date)); ?>" <?php } ?>  placeholder="Anniversary Date">
						</div>
						<?php if($Enroll_details->Wedding_annversary_date != Null && $Enroll_details->Wedding_annversary_date != "1970-01-01 00:00:00" && $Enroll_details->Wedding_annversary_date != "0000-00-00 00:00:00") { ?>
						<input type="hidden" class="form-control" name="Wedding_annversary_date" value="<?php echo date('Y-m-d', strtotime($Enroll_details->Wedding_annversary_date)); ?>" placeholder="Anniversary Date">
						<?php } ?>
						
                        <div class="group w-100 mt-5">
							<input type="hidden" name="Enrollment_id" value="<?php echo $Enroll_details->Enrollement_id; ?>">
							<input type="hidden" name="Company_id" value="<?php echo $Enroll_details->Company_id; ?>">
							<input type="hidden" name="User_id" value="<?php echo $Enroll_details->User_id; ?>">
							<input type="hidden" name="membership_id" value="<?php echo $Enroll_details->Card_id; ?>">
							<input type="hidden" name="Password" value="<?php echo $Enroll_details->User_pwd; ?>">
                            <!--<a href="#" onclick="document.getElementById('Updateprofile').submit();" class="MainBtn w-100 text-center">Submit</a>-->
							<button type="submit" class="MainBtn w-100 text-center">Submit</button>
                        </div>
                    </form>
					
                </div>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view('front/header/footer');  ?>
<script src="<?php echo base_url(); ?>assets/js/intlTelInput.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
<?php 				
	$Cust_min_age=$Company_Details->Cust_min_age;
	if($Cust_min_age != ""){
		$Cust_min_age= $Cust_min_age;
	} else {
		$Cust_min_age=18;
	}

	if($Enroll_details->Date_of_birth != ""){
		$Date_of_birth= date('Y', strtotime($Enroll_details->Date_of_birth));
		$today_DOB = date('Y');
		$yearDiff= $today_DOB - $Date_of_birth;
		$yearDiff_1 = $yearDiff - $Cust_min_age;
		$time = strtotime("-$yearDiff_1 year", time());
		$dateYear = date("Y", $time);
	}	
?>
<script>
$(function() 
{
	$( "#datepicker1" ).datepicker({
		changeMonth: true,
		yearRange: "-70:-19",
		changeYear: true
	});
	
	$( "#datepicker2" ).datepicker({
		changeMonth: true,
		yearRange: "-70:-19",
		changeYear: true
	});
});
    var input = document.querySelector("#phno");
	// console.log(input);
	// var input=91;
    window.intlTelInput(input, {
		
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
        // $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          // var countryCode = (resp && resp.country) ? resp.country : "";
          // callback(countryCode);
        // });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true, 
	  
	  
	  // whether or not to allow the dropdown
		allowDropdown: true,

		// if there is just a dial code in the input: remove it on blur, and re-add it on focus
		autoHideDialCode: true,

		// add a placeholder in the input with an example number for the selected country
		autoPlaceholder: "polite",

		// modify the auto placeholder
		customPlaceholder: null,

		// append menu to specified element
		dropdownContainer: null,

		// don't display these countries
		excludeCountries: [],

		// format the input value during initialisation and on setNumber
		formatOnDisplay: false,

		// geoIp lookup function
		geoIpLookup: null,

		// inject a hidden input with this name, and on submit, populate it with the result of getNumber
		hiddenInput: "",

		// initial country
		initialCountry: "ke",

		// localized country names e.g. { 'de': 'Deutschland' }
		localizedCountries: { 'ke': 'Kenya' },

		// don't insert international dial codes
		nationalMode: true,

		// display only these countries
		onlyCountries: [],

		// number type to use for placeholders
		placeholderNumberType: "MOBILE",

		// the countries at the top of the list. defaults to united states and united kingdom
		preferredCountries: [ "us", "gb" ],

		// display the country dial code next to the selected flag so it's not part of the typed number
		separateDialCode: false,

		// specify the path to the libphonenumber script to enable validation/formatting
		// utilsScript: ""
	  
	  
	  
      utilsScript: "<?php echo base_url(); ?>assets/js/utils.js",
    });
</script>
<!--Select DorpDown custom JS-->
  <script type="text/javascript">
  
  function hide_anniversary(InputVal){
		console.log('---InputVal----'+InputVal);
		if(InputVal=='Single'){
			
			$('#annversary_div').css('display','none');
			
		} else{
			$('#annversary_div').css('display','block');
		}
	}
function Change_anniversary_date(dobDate){
	
	console.log(dobDate);	
	var DOBarr = dobDate.split('/');	
	console.log(DOBarr[2]);
	var Anniversary =parseInt(DOBarr[2]) + parseInt(18);
	console.log(Anniversary);
	var Year= new Date().getFullYear();	
	$( "#datepicker2" ).datepicker({      
		changeMonth: true,	   
		yearRange: ''+Anniversary+':'+Year+'',
		changeYear: true
    });
}
function ValidateEmail(mail) 
{
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
	{
		return true;
	}
    //alert("You have entered an invalid email address!");
	
	var msg1 = 'Please enter valid email id';
	$('.help-block').show();
	$('.help-block').css("color","red");
	$('.help-block').html(msg1);
	setTimeout(function(){ $('.help-block').hide(); }, 3000);
    return false;
}

$('#phno').change(function()
{	
	var Country = '<?php echo $Enroll_details->Country; ?>';
	var Company_id = '<?php echo $Enroll_details->Company_id; ?>';
	var phno = $('#phno').val();
	
	if( $("#phno").val() == "" )
	{		
		var msg1 = 'Please Enter Phone Number';
		$('.help-block1').show();
		$('.help-block1').css("color","red");
		$('.help-block1').html(msg1);
		setTimeout(function(){ $('.help-block1').hide(); }, 3000);
	}
	else
	{
		$.ajax({
			type: "POST",
			data: { phno: phno,Company_id:Company_id, Country:Country},
			url: "<?php echo base_url()?>index.php/Cust_home/check_phone_number",
			success: function(data)
			{				
			
				console.log(data);
				if(data == 1)
				{
					$("#phno").val('')
					
					var msg1 = 'Phone Number Already Exist!';
					$('.help-block1').show();
					$('.help-block1').css("color","red");
					$('.help-block1').html(msg1);
					setTimeout(function(){ $('.help-block1').hide(); }, 3000);
				}
				else
				{					
				}
			}
		});
	}
});

$('#userEmailId').change(function()
{		
	var Company_id = '<?php echo $Enroll_details->Company_id; ?>';
	var userEmailId = $('#userEmailId').val();
	
	var validEmailId=ValidateEmail(userEmailId);
	// alert(validEmailId);
	// return false;
	if( $("#userEmailId").val() == "" || validEmailId == false)
	{	
		// alert(validEmailId);
		var msg1 = 'Please Enter Email Id';
		$('.help-block').show();
		$('.help-block').css("color","red");
		$('.help-block').html(msg1);
		setTimeout(function(){ $('.help-block').hide(); }, 3000);
	}
	else
	{
		$.ajax({
			type: "POST",
			data: { userEmailId: userEmailId, Company_id:Company_id},
			url: "<?php echo base_url()?>index.php/Cust_home/check_email_id",
			success: function(data)
			{				
				if(data > 0)
				{
					$("#userEmailId").val("");					
					var msg1 = 'Email Id Already Exist!';
					$('.help-block').show();
					$('.help-block').css("color","red");
					$('.help-block').html(msg1);
					setTimeout(function(){ $('.help-block').hide(); }, 3000);
				}
				else
				{
					
				}
			}
		});
	}
});

function allLetter(uname)
{
	if(uname !="")
	{
		var letters = /^[A-Za-z]+$/;
		if(uname.match(letters))
		{
			return true;
		}
		else
		{
			$("#firstName").val("");					
			var msg1 = 'Name must have alphabet characters only';
			$('.firstName').show();
			$('.firstName').css("color","red");
			$('.firstName').html(msg1);
			setTimeout(function(){ $('.firstName').hide(); }, 3000);
			// uname.focus();
			return false;
		}
	}
}
function allLetter1(uname)
{ 
	if(uname !="")
	{
		var letters = /^[A-Za-z]+$/;
		if(uname.match(letters))
		{
			return true;
		}
		else
		{
			$("#lastName").val("");					
			var msg1 = 'Name must have alphabet characters only';
			$('.lastName').show();
			$('.lastName').css("color","red");
			$('.lastName').html(msg1);
			setTimeout(function(){ $('.lastName').hide(); }, 3000);
			// uname.focus();
			return false;
		}
	}
}
$(document).ready(function() 
{
	setTimeout(function(){ $('#msgBox').hide(); }, 3000);
});
function readImage(input,div_id) 
{	
	document.getElementById('profile_pic').style.display="";
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		
		reader.onload = function (e) {
			$(div_id)
				.attr('src', e.target.result)
				.height(100);
		};

		reader.readAsDataURL(input.files[0]);
	}
	document.getElementById("myForm").submit();
}



function checkemail()
{		
	/* var Company_id = '<?php echo $Enroll_details->Company_id; ?>';
	var userEmailId = $('#userEmailId').val();
	
	var validEmailId=ValidateEmail(userEmailId);
	// alert(validEmailId);
	// return false;
	if( $("#userEmailId").val() == "" || validEmailId == false)
	{	
		// alert(validEmailId);
		$('#userEmailId').val('');
		var msg1 = 'Enter valid email id';
		$('.help-block').show();
		$('.help-block').css("color","red");
		$('.help-block').html(msg1);
		setTimeout(function(){ $('.help-block').hide(); }, 3000);
	}
	else
	{
		$.ajax({
			type: "POST",
			data: { userEmailId: userEmailId, Company_id:Company_id},
			url: "<?php echo base_url()?>index.php/Cust_home/check_email_id",
			success: function(data)
			{	
				if(data > 0)
				{
					$("#userEmailId").val("");					
					var msg1 = 'Email Already Exist';
					$('.help-block').show();
					$('.help-block').css("color","red");
					$('.help-block').html(msg1);
					setTimeout(function(){ $('.help-block').hide(); }, 3000);
				}
				else
				{
					
				}
			}
		});
	} */
}
</script>
<style>
<!--.upload_btn_set
{
	position: fixed;
    right: 0px;
	padding-right: 80px;
	margin-top: -10px;
} -->
.editTxt
{
	position: relative;
    margin: 0 auto;
    padding: 0;
    width: 70px;
}
</style>