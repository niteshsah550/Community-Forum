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


    <!-- Search Results -->
    <div class="container my-3">
        <h1>Search results for <em>"<?php echo $_GET['search']?>"</em></h1>
        <?php
        $noResult = true;
        $query = $_GET["search"];
        $sql = "SELECT * FROM `threads` WHERE MATCH (thread_title, thread_desc) against ('$query')";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $title = $row['thread_title'];
            $desc= $row['thread_desc'];
            $thread_id = $row['thread_id'];
            $url = "thread.php?threadid=". $thread_id;
            $noResult = false;

            // Display the search result
          echo '<div class="result">
            <h3><a href="'. $url .'" class="text-dark"></a>' .$title. '</h3>
            <p>' . $desc. '</p>
        </div>';
        }
        if($noResult){
            echo '<div class="container my-4">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <h1 class="display-5"> No Results Found</h1>
                    <p class="col-md-8 "> Suggestions: <ul>
                               <li> Make sure that all words are spelled correctly.</li>
                               <li> Try different keywords.</li>
                               <li> Try more general keywords.</li></ul>
                    </p>
                </div>
                </div>
            </div>';
        }
        ?>

    </div>

    <?php include 'partials/_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>