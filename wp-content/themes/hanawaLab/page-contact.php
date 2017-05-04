<?php get_header(); ?>
  <div class="mv mv-contact"></div>
  <section id="mail">
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>Get in touch</h2>
    </div>
    <a href="mailto:hanawa@sda.nagoya-cu.ac.jp">hanawa@sda.nagoya-cu.ac.jp</a>
  </section>
  <section id="access">
    <div class="h2">
      <div class="lag-shadow icon"><img src="<?php bloginfo('template_directory'); ?>/images/top/i-whats.png"></div>
      <h2>Access to Univ.</h2>
    </div>
    <div class="access-univ">
      <div class="univ-map">
        <div id="map-canvas">GoogleMap[愛知県名古屋市千種区北千種2丁目1番10号]</div>
        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
          var map, marker;
          var center = {
            lat: 35.181691, // 緯度
            lng: 136.947799  // 経度
          };
          function initMap() {
            map = new google.maps.Map(document.getElementById('map-canvas'), {
              center: center,
              zoom: 16,
              scrollwheel: false,
              styles: [{
                stylers:
                [
                  { hue: '#22ff00' },
                  { gamma: 0 },
                  { saturation: -80 },
                  { lightness: 0 }
                ]
              }]
            });
            marker = new google.maps.Marker({
              position: center,
              map: map,
              icon: new google.maps.MarkerImage(
                '/wp-content/themes/hanawaLab/images/contact/pin.png',
                new google.maps.Size(46,66), // size
                new google.maps.Point(0,0),  // origin
                new google.maps.Point(23,33) // anchor
              )
            });
          }
          initMap();
        </script>
        <div class="univ-address dropshadow">
          <address>
            <h3>名古屋市立大学芸術工学部 大学院芸術工学研究科</h3>
            <p>
              〒464-0083 <br>
              愛知県名古屋市千種区北千種2丁目1番10号
            </p>
            <p>TEL:052-721-1225(代)</p>
          </address>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
