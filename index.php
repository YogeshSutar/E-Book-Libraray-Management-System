
<?php
 session_start();
 
 //  require 'navbarall.php';
 
 
 // if(isset($_SESSION['username']))
 // {echo'
    // <li class="nav-item bg-dark" >
    // <a class="nav-link active" href="logout.php">Log-out</a>
    // </li>';
    // //  <li class="nav-item bg-dark" style="margin-right:1em">
    // //  <a class="nav-link active" href="logind.php">profile</a>
    // //   </li> 
    // echo' <a class="nav-item bg-dark nav-link  style="margin-right:3rem;"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">profile</a>
    
    // <div class="offcanvas offcanvas-end"  tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    // <div class="offcanvas-header">';?>
 <!-- <img src="user1.png"style="width:10em;height:10em;"> -->
   <?php //echo '<h5 id="offcanvasRightLabel" >Profile</h5>
//   <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
// </div>
// <div class="offcanvas-body">
//   ';
//   //session_start();
//   require 'dbconnect.php';
//   $username=$_SESSION['username'];
//   if(isset($_SESSION['username']))
//   {
    //         $sql="SELECT * FROM `idpass` where `username`='$username'";
//         $insert=mysqli_query($conn,$sql);
//         $noofvalues=mysqli_num_rows($insert);
//         while($data=mysqli_fetch_assoc($insert))
//         {
    //           echo"name <br>";
    //           print_r($data['name']);
    //           echo"<br>username<br>";
    //           print_r($data['username']);
    //           echo"<br>mobile number<br>";
    //           print_r($data['mobileno']);
    //           echo"<br>email <br>";
    //           print_r($data['email']);
    //           echo"<br>";
    //           $sqlb="SELECT * FROM `books_user` where `username`='$username'";
    //           $insertb=mysqli_query($conn,$sqlb);
    //           $noofvaluesb=mysqli_num_rows($insertb);
    //         if($noofvaluesb>0)
    //           {
        //             echo"book you have<br>";
        //           while($datab=mysqli_fetch_assoc($insertb))
        //           {
            
            //             print_r($datab['book_name']);
            //             echo'<br>';
            //             $bookname=$datab['book_name'];
            //             $sql="SELECT * FROM `books` where `book_name`='$bookname'";
            //             $insert=mysqli_query($conn,$sql);
            //             $data=mysqli_fetch_assoc($insert);
            
            //         }
            //           }
            //           else{
                //             echo"no book in the";
                //           }
                //           }
                //         echo'
                //         </div>
                //       </div>';
                
                //   }
                // }
                // // else{
                    // //       echo'<li class="nav-item bg-dark" >
                    // //       <a class="nav-link active" style="margin-right:1em" href="login.php">log-in</a>
                    // //       </li>';
                    // //     }
                    
                    // ?>

 <html>
<html>

<head>
  
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!-- aos css -->
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <!-- style CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- <script src="https://kit.fontawesome.com/6cba7c1ded.js" crossorigin="anonymous"></script> -->


    <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
    <title>home library</title>
</head>

<body>

<div >
        <header class="silder" style="background-image: url(photo/library2.jpg)">
<?php

require 'nav.php';
?>
    </div>








     <!-- <video  autoplay muted id="video1" class="video1">  
     <source  src="photo/video/HOME.mp4" type="video/mp4">

</video> -->


