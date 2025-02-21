<?php
$host = 'localhost'; // Your database host
$db = 'medtech_assist'; // Your database name
$user = 'root'; // Your database username
$pass = ''; // Your database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //Run the below code to check if your connection is established
    // echo "Done";
    // echo "\n";
    // $query = "SELECT id, img_url, title, created FROM blog";
    // $stmt = $pdo->prepare($query);
    // $stmt->execute();
    // $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
    

    // // Display fetched content
    // if ($blogs) {
    //     foreach ($blogs as $blog){
    //         echo ($blog['title']);
    //         echo ($blog['img_url']);
    //         echo ($blog['created']);
    //         echo ("-------------\n");
    //     }
    // } else{
    //     echo "------";
    // }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>