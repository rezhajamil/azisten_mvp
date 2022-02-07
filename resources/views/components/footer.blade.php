<footer class="footer bg-green">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3 footer-item">
        <h4>Lokasi</h4>
        <div id="map"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.0526366085755!2d98.63891671422115!3d3.5753732513828926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312fc964ce37f5%3A0xb24ed76ec3cd8c76!2sJl.%20Murni%2C%20Tj.%20Rejo%2C%20Kec.%20Medan%20Sunggal%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1639442616377!5m2!1sid!2sid" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <p>
          <i class="fa fa-map-marker"></i><a href="https://goo.gl/maps/gQhcQWpAJJAXKfb19" target="_blank"> Jl. Murni, Tj. Rejo, Kec. Medan Sunggal, Kota Medan, Sumatera Utara 20154</a>
        </p>
        <ul class="social-icons d-flex p-0 mt-0">
          <li><a href="https://www.linkedin.com/company/azisten" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
          <li><a href="https://instagram.com/azisten_com" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://youtube.com/channel/UC8KRtaTfGedZe2gz-uJpogQ" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="https://tiktok.com/@azisten_com" target="_blank" class="fab fa-tiktok"></a></li>
          <li><a href="mailto:contact@azisten.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=6285869205026" target="_blank"><i class="fa fa-phone"></i></a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-item last-item">
        <h4>Tanya yuk!</h4>
        <div class="contact-form">
          <form id="contact footer-contact" action="/contact" method="post">
            @csrf
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <fieldset>
                  <input name="name" type="text" class="form-control" id="nama-penanya" placeholder="Nama Kamu . . ." required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" rows="6" class="form-control" id="pertanyaan" placeholder="Pertanyaan Kamu . . ." required=""></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="tanya-wa" class="filled-button">Kirim Via WA</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>
            Copyright &copy; {{ date('Y') }}
            <a href="https://azisten.com">AZISTEN</a>
            - Bisa Di Andalkan
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>