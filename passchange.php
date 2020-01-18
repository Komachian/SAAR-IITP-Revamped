<?php
session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $url = 'https://saar-server.000webhostapp.com/functions/changePassword.php';
        $ch = curl_init($url);
        $data = array(
         'rollno' => $_SESSION['cid'],
         'new_password' => $_POST["newpassword"],
         'confirm_password' => $_POST["confirmnewpassword"]
        );
        if(isset($_SESSION['password'])){
          $data += array('old_password' => $_POST["password"]);
        }
        if(isset($_SESSION['forget_pass'])){
          $data += array('forget_password' => $_SESSION['forget_pass']);
        }
        $payload = http_build_query($data);
  
        curl_setopt($ch, CURLOPT_POST, true);
        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  
        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
        //execute the POST request
        $result = curl_exec($ch);
        //close cURL resource
        curl_close($ch);
        
        $response = json_decode($result,true);
  
        echo $result;
        if($response['status']== 407){
          $_SESSION['error'] = $response['messages'][0];
          header("location: changePassword.php");
        }else if($response['status'] == 207){
          $_SESSION['msg'] = $response['messages'][0];
            header("location: logout.php");
        }
   }?>