<!--         
        <header class="silder">
            <div class="div1">
            
                <nav class="navbar123">
                    <img src="photo/logo.jpeg" alt="" width="130px" height="60">
                    <ul>
                        <li><a class="link" href="index.php" style="text-decoration: none;">HOME</a></li>
                        <li><a class="link" href="bookadd.php" style="text-decoration: none;">BOOKS</a></li>
                        <li><a class="link" href="about.php" style="text-decoration: none;">ABOUT US</a></li>
                        <li><a class="link" href="comment.php" style="text-decoration: none;">COMMENT</a></li>
                        <li><a class="link" href="contactus.php" style="text-decoration: none;">CONTACT US</a></li> --> 
                        <!-- <li><a class="link" href="login.php" style="text-decoration: none;">LOGIN</a></li> -->
        
                     <!--  <li><a class="link" href="login.php">LOGIN</a></li> -->
                  


    <h1 class="author_title">The Great Authors Words
        <hr class="author_title_line1" width="600" height="10px"> </h1>

    <br>

    <div class="row1">
        <div class="col1">
            <img class="imgwilliam" src="photo/WilliamShakespeare.jpg" alt="">
            <div class="text1"  data-aos="fade-right">
                <h1 class="authorname">William Shakespeare</h1>
                <br>
                <ul class="paragraph1">
                    <li>The fool doth think he is wise, but the wise man knows himself to be a fool.</li>
                    <li>Love all, trust a few, do wrong to none.</li>
                    <li>Love looks not with the eyes, but with the mind, And therefore is winged Cupid painted blind.</li>
                    <li>The fault, dear Brutus, is not in our stars, but in ourselves.</li>
                    <li>Hell is empty and all the devils are here.</li>
                    <li>It is not in the stars to hold our destiny but in ourselves.</li>
                </ul>
            </div>
        </div>
        <br>
        <hr color="brown" width="1350" style="margin: 0px 100px;">
        <br>

        <div class="col1">
            <div class="text2"  data-aos="fade-left">
                <h1 class="authorname2">Rabindranath Tagore</h1>
                <br>
                <ul class="paragraph2">
                    <li>Read books when you are free, read minds when you are'nt....but do read...</li>
                    <li>Clouds come floating into my life, no longer to carry rain or usher storm, but to add color to my sunset sky.</li>
                    <li>If you cry because the sun has gone out of your life, your tears will prevent you from seeing the stars.</li>
                    <li>No need to be learned from own fault. We can learn a lot from others' mistakes.</li>
                    <li>You can’t cross the sea merely by standing and staring at the water.</li>
                </ul>
            </div>
            <img class="imgTagore" src="photo/RabindranathTagore.jpg" alt="">
        </div>

        <br>
        <hr width="1350" color="brown" style="margin: 0px 100px;">
        <br>

        <div class="col1">
            <img class="imgsambhaji" src="photo/sambhajimaharaj.jpg" alt="">
            <div class="text3"  data-aos="fade-right">
                <h1 class="authorname3">Chhatrapati Sambhaji Maharaj</h1>
                <br>
                <ul class="paragraph3">
                    <li>Naver bend your head always hold high like a BOOK OF KNOWLEDGE</li>
                    <li>knowledge is a boon, which everyone has the right to receive.</li>
                    <li>When you are intelligent, then mountain also looks like a clay pile.</li>
                    <li>Self-confidence provides strength and Power impart knowledge. Knowledge provides stability and stability leads to victory.</li>
                    <li>Of all the rights of women, the greatest is to be a mother and shes knowledge is helpfull for you.</li>
                </ul>
            </div>
        </div>

        <br>
        <hr width="1350" color="brown" style="margin: 0px 100px;">
        <br>

        <div class="col1">
            <div class="text4"  data-aos="fade-left">
                <h1 class="authorname4">Chetan Bhagat</h1>
                <br>
                <ul class="paragraph4">
                    <li>Even now I try to make each page compelling for the readers to get absorbed in the book.</li>
                    <li>The world's most sensible person and the biggest idiot both stay within us.</li>
                    <li>Stupid people go to college but smart people own them so gain you knowledge using books</li>
                    <li>The fault, dear Brutus, is not in our stars, but in ourselves.</li>
                    <li>Don't be serious, be sincere</li>
                    <li>Be so busy Improving your self that you have no time to criticize others.</li>
                </ul>
            </div>
            <img class="imgbhagat" src="photo/ChetanBhagat.jpg" alt="">
        </div>

    </div>
    <br><br>

    <!--- star icon people reting -->
    
    <!-- <div class="name">
        <div class="inner">
            <h1 class="author_title">Peoples Review
                <hr class="author_title_line1" width="430" color="red">
            </h1>

            <div class="rowstar">
                <div class="colstar1" style="margin-left: 0px;">
                    <div class="names">
                        <img src="photo/man.jpg" alt="">
                        <div class="personename">Naveen Ahuja</div>
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p><b>"Excellent after sales service and great product”</b><br>We can definitely recommend this software for any library. We are extremely happy with this product<br>we are happy so far, and we have used this software for last 4 years!</p>
                    </div>
                </div>


                <div class="border"></div>

                <div class="colstar1">
                    <div class="names">
                        <img src="photo/man2.jpg" alt="">
                        <div class="personename">Pramod Vanshi</div>
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <p><b>"fantastic system"</b>
                            <br> Books Reviews, Authors Information and all the activites are very fantastic and incredible<br> we are happy so far, and we have used this software for many years!..
                        </p>
                    </div>
                </div>


                <div class="border"></div>

                <div class="colstar1">
                    <div class="names">
                        <img src="photo/female.jpg" alt="">
                        <div class="personename">Zafira Sabat</div>
                        <div class="stars">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </div>
                        <p><b>"User Friendly System”</b><br> Awesome software for library System<br> The support system for this software is very good. With the help of Support executive, I learned this system easily.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
  </div> -->
  

  <h1 class="author_title">Books
                <hr class="author_title_line1" width="550" color="red">
            </h1>

  <div class="row">
  <div class="column">
    <img src="photo/images/New folder/richdadpoordad.jfif"  style="width:350px; height:400px;">
    <p> Book Name : Rich Dad Poor Dad</p>
    <p> Book Author : Robert Kiyosaki</p>
    <p> </p>
    <button class="downloadbook" id="GetFile">Download</button>
    <!-- <button type="button" id="GetFile">Download</button>  -->

