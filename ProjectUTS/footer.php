<section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Profile
          </h5>
          <ul>
            <li>
              Nama: M Gamma Satria
            </li>
            <li>
              Email: 
            </li>
            <li>
              Telp: 
            </li>
            <li>
              Alamat:
            </li>
            <li>
              -
            </li>
            <li>
              -
            </li>
            <li>
              -
            </li>
            <li>
              -
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Services
          </h5>
          <ul>
            <li>
              Kami Akan
            </li>
            <li>
              Memberikan Service
            </li>
            <li>
              Terbaik Untuk
            </li>
            <li>
              Pelanggan Kami
            </li>
            <li>
              Dan Kami
            </li>
            <li>
              Selalu Memberikan
            </li>
            <li>
              Buah Buahan
            </li>
            <li>
              Yang Berkualitas
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            List
          </h5>
          <ul>
            <li>
              Kami Menjual
            </li>
            <li>
              Buah Buahan Segar
            </li>
            <li>
              Seperti:
            </li>
            <li>
              -Jeruk Navel
            </li>
            <li>
              -Anggur Hitam
            </li>
            <li>
              -Jambu Merah
            </li>
            <li>
              Dan Masih
            </li>
            <li>
              Banyak Yang Lainnya
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
              Follow Us
            </h5>
            <div class="social-box">
              <a href="">
                <img src="images/fb.png" alt="">
              </a>

              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
          <div class="subscribe_container">
            <h5>
              Subscribe Now
            </h5>
            <div class="form_container">
              <form action="">
                <input type="email">
                <button type="submit">
                  Subscribe
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Made With Love By
      <a href="https://www.instagram.com/sm.gama/">Gama Satria</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        },
      });

      var image = 'images/maps-and-flags.png';
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->
</body>

</html>