<?php
 include('connect.php');
 $name=$_POST['name'];
  $contact=$_POST['contact'];
   $emailid=$_POST['emailid'];
    $message=$_POST['message'];
	
		$insert="insert into enquiryform(name,contact,emailid,message,datetime)value('$name','$contact','$emailid','$message',now())";
		   $status=mysql_query($insert);
		   
		   
		    if($status)
			  {
				  echo "<script>alert('SUCCESS ');
				   window.location='contact.php'</script>";
			  }
			  else
			  {
				  echo "<script>alert('fail');
				   window.location='contact.htm'</script>";
			  }
			  ?>
