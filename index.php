

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

<div class='form py-[20px] md:px-[150px]'>

<form action="submit.php" method="POST" class='flex flex-col bg-[green] text-white p-4 my-[20px] mx-[130px] border rounded-md'>
    
    <label for="title"> Add Title</lable>
    <input type="text" name="title" class='bg-white text-[black]' required><br><br>
    <label for="img">Image</lable>
    <input type="file" name="img" class='bg-white text-[black]' accept="image/*" required><br><br>
    <label for="content">Content</lable><br>
    <textarea rows='20' cols='100' name="content" placeholder='Create your blog here....' class='bg-white text-[black]' required></textarea>
    <script>
		CKEDITOR.replace( 'content' );
	</script>
    <br><br>
    <label for="Aname">Author Name</lable>
    <input type="text" name="Aname" class='bg-white text-[black]' required><br><br>
    <label for="contact">Contact</lable>
    <input type="text" name="contact" class='bg-white text-[black]' required><br><br>
    <input type='submit' class="bg-[red] hoover:bg-[white] text-white py-1 px-3 mt-3" value="Add your blog">
    <input type='reset' class="bg-[red] hoover:bg-[white] text-white py-1 px-3 mt-3 align-right" value="clear your form">


</form>
</div>

<?php
include("footer.php")
?>
   

</body>
</html>