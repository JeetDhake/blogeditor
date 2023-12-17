<?php 
include('connect.php');
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
    <?php require_once("navbar.html")?>
    <?php require_once("sidebar.html")?>
    
    <div class="container">
        
        <div class="field">
        <h3>Posts</h3>
            <a href="addpost.php">
                <button>Add New Post</button>
            </a>
        </div>
        <div class="tb">
    <table>
            <thead>
                <tr>
                    <th class="tit">Blog Title</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>date</th>
                    <th>Author</th>
                    <th>Views</th>
                    <th>Clicks</th>
                </tr>
            </thead>
    <?php

$select_query="SELECT * FROM `blogs`";
$result_query=mysqli_query($con,$select_query);


while($row=mysqli_fetch_assoc($result_query)){

    $title=$row['title'];
    $category=$row['category'];
    $tags=$row['tags'];
    $date=$row['date'];
    $author=$row['author'];
    $view=$row['view'];
    $click=$row['click'];
  

    
        echo "
        <tbody>
            <tr>
                <td><p class='p-g'>$title</p></td>
                <td>$category</td>
                <td>$tags</td>
                <td>$date</td>
                <td>$author</td>
                <td>$view</td>
                <td>$click</td>
            </tr>

        </tbody>
    

";
}
     
    ?>
    </table>
    </div>
    </div>

    <script src="landingpage.js"></script>
</body>

</html>