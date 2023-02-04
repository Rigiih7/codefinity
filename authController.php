
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
$user_id = "";
$username = "";
$email = "";
$errors = [];
$firstname="";
$lastname="";



$conn = new mysqli('localhost', 'root', '', 'user-verification');

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO users SET username=?, email=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $username, $email, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
            // sendVerificationEmail($email, $token);

            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are successfully registered, you can proceed to login!';
            $_SESSION['type'] = 'alert-success';
            header('location: login.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username or email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE username=? OR email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $username, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: index.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}







// student registration
if (isset($_POST['submit-btn'])) {

    if (empty($_POST['phone'])) {
        $errors['phone'] = 'phone required';
    }

    if (empty($_POST['firstname'])) {
        $errors['firstname'] = 'Firstname required';
    }

    if (empty($_POST['lastname'])) {
        $errors['lastname'] = 'Lastname required';
    }

    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['course'])) {
        $errors['course'] = 'course required';
    }
    
    
    $phone = $_POST['phone'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $email = $_POST['email'];

    $course = $_POST['course'];

    $token = bin2hex(random_bytes(50)); // generate unique token


    
    

    // Check if email already exists
    $sql= "SELECT * FROM students WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO students SET phone=?, firstname=?, lastname=?,  email=?, course=?, token=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssssss', $phone, $firstname, $lastname,  $email, $course, $token);
        $result = $stmt->execute();


        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
            // sendVerificationEmail($email, $token);
        
            $_SESSION['id'] = $user_id;
            $_SESSION['phone'] = $phone;
            $_SESSION['firstname'] = $firstname;
            $_SESSION['lastname'] = $lastname;
            $_SESSION['email'] = $email;
            $_SESSION['course'] = $course;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You have successfully completed your registration. We will get back to you shortly!';
            
            header('location: applicationform.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}
?>