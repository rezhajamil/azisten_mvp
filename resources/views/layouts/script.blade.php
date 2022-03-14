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

<script>
    var data_kos=[
      {
        "id":1,
        "name" : "Kos Pembangunan 1 A",
        "type" : "Wanita",
        "facility" : "AC,Kasur, Wifi, Lemari,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg"],
        "distance" : 1.6,
        "yearly_fee" : 16500000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      }
      ,
      {
        "id":2,
        "name" : "Kos Pembangunan 2",
        "type" : "Wanita",
        "facility" : "Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 2.4,
        "yearly_fee" : 16500000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      }
      ,
      {
        "id":3,
        "name" : "Kos Pembangunan 3 A",
        "type" : "Wanita",
        "facility" : "Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 2.6,
        "yearly_fee" : 7800000,
        "monthly_fee" : 650000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      },
      {
        "id":4,
        "name" : "Kos Pembangunan 3 B",
        "type" : "Wanita",
        "facility" : "AC,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 2.6,
        "yearly_fee" : 8800000,
        "monthly_fee" : 750000,
        "desc":"Air PDAM\nListrik Token tiap kamar",
      },
      {
        "id":5,
        "name" : "Kos Pembangunan 1 B",
        "type" : "Wanita",
        "facility" : "Kasur, Wifi, Lemari,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 1.6,
        "yearly_fee" : 9600000,
        "desc":"Listrik & Air per Bulan +- Rp.200.000",
      },
      {
        "id":6,
        "name" : "Kos Sipirok 1 A",
        "type" : "Pria",
        "facility" : "Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg"],
        "distance" : 1,
        "yearly_fee" : 6500000,
        "monthly_fee" : 700000,
        "monthly_two_person_charge" : 100000,
        "desc":"Khusus Muslim\nPembayaran listrik dibagi dengan kamar yang sebaris\nPembayaran Air berbagi dengan seluruh kamar.\nUntuk sewa bulanan sudah termasuk air",
      },
      {
        "id":7,
        "name" : "Kos Sipirok 1 B",
        "type" : "Wanita",
        "facility" : "AC,Kamar Mandi Dalam",
        "college": ["Kampus USU","Kampus POLMED"],
        "images": ["1.jpeg","2.jpeg","3.jpeg","4.jpeg"],
        "distance" : 1,
        "yearly_fee" : 8000000,
        "desc":"Khusus Muslim\nListrik token setiap kamar \nPembayaran Air berbagi dengan seluruh kamar.",
      },
    ];

    $(document).ready(function(){
      var type=[];
      var facility=[];
      var price_min=0;
      var price_max=20000000;
      var college='';

      show_kos(data_kos);

      function sort_kos(label,sort="asc",type='num') {
        if (type=='num') {
          data_kos=data_kos.sort(function(a,b){
            if (sort=="asc") {
              return a[label]-b[label];
            }
            else if(sort=="dsc"){
              return b[label]-a[label];
            }
          });
        }else if (type=='string') {
          data_kos=data_kos.sort(function(a,b){
            if (sort=='asc') {
              return a[label] == b[label] ? 0 : (a[label] < b[label] ? -1 : 1);
            }
            else if(sort=="dsc"){
              return a[label] == b[label] ? 0 : (a[label] < b[label] ? 1 : -1);
            }
        });
        }
        show_kos(data_kos);
      }

      function show_kos(data_kos) {
        $("#kos-list").empty();
        $(".kos-loading").show();
        setTimeout(() => {
          data_kos.forEach(data => {
            kos_list=`<div class="col-span-1 kos-item">
                <a href="/cari_kos/${data.id}" target="_blank" rel="noopener noreferrer">
                    <div class="flex p-3 rounded-md shadow flex-column">
                        <div class="relative w-full mb-2">
                            <img src="images/kos_new/${data.id}/cover.jpeg" alt="Kos" class="object-cover object-center w-full max-h-40">
                            <span class="absolute inline-block px-3 py-1 font-bold text-green-600 transition bg-slate-50 text-uppercase hover:bg-green-500 hover:text-white kos-type bottom-3">${data.type}</span>
                        </div>
                        <span class="mb-1 text-xl text-prussian text-capitalize fw-bold">${data.name}</span>
                        <span class="hidden kos-college">${data.college.join(" & ")}</span>
                        <div class="flex items-baseline p-0 mb-1">
                            <i class="text-sm text-gray-500 fa-solid fa-location-dot"></i>
                            <span class="ml-1 text-sm text-gray-500">${data.distance.toString().replace(/\./g,',')} Km dari ${data.college.join(" & ")}</span>
                        </div>
                        <span class="mb-2 text-sm text-gray-500 d-inline-block kos-facility">${data.facility?data.facility:"-"}</span>
                        <p class="text-xl font-semibold">Rp<span class="kos-price">${data.yearly_fee.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")}</span><span class="text-gray-600">/tahun</span></p>
                    </div>
                </a>
            </div>`
    
            $("#kos-list").append(kos_list);
          });
          $(".kos-loading").hide();
        }, 500);
      }

      function filter_kos(type,facility,price_min,price_max,college) {
        let pattern_type = new RegExp(type, "i");
        let pattern_facility = new RegExp(facility, "gi");
        let pattern_college = new RegExp(college, "i");

        $(".kos-item").each(function () {
            let kos_type = $(this).find(".kos-type").text();
            let kos_facility = $(this).find(".kos-facility").text();
            let kos_price = $(this).find(".kos-price").text().replace(/\./g,'');
            let kos_college = $(this).find(".kos-college").text();
            
            let kos_price_condition=parseInt(kos_price)>=price_min && parseInt(kos_price)<=price_max;

            if (pattern_type.test(kos_type) && pattern_facility.test(kos_facility) && kos_price_condition && pattern_college.test(kos_college)) {
                $(this).show();
              $('.kos-loading').show();
              setTimeout(() => { 
                $('.kos-loading').hide();
                $(this).show();
             }, 400)
              
            } else {
              $('.kos-loading').show();
              setTimeout(() => { 
                $('.kos-loading').hide();
                $(this).hide();
             }, 400)
            }
        });
      }

      // Filter Listener
      
      $("input[name='type']").change(function(){
        type=[];
          $("input[name='type']:checked").each(function () {
            type.push($(this).val());
          })
          type=type.join("|");
          filter_kos(type,facility,price_min,price_max,college);
      });

      $("input[name='facility']").change(function(){
          facility=[];
          $("input[name='facility']:checked").each(function () {
            facility.push($(this).val());
          })
          facility=facility.join("|");
          filter_kos(type,facility,price_min,price_max,college);
      });

      $("input[type='number']").change(function(){
        price_min=$("#price-min").val()*1000;
        price_max=$("#price-max").val()*1000;
        filter_kos(type,facility,price_min,price_max,college);
      });

      $("input[type='range']").change(function(){
        price_min=$("#price-min").val()*1000;
        price_max=$("#price-max").val()*1000;
        filter_kos(type,facility,price_min,price_max,college);
      });

      $(".college-filter a[type='button'] span").click(function(){
        $(".college-name").text($(this).text());
        college=$(this).text();
        filter_kos(type,facility,price_min,price_max,college);
      });

      // Sort Listener
      $(".sort_name_asc").click(function(){
        sort_kos("name","asc","string");
      });

      $(".sort_name_dsc").click(function(){
        sort_kos("name","dsc","string");
      });
      
      $(".sort_price_asc").click(function(){
        sort_kos("yearly_fee","asc","num");
      });

      $(".sort_price_dsc").click(function(){
        sort_kos("yearly_fee","dsc","num");
      });

      $(".sort_distance_asc").click(function(){
        sort_kos("distance","asc","num");
      });

      $(".sort_distance_dsc").click(function(){
        sort_kos("distance","dsc","num");
      });
    });


</script>