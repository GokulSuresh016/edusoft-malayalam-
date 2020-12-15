<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
require_once"../Login/config/db_connect.php";
$obj=new db_connect;
if(isset($_POST['submit_student']))
{
	$_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
	$data=array('username'=>$_POST['email'],'password'=>$_POST['password'],'category'=>'4');
	$Login_tableName="tbl_login_info";
	$check_username=$obj->select_any_one($Login_tableName,"username='".$_POST['email']."'");
	if($check_username['username']=='')
	{
	$login_data_result=$obj->inserttblReturnId($data,$Login_tableName);
	if($login_data_result>0)
	{
	$tableName="tbl_student_details_registration_details";
	unset($_POST['submit_student']);
	unset($_POST['password']);
	$_POST['student_details_registration_details_id']=$login_data_result;
	$result=$obj->inserttblReturnId($_POST,$tableName);
	
	if($result>0)
	{
		?>
		<script>
		swal("Success!", "You have successfully registred!", "success");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		swal("Success!", "something went wrong.please try after sometime!", "warning");
		</script>
		<?php
	}
	}
	else
	{
		?>
		<script>
		swal("Sorry!", "something went wrong.please try after sometime!", "warning");
		</script>
		<?php
	}
	}
	else
	{
		?>
		<script>
		swal("Sorry!", "User Already Exists!", "warning");
		</script>
		<?php
	}
}
if(isset($_POST['teacher_submit']))
{
	$_POST['password']=password_hash($_POST['password'],PASSWORD_DEFAULT);
	$data=array('username'=>$_POST['email'],'password'=>$_POST['password'],'category'=>'3');
	$Login_tableName="tbl_login_info";
	$check_username=$obj->select_any_one($Login_tableName,"username='".$_POST['email']."'");
	if($check_username['username']=='')
	{
	$login_data_result=$obj->inserttblReturnId($data,$Login_tableName);
	if($login_data_result>0)
	{
	unset($_POST['teacher_submit']);
	unset($_POST['password']);
	$_POST['teacher_details_registration_details_id']=$login_data_result;
	$tableName="tbl_teacher_details_registration_details";
	
	$result=$obj->inserttblReturnId($_POST,$tableName);
	
	if($result>0)
	{
		?>
		<script>
		swal("Success!", "You have successfully registred!", "success");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
		swal("Sorry!", "something went wrong.please try after sometime!", "warning");
		</script>
		<?php
	}
	}
	else
	{
		?>
		<script>
		swal("Sorry!", "something went wrong.please try after sometime!", "warning");
		</script>
		<?php
	}
	}
	else
	{
		?>
		<script>
		swal("Success!", "User Already Exists!", "warning");
		</script>
		<?php
	}
}
?>
<div class="team-area section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row justify-content-center">
                   
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
						<br><br><br>
                           
                            <h2> Register as <?=($teacher==0)?'Student':'Teacher';?></h2>
                        </div> 
                </div>
               
               
            </div>
        </div>   
   <div class="popular-course ">
            <div class="container">
			 <br>  
			  <br>  
   <div class="row">
               <?php
			   if($teacher==0)
			   {
			   ?>
                 
					<div class="col-lg-6">
					 <form action="" method="POST">
                        <h2>Register  Here</h2>
						
            <div class="form-group">
                <label for="name">Full name*</label>
                <input class="form-control" required  type="text" name="name" placeholder="Full name">
            </div>
			 <div class="form-group">
                <label for="name">Contact Number*</label>
                <input class="form-control" required type="text" name="number" placeholder="Contact Number">
            </div>
			 <div class="form-group">
                <label for="name">Contact Address*</label>
                <input class="form-control" required type="text" name="address" placeholder="Contact Address">
            </div>
            <div class="form-group">
                <label for="name">Email Address/ Username*</label>
                <input class="form-control" required type="email" name="email" placeholder="Email Address">
            </div>
			<div class="form-group">
                <label for="name">Password*</label><br>
                <input class="form-control" required type="password" name="password" placeholder="*****">
            </div>
            <div class="form-group">
                <label for="name">Class/Course*</label><br>
                <input class="form-control" required type="text" name="class" placeholder="Class">
            </div>
			
            <div class="form-group pt-30">
                <input class="btn btn-danger" type="submit" name="submit_student" value="Registration">
            </div>
			</form>
                    </div>
					
			<?php
			   }
			   else
			   {
				   ?>
				   <div class="col-lg-6">
				   <form action="" method="POST">
		 <div class="form-group">
                <label for="name">Full name*</label>
                <input class="form-control"  type="text" name="name" placeholder="Full name">
            </div>
			 <div class="form-group">
                <label for="name">Contact Number*</label>
                <input class="form-control" type="text" name="number" placeholder="Contact Number">
            </div>
			 <div class="form-group">
                <label for="name">Contact Address*</label>
                <input class="form-control" type="text" name="address" placeholder="Contact Address">
            </div>
            <div class="form-group">
                <label for="name">Email Address/Username*</label>
                <input class="form-control" type="email" name="email" placeholder="Email Address">
            </div>
				<div class="form-group">
                <label for="name">Password*</label><br>
                <input class="form-control" required type="password" name="password" placeholder="****">
            </div>
            <div class="form-group">
                <label for="name">Qualification*</label><br>
                <input class="form-control" type="text" name="qualifications" placeholder="Qualification">
            </div>
			 <div class="form-group">
                <label for="name">Subjects*</label><br>
                <input class="form-control" type="text" name="subjects" placeholder="Subjects">
            </div>
            <div class="form-group pt-30">
                <input class="btn btn-danger" type="submit" name="teacher_submit" value="Registration">
            </div> 
			</form>
			</div>
				   <?php
			   }
			?>
		  <div class="col-lg-6"> 
					    <div class="row">
					<img src="img/Pencil3.png" width="70%"/>
					</div>
					</div>
		</div>
	</div>