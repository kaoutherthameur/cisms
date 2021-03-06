<main role="main" class="col-md-12 ml-sm-auto col-lg-10 px-4">

	<?php 
			if($this->session->has_userdata('log_email')){
			//$session_data = $this->session->userdata();
			$email = $this->session->userdata('log_email');
			$id = $this->session->userdata('id');
			$fname = $this->session->userdata('fname');
			$lname = $this->session->userdata('lname');
			$user_type = $this->session->userdata('user_type');
			// echo $log_email;
			// echo $id;
			// print_r($user_data);
			//print_r($session_data);
			} else{
        redirect();
      } ?> 
	<section class="container">
		<div class="row">
	<div class="col-xl-3 col-md-12">
		<div class="card p-2" style="border: 0px;">
			<img src="<?php if(!empty($user_data)){
				echo base_url().'assets/img/profile_pics/'.$user_data[0]['stu_pic']; } ?>" class="card-img">
		</div>
		<form action="<?php echo base_url().'dashboard_controller/student_image/'; ?>" method="POST" enctype="multipart/form-data">
		<div class="card p-2"  style="border: 0px;">
		<input type="file" name="stu_pic">
		<input type="submit" name="img_update" value="Upload Image" style="border-radius:0px;" class="btn btn-block btn-primary mt-2">
	</form>
		<a href="<?php echo base_url().'dashboard_controller/'; ?>" style="border-radius:0px;" name="stu_update" class="btn btn-block btn-dark mt-2">Update Details</a>

		<a href="<?php echo base_url().'dashboard_controller/delete_stu_profile?id='.$id; ?>" style="border-radius:0px;" name="stu_delete" class="btn btn-block btn-danger mt-2" onclick=" return confirm('Do you really want to delete the record?');">Delete Profile</a>

		</div>
		</div>
	<div class="col-1"></div>
	<div class="col-8 p-2">
		<!-- <div class="row">
			<div class="col-12">
			<h3>Howdy, Student!</h3>
		</div>
		</div> -->	
		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>First Name</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($fname)){echo $fname; }  ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>Last Name</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($lname)){echo $lname; }  ?></p></div>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-12">
				<div class="col-6"><h4 class="fw-20"><b>Email</b></h4></div>
				<div class="col-6"><p class="fw-100"><?php if(!empty($email)){echo $email; }  ?></p></div>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-6">
				<div class="col-6"><h4 class="fw-20"><b>Gender</b></h4></div>
				<div class="col-6"><p class="fw-100">
				<?php if(!empty($user_data)){
				 if($user_data[0]['gender']=='m'){
				 	echo 'Male';}
				 	elseif ($user_data[0]['gender']=='f'){
				 		echo 'Female';
				 	}elseif ($user_data[0]['gender']=='o'){
				 		echo 'Transgender';
				 	}
				  }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>Date Of Birth</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['dob']; }
               ?></p></div>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>City</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['city']; }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>State</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['state']; }
               ?></p></div>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>Postal Code</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['postal']; }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-12"><h4 class="fw-20"><b>Country</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['country']; }
               ?></p></div>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-12">
				<div class="col-md-12"><h4 class="fw-20"><b>Course Enrolled</b></h4></div>
				<div class="col-md-12"><p class="fw-100"><?php 
				if(!empty($user_data))
				{ if($user_data[0]['course']=='BTech') { echo "Bachelor of Technology"; }
				elseif($user_data[0]['course']=='BCA') { echo "Bachelor in Computer Applications"; }
				elseif($user_data[0]['course']=='BBA') { echo "Bachelor in Business Administration"; }
				elseif($user_data[0]['course']=='BSC') { echo "Bachelor in Science"; }
				elseif($user_data[0]['course']=='BA') { echo "Bachelor in Arts"; }
			} ?></p></div>
			</div>
		</div>
		<div class="row mt-1">
			<div class="col-md-6">
				<div class="col-md-8"><h4 class="fw-20"><b>Year Of Passing</b></h4></div>
				<div class="col-md-4"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['yop']; }
               ?></p></div>
			</div>
			<div class="col-md-6">
				<div class="col-md-8"><h4 class="fw-20"><b>Marks Obtained</b></h4></div>
				<div class="col-md-4"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['marks']; }
               ?>%</p></div>
			</div>
		</div>	
		<div class="row mt-1">
			<div class="col-md-12">
				<div class="col-md-2"><h4 class="fw-20"><b>College</b></h4></div>
				<div class="col-md-10"><p class="fw-100"><?php if(!empty($user_data)){ echo $user_data[0]['college']; }
               ?></p></div>
			</div>
		</div>
	</div>
	</section>