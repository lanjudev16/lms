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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Need Book?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h2>Please search the book home page</h2>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary"></button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- banner section -->
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="hero-section py-5">
            <div class="d-flex align-items-center justify-content-center py-5">
              <div class="text-white text-center py-5">
                <h2 class="h-2 pb-3">Online courses Repository <br>System</h2>
                <p class="pb-3 fw-normal">There are many variations of passages of Lorem Ipsum available, but the
                  majority
                  <br>have
                  suffered alteration in some form, by injected humour.
                </p>
                <form class="d-flex justify-content-center" method="POST" action={{route('book.search')}}>
                  @csrf
                  <input class="me-2 form-control w-50 fs-6 py-2" type="text" name="search" id=""
                    placeholder="Search your book ">
                  <input type="submit" value="Search"  class="btn btn-danger">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="mb-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="text-center mt-5 pb-5">
              <h2 class="fs-1 fw-bold py-3">The Book Practice Area</h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have <br> suffered
                alteration
                in some form, by injected humour.</p>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 m-0">
          <div class="item  card border  border-1  px-5 pt-3 brn">
            <img src={{asset('assets/images/Group13.png')}} alt="" class="icon-img card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Business Law Book</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration
                in some form, by injected humour.</p>
              <a target="_blank" href="https://drive.google.com/drive/folders/1itHRjiDgAsKdDfkEOenCEq2f5dhWFzf-?fbclid=IwAR2DUD_ihLP2XBsbdcJ8ObhrPgoBUl7HXCXzp6jpz-ib_K7NNnFSseaNNpM"><img  src={{asset('assets/images/Frame.png')}} alt=""></a>
            </div>
          </div>
          <div class="item brn card border border-1 px-5 pt-3">
            <img src={{asset('assets/images/Group13.png')}} alt="" class="icon-img card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">EEE Book</h5>
              <p>jggsdgvgdgvgumour.</p>
              
                
                <a target="_blank" href="https://drive.google.com/drive/folders/1nzJ3Z3AXVYDbOLRO3Xc_JeSuO8LhdVoB?fbclid=IwAR2DUD_ihLP2XBsbdcJ8ObhrPgoBUl7HXCXzp6jpz-ib_K7NNnFSseaNNpM"><img  src={{asset('assets/images/Frame.png')}} alt=""></a>
            </div>
          </div>
          <div class="item card border border-1  px-5 pt-3 brn">
            <img src={{asset('assets/images/Group13.png')}} alt="" class="icon-img card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">CSE Book</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration
                in some form, by injected humour.</p>
                <a target="_blank" href="https://drive.google.com/drive/folders/1Xfl46YGzA0vWGq-IP-5Cu-UbT_h5Ng1A?fbclid=IwAR2DUD_ihLP2XBsbdcJ8ObhrPgoBUl7HXCXzp6jpz-ib_K7NNnFSseaNNpM"><img  src={{asset('assets/images/Frame.png')}} alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="latest-container container">
            <div class="latest">
                <h2 class="section-title">Lates Book</h2>
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
    <!-- Nisat -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center fw-bold mb-2">Our team member</h2>
          <p class="text-center">There are many variations of passages of Lorem Ipsum available, but the majority have
            <br>
            suffered alteration
            in some form, by injected humour.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="my-5">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item carousel-item-1 active py-5">
                  <div class="d-flex flex-column align-items-center justify-content-center text-white">
                    <img  class="carousel-item-img rounded-circle" src={{asset('assets/images/logo.png')}} alt="">
                    <h2>Mohammad Ali</h2>
                    <h3>JavaScript Developer</h3>
                    <p class="text-center px-5 fs-6">Contrary to popular belief, Lorem Ipsum is not simply random text.
                      It
                      has
                      roots in a piece of
                      classical Latin <br> literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                      Latin
                      professor at Hampden-Sydney <br> College in Virginia, looked up one of the more obscure Latin
                      words,
                      consectetur.</p>
                  </div>
                </div>
                <div class="carousel-item carousel-item-2 active py-5">
                  <div class="d-flex flex-column align-items-center justify-content-center text-white">
                    <img class="carousel-item-img rounded-circle" src={{asset('assets/images/logo.png')}}>
                    <h2>Md Lanju Mia</h2>
                    <h3>Web Developer</h3>
                    <p class="text-center px-5 fs-6">Contrary to popular belief, Lorem Ipsum is not simply random text.
                      It
                      has
                      roots in a piece of
                      classical Latin <br> literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                      Latin
                      professor at Hampden-Sydney <br> College in Virginia, looked up one of the more obscure Latin
                      words,
                      consectetur.</p>
                  </div>
                </div>
                <div class="carousel-item carousel-item-3 active py-5">
                  <div class="d-flex flex-column align-items-center justify-content-center text-white">
                    <img class="carousel-item-img rounded-circle" src={{asset('assets/images/logo.png')}} alt="">
                    <h2>Wakil Ahmed</h2>
                    <h3>UIX Designer</h3>
                    <p class="text-center px-5 fs-6">Contrary to popular belief, Lorem Ipsum is not simply random text.
                      It
                      has
                      roots in a piece of
                      classical Latin <br> literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                      Latin
                      professor at Hampden-Sydney <br> College in Virginia, looked up one of the more obscure Latin
                      words,
                      consectetur.</p>
                  </div>
                </div>
                
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- accrodian -->
    <section class="my-2">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center h4 fw-bold">Frequently Asked Any Questions</h2>
            <h3 class="text-center h6 mt-3 mb-5">There are many variations of passages of Lorem Ipsum available, but the
              majority
              have <br> suffered
              alteration in some form, by injected humour.</h3>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12 col-md-6">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    What is the difference between Flexbox and Grid
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    Flex box <br>
                    a.One – Dimensional <br>
                    b.Can push content element to extreme alignment <br>
                    c.Content First <br>
                    Grid
                    <br>
                    a.Two – Dimensional
                    <br>
                    b.Can flex combination of items through space-occupying Features
                    <br>
                    c.Layout First
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    What is Semantic tag ?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    The semantic HTML tags help the search engines and other user devices to determine the importance
                    and context of web pages. The pages made with semantic elements are much easier to read. It has
                    greater accessibility. It offers a better user experience.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    What is the purpose of media query?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    Media queries can and should still be used for page layouts, which are usually at the very top level
                    of the DOM and not nested in another container. They're best suited for this because the main page
                    layout should not adapt to anything other than the viewport.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    What is boxmodel and how does the box model work?
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    The CSS box model as a whole applies to block boxes and defines how the different parts of a box —
                    margin, border, padding, and content — work together to create a box that you can see on a page.
                    Inline boxes use just some of the behavior defined in the box model.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <img style={width:100%} src={{asset('assets/images/Framee.png')}} alt="">
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <!-- footer section  -->
    <section class="bg-black py-5">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <div class="text-white mb-5">
              <img class="pb-3" src="./images/Group 37.png" alt="" srcset="">
              <p class="">lkjhhhhggg.</p>
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