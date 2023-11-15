<!DOCTYPE html>
<html lang="en">
<head>
  <title>MyProfile</title>
  <link rel="icon" type="image/x-icon" href="assetuts/logo.svg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="assetuts/style.css">
  <script src="assetuts/script.js"></script>
</head>
  <body class="body-color" id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container">
      <a class="navbar-brand" href="#"><img src="assetuts/logo.svg"> MyProfile</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link" href="#home" style="padding-right: 1rem;">Home</a>
          <a class="nav-link" href="#about-me" style="padding-right: 1rem;">About Me</a>
          <a class="nav-link" href="#education">Education</a>
          <a class="nav-link" href="#volunteer">Volunteer</a>
          <a class="nav-link" href="#mymovies">MyMovies</a>
          <a class="nav-link" href="#contact" style="color: #24A274; font-weight: 600;">Contact Me</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Home Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div class="margin-primary">
          <h1 class="margin1">Welcome to MyProfile Website ! </h1>
          <p class="margin2">Hello guys, let's explore together on MyPortofolio website by Krisna Setia Himawahan.</p>
          <a href="#about-me"><button type="button" class="start-button" style="scroll-behavior: smooth;">Get Started</button></a>
          <a href="#contact"><button type="button" class="mycontact-button">Contact Me</button></a>
          </div>
        </div>
        <div class="col-6">
          <img src="assetuts/asset2.svg" class="asset-2 img-fluid">
        </div>
      </div>
    </div>

    <!-- About Me Content -->
    <div class="container-fluid" id="about-me">
      <div class="row text-center" style="padding-top: 6rem;">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row" style="padding-top: 2rem;">
        <div class="col-6 text-center">
          <img src="assetuts/Jeje image (1).jpg" class="foto-krisna img-fluid">
        </div>
        <div class="col-6">
          <p class="aboutme-cont">My name is <a style="color: #24A274; font-weight: 500;">Krisna Setia Himawhan</a>. I'm a dedicated student with a strong passion for web development. I'm enthusiastic about creating user-friendly and visually appealing websites that offer seamless experiences for visitors. My goal is to continually improve my skills in this field and contribute society. This is my short biography, <a style="color: #24A274; font-weight: 600;">Greetings to you, friends !</a></p>
          <div>
            <ul class="biography" style="margin-left: -2.3rem;">
              <li><a class="list-bio">Name</a> <span class="dots" style="margin-left: 5.8rem;">:</span> Krisna Setia Himawhan</li>
              <li><a class="list-bio">Nickname</a> <span class="dots" style="margin-left: 3.3rem;">:</span> Jeje</li>
              <li><a class="list-bio">Age</a> <span class="dots" style="margin-left: 7rem;">:</span> 19</li>
              <li><a class="list-bio">Gender</a> <span class="dots" style="margin-left: 5.1rem;">:</span> Male</li>
              <li><a class="list-bio">Date of Birth</a> <span class="dots" style="margin-left: 2.2rem;">:</span> 30 March</li>
              <li><a class="list-bio">Profession</a> <span class="dots" style="margin-left: 3.3rem;">:</span> Student</li>
              <li><a class="list-bio">Origin</a><span class="dots" style="margin-left: 6.1rem;">:</span>Surabaya</li>
              <li><a class="list-bio">University</a> <span class="dots" style="margin-left: 3.4rem;">:</span> Institut Teknologi Sepuluh Nopember </li>
            </ul>
          </div>
          <div class="row-cols-2" style="padding-top: 0.5rem;">
            <a href="https://intip.in/myCVKrisna" target="_blank"> <button type="button" class="start-button">Review MyCV<img src="assetuts/arrow-tr.svg" style="padding-left: 0.5rem;"></button></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Education Content -->
    <div class="container-fluid" style="background-color: #24A274;"  id="education">
      <div class="row-cols-md-1" style="margin-top: 6rem;">
        <div class="col text-center" style="padding-top: 4rem; padding-bottom: 1rem;">
          <h2 style="color: white;">Education</h2>
        </div>
      </div>
      <div class="row" style="padding-left: 5rem;">
        <!-- SMPN 6 Surabaya -->
        <div class="col-md-4" style="padding-top: 2rem;">
          <div class="card te" style="width: 18rem;">
            <img src="assetuts/smp-negeri-6-surabaya.jpeg" class="card-img-top" alt="school1" style="width: 80%;margin-top: 1rem; margin-left: 2rem;">
            <div class="card-body">
              <h5 class="card-title" style="padding-bottom: 1.5rem;text-align: center;">SMPN 6 Surabaya</h5>
              <p class="card-text" style="text-align: justify;">The school with the nickname "Sekolah Kotak" which has various achievements that have been achieved.</p>
              <a href="http://www.smpn6sby.sch.id/" target="_blank" class="start-button">Visit Website<img src="assetuts/arrow-tr.svg" style="padding-left: 0.3rem;"></a>
            </div>
          </div>
        </div>
        <!-- SMAN 2 Surabaya -->
        <div class="col-md-4" style="padding-top: 2rem;">
          <div class="card" style="width: 18rem;">
            <img src="assetuts/smada.jpg" class="card-img-top" alt="school2" style="width: 83%;margin-top: 1rem; margin-left: 1.6rem;">
            <div class="card-body">
              <h5 class="card-title" style="padding-bottom: 1.5rem;text-align: center;">SMAN 2 Surabaya</h5>
              <p class="card-text" style="text-align: justify;">Crowned as a star-studded school, this is where I got various interesting experiences that I will never forget.</p>
              <a href="https://sman2-sby.sch.id/" target="_blank" class="start-button">Visit Website<img src="assetuts/arrow-tr.svg" style="padding-left: 0.3rem;"></a>
            </div>
          </div>
        </div>
        <!-- ITS -->
        <div class="col-md-4" style="padding-top: 2rem;">
          <div class="card" style="width: 18rem;">
            <img src="assetuts/Lambang-ITS-2-300x300.png" class="card-img-top" alt="school3" style="width: 80%;margin-top: 1rem; margin-left: 2rem;">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Institut Teknologi Sepuluh Nopember</h5>
              <p class="card-text" style="text-align: justify;" >The level of education that I am currently undergoing which has exciting and challenging experiences.</p>
              <a href="https://www.its.ac.id/" target="_blank" class="start-button">Visit Website<img src="assetuts/arrow-tr.svg" style="padding-left: 0.3rem;"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row-cols-md-1" style="padding-top: 4rem;">
      </div>
    </div>

    <!-- Volunteer Content -->
    <div class="container-fluid" id="volunteer">
      <div class="row-cols-md-1 text-center" style="padding-top: 6rem;">
        <div class="col">
          <h2>Volunteer</h2>
        </div>
      </div>
      <div class="row-cols-md-1 text-center" style="padding-top: 0.6rem;">
        <div class="col" style="padding-bottom: 2rem;">
          <h5>These are the various experiences of <a style="color: #24A274; font-weight: bold;"> My Committee Volunteers</a> while studying at ITS</h5>
        </div>
      </div>

      <!-- Baris 1 -->
      <div class="row" style="padding-left: 4rem;">
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/ce_1.jpg" class="card-img-top" alt="foto-1">
            <div class="card-body">
              <h6 class="card-title card-title-v">Ini Lho ITS! 2023</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/gerigi_4.jpg" class="card-img-top" alt="foto-2">
            <div class="card-body">
              <h6 class="card-title card-title-v">GERIGI ITS 2023</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/gerigi_5.jpg" class="card-img-top" alt="foto-3">
            <div class="card-body">
              <h6 class="card-title card-title-v">Malam Penutupan GERIGI ITS 2023</h6>
            </div>
          </div>
        </div>
      </div>

      <!-- Baris 2 -->
      <div class="row" style="padding-left: 4rem;margin-top: 2rem;">
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/ce_2.jpg" class="card-img-top" alt="foto-4">
            <div class="card-body">
              <h6 class="card-title card-title-v">Central Event Ini Lho ITS! 2023</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/penjurian-terbuka.jpg" class="card-img-top" alt="foto-5">
            <div class="card-body">
              <h6 class="card-title card-title-v">Penjurian Terbuka ITS EXPO 2023</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/exhib_1.jpg" class="card-img-top" alt="foto-6">
            <div class="card-body">
              <h6 class="card-title card-title-v">Exhibition ITS EXPO 2023</h6>
            </div>
          </div>
        </div>
      </div>

      <!-- Baris 3 -->
      <div class="row" style="padding-left: 4rem;margin-top: 2rem;">
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/gerigi_1.jpg" class="card-img-top" alt="foto-7">
            <div class="card-body">
              <h6 class="card-title card-title-v">Day 1 GERIGI ITS 2023</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/gerigi_2.jpg" class="card-img-top" alt="foto-8">
            <div class="card-body">
              <h6 class="card-title card-title-v">1st Meeting GERIGI ITS 2023</h6>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-v" style="width: 18rem;">
            <img src="assetuts/gerigi_3.jpg" class="card-img-top" alt="foto-9">
            <div class="card-body">
              <h6 class="card-title card-title-v">Closing of GERIGI ITS 2023</h6>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MyMovies Content -->
    <div class="container-fluid" style="background-color: #24A274;"  id="mymovies">
      <div class="row-cols-md-1" style="margin-top: 6rem;">
        <div class="col text-center" style="padding-top: 4rem; padding-bottom: 1rem;">
          <h2 style="color: white;">MyMovies</h2>
        </div>
      </div>
      <div class="row-cols-md-1 text-center" style="padding-top: 0.6rem;">
        <div class="col" style="padding-bottom: 2rem;">
          <h5 style="color: white;">Here are my favorite movie recommendations for you</h5>
        </div>
      </div>

      <!-- Movies Content -->
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <!-- Poster 1 -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assetuts/parasite_poster.jpg" class="d-block mx-auto" alt="poster-1" style="max-width: 75%;">
            <div class="carousel-caption d-none d-md-block">
              <h5>PARASITE</h5>
              <p class="spacing-p">Genre : Drama, Thriller</p>
              <p class="spacing-p">Rating : 8/10</p>
            </div>
          </div>
          <!-- Poster 2 -->
          <div class="carousel-item">
            <img src="assetuts/last-night_poster.jpg" class="d-block mx-auto" alt="poster-1" style="max-width: 75%;">
            <div class="carousel-caption d-none d-md-block">
              <h5>LAST NIGHT IN SOHO</h5>
              <p class="spacing-p">Genre : Drama, Horror, Mystery</p>
              <p class="spacing-p">Rating : 7/10</p>
            </div>
          </div>
          <!-- Poster 3  -->
          <div class="carousel-item">
            <img src="assetuts/la-land_poster.jpg" class="d-block mx-auto" alt="poster-1" style="max-width: 75%;">
            <div class="carousel-caption d-none d-md-block">
              <h5>LA LA LAND</h5>
              <p class="spacing-p">Genre : Comedy, Drama, Music</p>
              <p class="spacing-p">Rating : 9/10</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
      <div class="row-cols-md-1" style="color: #24A274; padding-top: 4rem;">
      </div>
    </div>

    <!-- Contact Me -->
    <div class="container-fluid" id="contact">
      <div class="row-cols-md-1 text-center" style="padding-top: 6rem;">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row-cols-md-1 text-center" style="padding-top: 0.6rem;">
        <div class="col" style="padding-bottom: 2rem;">
          <h5>If you want to message me you can fill this form, <a style="color: #24A274;font-weight: 700;">Thank you Friends!</a></h5>
        </div>
      </div>
    <!-- Form Content -->
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form class="needs-validation" novalidate>
            <div class="form-group">
              <!-- Name -->
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name here" autocomplete="off" required>
              <div class="valid-feedback">Valid</div>
              <div class="invalid-feedback">Please enter your name with letters only</div>
            </div>
            <div class="form-group">
              <!-- Email -->
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email here" aria-describedby="emailHelp" required>
              <div class="valid-feedback">Valid</div>
              <div class="invalid-feedback">Please enter your valid email</div>
            </div>
            <div class="form-group">
              <!-- Subject -->
              <label for="subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="subject" placeholder="Enter your subject here" autocomplete="off" required="">
              <div class="valid-feedback">Valid</div>
              <div class="invalid-feedback">Please enter your subject</div>
            </div>
            <div class="form-group">
              <!-- Messages -->
              <label for="message">Message</label>
              <textarea name="message" class="form-control" id="message" rows="3" placeholder="Type your messages here" required></textarea>
              <div class="invalid-feedback">Please fill this field</div>
            </div>
            <button type="submit" class="submit-button">Submit</button>
          </form>
        </div>
      </div>
      <div class="row" style="padding-top: 3rem;">
      </div>
    </div>

    <!-- Footer -->
    <footer>
    <div class="container-fluid" style="background-color: #24A274;" id="footer">
      <div class="row justify-content-center">
        <div class="col-md-3" style="padding-top: 1.5rem;">
          <a href="https://instagram.com/krisnasetia_" target="_blank" style="padding-right: 1rem; padding-left: 1rem;"><img src="assetuts/Instagram-icon.svg"></a>
          <a href="https://linkedin.com/in/krisnasetiaa" target="_blank" style="padding-right: 1rem;"><img src="assetuts/LinkedIn-icon.svg"></a>
          <a href="mailto:krisnasetia04@gmail.com" target="_blank" style="padding-right: 1rem;"><img src="assetuts/Email-icon.svg"></a>
          <a href="https://wa.me/081332007086" target="_blank"><img src="assetuts/Whatsapp-icon.svg"></a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3" style="margin-top: 1.5rem;">
          <p class="copyright">Copyright © 2023 by Krisna Setia Himawhan</p>
        </div>
      </div>
    </div>
  </footer>
  <a href="day1" target="_blank"> Materi Day 1</a>
  <a href="day2" target="_blank"> Materi Day 2</a>
  <a href="day3" target="_blank"> Materi Day 3</a>
  <a href="tugasbootstrap" target="_blank"> Custom Bootstrap</a>
  <a href="js1" target="_blank"> Javascript 1</a>
  <a href="js2" target="_blank"> Javascript 2</a>
  <a href="js3" target="_blank"> Pendaftaran lab</a>
  <a href="tugas1" target="_blank"> Tugas 1</a>
  <a href="tugas2" target="_blank"> Tugas 2</a>
  </body>
</html>
