<!DOCTYPE html>
<html>
  <head>
    <title>test</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <style !important>
    section,
    footer,
    nav {
      display: block;
    }
    body {
      -webkit-text-size-adjust: none;
      background: $accent;
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light",
        "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
      font-weight: 300;
      font-size: 14px;
      line-height: 1.4em;
      padding: 3em;
    }
    a {
      text-decoration: none;
      color: #333;
    }
    figure {
      margin: 0;
    }
    // Tile Classes
    .tile {
      width: 250px;
      height: 350px;
      margin: 2em;
      position: relative;
      float: left;
      .front,
      .back {
        display: block;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 250px;
        height: 350px;
        position: absolute;
        overflow: hidden;
        text-align: center;
      }
      h3,
      p,
      a {
        padding: 0 20px;
      }
      img {
        max-height: 130px;
      }
      .front {
        background: #fff;
        transition: all 0.5s ease-in-out;
        z-index: 2;
        h3 {
          font-size: 2em;
          color: white;
          text-shadow: 0 0 5px #000;
          margin-top: -1.5em;
          margin-bottom: 1.5em;
        }
      }
      .back {
        background: $cardBackground;
        color: white;
        z-index: 1;
        padding-top: 50px;
        height: 300px;
        h3 {
          font-size: 1.5em;
          color: white;
          margin-top: 1em;
          margin-bottom: 1em;
        }
        a {
          display: block;
          font-size: 1.2em;
          color: white;
          border-top: 1px solid lighten($cardBackground, 5);
          margin: 0 20px;
          padding: 0.5em 0;
        }
      }
      &:hover {
        .front {
          top: -300px;
          transform: rotate(2deg);
        }
      }
    }
    section,
    footer,
    nav {
      display: block;
    }

    body {
      -webkit-text-size-adjust: none;
      background: #0b2c3b;
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light",
        "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
      font-weight: 300;
      font-size: 14px;
      line-height: 1.4em;
      padding: 3em;
      align-items: center;
    }

    a {
      text-decoration: none;
      color: #333;
    }

    figure {
      margin: 0;
    }

    .tile {
      width: 250px;
      height: 350px;
      margin: 2em;
      position: relative;
      float: left;
    }
    .tile .front,
    .tile .back {
      display: block;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      width: 250px;
      height: 350px;
      position: absolute;
      overflow: hidden;
      text-align: center;
    }
    .tile h3,
    .tile p,
    .tile a {
      padding: 0 20px;
    }
    .tile img {
      max-height: 130px;
    }
    .tile .front {
      background: #fff;
      transition: all 0.5s ease-in-out;
      z-index: 2;
    }
    .tile .front h3 {
      font-size: 2em;
      color: white;
      text-shadow: 0 0 5px #000;
      margin-top: -1.5em;
      margin-bottom: 1.5em;
    }
    .tile .back {
      background: #165877;
      color: white;
      z-index: 1;
      padding-top: 50px;
      height: 300px;
      border-radius: 25px;
    }
    .tile .back h3 {
      font-size: 1.5em;
      color: white;
      margin-top: 1em;
      margin-bottom: 1em;
    }
    .tile .back a {
      display: block;
      font-size: 1.2em;
      color: white;
      border-top: 1px solid #000000;
      margin: 0 20px;
      padding: 0.5em 0;
    }
    .tile:hover .front {
      top: -300px;
      transform: rotate(2deg);
    }
  </style>
  <body>
    <div>
     <a href="../HomePage/Home.php"><img src="../images/LOGO.jpg" width="5%"  center alt="" srcset=""> </a>
    </div>

    <div class="wrapper">
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="nabih berri hospital.jpg" />
            <h3>Nabatieh Governmental Hospital</h3>
            <p>
              " The life of our senior loved ones remains precious till their
              last breath. Live with Age aims at making every elderly person
              LIVE and enjoy life in their senior years"
            </p>

            <a href="#"> view details</a>
          </div>
        </div>
        <div class="back">
          <h3>details</h3>
          <a href="#">address - Nabatieh</a>
          <a href="#">phonr number - 07 766 777</a>
          <a href="#">hours - 24/7</a>
        </div>
      </div>
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="shekhragheb.jpg" />
            <h3>Sheikh Ragheb Hospital</h3>
            <p>
              "Being able to offer a higher level of service, wearing a white
              suit and tie helps make me stand out from the crowd. When I meet
              someone for the first time I feel they are more relaxed...
            </p>
            <br />
            <a href="#">View details</a>
          </div>
        </div>
        <div class="back">
          <h3>details</h3>
          <a href="#">Address: Toul</a>
          <a href="#">Hours : Open 24 hours </a>
          <a href="#">Phone: 07 766 799</a>
        </div>
      </div>
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="alnajdeh.png" />
            <h3>Najdeh Chaabia Hospital</h3>
            <p>
              The life of our senior loved ones remains precious till their last
              breath. Live with Age aims at making every elderly person LIVE and
              enjoy life in their senior years.
            </p>

            <a href="#">View details</a>
          </div>
        </div>
        <div class="back">
          <h3>details</h3>
          <a href="#">Address: main street Habboush-Nabatieh Habboush</a>
          <a href="#">Hours : Open 24 hours</a>
          <a href="#">Phone: 07 530 970</a>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="AUBMC.webp" />
            <h3>AUBMC</h3>
            <p>
              "The story of our medical center began 145 years ago in a small
              rented building in Zokak El-Blat in Beirut, home to the first
              classes of the School of Medicine, which was established by the
              Syrian Protestant College (later known as AUB). (More)"
            </p>
            <a href="#">View details</a>
          </div>
        </div>
        <div class="back">
          <h3></h3>
          <a href="#">Address: Beirut </a>
          <a href="#">Phone: 01 350 000</a>
          <a href="#">Taxi Driver - West Valley</a>
        </div>
      </div>
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="hodie.jpeg" />
            <h3>H??tel-Dieu de France</h3>
            <p>
              "The H??tel-Dieu de France is one of the three leading Lebanese
              medical centers. It is located on Alfred Naccache Boulevard in
              Beirut, and is the oldest active French hospital in the city..
            </p>
            <br />
            <a href="#">View details</a>
          </div>
        </div>

        <div class="back">
          <h3>details</h3>
          <a href="#">Address: Alfred Naccache Boulevard?? Beirut</a>
          <a href="#">Hours:Open 24 hours</a>
          <a href="#">Phone: 01 604 000</a>
          <a href="#">Founded: 1883</a>
        </div>
      </div>
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="hammoud.jpg" />
            <h3>Hammoud Hospital</h3>
            <h3></h3>
            <p>
              "The Hammoud Hospital University Medical Center treats more than
              24,000 patients per year and performs more than 10,000 surgeries
              per year. The hospital has one of the biggest cardiac programs in
              Lebanon and performs the highest number of renal transplants in
              the country.
            </p>
            <br />
            <a href="#">View details</a>
          </div>
        </div>
        <div class="back">
          <h3>detzils</h3>
          <a href="#">Address: Dr. Ghassan Hammoud Street?? Sidon</a>
          <a href="#">Phone: 07 723 111</a>
          <a href="#"> founded in 1966</a>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="dallaha.jpg" />
            <h3>Dalla'a General Hospital</h3>
            <p>
              "Dr. Hisham N. Dalla???a, established a hospital in his hometown
              Saida, Capital of South of Lebanon in order to serve what he
              believed to be the cradle of our future "Women of the South" as
              quoted by his Professor. William Bickers. Despite his mission as
              an obstetrician gynecologist Dr. Dalla'a opened the care of the
              hospital to all medical specialties in order to serve all the
              Lebanese community across Lebanon putting aside distance as a
              challenge. "
            </p>
            <br />
            <a href="#">View Jobs</a>
          </div>
        </div>
        <div class="back">
          <h3>Open Jobs</h3>
          <a href="#">Address:, Sidon</a>
          <a href="#">Hours:Open 24 hours</a>
          <a href="#">Phone: 07 724 088</a>
          <a href="#">Founded: 1970's</a>
        </div>
      </div>
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="mazloum.png" />
            <h3>New Mazloum Hospital</h3>
            <p>
              "The New Mazloum Hospital S.A.L. was established on March 13, 2000
              after transforming Mazloum Hospital Corporation in 1968 into a
              joint stock company.
            </p>
            <br />
            <a href="#">View details</a>
          </div>
        </div>
        <div class="back">
          <h3>details</h3>
          <a href="#">Address: Tripoli</a>
          <a href="#">Phone: 06 410 025</a>
          <a href="#"> March 13, 2000</a>
          <a href="#"> Hours:Open 24 hours</a>
          Hours: Open 24 hours
        </div>
      </div>
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="nini.jpg" />
            <h3>Nini Hospital</h3>
            <p>
              "Nini Hospital was founded 86 years ago with an aim to offer
              comprehensive quality patient care all in one institution.
              Combining the best clinical skills
            </p>
            <br />
            <a href="#">View details</a>
          </div>
        </div>
        <div class="back">
          <h3>Open Jobs</h3>
          <a href="#">Phone: 06 431 400</a>
          <a href="#">Address: Tripoli</a>
          <a href="#">View All Jobs</a>
          <a href="#">86 year ago</a>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="tile job-bucket">
        <div class="front">
          <div class="contents">
            <img src="download.jpg" />
            <h3>Haykel Hospital</h3>
            <p>
              "At Haykel Hospital multidisciplinary professional team, We adopt
              a philosophy based on the optimization of all preventive and
              therapeutic resources in order to provide the population we serve
              a great quality of care within the reach of all. "
            </p>
            <br />
            <a href="#">View Jobs</a>
          </div>
        </div>
        <div class="back">
          <h3>Open Jobs</h3>
          <a href="#">Phone: 06 411 111</a>
          <a href="#">Address: Tripoli</a>
          <a href="#">Phone: 06 411 111</a>
          <a href="#">Taxi Driver - Central Valley</a>
          <a href="#">View All Jobs</a>
        </div>
      </div>
    </div>
  </body>

  <div class="footer"></div>

  <script type="text/javascript">
    $(function () {
      $(".nav").load("../NavBar/navbar.php");
    });
  </script>

  <!-- <script type="text/javascript">
    $(function () {
      $(".footer").load("../Footer/footer.php");
    }); -->
  </script>
</html>
