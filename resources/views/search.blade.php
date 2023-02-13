<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Course Repository</title>
  <link rel="shortcut icon" href="./images/time.png" type="image/x-icon">
  <!-- bootstrap css file here -->
  <link rel="stylesheet" href={{asset('assets/styles/bootstrap.min.css')}}>
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=EB+Garamond:wght@400;500;600;700;800&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@300;400;500;600&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">
  <!-- font icon -->
  <script src="https://kit.fontawesome.com/919d22bd99.js" crossorigin="anonymous"></script>
  <!-- custom css -->
  <link rel="stylesheet" href={{asset('assets/styles/style.css')}} >
  <link rel="shortcut icon" href={{asset('assets/images/logo.png')}} type="image/x-icon">
</head>

<body>


  <header>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
      <div class="container">
        <a class="navbar-brand p-0 m-0 logo" href="#">
          <img src={{asset('assets/images/logo.png')}} alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent ">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blogs</a>
            </li>
            <li type="button" class="ms-5 btn btn-danger text-white" data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Known us about Book
            </li>
          </ul>



        </div>
      </div>
    </nav>
    <!-- modal -->


  </header>
  <main>


  <section class="latest-container container">
            <div class="latest">
                <h2 class="section-title">Search Book</h2>
                <div class="courses">
                  @foreach($books as $key=>$book)
                    <div class="course">
                        <div class="course-banner">
                        <a target="_blank" href={{$book->gddlink}}  ><img src={{asset('images/product/'.$book->image)}} alt="" srcset=""></a>
                        </div>
                        <div class="course-detail">
                            <h3 class="course-title">{{$book->name}} </h3>
                            <p class="course-author">{{$book->author}}</p>
                            <div class="course-info">
                                <div>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star empty"></i>
                                    <span>4.5</span>
                                </div>
                                
                                <!-- <div class="course-duration">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>01:30hr</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                  @endforeach  

                </div>
            </div>
        </section>


    <!-- our team member section -->


    

  </main>
  <footer>
    <!-- footer section  -->
    <section class="bg-black py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="text-white mb-5">
              <img class="pb-3" src="./images/Group 37.png" alt="" srcset="">
              <p class="">There are many variations of passages of Lorem Ipsum available, but the majority
                have suffered
                alteration
                in some form, by injected humour.</p>
            </div>
          </div>
          <div class="col-12 col-md-3">
            <div class="text-white  mb-5 ">
              <h4>Usefull Link</h4>
              <ul class="text-white ">
                <li><a class="text-white" href="">Homes</a></li>
                <li><a class="text-white" href="">About Us</a></li>
                <li><a class="text-white" href="">Blog</a></li>
                <li><a class="text-white" href="">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-3 text-white mb-5 ">
            <h4>Contact Now</h4>
            <p>555 4th 5t NW, jamalpur<br>
              DC 20530, Bangladesh</p>
            <p>+88 01750 000 000
              +88 01750 000 000</p>
            <p>lanjudev16@gmail.com
              lanjucse@gmail.com</p>
          </div>
          <div class="col-12 col-md-3 text-white mb-5 ">
            <h4>Subscribe</h4>
            <p>Subscribe for our latest & Articles. We Won’t Give You Spam Mails</p>
            <form action="">
              <div class="d-flex">
                <form>
                  <div class="subscribe text-white">
                    <input class="text-white" type="email" placeholder="Email address ...">
                    <div class="submit">
                      <input class="" type="">
                    </div>
                  </div> <!-- /.subscribe -->
                </form>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </footer>







  <script src={{asset('assets/js/bootstrap.bundle.min.js')}}></script>
</body>

</html>