</script> 
<script> 
$('#GetFile').on('click', function () { 
    $.ajax({ 
        url: 'photo/images/New folder/richdad poordad.pdf', 
        method: 'GET', 
        xhrFields: {
         responseType: 'blob' 
         },
          success: function (data) {
            var a = document.createElement('a'); 
            var url = window.URL.createObjectURL(data); 
            a.href = url; 
            a.download = 'richdad poordad.pdf'; 
            document.body.append(a); 
            a.click(); 
            a.remove(); 
            window.URL.revokeObjectURL(url); 
          } 
        }); 
      }); 
</script>
  </div>
  <div class="column">
    <img src="photo/images/New folder/self discipline.jpg"  style="width:350px; height:400px;">
    <p>Book Name : Self Discipline</p>
    <p>Book Author : Curtis Leone</p>
    <p> </p>
    <button class="downloadbook1" id="GetFile1">Download</button>
    <!-- <button type="button" id="GetFile">Download</button>  -->


</script> 
<script> 
$('#GetFile1').on('click', function () { 
    $.ajax({ 
        url: 'photo/images/New folder/Learn Python.pdf', 
        method: 'GET', 
        xhrFields: {
         responseType: 'blob' 
         },
          success: function (data) {
            var a = document.createElement('a'); 
            var url = window.URL.createObjectURL(data); 
            a.href = url; 
            a.download = 'Learn Python.pdf'; 
            document.body.append(a); 
            a.click(); 
            a.remove(); 
            window.URL.revokeObjectURL(url); 
          } 
        }); 
      }); 
</script>
  </div>
  <div class="column">
    <img src="photo/images/New folder/learn python.jpg"  style="width:350px; height:400px;">
    <p>Book Name : Learn Python</p>
    <p>Book Author :  Curtis Leone</p>
    <p> </p>
    <button class="downloadbook2" id="GetFile2">Download</button>
    <!-- <button type="button" id="GetFile">Download</button>  -->


