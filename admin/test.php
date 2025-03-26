<?php
// Original password
$password = 'L85C3|#l';

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Output the original and hashed passwords
echo "Original Password: " . htmlspecialchars($password) . "<br>";
echo "Hashed Password: " . htmlspecialchars($hashedPassword) . "<br>";

// Optional: Verify the password
if (password_verify($password, $hashedPassword)) {
    echo "The password is valid!";
} else {
    echo "The password is invalid.";
}
?>