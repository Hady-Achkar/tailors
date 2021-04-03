<?php 
require '../db-connect.php';

if(isset($_POST['submit'])){

        $fullName=mysqli_real_escape_string($conn,$_REQUEST['fullName']);
        $email =mysqli_real_escape_string($conn,$_REQUEST['email']);
        $password =mysqli_real_escape_string($conn,$_REQUEST['password']);
        $phoneNumber =mysqli_real_escape_string($conn,$_REQUEST['phone']);
        $address =mysqli_real_escape_string($conn,$_REQUEST['address']);
        $image = $_FILES['image']['name'];
        $target = "../images/uploads/" . basename($image);
        $hashedpass = password_hash($password, PASSWORD_DEFAULT);
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileExt = explode('.', $image);
        $fileActualExt = strtolower(end($fileExt));
        $allow = array('jpg', 'jpeg', 'png', 'pdf');
        if (in_array($fileActualExt, $allow)) {
          
          if ($fileError === 0) {
              if ($fileSize < 1000000) {
                  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                    $query = "INSERT INTO customers (customer_name, customer_email, 
                    customer_password,customer_phone,customer_image,customer_address)
                    VALUES ('$fullName','$email','$hashedpass','$phoneNumber',
                    '$image','$address')";
            $checkEmailQuery="SELECT * FROM customers WHERE customer_email='$email'";
            $checkEmailResult=mysqli_query($conn,$checkEmailQuery);
            $number = mysqli_num_rows($checkEmailResult);
        
            if($number>0){
                header('Location:../customer-registration.php?Email is already in use');
            }else{
                echo $query;
                if(mysqli_query($conn,$query)){

                    $getID="SELECT * FROM customers WHERE customer_email='$email'";

                    $idResult=mysqli_query($conn,$getID);
                        while ($row = mysqli_fetch_assoc($idResult)) {
                                $id = $row['customer_id'];
                                session_start();
                                $_SESSION['id']=$id;
                                $_SESSION['login']=true;
                                $_SESSION['email']=$email;
                                $_SESSION['user_type']='customer';
                                mysqli_close($conn);
                                header('Location:../index.php?Login=true');
                        }
                }
            }
                  } else {
                      echo "File not uploaded";
                  }
              } else {
                  echo "Your file is too big!";
              }
          } else {
              echo "There was an error uploading your file!";
          }
  
      } else {
          echo "You cannot upload files of this type!";
      }
}else{
    header('Location:../index.php');
}   
                