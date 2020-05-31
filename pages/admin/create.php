<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Creating!")</script>'; 
    // header('Refresh:0; url=index.php');
    // print_r($_POST)

        if(isset($_post['submit'])){

            $sql =  "INSERT INTO `admin` ( `first_name`, `last_name`, `email`, `cid`, `tel`, `username`, `password`, `status`, `last_login`, `update_at`, `created_at`) 
                    VALUES ( '".$_post['first_name']."', 
                             '".$_post['last_name']."', 
                             '".$_post['email']."', 
                             '".$_post['cid']."', 
                             '".$_post['tel']."', 
                             '".$_post['username']."', 
                             '".$_post['password']."',  
                             '".$_post['status']."', 
                             '".date("Y-m-d H:i:s")."',
                             '".date("Y-m-d H:i:s")."', 
                             '".date("Y-m-d H:i:s")."');";
        $result = $conn->query($sql) or die ($conn->error);

         }else{
                header('Refresh:0; url=index.php');
        }
?>