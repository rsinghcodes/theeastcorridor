<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('header.php')?>
    <title>Contact Us - The East Corridor</title>
  </head>
  <body>
    <!--navbar-->
    <?php include('navbar.php')?>
    <!--navbar end-->
    <div class="banner contact"></div>
    <div class="container contact-section-1">
      <h1 class="title">GET IN TOUCH</h1>
      <p>
        If you are looking for sustainable solutions in agriculture for your
        company, get in touch with us.
      </p>
    </div>
    <div class="container contact-section-2">
      <div class="row gx-5">
        <div class="col-md-6 contact-left">
          <h2 class="h3 title">WRITE US</h2>
          <p class="sub_title a">
            Write us a note and we’ll get back to you as quickly as possible.
          </p>
          <form
            action="./php/contact.php"
            method="post"
            class="form-horizontal"
            id="myform"
          >
            <div class="form-group">
              <input
                class="form-control"
                maxlength="40"
                name="name"
                placeholder="Your Name"
                required
                type="text"
              />
            </div>
            <div class="form-group">
              <input
                class="form-control"
                maxlength="40"
                name="email"
                placeholder="Your E-Mail ID"
                required
                type="email"
              />
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                name="subject"
                placeholder="Your Subject"
                required
                style="height: 70px"
              ></textarea>
            </div>
            <div class="form-group">
              <textarea
                class="form-control"
                name="message"
                placeholder="Write down your message"
                required
                style="height: 130px"
              ></textarea>
            </div>
            <input
              class="btn btn-east"
              name="submit"
              type="submit"
              value="Send Message"
            />
          </form>
        </div>
        <div class="col-md-6 contact-right">
          <h2 class="h3 title">WHERE WE WORK</h2>
          <p class="sub_title">
            The East Corridor Consultants Group is present globally. We are willing to work with partners across the globe
          </p>
          <div class="map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d95673.65387631416!2d5.1889860860424415!3d52.03734731182335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c65d60faf7a1fb%3A0x8634b081996b1e38!2sBoomgaardweg%2069%2C%203984%20KH%20Odijk%2C%20Netherlands!5e0!3m2!1sen!2sin!4v1630145082070!5m2!1sen!2sin"
            </iframe>
              width="100%"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
          <div class="row g-5">
            <div class="col">
              <h3>Europe Office:</h3>
              <address>
                Odijk, Utrecht <br />
                The Netherlands <br />
                Pin - 3984 KH <br />
                KVK - 80807917
              </address>
            </div>
            <div class="col">
              <h3>India Office:</h3>
              <address>
                Arjunganj, Lucknow <br />
                Uttar Pradesh, India <br />
                Pin 226002
              </address>
              <hr />
              <!--address>
                Salt lake, Kolkata <br />
                West Bengal, India <br />
                Pin 700106
              </address-->
              <hr />
              <address>
                GSTIN/UIN: <br />
                09AAIFE7083P1ZM
              </address>
            </div>
          </div>
          <ul class="fa-ul">
            <li>
              <span class="fa-li">
                <i class="fas fa-at"></i>
              </span>
              <a href="mailto:indranil@theeastcorridor.eu">
                info@theeastcorridor.eu
              </a>
            </li>
            <li>
              <span class="fa-li">
                <i class="fas fa-globe"></i>
              </span>
              <a href="http://www.theeastcorridor.eu/">
                www.theeastcorridor.eu
              </a>
            </li>
            <li>
              <span class="fa-li">
                <i class="fas fa-mobile-alt"></i>
              </span>
              <a href="tel:+917838651644">+ 91 78386 51644</a>
              &nbsp;&nbsp; | &nbsp;&nbsp;
              <a href="tel:+31682221939" class="phone">+ 31 6 82221939</a>
            </li>
          </ul>
        </div>
      </div>
      <img class="sprites" src="./images/sprites/sprites-2.png" alt="" />
    </div>

    <!---footer--->
    <?php include('footer.php')?>
    <!---footer end---->
  </body>
</html>
