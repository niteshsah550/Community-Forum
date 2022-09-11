<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Discuss - Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $catname = $row['category_name'];
        $catdesc= $row['category_description'];

    }
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST'){
        //Insert into thread  db
        $th_title = $_POST['title'];
        $th_title = str_replace("<", "&lt;", $th_title);
        $th_title = str_replace(">", "&gt;", $th_title);

        $th_desc = $_POST['desc'];
        $th_desc = str_replace("<", "&lt;", $th_desc);
        $th_desc = str_replace(">", "&gt;", $th_desc);
        
        $sno = $_POST['sno'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your thread has been added! Please wait for community to respond.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> ';
        }
    }
    ?>
    <!-- Categories container start here -->
    <div class="container my-4">
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome to <?php echo $catname; ?> Forums</h1>
                <p class="col-md-8 fs-4"><?php echo $catdesc; ?>.</p>
                <hr my-3>
                <p>This is a peer to peer forum.
                    No Spam / Advertising / Self-promote in the forums is not allowed.
                    Do not post copyright-infringing material.
                    Do not post “offensive” posts, links or images.
                    Do not cross post questions.
                    Do not PM users asking for help.
                    Remain respectful of other members at all times.</p>


                <button class="btn btn-success btn-lg" type="button">Learn More</button>
            </div>
        </div>
    </div>

    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

  echo'<div class="container">
        <h1>Start a Discussion</h1>
        <form action="' . $_SERVER["REQUEST_URI"] . '" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Problem Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="title">
                <div id="title" class="form-text">Keep your title as short and crip as possible .</div>
            </div>
            <input type="hidden" name="sno" value="' . $_SESSION["sno"] . '">
            <div class="mb-3">
                <label for="desc" class="form-label">Ellaborate Your Concern</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>';
    }
    else{
        echo '
        <div class="container mb-4">
        <h1>Start a Discussion</h1>
          <p class="lead">You are not logged in. Please login in to start a discussion.</p>
        </div>';
    }
    ?>

    <div class="container my-4">
        <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` WHERE thread_cat_id=$id";
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){
        $noResult = false;
        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc= $row['thread_desc'];
        $thread_time = $row['timestamp'];
        $thread_user_id = $row['thread_user_id'];
        $sql2 = "SELECT user_email FROM `users` WHERE sno='$thread_user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($result2);

        echo '<div class="d-flex">
            <div class="flex-shrink-0">
                <img src="images/user1.png" width="55px" alt="...">
            </div> 
            <div class="flex-grow-1 ms-3">'.
                
                 '<h4 class="my-1"><a href="thread.php?threadid=' .$id . '">'. $title .'</a></h4>
                 <h6 class="mt-0">Asked by:' . $row2['user_email'] . ' at ' . $thread_time . '</h6> 
                 <p>' . $desc .'</p>'.
            '</div>
        </div> ';   
        }
        //echo var_dump($noResult);
        if($noResult){
            echo '<div class="container my-4">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5"> No Threads Found</h1>
                    <p class="col-md-8 ">Be the first person to ask question</p>
                </div>
                </div>
            </div>';
        }
        ?>



        <?php include 'partials/_footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
</body>

</html>