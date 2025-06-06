<html>
<head>
    <title>My Blog</title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="style.css">
            <script src="https://cdn.ckeditor.com/4.25.1-lts/full/ckeditor.js"></script>
            <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

     <?php
    include("header.php")
    ?>

    <h1 class="italic font-serif text-center bg-[yellow]">Blog Posts</h1><br><br>
    <?php
    if (file_exists('posts.html')) {
        include 'posts.html';
    } else {
        echo "<p>No posts yet.</p>";
    }
    ?>
    <br>
    <button class="px-[12px] py-[5px] bg-[red]"><a href="index.php" class="text-2xl text-decoration-none text-white">Create a new Blog</a></button><br>

    <?php
include("footer.php")
?>

</body>
</html>