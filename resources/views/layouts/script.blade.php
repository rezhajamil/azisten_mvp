<script src="{{ asset("vendor/jquery/jquery.min.js") }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="{{ asset("js/bootstrap.js") }}"></script>
<script src="{{ asset("vendor/owl-carousel/dist/owl.carousel.min.js") }}"></script>
<script>
  $(document).ready(function(){
      document.querySelector(".loading-animation").style.display="none";
    });
</script>
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
  $('.kos-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    stagePadding:50,
    dots:false,
    responsive:{
        0:{
            items:1,
            loop:true,
            nav:false
        },
        600:{
            center:true,
            items:4,
            loop:true,
            nav:false
        },
        1000:{
            center:true,
            items:5,
            nav:false,
            loop:true,
        }
    }
})
</script>

<script>
  $('filter.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    responsiveClass:true,
    stagePadding:50,
    dots:false,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            loop:true,
            nav:false
        },
        600:{
            center:true,
            items:4,
            loop:true,
            nav:false
        },
        1000:{
            center:true,
            items:5,
            nav:false,
            loop:true,
        }
    }
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
//   const sign_in_btn = document.querySelector("#sign-in-btn");
//   const sign_up_btn = document.querySelector("#sign-up-btn");
//   const container = document.querySelector(".auth-container");

//   sign_up_btn.addEventListener("click", () => {
//     container.classList.add("sign-up-mode");
//   });

//   sign_in_btn.addEventListener("click", () => {
//     container.classList.remove("sign-up-mode");
//   });
  </script>

<script>
  let labelPaymentInterval= document.querySelector(".payment-interval-label")
  let switchPaymentInterval= document.querySelector("#switch-interval")
  let sliderOne = document.getElementById("price-slider-min");
  let sliderTwo = document.getElementById("price-slider-max");
  let displayValOne = document.getElementById("price-min");
  let displayValTwo = document.getElementById("price-max");
  let minGap = 500;
  let sliderTrack = document.querySelector(".slider-track");
  let sliderMaxValue = sliderOne.max;
  let checkKebijakan = document.getElementsByClassName("check-kebijakan");
  let btnSubmit = document.querySelector(".cari-kos-btn");
  let btnAddFacil = document.querySelector(".btn-add-facil");
  let otherFacil = document.querySelector(".other-facil-wrapper");
  let collegeSelect=document.querySelector(".college-select")
  let otherCollege=document.querySelector(".other-college")

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
      if (document.getElementById('g-standard').checked) {
        switchSliderRange(1000,8000,500,500);
      }
      else if (document.getElementById('g-elite').checked) {
        switchSliderRange(8000,20000,500,500);
      }
      else{
        switchSliderRange(1000,20000,500,500);
      }
    }else{
      labelPaymentInterval.textContent="Bulanan";
      switchPaymentInterval.value="Bulan";
      if (document.getElementById('g-standard').checked) {
        switchSliderRange(100,800,100,100);
      }
      else if (document.getElementById('g-elite').checked) {
        switchSliderRange(900,2000,100,100);
      }
      else{
        switchSliderRange(100,2000,100,100);
      }
    }
    slideOne();
    slideTwo();
  }

  function switchSliderRange(min,max,gap,step) {
      minGap=gap;
      sliderOne.max=max;
      sliderOne.min=min;
      sliderOne.value=min;
      sliderOne.step=step;
      displayValOne.value=min;
      sliderTwo.max=max;
      sliderTwo.min=min;
      sliderTwo.value=max;
      sliderTwo.step=step;
      displayValTwo.value=max;
      sliderMaxValue=max;
  }

  function slideOne(d1='price-min',slide1='price-slider-min',slide2='price-slider-max') {
    if (parseInt(document.getElementById(slide2).value) - parseInt(document.getElementById(slide1).value) <= minGap) {
      document.getElementById(slide1).value = parseInt(document.getElementById(slide2).value) - minGap;
    }
    document.getElementById(d1).value = document.getElementById(slide1).value;
  }

  function slideTwo(d2='price-max',slide1='price-slider-min',slide2='price-slider-max') {
    if (parseInt(document.getElementById(slide2).value) - parseInt(document.getElementById(slide1).value) <= minGap) {
      document.getElementById(slide2).value = parseInt(document.getElementById(slide1).value) + minGap;
    }
    document.getElementById(d2).value = document.getElementById(slide2).value;
    // fillColor();
  }

  function priceOne(d1='price-min',slide1='price-slider-min',slide2='price-slider-max') {
    if (document.getElementById(d1).value < parseInt(document.getElementById(slide1).min) || document.getElementById(d1).value > (parseInt(document.getElementById(slide2).value)-minGap)) {
      document.getElementById(d1).value = document.getElementById(slide1).min;
    }
    document.getElementById(slide1).value = document.getElementById(d1).value;
    // fillColor();
  }

  function priceTwo(d2='price-max',slide1='price-slider-min',slide2='price-slider-max') {
    if (document.getElementById(d2).value > parseInt(document.getElementById(slide2).max) || document.getElementById(d2).value < (parseInt(document.getElementById(slide1).value)+minGap)) {
      document.getElementById(d2).value = document.getElementById(slide2).max;
    }
    document.getElementById(slide2).value = document.getElementById(d2).value;
    // fillColor();
  }

  // function fillColor() {
  //   percent1 = (sliderOne.value / sliderMaxValue) * 100;
  //   percent2 = (sliderTwo.value / sliderMaxValue) * 100;
  //   sliderTrack.style.background = `linear-gradient(to right, #dadae5 ${percent1}% , #3fbb56 ${percent1}% , #3fbb56 ${percent2}%, #dadae5 ${percent2}%)`;
  // }

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

  function toogleCollege(){
    if (collegeSelect.value=="Lainnya") {
      otherCollege.style.display="block";
    }else{
      otherCollege.style.display="none";
    }
  }

  function toogleGroup() {
    switchPaymentInterval.checked=true;
    if (document.getElementById('g-standard').checked) {
      document.querySelector('.cari-kos-inputfield.facility').classList.add("d-none");
      changeSwitchValue();
    }
    else{
      document.querySelector('.cari-kos-inputfield.facility').classList.remove("d-none");
      changeSwitchValue();
    }
  }
</script>

<script>
  $(document).ready(function(){
    $("#search-college").on("input", function () {
					let search = $(this).val();
					let pattern = new RegExp(search, "i");
					$(".university").each(function () {
						let college = $(this).text();
						if (pattern.test(college)) {
							$(this).show();
						} else {
							$(this).hide();
						}
					});
				});
  });
</script>