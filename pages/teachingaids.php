<?php
require_once"../Login/config/db_connect.php";
$obj=new db_connect;
if(isset($_POST['send']))
{
	//validation;
}
?>


<div class="team-area section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row justify-content-center">
                   
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 text-center mb-70">
						<br><br><br>
                           
                            <h2> Teaching Aids</h2>
                        </div> 
                </div>
               
               
            </div>
        </div> 
		<div class="popular-course ">
            <div class="container">
			 <br>  
			  <br>  
  <div class="row ">
  <div class="col-lg-8">
   <form action="" method="POST">
                        <h2>Ask Admin</h2>			
            <div class="form-group">
                <label for="name">Full name*</label>
                <input class="form-control" required  type="text" name="name" placeholder="Full name"  >
            </div>
			 <div class="form-group">
                <label for="name">Contact Number*</label>
                <input class="form-control" required type="text" name="number" placeholder="Contact Number">
            </div>
            <div class="form-group">
                <label for="name">Email Address/ Username*</label>
                <input class="form-control" required type="email" name="email" placeholder="Email Address">
            </div>
            <div class="form-group">
                <label for="name">Message*</label><br>
               <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
            </div>
			
            <div class="form-group pt-30">
                <input class="btn btn-danger" type="submit" name="send" value="Send">
            </div>
			</form>
                    </div>
					 </div>
				 </div>
					</div>
					