
<?php
		$connection = mysqli_connect("localhost", "root" , "" , "student_record");
 
 if (isset($_POST['submit'])) {
 			 $recieved_name     = $_POST['name'];
 			 $recieved_email     = $_POST['email'];
 			 $recieved_password  = $_POST['pass'];
 			 $recieved_phonenumber  = $_POST['phone'];

 			 $result_query = mysqli_query($connection,"INSERT INTO student_tbl (name, email, password, phonenumber) VALUES ('$recieved_name', '$recieved_email', '$recieved_password', '$recieved_phonenumber')");

 			 if ($result_query) {
 			 	echo "<script>alert('Record inserted Successfully'); </script>";
 			 } else {
 			 	echo "<script>alert('Record insertion Failed::'); </script>";
 			 }
 		}		


?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>

</head>
<body>

  <a href="index.php"><button>Back to Home</button></a>
  <a href="records.php"><button>Show Record</button></a>

<br><br>

	  <h3 align="center">LOGIN Form</h3> <br><br>
	 	 	  <form name="form" method="post" action="" onsubmit="return password_valid();" align="center">
	 	 	  	  <div class="form-group" align="center"><br>
	 	 	  	  	  <label>Name</label> <br>
	 	 	  	  	  <input type="text" name="name" placeholder="Your Name" class="form-control">
	 	 	  	      <span id="name" style="color: red;"></span>
            </div>

	 	 	  	  <div class="form-group">
	 	 	  	  	  <label>Email</label> <br>
	 	 	  	  	  <input type="email" name="email" placeholder="Your email" class="form-control">
	 	 	  	      <span id="email" style="color: red;"></span>
            </div>

	 	 	  	  <div class="form-group">
                     <label>Password</label> <br>
                     <input type="password" name="pass" class="form-control" placeholder="Password">
                      <span id="pass" style="color: red;"></span>
                </div>

                <div class="form-group">
                  <label>Phone Number</label> <br>
                  <input type="text" name="phone" class="form-control" placeholder="+923xxxxxxxxx">
                  <span id="phone" style="color: red;"></span>
                </div>

             <input type="submit" name="submit" value="Submit Form">
	 	 	  </form>
	 	 </div>
	 </div><br><br>  <!-- row ended here for vertical forms -->

<script>
    function password_valid()
    {
      var pass   = document.form.pass.value;
      var name  = document.form.name.value;
      var email  = document.form.email.value;
      var phone  = document.form.phone.value;
       if(name==null||name==""){
          document.getElementById('name').innerHTML="Please enter your name!";
          return false;
       }
       else if(email==null||email==""){
         
          document.getElementById('email').innerHTML="Please enter your email!";
          return false;
       }

      else if (pass==null||pass=="") 
       { 
          document.getElementById('pass').innerHTML="Password can't be blank!";
        return false;
       }
       else if (pass.length<6) 
        { 
          document.getElementById('pass').innerHTML="Password must be at least 6 characters!";
          return false;
        }
        else if (phone==null||phone=="")
        {
          document.getElementById('phone').innerHTML="Number field doesn't be empty!";
          return false;
        }
        else if(isNaN(phone))
        {   
          document.getElementById('phone').innerHTML="Please Enter Numeric value for this field!";
          return false;
        }
       else if(phone.charAt(0)!="+")
       {
          document.getElementById('phone').innerHTML="Number must be in below pattern<br>+923022382910";
          return false;
       }
       else if(phone.charAt(1)!="9")
       {
          document.getElementById('phone').innerHTML="Country code should be only pakistan which is +92";
          return false;
       }
       else if(phone.charAt(2)!="2")
       {
            document.getElementById('phone').innerHTML="Country code should be only pakistani which is +92";
          return false;
       }
       else if(phone.length!="13")
       {
          document.getElementById('phone').innerHTML="Please enter correct 13 digit number!";
          return false;
       }
       else{
        return true;
       }


    }
  </script>

</body>
</html>