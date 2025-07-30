<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- PHP Program to Calculate the age of person on input of DOB -->

<!-- The htmlspecialchars() function in PHP is primarily used for security and proper display of content in web applications. Its main uses are:
Preventing Cross-Site Scripting (XSS) Attacks: -->

<?php

$name = "";
$dob = "";
$age = ""; 
?>
<div id="cont">
<h1 align=center> Age Calculator in PHP</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>" required>
</br>

        <input type="submit" value="Calculate Age">
    </form>

<?php

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
} else {
    $errors[] = "Name is required.";
}

if (isset($_POST['dob']) && !empty($_POST['dob'])) {
    $dob = $_POST['dob'];
    // ... rest of DOB validation
} else {
    $errors[] = "Date of Birth is required.";
}

$age = calculateAge($dob);

echo '<p class="result">'.$name.' Your Age: ' . $age . ' years old.</p>';
?>
</div>
<?php
function calculateAge(string $dob = "11/24/1987")
    {
        $birthDate = DateTime::createFromFormat('Y-m-d', $dob);
        if (!$birthDate) {
            return false; // Invalid date format
        }

        $currentDate = new DateTime();
        $difference = $currentDate->diff($birthDate);
        return $difference->y;
    }
?>

<style>
#cont { /* This targets your main form container */
    max-width: 60%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc; /* Solid border: 1px width, grey color */
    border-radius: 8px; /* Rounded corners for a softer look */
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow effect */
}
#cont{
    margin-left: 20%;
    margin-top: 50px;
}
.result {
    background-color: #e6ffe6; /* Light green background */
    border: 1px solid #00cc00;
    color: #008000; /* Darker green text */
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
}

.result h3 {
    color: #006600;
    margin-top: 0;
}
input[type="submit"] {
    margin-top: 2%;
    width: auto; /* Allow button to size itself based on content */
    padding: 10px 20px;
    border-radius: 20px; /* More rounded corners */
    text-transform: uppercase; /* Uppercase text */
    letter-spacing: 1px; /* Spaced out letters */
    transition: background-color 0.3s ease; /* Smooth transition on hover */
    margin-left: 69%;
}

input[type="submit"]:hover {
    background-color: #368f3a; /* Darker green on hover */
}

input[type="text"]:focus,
input[type="date"]:focus {
    outline: none;
    border-color: #28a745; /* Green border on focus */
    box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
}
input[type="text"],
input[type="date"] {
    width: 35%;
    padding: 12px 15px; /* Increased padding for more space */
    border: 1px solid #dcdcdc; /* Lighter, subtle border */
    border-radius: 8px; /* More rounded corners */
    box-sizing: border-box;
    font-size: 16px; /* Slightly larger font */
    color: #333;
    background-color: #fcfcfc; /* Very light background */
    transition: all 0.3s ease; /* Smooth transitions for hover/focus */
}
p{
width: 60%;
margin-left: 20px;
}
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #e0f7fa; /* Light blue background */
    color: #333;
    line-height: 1.6;
}
    /* ... existing styles ... */
    h2 { /* Targets the "Age Calculator" heading */
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }
    /* ... existing styles ... */

</style>
</body>
</html>