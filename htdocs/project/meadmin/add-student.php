<?php 
 
 if(isset($_POST['std_add_now']))
 {
	 // $std_fullname,$std_username,$std_password,$std_grade,$std_roll,$std_dob,$std_address,$std_district,$std_gender,$std_father,$std_mother,$std_parent_contact
	 $std_fullname = $_POST['std_fullname'];
	 $std_username = $_POST['std_username'];
	 $std_password = $_POST['std_password'];
	 $std_address = $_POST['std_address'];
	 
	 
	 if($std_fullname=="" or $std_username=="" or $std_password=="" or $std_address=="")
	 {
		 echo "<script>alert('please fill form and Add Student');</script>"; 
	 }
	 else
	 {
		 
		 $add_student_done = $ravi->add_student($std_fullname,$std_username,$std_password,$std_address);
		 if($add_student_done==true)
		 {
			 echo "<script>window.location = 'home.php?ravi=student-information';</script>";
		 }
		 else
		 {
			 echo "<script>alert('contact with developer');</script>";
		 }
		 
	 }
	 
 }


?>

<div class="forms-main">

	<div class="graph-form">
		<div class="validation"
			<!---->
			<h2 align="center"><?php echo strtoupper($_GET['add_student']); ?></h2>
			<form method="post">
					<div class="col-md-12 form-group1 group-mail">
					<label class="control-label">FullName</label>
					<input type="text" placeholder="Full Name" required="" name="std_fullname">
				</div>
				<div class="vali-form">
				
		--
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Username</label>
						<input type="text" placeholder="Username" required="" name="std_username">
					</div>
					
						<div class="col-md-6 form-group1">
						<label class="control-label">Password</label>
						<input type="text" placeholder="Password" required="" name="std_password">
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-6 form-group2 group-mail">
					<label class="control-label">College_ID</label>
					<select name="std_grade">
						<option>Select College</option>
						<?php 
						$st_add_class = $ravi->grade($grade);
						while($st_add_class_fetch = $st_add_class->fetch_assoc())
						{
						?>
								<option value="<?php echo $st_add_class_fetch['class']; ?>"><?php echo $st_add_class_fetch['class']; ?></option>
								<?php } ?>		
					</select>						
					</div-->	
					
					
					<div class="col-md-6 form-group1">
						<label class="control-label">Address</label>
						<input type="text" placeholder="Address" required="" name="std_address">
					</div>
					
				
					
				</div>
					<div class="clearfix"> </div>
				<div class="col-md-12 form-group button-2">
					<input type="submit" class="btn btn-primary" value="Add College" name="std_add_now">
					<button type="reset" class="btn btn-default">Reset</button>
				</div>
				<div class="clearfix"> </div>
			</form>

			<!---->
		</div>

	</div>
</div>
<!--//forms-->