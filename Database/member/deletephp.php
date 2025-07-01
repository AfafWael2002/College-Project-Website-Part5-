<?php  
session_start();
include "dbh.inc.php"; 


if(isset($_POST['delete']) )
{
  
         $answer =$_POST['delete'];
         if ($answer != NULL)
              {
     
                $sql =" SELECT * FROM LAB WHERE LCODE='$answer'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) === 0)
                {
                    echo'<script> alert( "No Lab exists eith this code")</script>';
                      exit();
                  }


                  else{
                    
               echo'<script>confirm("Sure to delete?") </script>' ;
               $sql1 =" DELETE FROM MEMBER WHERE MCODE='$answer'";
              $result1 = mysqli_query($conn,$sql1);
              
              if($result1 )
              {
                echo'<script> alert( "Deleted Successfully")</script>';
                exit();
              }
              
               }
            }
            }

            
        
               ?>