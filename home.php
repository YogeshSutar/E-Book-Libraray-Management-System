<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  
 .carousel{
  z-index: -1;
  width: 100vw;
 }
   
img{
  
  height:100vh;
 
}
   
    .bookh{
      z-index: -1;
       position: relative;
       top:50px; 
 
    }
 
 
    
    </style>
    <title> home</title>
  </head>
  <body>
  <?php session_start();
 
 require 'nav.php';?>
 

<!-- <head>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> aos css
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>home library</title>
</head>

<body>
    <div class="container1">
        
        <video autoplay muted id="video1" class="video1">
            <source src="photo/video/HOME.mp4" type="video/mp4">
        </video>       
        <video  muted id="video2" class="video2">
            <source src="photo/video/home1.mp4" type="video/mp4">
        </video>

        <video  muted id="video3" class="video3">
            <source src="photo/video/home2.mp4" type="video/mp4">
        </video>
        <header class="silder">
            <div class="div1">
                <nav class="navbar">
                    <img src="photo/logo.jpeg" alt="" width="130px" height="60">
                    <ul>
                        <li><a class="link" href="home.php">HOME</a></li>
                        <li><a class="link" href="bookadd.php">BOOKS</a></li>
                        <li><a class="link" href="about.php">ABOUT_US</a></li>
                        <li><a class="link" href="#">LOGIN</a></li>
                    </ul>
                    <p>Knowledge library</p>
                </nav>
    

            </div>  
        </header>
     
    </div>



    <h1 class="author_title">The Great Authors Words
        <hr class="author_title_line" width="600" color="red"> </h1>

    <br>

    <div class="row">
        <div class="col">
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

        <div class="col">
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

        <div class="col">
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

        <div class="col">
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

    <hr color="blue">
     

    <div class="name">
        <div class="inner">
            <h1 class="author_title">Peoples Review
                <hr class="author_title_line" width="430" color="red">
            </h1>

            <div class="rowstar">
                <div class="colstar" style="margin-left: 0px;">
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

                <div class="colstar">
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

                <div class="colstar">
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
    </div>
    <br><br><br>
 
    <div class="lastpoint">
        <div class="socialicon">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="https://en.wikipedia.org/wiki/Library#:~:text=A%20library%20is%20a%20collection%20of%20sources%20of,or%20room%2C%20or%20a%20virtual%20space%2C%20or%20both." class="fa fa-google"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <div class="lastpointname">
            <p><b style="color: rgb(216, 27, 27);">Bad</b> libraries build collections, <b style="color: rgb(27, 40, 216);">Good</b> libraries build services, <b style="color: rgb(61, 223, 20);">Great</b> libraries build communities.</p>
            <h2> <b style="font-size:xx-large;">Created By: </b><br> Yogesh Hanument Sutar <br> Ganesh Pradeep Swami <br> Deepak Narayanadatta Kandpal</h2>
        </div>
    </div>
    <script src="video.js"></script>
    <script>
  AOS.init();
</script> -->



   <div class="carsouel">  
 
  <!-- <div class="alert alert-success container "style="width:60em" role="alert">
 <h4 class="alert-heading"> Welcome  </h4>
 <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
 <hr>
 <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div> -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
 
  </div>
  
    <div class="carousel-inner">
  <div class="carousel-item">
    <img src="https://images.unsplash.com/photo-1585066437529-9f6a2061652b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA3fHxsaWJyYXJ5fGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
  </div>
    <div class="carousel-item active">
      <img src="https://media.istockphoto.com/photos/book-hall-in-library-picture-id1015149600?b=1&k=20&m=1015149600&s=170667a&w=0&h=F8lPwhnLvbrmlVFFCMLtUv7trEQy_BbqIiQfQj5knsw=" class="d-block w-100" alt="...">
    </div>
 
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1522211988038-6fcbb8c12c7e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGxpYnJhcnl8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" class="d-block w-100" alt="...">
    </div>

    
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1528932574509-27a7e195a75b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjF8fGxpYnJhcnl8ZW58MHwwfDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> 
</div>



<hr style=" height:1rem; width:100%; " class="bookh">        
      <div class="card bookh" style="width: 18rem;height:10rem;">
        <img src="stevejobes.jpg" class="card-img-bottom" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
</div>  
  </body>
</html>