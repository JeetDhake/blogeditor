<?php
include('connect.php');

if (isset($_POST['Create-Blog'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $tags = $_POST['tags'];
    
    $date = $_POST['date'];

    $img = $_FILES['img']['name'];
    $tmp_image = $_FILES['img']['tmp_name'];
    

    if ($title == '' or $category == '' or $author == '' or $tags == '' or $date == '' or $img == '') {
        echo "<script>
                alert('enter all fields mf')
              </script>";
        exit();
    } else {

        move_uploaded_file($tmp_image, "blogeditor/db_img/$img");

        $insert_b = "INSERT INTO `blogs` (title,category,author,tags,date,img) VALUES ('$title','$category','$author','$tags','$date','$img')";

        $result_query = mysqli_query($con, $insert_b);
        if ($result_query) {
            echo "<script>
                alert('category added successfully')
              </script>";
            header("location: post.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b9323f08fd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="landingpage.css">
    <title>blog editor</title>
</head>

<body>
    <?php require_once("navbar.html") ?>
    <?php require_once("sidebar.html") ?>

    <div class="container">
        <div class="apf">
            <div class="wrapper">
                <section class="pst">
                    <header>
                        New Post
                    </header>
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="pdetail">

                            <div class="fld">
                                <label for="">Blog Title</label>
                                <input type="text" name="title" id="title" placeholder="Enter Blog Title" required>
                                <i class="fa-solid fa-feather"></i>
                            </div>

                            <div class="f">
                                <div class="fld">
                                    <label for="">Category</label>
                                    <select name="category">
                                        <option value="">Select Category</option>
                                        <?php
                                        $select_query = "SELECT * FROM `category`";
                                        $result_query = mysqli_query($con, $select_query);

                                        while ($row = mysqli_fetch_assoc($result_query)) {
                                            $category = $row['category'];
                                            $cid = $row['cid'];

                                            echo "<option value='$category'>$category</option>";
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="fld">
                                    <label for="">Author</label>
                                    <input type="text" name="author" id="author" placeholder="Enter Writers name" required>
                                    
                                    <i class="fa-solid fa-signature"></i>
                                </div>
                            </div>
                            <div class="f">
                            <div class="fld">
                                <label for="">Tags</label>
                                <input type="text" name="tags" id="tags" placeholder="Enter Tags seperated by comma" required>
                                <i class="fa-solid fa-hashtag"></i>
                            </div>
                            <div class="fld">
                                <label for="">Date</label>
                                <input type="date" name="date" id="date" required>
                                
                            </div>
                            </div>
                            

                            <div class="fld img">
                                <label for="">Post Image</label>
                                <label for="img" id="drop">
                                    <input type="file" name="img" id="img" hidden>

                                    <div id="img-view">

                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        <p>Drag and Drop<br>click here to Upload Image</p>
                                    </div>
                                </label>
                            </div>

                            <div class="fld btn">
                                <input type="submit" value="Create-Blog" name="Create-Blog" id="Create-Blog">
                            </div>
                        </div>
                    </form>

                </section>
            </div>
        </div>
    </div>
    <script src="landingpage.js"></script>
</body>

</html>