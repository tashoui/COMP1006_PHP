<?php 

//sanatize the data and store in variable 
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_SPECIAL_CHARS); 
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_SPECIAL_CHARS); 
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$errors = []; 

//require first name
if ($firstName === null || $firstName === '') {
    $errors[] = "First Name is Required."; 
}

//require last name
if ($lastName === null || $lastName === '') {
    $errors[] = "Last Name is Required."; 
}

//require email and validate format 
if ($email === null || $email === '') {
    $errors[] = "Email is Required"; 
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email must be a valid email"; 
}

//require address
if ($address === null || $address === '') {
    $errors[] = "Address is required."; 
}

//if there are errors, display to user and exit the script 
if(!empty($errors)) {
foreach ($errors as $error) : ?>
    <li><?php echo $error; ?> </li>
<?php endforeach;
//stop the script from executing  
exit; 
}

$to = "bake_it_till_you_make_it@gmail.com";
$subject = "Form Submission";
$message = "Thank You " . $firstName . "For contacting us! We will get back to you as soon as possible.";
mail($to, $subject, $message);

?>

<!-- Confirmation message-->
<main>
<?php echo "Thanks for your order " . $firstName . ". Your submission as been received."; ?>
</main>



