<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
    <?php include 'css/style.php';?>
    <title>Covid19</title>
</head>
<body onload="fetchAPIData()">
  <div class="outer">
      <nav class="navbar navbar-expand-lg navbar-dark" id="up">
        <a class="navbar-brand pl-5" href="#">Covid19 Live Updates</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pr-5" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#stats">Live Stats<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#sympt">Symptoms</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#preventt">PreCautions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="row sub-section w-100 h-100 mb-5">
        <div class="col-lg-5 col-md-5 col-12 dd d-flex justify-content-center align-items-center">
          <img src="media/h.png" alt="hummans Together" id="humman">
        </div>
        <div class="d-flex col-lg-7 dd col-md-7 col-12  justify-content-center align-items-center text-center">
          <h3>C<span><img src="media/virus.png" alt="O" id="virusImg"></span>VID-19 Situation!</h3>
          <p>The coronavirus, or COVID-19, is inciting panic for a number of reasons. It's a new virus, meaning no one has immunity.
          It is highly contagious, meaning it spreads fast. Its novelty means that scientists aren't completely sure as to how
          it behaves since they have very little history to go on.</p>
        </div>
      </div>
      <div class="row w-100 mb-5" id ="stats">
        <div class="col-12 text-center redHead">
          <h2>Covid-19 Live Statics</h2>
        </div>
        <div class="col-12">
        <table class="table  table-striped table-bordered table-hover table-responsive-lg">
          <thead>
            <th>Country</th>
            <th>Code</th>
            <th>TotalConfirmed</th>
            <th>NewConfirmed</th>
            <th>TotalDeaths</th>
            <th>NewDeaths</th>
            <th>TotalRecovered</th>
            <th>NewRecovered</th>
          </thead>
          <tbody id="tab"></tbody>
        </table>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center align-items-center text-center">
          <div class="col-12 col-md-6 col-sm-12 col-lg-3">
            <h3 class="count" id="confiremd" ></h3>
            <p>
            Total Confirmed in World
            </p>
          </div>
          <div class="col-12 col-md-6 col-sm-12 col-lg-3">
          <h3 class="count"></h3>
          <p>
          Total Deaths in Worlds
          </p>
          </div>
          <div class="col-12 col-md-6 col-sm-12 col-lg-3">
          <h3 class="count"></h3>
          <p>
          Total Recovered in World
          </p>
          </div>
          <div class="col-12 col-md-6 col-sm-12 col-lg-3">
          <h3 class="count"></h3>
          <p>
          New Cases over the Globe
          </p>
          </div>
        </div>
      </div>
      <div class = "row sub-section w-100 mb-5" id="about">
        <div class="col-12 text-center redHead">
          <h2>
          About Covid-19</h2>
        </div>
        <div class="desc col-12 d-lg-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-6 col-md-12 col-sm-12 imgg">
            <img src="media/covid.jfif" alt="covid image">
          </div>
          <div class="col-12 col-lg-6 col-md-12 col-sm-12">
            <p>
            COVID-19 is a virus that can cause mild to severe respiratory illness, including death. The best preventive measures include getting vaccinated, wearing a mask, staying 6 feet apart, washing hands often and avoiding sick people.
            Coronaviruses are a family of viruses that can cause respiratory illness in humans. They are called “corona” because of crown-like spikes on the surface of the virus. Severe acute respiratory syndrome (SARS), Middle East respiratory syndrome (MERS) and the common cold are examples of coronaviruses that cause illness in humans.
            </p>
          </div>
        </div>
      </div>
      <div class="row symptoms w-100 mb-5" id="sympt">
        <div class="col-12 text-center redHead">
          <h2>Covid-19 Symptoms</h2>
        </div>
        <div class="col-12 d-lg-flex d-md-flex flex-wrap text-center justify-content-center align-items-center">
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <p>fever</p>
            <img src="media/fever.jpg" alt="fever">
          </div>
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <p>cough</p>
            <img src="media/cough.jpg" alt="cough">
          </div>
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <p>tiredness</p>
            <img src="media/tire.jfif" alt="tirdeness">
          </div>
          <div class="col-12 col-lg-4 col-md-6 col-sm-12">
            <p>loss of taste or smell</p>
            <img src="media/lossoftaste.jfif" alt="Loss of taste">
          </div>
        </div>
      </div>
      <div class="row w-100 sub-section prevent mb-5" id="preventt">
        <div class="col-12 redHead text-center">
          <h2>COIVD-19 PREVENTIONS</h2>
        </div>
        <div class="col-12 preventImg">
          <div class="col-10 d-lg-flex d-md-flex flex-wrap flex-row align-items-center m-auto pt-1">
            <img src="media/mask.jfif" alt="wear mask" >
            <p class="ml-5">
              Protect yourself and others from COVID-19, wear the most protective mask you can, that fits well and that you will wear consistently.
            </p>
          </div>
          <div class="col-10 d-flex flex-wrap flex-row align-items-center  m-auto pt-1">
          <img src="media/6feet.jfif" alt="6 feet distance" >
            <p class="ml-5">
            It is important to maintain a distance of at least 6 feet (approximately 1.8 metres) whenever we encounter anyone outside our homes.
            </p>
          </div>
          <div class="col-10 d-flex flex-wrap flex-row align-items-center  m-auto pt-1">
          <img src="media/vaccine.jpg" alt="covid 19 vaccine">
            <p class="ml-5">
            COVID-19 vaccination helps protect you by creating an antibody response without you having to experience sickness.
            </p>
          </div>
          <div class="col-10 d-flex flex-wrap flex-row align-items-center  m-auto pt-1">
          <img src="media/avoidc.jpg" alt="avoid crowd">
            <p class="ml-5">
            If you are at increased risk of getting COVID-19, avoid crowded places and indoor spaces that do not have fresh air from the outdoors.
            </p>
          </div>
          <div class="col-10 d-flex flex-wrap flex-row align-items-center  m-auto pt-1">
          <img src="media/washHand.jpg" alt="wash hand">
            <p class="ml-5">
            Wash hands with soap and water. If they are not available, use an alcohol-based hand sanitizer that contains at least 60% alcohol.
            </p>
          </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
          <img src="media/p.png" alt="preventions">
        </div>
      </div>
      <div class="row w-100 d-flex justify-content-center mb-5" id="contact">
        <div class="col-8">
          <div>
          <h2 class="redHead text-center">
          Contact Us
          </h2>
          </div>
          <form>
            <div class="form-group">
              <label for="formGroupExampleInput">Name</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name here...">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Your Email here..">
            </div>
            <label for="formGroup44">Symptoms</label><br>
            <div class="form-check form-check-inline" id="formGroup44">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
              <label class="form-check-label" for="inlineCheckbox1">Fever</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
              <label class="form-check-label" for="inlineCheckbox2">Cough</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
              <label class="form-check-label" for="inlineCheckbox3">Flu</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
              <label class="form-check-label" for="inlineCheckbox3">LossOfTaste</label>
            </div>
            <div class="form-group">
              <br>
              <label for="exampleFormControlTextarea1">What do you feel?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary mr-5">Submit</button>
              <button type="reset" class="btn btn-danger">Clear</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row w-100 last" >
        <footer class="text-center text-white w-100" style="background-color: #fff7f7;">
            <div class="container pt-4">
              <section class="mb-4">
                <!-- Facebook -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.facebook.com/iqra.sarwar.9461"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-facebook-f"></i
              ></a>

              <!-- Twitter -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://twitter.com/iqra_sarwar_"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-twitter"></i
              ></a>

              <!-- Instagram -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.instagram.com/iqra_sarwar_/"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram"></i
              ></a>

              <!-- Linkedin -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.linkedin.com/in/iqrasarwar/"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-linkedin"></i
              ></a>
              <!-- Github -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://github.com/iqrasarwar"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-github"></i
              ></a>
            </section>
            <!-- Section: Social media -->
          </div>
          <div class="text-center text-dark p-3" style="background-color: black;">
            <p class="red">© 2022 Copyright:</p>
            <a class="text-dark" href="https://github.com/iqrasarwar"><p class="red">IqraSarwar</p></a>
          </div>
          <!-- Copyright -->
        </footer>
      </div>

  </div>
  <div class="button">
      <a href="#up"><i class="fa-solid fa-up-long"></i></a>
      </div>
<script>
  $('.count').each(function () {
  var $this = $(this);
  jQuery({ Counter: 0 }).animate({ Counter: $this.attr('data-stop') }, {
    duration: 1000,
    easing: 'swing',
    step: function (now) {
      $this.text(Math.ceil(now)); }}); });
</script>

<script src="script.js"></script>
</body>
</html>
