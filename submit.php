<html>
    <head>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="https://cdn.ckeditor.com/4.25.1-lts/full/ckeditor.js"></script>
        
    </head>

    <body>
    
    <?php
    include("header.php")
    ?>

    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $img = trim($_POST['img']);
    $content = trim($_POST['content']);
    $Aname = trim($_POST["Aname"]);
    $contact = trim($_POST["contact"]);


    if (empty($title) || empty($img) ||  empty($content) ||  empty($Aname) ||  empty($contact)) {
        die("Title and image and Content and Aname and contact are required.");
    }

    $post = "<h2>" . htmlspecialchars($title) . "</h2>\n" .
            "<img>" . htmlspecialchars($img) . "</img>\n" .
            "<p>" . nl2br(htmlspecialchars($content)) . "</p>\n" .
            "<p>" . htmlspecialchars($Aname) . "</p>\n" .
            "<p>" . htmlspecialchars($contact) . "</p>\n" .
            "<hr>\n";

    $file = 'posts.html';

    if (file_put_contents($file, $post, FILE_APPEND | LOCK_EX)) {
        echo "Post published successfully!<br>";
        echo "<a href='view.php'>View Blog Posts</a>";
    } else {
        echo "Error saving the post.";
    }
}else{
    header("Location: index.php");
    exit();
}
?>

<?php

$directory = 'upload/';
$img = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

if (count($img) > 0) {
    foreach ($img as $img) {
      
        $imgUrl = $img;
        echo "<img src='$imgUrl' alt='Uploaded Image' style='width:200px; margin:10px;'>";
    }
} else {
    echo "No images found.";
}
?>

    <?php
    include("footer.php")
    ?>
