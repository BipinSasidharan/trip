    <?php

      session_start();  
    include ("index.php");
    
    @$email = $_POST['email'];
    @$password = $_POST['password'];
   
   $response = array();

   $sqlquery = "select * from user where U_email='$email' and U_password='$password'"; 
   //echo $sqlquery;
   
   $result=mysqli_query($conn, $sqlquery);
   $row=mysqli_num_rows($result);

   
   if($row ==1)
    {
  
       echo mysqli_error($conn);
	
      $response['status']=1;
      while($row = mysqli_fetch_array($result)){
         //session_start();
         /* SET SESSION VARIABLES */ 
         //$_SESSION['email']=$email;
         
	/* REDIRECT TO NEW PAGE*/
          $userdata=array('Id'=>$row['U_id'],'Name'=>$row['U_name']);
                    
      }
      $_SESSION['udisplay']=$userdata;
        header("Location:./Home.php");
                exit();
    }
    else
    {
  
       // echo mysqli_error($conn);
	
        //$response['status']=0;
	
       //$response['message']="Login Not successful";
        //echo json_encode($response);
        header("Location:./Log.php");
  
    }