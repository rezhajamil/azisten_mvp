<script src="{{ asset("vendor/jquery/jquery.min.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{ asset("js/bootstrap.js") }}"></script>
<script src="{{ asset("vendor/owl-carousel/dist/owl.carousel.min.js") }}"></script>
<script src="{{ asset("vendor/wow/wow.js") }}"></script>
<script>new WOW().init();</script>
<script>
  var owl_layanan = $('.owl-carousel.owl-carousel-layanan');
  owl_layanan.owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        center: true,
        items: 2,
        nav: false,
        loop: true,
      },
      600: {
        items: 4,
        nav: false,
        loop: false,
      },
      1000: {
        items: 4,
        nav: false,
        loop: false
      }
    },
    onInitialize: active,
    onTranslate: active,
  })

  function active(event) {
    var element = event.target;
    var items = event.item.count;
    var item = event.item.index + 1;

    console.log(`${element},${items},${item}`)

    if (item == 1) {
      $('.layanan-left').removeClass('active');
    } else if (item == items) {
      $('.layanan-right').removeClass('active');
    } else {
      $('.layanan-left').addClass('active');
      $('.layanan-right').addClass('active');
    }
  }

  $('.layanan-left').click(function() {
    owl_layanan.trigger('prev.owl.carousel');
  })

  $('.layanan-right').click(function() {
    owl_layanan.trigger('next.owl.carousel');
  })
</script>

<script>
  var owl_job = $('.owl-carousel.owl-carousel-job');
  owl_job.owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        loop: false,
      },
      600: {
        items: 3,
        nav: false,
        loop: false,
      },
      1000: {
        items: 3,
        nav: false,
        loop: false
      }
    },
    onInitialize: active,
    // onTranslate:active,
    onTranslated: active,
    lazyLoad: true,
  })

  function active(event) {
    var element = event.target;
    var items = event.item.count;
    var item = event.item.index + 1;

    console.log(`${element},${items},${item}`)

    if (item == 1) {
      $('.job-left').removeClass('active');
    } else if (item == items) {
      $('.job-right').removeClass('active');
    } else {
      $('.job-left').addClass('active');
      $('.job-right').addClass('active');
    }
  }

  $('.job-left').click(function() {
    owl_job.trigger('prev.owl.carousel');
  })

  $('.job-right').click(function() {
    owl_job.trigger('next.owl.carousel');
  })
</script>

<script>
  let toggles = document.getElementsByClassName('faq-toggle');
  let contentDiv = document.getElementsByClassName('faq-content');
  let icons = document.getElementsByClassName('faq-icon');

  for (let i = 0; i < toggles.length; i++) {
    toggles[i].addEventListener('click', () => {
      if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
        contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";
        toggles[i].style.color = "#0084e9";
        icons[i].classList.remove('fa-plus');
        icons[i].classList.add('fa-minus');
      } else {
        contentDiv[i].style.height = "0px";
        toggles[i].style.color = "#111130";
        icons[i].classList.remove('fa-minus');
        icons[i].classList.add('fa-plus');
      }

      for (let j = 0; j < contentDiv.length; j++) {
        if (j !== i) {
          contentDiv[j].style.height = "0px";
          toggles[j].style.color = "#111130";
          icons[j].classList.remove('fa-minus');
          icons[j].classList.add('fa-plus');
        }
      }
    });
  }
</script>

<script>
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".auth-container");

  sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
  });

  sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
  });
</script>

<script>
  let labelPaymentInterval= document.querySelector(".payment-interval-label")
  let switchPaymentInterval= document.querySelector("#switch-interval")
  let sliderOne = document.getElementById("price-slider-min");
  let sliderTwo = document.getElementById("price-slider-max");
  let displayValOne = document.getElementById("price-min");
  let displayValTwo = document.getElementById("price-max");
  let minGap = 100;
  let sliderTrack = document.querySelector(".slider-track");
  let sliderMaxValue = document.getElementById("price-slider-min").max;
  let checkKebijakan = document.getElementsByClassName("check-kebijakan");
  let btnSubmit = document.querySelector(".cari-kos-btn");
  let btnAddFacil = document.querySelector(".btn-add-facil");
  let otherFacil = document.querySelector(".other-facil-wrapper");

  window.onload = function() {
    slideOne();
    slideTwo();
    commafy(displayValOne.value);
    commafy(displayValTwo.value);
  }

  function commafy( num ) {
    var moneyDots = num.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.");
    this.value=moneyDots;
  }

  function changeSwitchValue() {
    if (switchPaymentInterval.checked) {
      labelPaymentInterval.textContent="Tahunan";
      switchPaymentInterval.value="Tahun";
    }else{
      labelPaymentInterval.textContent="Bulanan";
      switchPaymentInterval.value="Bulan";
    }
  }

  function slideOne() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
      sliderOne.value = parseInt(sliderTwo.value) - minGap;
    }
    displayValOne.value = sliderOne.value;
    fillColor();
  }

  function slideTwo() {
    if (parseInt(sliderTwo.value) - parseInt(sliderOne.value) <= minGap) {
      sliderTwo.value = parseInt(sliderOne.value) + minGap;
    }
    displayValTwo.value = sliderTwo.value;
    fillColor();
  }

  function priceOne() {
    if (displayValOne.value < 100 || displayValOne.value > 5000) {
      displayValOne.value = 100;
    }
    sliderOne.value = displayValOne.value;
    fillColor();
  }

  function pricetwo() {
    if (displayValTwo.value < 100 || displayValTwo.value > 5000) {
      displayValTwo.value = 5000;
    }
    sliderTwo.value = displayValTwo.value;
    fillColor();
  }

  function fillColor() {
    percent1 = (sliderOne.value / sliderMaxValue) * 100;
    percent2 = (sliderTwo.value / sliderMaxValue) * 100;
    sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3fbb56 ${percent1}% , #3fbb56 ${percent2}%, #dadae5 ${percent2}%)`;
  }

  function toogleSubmit() {
    btnSubmit.classList.toggle("active");
  }

  function showAddFacil() {
    if (btnAddFacil.innerHTML == "- Fasilitas Lainnya") {
      btnAddFacil.innerHTML = "+ Fasilitas Lainnya";
      otherFacil.style.display="none";
    } else {
      btnAddFacil.innerHTML = "- Fasilitas Lainnya";
      otherFacil.style.display="block";
    }
  }
</script>