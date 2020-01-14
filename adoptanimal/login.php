<?php
include('includes/public_header.php');
if(isset($_POST['login'])){ 

    $email    = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password)) {

        $query ="SELECT * FROM customer WHERE email='$email' AND password='$password'";
        $result=mysqli_query($conn,$query);
        $row   = mysqli_fetch_assoc($result);

        if($row['customer_id']){
            $_SESSION['customer_id']=$row['customer_id'];
            $_SESSION['mobile']     =$row['mobile'];

            echo '<script>window.top.location="add_pet.php"</script>';

        }else{

            $error = "sorry you can not login";
            
        }
    }
    
}

   if(isset($_POST['register'])) {
        
    $name    = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $mobile    = $_POST['mobile'];
   
   $query="INSERT INTO customer(name,email,password,mobile)VALUES('$name' , '$email','$password','$mobile')";
   
    $result=mysqli_query($conn,$query);
           
            echo '<script>window.top.location="login.php"</script>';
     
    
    }

?>

<section class="bg0 p-t-104 p-b-116">
        <div class="container">
            <div class="flex-w flex-tr">
                <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="" method="post">
                        <h2 class="mtext-105 cl2 txt-center p-b-30">
                            login
                        </h2>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-30" type="email" name="email" placeholder="Your Email Address">
                        </div>

                         <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-30" type="password" name="password" placeholder="Your Password">
                            
                        </div>
                        <button name="login" type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            sign in
                        </button>
                        <?php  if (isset($error)) {
                                    echo "<div class='alert alert-danger'>$error</div>";
                        }?>
                    </form>
                </div>

              <div class="size-210 bor10 p-lr-70 p-t-55 p-b-70 p-lr-15-lg w-full-md">
                    <form action="" method="post">
                        <h2 class="mtext-105 cl2 txt-center p-b-30">
                            Register
                        </h2>

                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-30" type="text" name="name" placeholder="Your Name">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-30" type="email" name="email" placeholder="Your Email Address">
                        </div>

                         <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-30" type="password" name="password" placeholder="Your Password">
                        </div>
                        <div class="bor8 m-b-20 how-pos4-parent">
                            <input class="stext-111 cl2 plh3 size-116 p-l-20 p-r-30" type="text" name="mobile" placeholder="Your mobile">
                        </div>
                        <button name="register" type="submit" class="flex-c-m stext-101 cl0 size-121 bg3 bor1 hov-btn3 p-lr-15 trans-04 pointer">
                            sign up
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
include('includes/public_footer.php')
?>