</script> 
<script> 
$('#GetFile2').on('click', function () { 
    $.ajax({ 
        url: 'photo/images/New folder/computer hacking.pdf', 
        method: 'GET', 
        xhrFields: {
         responseType: 'blob' 
         },
          success: function (data) {
            var a = document.createElement('a'); 
            var url = window.URL.createObjectURL(data); 
            a.href = url; 
            a.download = 'computer hacking.pdf'; 
            document.body.append(a); 
            a.click(); 
            a.remove(); 
            window.URL.revokeObjectURL(url); 
          } 
        }); 
      }); 
</script>
  </div>
</div>

<div class="viewmorebooks">
  <button ><a style="color: white;" href="books.php">View More Books..</a></button>
</div>

  <br><br><br>


  <!-- <hr color="blue"> -->
  <div class="container">
        <section id="testimonials" class="testimonials section-bg">

      <h1 class="author_title">Peoples Review
                <hr class="author_title_line1" width="460" color="red">
            </h1>

        <div class="testimonials-slider swiper" >
          <div class="swiper-wrapper">

            <div >
              <div class="testimonial-item">
                <p>
                  <!-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> -->
                  <b>"Excellent after sales service and great product”</b><br>We can definitely recommend this software for any library. We are extremely happy with this product<br>we are happy so far, and we have used this software for last 4 years!
                  <!-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> -->
                </p>
                <img src="photo/images/saul.jpeg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>

              </div>
            </div><!-- End testimonial item -->

            <div >
              <div class="testimonial-item" >
                <p>
                  <!-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> -->
                  <b>"fantastic system"</b>
                            <br> Books Reviews, Authors Information and all the activites are very fantastic and incredible<br> we are happy so far, and we have used this software for many years!..
                  <!-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> -->
                </p>
                <img src="photo/images/sara.jpeg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>

              </div>
            </div><!-- End testimonial item -->

            <div >
              <div class="testimonial-item">
                <p>
                  <!-- <i class="bx bxs-quote-alt-left quote-icon-left"></i> -->
                  <b>"User Friendly System”</b><br> Awesome software for library System<br> The support system for this software is very good. With the help of Support executive, I learned this system easily.
                  <!-- <i class="bx bxs-quote-alt-right quote-icon-right"></i> -->
                </p>
                <img src="photo/images/jena.jpeg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <b>lovly site</b><br>
                  This Website is user Friendly and very disignative i like your Website
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="photo/images/natt.jpeg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>

              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <b>Very Nice...</b><br>
                    This is Hard Working Project Realy Incredible.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                 
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    <!--- team members name last part  -->
    <div class="lastpoint">
        <div class="socialicon">
            <a href="https://www.facebook.com/Indianlibrarythane/" class="fa fa-facebook"></a>
            <a href="https://twitter.com/state_library" class="fa fa-twitter"></a>
            <a href="https://en.wikipedia.org/wiki/Library#:~:text=A%20library%20is%20a%20collection%20of%20sources%20of,or%20room%2C%20or%20a%20virtual%20space%2C%20or%20both." class="fa fa-google"></a>
            <a href="https://instagram.com/state_library?igshid=YmMyMTA2M2Y=" class="fa fa-instagram"></a>
        </div>
        <div class="lastpointname">
            <p><b style="color: rgb(216, 27, 27);">Bad</b> libraries build collections, <b style="color: rgb(27, 40, 216);">Good</b> libraries build services, <b style="color: rgb(61, 223, 20);">Great</b> libraries build communities.</p>
            <p class="membername"> <b style="font-size:xx-large;">Created By: </b><br> Yogesh Hanument Sutar <br> Ganesh Pradeep Swami <br> Deepak Narayanadatta Kandpal</p>
        </div>
    </div>
    <script src="video.js"></script>
    <script>
  AOS.init();
</script>
</body>

</html>