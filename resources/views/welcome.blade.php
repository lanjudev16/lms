<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Legal Solutions</title>
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
</head>

<body>


  <header>
    <!-- nav section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
      <div class="container">
        <a class="navbar-brand p-0 m-0" href="#">
          <img src={{asset('assets/images/Group2.png')}} alt="">
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
              <a class="nav-link" href="#">services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cases</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blogs</a>
            </li>
            <li type="button" class="ms-5 btn btn-danger text-white" data-bs-toggle="modal"
              data-bs-target="#exampleModal">
              Free Consultation
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
            <h5 class="modal-title" id="exampleModalLabel">Need Solution?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            There are many variations of passages of Lorem Ipsum available, but the majority have <br> suffered
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
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
                <h2 class="h-2 pb-3">We Provide Effective <br> Legal Solutions</h2>
                <p class="pb-3 fw-normal">There are many variations of passages of Lorem Ipsum available, but the
                  majority
                  <br>have
                  suffered alteration in some form, by injected humour.
                </p>
                <form class="d-flex justify-content-center">
                  <input class="me-2 form-control w-50 fs-6 py-2" type="text" name="" id=""
                    placeholder="Search your services ">
                  <input type="submit" value="Search" class="btn btn-danger">
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
              <h2 class="fs-1 fw-bold py-3">The Legal Practice Area</h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have <br> suffered
                alteration
                in some form, by injected humour.</p>
            </div>
          </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 m-0">
          <div class="item  card border  border-1  px-5 pt-3 brn">
            <img src="./images/Group 12.png" alt="" class="icon-img card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Business Law</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration
                in some form, by injected humour.</p>
              <img src="./images/Frame.png" alt="">
            </div>
          </div>
          <div class="item brn card border border-1 px-5 pt-3">
            <img src="./images/Group 13.png" alt="" class="icon-img card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Education Law</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration
                in some form, by injected humour.</p>
              
                
                <a href="https://www.w3schools.com/tags/att_a_download.asp"><img  src={{asset('assets/images/Frame.png')}} alt=""></a>
            </div>
          </div>
          <div class="item card border border-1  px-5 pt-3 brn">
            <img src="./images/Group 15.png" alt="" class="icon-img card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">Education Law</h5>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration
                in some form, by injected humour.</p>
              <img src="./images/Frame.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="latest-container container">
            <div class="latest">
                <h2 class="section-title">Lates Course</h2>
                <div class="courses">
                    <div class="course">
                        <div class="course-banner">
                            <img src={{asset('assets/images/courses/course-1.png')}} alt="" srcset="">
                        </div>
                        <div class="course-detail">
                            <h3 class="course-title">React - The Complete </h3>
                            <p class="course-author">Reed Krakoff.</p>
                            <div class="course-info">
                                <div>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star empty"></i>
                                    <span>4.5</span>
                                </div>
                                
                                <div class="course-duration">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>01:30hr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-banner">
                            <img src={{asset('assets/images/courses/course-2.png')}} alt="" srcset="">
                        </div>
                        <div class="course-detail">
                            <h3 class="course-title">React - The Complete </h3>
                            <p class="course-author">Reed Krakoff.</p>
                            <div class="course-info">
                                <div>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star empty"></i>
                                    <span>4.5</span>
                                </div>
                                
                                <div class="course-duration">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>01:30hr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course">
                        <div class="course-banner">
                            <img src={{asset('assets/images/courses/course-3.png')}} alt="" srcset="">
                        </div>
                        <div class="course-detail">
                            <h3 class="course-title">React - The Complete </h3>
                            <p class="course-author">Reed Krakoff.</p>
                            <div class="course-info">
                                <div>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star filled" ></i>
                                    <i class="fa-solid fa-star empty"></i>
                                    <span>4.5</span>
                                </div>
                                
                                <div class="course-duration">
                                    <i class="fa-regular fa-clock"></i>
                                    <span>01:30hr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- our client slider section -->
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center fw-bold mb-2">What Our Client Say</h2>
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
                <div class="carousel-item active py-5">
                  <div class="d-flex flex-column align-items-center justify-content-center text-white">
                    <img class="carousel-item-img rounded-circle" src="./images/brain-.jpg" alt="">
                    <h2>Awlad Hossain</h2>
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
                <div class="carousel-item active py-5">
                  <div class="d-flex flex-column align-items-center justify-content-center text-white">
                    <img class="carousel-item-img rounded-circle" src="./images/brain-.jpg" alt="">
                    <h2>Awlad Hossain</h2>
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
                <div class="carousel-item active py-5">
                  <div class="d-flex flex-column align-items-center justify-content-center text-white">
                    <img class="carousel-item-img rounded-circle" src="./images/brain-.jpg" alt="">
                    <h2>Awlad Hossain</h2>
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
                <li><a class="text-white" href="">Cases</a></li>
                <li><a class="text-white" href="">Blog</a></li>
                <li><a class="text-white" href="">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-12 col-md-3 text-white mb-5 ">
            <h4>Contact Now</h4>
            <p>555 4th 5t NW, Washington <br>
              DC 20530, United States</p>
            <p>+88 01750 000 000
              +88 01750 000 000</p>
            <p>info@gmail.com
              info@gmail.com</p>
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







  <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>