<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
    <title>Login</title>
</head>
<body>

<div id="login">
  
<div class="container">
        <div class="card card-container">
        <i class=" fa-solid fa-user"></i>
            <img id="profile-img" class="profile-img-card" src="img/prof.png"/>
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="post">
                <span id="reauth-email" class="reauth-email"></span>
            
                <select name="userSelect"  class="form-control" id="userSelect">
                    <option value="Admin">Admin</option>
                    <option value="Content Manager">Content Manager</option>
                    <option value="System Users">System Users</option>
                </select>
                <br>

                <input type="text" name="userName" id="Email" class="form-control" placeholder="User Name" required autofocus>
               
                <input type="password"  name="password" id="Password" class="form-control" placeholder="Password" required>
             
                <button class="rounded-pill btn btn-lg btn-primary btn-block btn-signin" type="submit" name="Signin">Sign in</button>
            </form>

            <?php
               
                $position = array("Admin","Content Manager","System Users");
                $users = array(
                    array(
                    "Username" => "admin",
                    "Password" => "admin1234"
                    ),
                    array(
                    'Username' => 'wall2711',
                    'Password' => 'pass1234'                            
                    ),
                    array(
                        'Username' => 'Denji',
                        'Password' => 'chansawman'                           
                    ),
                  
                    
                   );

                   if (isset($_POST['Signin'])) {

                    $user = $_POST['userSelect'];
                    $username = $_POST['userName'];
                    $password = $_POST['password'];

                    if ($user === $position[0] && $username === $users[0]['Username'] && $password === $users[0]['Password']) {
                        echo '<div class="alert alert-success" role="alert">welcome to the system: '.  $users[0]['Username']  .'</div>';
                        
                    }
                    elseif ($user === $position[0] && $username === $users[1]['Username'] && $password === $users[1]['Password']){
                        echo '<div class="alert alert-success" role="alert">welcome to the system: '.  $users[1]['Username']  .'</div>';
                    }
                    elseif ($user === $position[1] && $username === $users[2]['Username'] && $password === $users[2]['Password']){
                        echo '<div class="alert alert-success" role="alert">welcome to the system: '.  $users[2]['Username']  .'</div>';
                    }
                    elseif ($user === $position[1] && $username === $users[3]['Username'] && $password === $users[3]['Password']){
                        echo '<div class="alert alert-success" role="alert">welcome to the system: '.  $users[3]['Username']  .'</div>';
                    }
                    
                    else{
                        echo '<div class="alert alert-danger" role="alert">Incorrect Username/Password</div>';

                    }
                 }
            ?>
 

           
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


</body>
</html>