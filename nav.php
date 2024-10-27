<html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="home.css">

  <!-- style CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/6cba7c1ded.js" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="path/to/fontawesome.min.css"> -->
  <style>
    /* * {
        
        padding: 0px;

 
    } */

    /* .nav {
         width: 100vw;
margin-bottom:20px;
        position:sticky;
z-index: 100;
        top:0px; 
         
    
    } */

    /* .lib {
      z-index: 100;
        position: relative;
        right: 60em;
        bottom: 0px;
        font-size: 15px;
    } */



    /* a {

        text-decoration: none; */
    /* margin-right:3rem; */
    /* } */
    /* #firstname{
      float: left;
      font-weight: 20px;
      font-size: 25px;
    } */
    .div1 {
      z-index: 100;
    }

    .profile {
      /* margin: 10px; */
      font-weight: 100;
    }

    .profile1 {
      margin: 10px;

    }

    .profile1:hover {
      transition: 0.5s;
      color: red;
      background-color: rgba(252, 250, 125, 0.664);
      padding: 10px 10px;
      /* padding-left: 10px; */
    }

    .bookyouhave:hover {
      color: red;
      transition: 0.3s;
    }

    .navname {
      left: 20px;
      float: left;
      color: white;
      padding-right: 272px;
      padding-top: 9px;
    }
  </style>

</head>

<body>
  <!-- <div class="container11"> -->
  <!-- <video autoplay muted id="video1" class="video1">
            <source src="photo/video/HOME.mp4" type="video/mp4">
        </video> -->
  <!-- <header class="silder"> -->

  <div class="div1">
    <nav class="navbar123">
      <img href="about.php" src="photo/logo.jpeg" alt="" width="130px" height="60">
      <ul>
        <h1 class="navname">Knowledge Library</h1>
        <!-- <li id="firstname">
          <a id="firstname"  class='link' href='about.php' >Knowledge Library</a>
            </li> -->
        <li>
          <a class="link" href="index.php">HOME</a>
        </li>
        <li>
          <a class="link" href="books.php">BOOKS</a>
        </li>
        <li>
          <a class="link" href="about.php">ABOUT US</a>
        </li>

        <?php
        if (isset($_SESSION['username'])) {
          echo '<li >
            <a class="link" href="comment.php">CONTACT US</a>
             </li>';
          echo '
         <li >
         <a class="link" href="logout.php">LOG-OUT</a>
          </li>';
          //  <li class="nav-item bg-dark" style="margin-right:1em">
          //  <a class="nav-link active" href="logind.php">profile</a>
          //   </li> 

          echo ' <li>
        <a class="link" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">PROFILE</a>
        </li>
        <div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">'; ?>

          <img src="user1.png" style="width:10em;height:10em;">

        <?php
          echo '<h5 id="offcanvasRightLabel" >Profile</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">';

          // echo' <div style="z-index:100;">
          // <li>
          // <a class="link"  style="margin-right:3rem;"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">profile</a>
          // </li>
          // <div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          //   <div class="offcanvas-header">';

          //      echo '<h5 id="offcanvasRightLabel" >Profile</h5>
          //     <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          //   </div>
          //   <div class="offcanvas-body">
          //     ';
          //session_start();      <img src="user1.png"style="width:10em;height:10em;">
          require 'dbconnect.php';
          $username = $_SESSION['username'];
          if (isset($_SESSION['username'])) {
            $sql = "SELECT * FROM `idpass` where `username`='$username'";
            $insert = mysqli_query($conn, $sql);
            $noofvalues = mysqli_num_rows($insert);
            while ($data = mysqli_fetch_assoc($insert)) {
              echo "
                    <div class='profile'>
                    <div class='profile1' style=''>Name : $data[name]</div>
                    
                    <div class='profile1' style=''>Username : $data[username]</div>
                    
                    <div class='profile1' style=''>Mobile Number : $data[mobileno]</div>
                    
                    <div class='profile1' style=''>Email : $data[email]</div>
                    
                    <br>
                    </div>
                    ";
              $sqlb = "SELECT * FROM `books_user` where `username`='$username'";
              $insertb = mysqli_query($conn, $sqlb);
              $noofvaluesb = mysqli_num_rows($insertb);
              if ($noofvaluesb > 0) {
                echo "<h5 class='bookyouhave'>Books you have</h5>";
                while ($datab = mysqli_fetch_assoc($insertb)) {
                  $bookname = $datab['book_name'];
                  $sql = "SELECT * from `books` where `book_name`='$bookname'";
                  $insert = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($insert)) {
                    $pdf = $row['book_pdf'];
                    echo ' <a href="book_pdf\\' . $pdf . '" class="profile1" style="margin:10px;  color:black;text-decoration: none;">' . $bookname . '</a><br>';
                  } // $bookname=$datab['book_name'];S
                  // $sql="SELECT * FROM `books` where `book_name`='$bookname'";
                  // $insert=mysqli_query($conn,$sql);
                  // $data=mysqli_fetch_assoc($insert);

                }
              } else {
                echo "You Dont Have An Any Books";
              }
            }
            echo '
                  </div>
                </div>
                </div>';
          }
        } else {
          echo '<li>
                <a class="link" style="margin-right:1em" href="login.php">LOG-IN</a>
                </li>';
        }

        ?>

      </ul>
      <!-- <p style="font-size: 44px;">Knowledge library</p> -->
    </nav>
  </div>
  <!-- </header> -->
  <!-- </div> -->
  <?php
  //  require 'logind.php';

  ?>
</body>

</html>