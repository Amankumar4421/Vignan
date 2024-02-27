<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
maximum-scale=1.0, user-scalable=no" />
  <title>University Life</title>

  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="./css/button.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/mobile.css">
  <link rel="stylesheet" href="./css/font.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
  <style>
    body {
      background-color: #F2F1ED !important;
    }

    .menu-large {
      position: static !important;
    }
  </style>
</head>

<body>

  <!-- navbar start -->
  <div class="top-nav">
    <ul class="topnav-ul">
      <li>
        <div class="dropdown">
          <div class="dropdown_img-txt">
            <div class="dropdown_topnavtxt">NewStudent </div>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <div class="dropdown_img-txt">
            <div class="dropdown_topnavtxt">Parent </div>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <div class="dropdown_img-txt">
            <div class="dropdown_topnavtxt">Alumni </div>

          </div>

        </div>
      </li>
      <li>
        <div class="dropdown">
          <div class="dropdown_img-txt">
            <div class="dropdown_topnavtxt">Webmail </div>

          </div>

        </div>
      </li>
    </ul>
  </div>
  <div class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <img src="./assets/images/logo.png" class="vignan-logo" id="mblheader">

        <div class="search-mbl" id="mblheader">
          <div class="search-box">
            <button class="btn-search"> <img src="./assets/icons/Search.png" style="width:70%" /></button>
            <input type="text" class="input-search" placeholder="Search" name="searchterm" id="searchterm">
            <img src="./assets/icons/cross.png" class="cross" id="cross" />
          </div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>

          </button>
        </div>

        <!--   <a class="navbar-brand" href="#">Logo</a> -->

      </div>
      <div class="navbar-header" id="desktopheader">
        <img src="./assets/images/logo.png" class="vignan-logo" />
        <a class="navbar-brand clz-name" href="#" id="clznm"> <b class="vignan">VIGNAN'S</b><br>UNIVERSITY</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav header-ul">
          <li class=""><a href="home.php">Home</a></li>

          <li class="dropdown menu-large "> <a href="# " class="dropdown-toggle " data-toggle="dropdown ">Academics <img src="./assets/icons/Dropdown.png" /></a>
            <ul class="dropdown-menu megamenu row ">
              <li class="col-sm-3 ">
                <ul>
                  <li class="dropdown-header megamenu-hdr">Academics</li>
                </ul>
              </li>

              <li class="col-sm-3 megamenu-div">
                <ul class="megamenu-options">

                  <li data-img="img1"><a href="# " class="megamenu-options">Programs</a> </li>
                  <li data-img="img2"><a href="# " class="megamenu-options">Departments</a> </li>
                  <li data-img="img3"><a href="# " class="megamenu-options">Examinations</a></li>
                  <li data-img="img4"><a href="# " class="megamenu-options">Academic Calendar</a></li>
                  <li data-img="img5"><a href="# " class="megamenu-options">Policies & handbooks</a>
                  </li>
                  <li data-img="img6"><a href="# " class="megamenu-options">Why choose us?</a>
                  <li data-img="img7"><a href="# " class="megamenu-options">Regulations</a>
                  </li>
                </ul>
              </li>
              <li class="col-sm-3 hoverimg">
                <ul>
                  <li id="img1"><img src="./assets/images/program_img.png" alt=""></li>
                  <li id="img2"><img src="./assets/images/departement_img.png" alt=""></li>
                  <li id="img3"><img src="./assets/images/whychooseus_img.png" alt=""></li>
                  <li id="img4"><img src="./assets/images/program_img.png" alt=""></li>
                  <li id="img5"><img src="./assets/images/departement_img.png" alt=""></li>
                  <li id="img6"><img src="./assets/images/whychooseus_img.png" alt=""></li>
                  <li id="img7"><img src="./assets/images/program_img.png" alt=""></li>

                </ul>
              </li>

            </ul>
          </li>
          <li><a href="#">Admission</a></li>
          <li><a href="#">Reserach</a></li>
          <li class="dropdown menu-large "> <a href="# " class="dropdown-toggle " data-toggle="dropdown ">People <img src="./assets/icons/Dropdown.png" /></a>
            <ul class="dropdown-menu megamenu row ">
              <li class="col-sm-3 ">
                <ul>
                  <li class="dropdown-header megamenu-hdr">People</li>
                </ul>
              </li>

              <li class="col-sm-3 megamenu-div">
                <ul class="megamenu-options">

                  <li data-img="p-img1"><a href="# " class="megamenu-options">Faculty</a> </li>
                  <li data-img="p-img2"><a href="# " class="megamenu-options">Students</a> </li>
                  <li data-img="p-img3"><a href="# " class="megamenu-options">Alumni</a></li>
                  <li data-img="p-img4"><a href="# " class="megamenu-options">Board of Studies</a>
                  </li>
              </li>
            </ul>
          </li>
          <li class="col-sm-3 hoverimg">
            <ul>
              <li id="p-img1"><img src="./assets/images/faculty_img.png" alt=""></li>
              <li id="p-img2"><img src="./assets/images/student_img.png" alt=""></li>
              <li id="p-img3"><img src="./assets/images/faculty_img.png" alt=""></li>
              <li id="p-img4"><img src="./assets/images/student_img.png" alt=""></li>

            </ul>
          </li>

        </ul>
        </li>
        <li class="active"><a href="#">University Life</a></li>
        <li><a href="#">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li>
            <div class="search-box">
              <button class="btn-search"> <img src="./assets/icons/Search.png" style="width:70%" /></button>
              <input type="text" class="input-search" placeholder="Search" name="searchterm" id="searchterm">
              <img src="./assets/icons/cross.png" class="cross" id="cross" />
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    //dropdown on  click //

    $(document).ready(function() {
      // Show hide popover
      $(".dropdown").click(function() {
        $(this).find(".dropdown-menu").slideDown();
      });
    });
    $(document).on("click", function(event) {
      var $trigger = $(".dropdown");
      if ($trigger !== event.target && !$trigger.has(event.target).length) {
        $(".dropdown-menu").slideUp("fast");
      }


      $(".megamenu-div ul").on("mouseover", "li", function() {
        $("#" + $(this).data("img")).fadeIn();

      });

      $(".megamenu-div ul").on("mouseout", "li", function() {
        $("#" + $(this).data("img")).fadeOut(1);
      });


    });
  </script>

  <!-- navbar end -->

  <!-- University life Content -->
  <div class="div1">

    <div class="div-19">
      <div class="div-20">
        <div class="column">
          <div class="div-21">
            <div class="div-22">Learn, Thrive, Enjoy, and Grow.</div>
            <div class="div-23">
              The beautifully landscaped campus has green tree lined avenues, lush
              green lawns, spacious classrooms, open corridors and large
              playgrounds.
            </div>
          </div>
        </div>
        <div class="column-2">
          <div class="div-24">
            <img loading="lazy" src="./assets/images/image1.png" alt="image" class="img-5" />
          </div>
        </div>
      </div>
    </div>

    <!-- Experience the Ambience -->
    <div class="div-25">
      <div class="div-26">
        <div class="column-3">
          <div class="div-27">
            <div class="div-28">Experience the Ambience</div>
            <div class="div-29">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-6" />
              <div class="div-30">
                <div class="div-31">
                  <div class="div-32">Green Campus
                    <div class="smallcta_btn_primary">
                      <img src="./assets/icons/arrow_outward_white.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-34">
              &quot;With green avenues, lush lawns, spacious classrooms, and open
              corridors, our serene atmosphere fosters a stress-free environment,
              nurturing student learning and development.&quot;
            </div>
          </div>
        </div>
        <div class="column-4">
          <div class="div-35">
            <div class="div-36">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-8" />
              <div class="div-37">
                <div class="div-38">
                  <div class="div-39">Canteen Tour
                    <div class="smallcta_btn_primary">
                      <img src="./assets/icons/arrow_outward_white.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-41">
              <div class="div-42">
                <div class="column-5">
                  <div class="cardsmall-img">
                    <div class="cardsmall-overlay">
                      <div class="card-caption">Auditorium <button class="smallcta_btn_primary">
                          <img src="./assets/icons/arrow_outward_white.png" class="img-ca" />
                        </button>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="column-6">
                  <button class="cta_button_primary Ss-btn_txt div-48">
                    <div>View All </div> <img src="./assets/icons/Button_forwardarrow.png" />
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="div-50">Student Council</div>
    <div class="div-51">
      <div class="div-52">
        <div class="column-7">
          <div class="div-53">
            <div class="div-54">SAC</div>
            <div class="div-55">
              The Student Activities Council of 80 members is elected annually
              from among the nominees and selections done
            </div>
            <div class="div-56">
              <div class="div46">
                <div class="div47">Read More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img6" />
              </div>
              <div class="div48"></div>
            </div>
          </div>
        </div>

        <div class="column-8">
          <div class="div-59">
            <div class="div-60">Sports Cell</div>
            <div class="div-61">
              The Institute Sports and Games cell supports all the sports activities to inculcate the culture of physical fitness among the
              young minds
            </div>
            <div class="div-62">
              <div class="div46">
                <div class="div47">Read More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img6" />
              </div>
              <div class="div48"></div>
            </div>
          </div>
        </div>

        <div class="column-9">
          <div class="div-65">
            <div class="div-66">NCC</div>
            <div class="div-67">
              The objective of National Cadet Corps is to develop character,
              comradeship, and capacity for leadership among youth in India.
            </div>
            <div class="div-68">
              <div class="div46">
                <div class="div47">Read More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img6" />
              </div>
              <div class="div48"></div>
            </div>
          </div>
        </div>

        <div class="column-10">
          <div class="div-71">
            <div class="div-72">UEAC</div>
            <div class="div-73">
              UEAC activities are aimed at instilling social consciousness and
              responsibility among budding engineers
            </div>
            <div class="div-74">
              <div class="div46">
                <div class="div47">Read More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img6" />
              </div>
              <div class="div48"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sports Amenities -->
    <div class="div-77">
      <div class="div-78">
        <div class="column-11">
          <div class="div-79">
            <div class="div-80">Sports Amenities</div>

            <div class="div-97-mob">
              <div class="div-98-mob">
                The campus is equipped with facilities for all outdoor games like
                cricket, football, volleyball, tennis, basketball, and a 400-meter
                track athletics. An Indoor Sports Complex offers provision for
                indoor games like table tennis, badminton etc.
              </div>
            </div>

            <div class="div-81">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-17" />
              <div class="div-82">
                <div class="div-83">
                  <div class="div-84">Tennis &nbsp;
                    <div class="smallcta_btn_primary">
                      <img src="./assets/icons/arrow_outward_white.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column-12">
          <div class="div-86">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-19" />
            <div class="div-87">
              <div class="div-88">
                <div class="div-89">Football &nbsp;
                  <div class="smallcta_btn_primary">
                    <img src="./assets/icons/arrow_outward_white.png" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column-13">
          <div class="div-91">
            <div class="div-92">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-21" />
              <div class="div-93">
                <div class="div-94">
                  <div class="div-95">Cricket &nbsp;
                    <div class="smallcta_btn_primary">
                      <img src="./assets/icons/arrow_outward_white.png" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-97">
              <div class="div-98">
                The campus is equipped with facilities for all outdoor games like
                cricket, football, volleyball, tennis, basketball, and a 400-meter
                track athletics. An Indoor Sports Complex offers provision for
                indoor games like table tennis, badminton etc.
              </div>
              <div class="div-99">
                <button class="cta_button_primary Ss-btn_txt">
                  <div>Explore All Amenities</div> <img src="./assets/icons/Button_forwardarrow.png" />
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="column-14">
          <div class="div-101">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-24" />
            <div class="div-102">
              <div class="div-103">
                <div class="div-104">Basketball
                  <div class="smallcta_btn_primary">
                    <img src="./assets/icons/arrow_outward_white.png" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="div-99-mob">
          <button class="cta_button_primary Ss-btn_txt">
            <div>Explore All Amenities</div> <img src="./assets/icons/Button_forwardarrow.png" />
          </button>
        </div>
      </div>
    </div>

    <!-- Art & Cultural Amenities -->
    <div class="div-106">
      <div class="div-107">
        <div class="column-15">
          <div class="div-108">
            <div class="div-109">
              <br />
              Art & Cultural Amenities
            </div>
            <div class="div-110">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-26" />
            </div>
            <div class="div-111">
              The institution provides rich scope and facilities for different
              clubs like literary, cultural, sports and fine arts. These clubs
              offer a platform for students to exhibit their innate and latent
              talents in the areas of their interest.For facilitating students to
              conduct and participate in the wide spectrum of recreational
              activities,the institution has well planned infrastructure.
            </div>
          </div>
        </div>
        <div class="column-16">
          <div class="div-112">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-27" />
          </div>
        </div>
        <div class="column-17">
          <div class="div-113">
            <div class="div-114">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-28" />
            </div>
            <div class="div-111-mob">
              The institution provides rich scope and facilities for different
              clubs like literary, cultural, sports and fine arts. These clubs
              offer a platform for students to exhibit their innate and latent
              talents in the areas of their interest.For facilitating students to
              conduct and participate in the wide spectrum of recreational
              activities,the institution has well planned infrastructure.
            </div>
            <div class="div-115">
              <div class="div-116">
                <button class="cta_button_primary Ss-btn_txt">
                  <div>Explore All Amenities </div> <img src="./assets/icons/Button_forwardarrow.png" />
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="div-117">Major Events</div>
    <div class="div-118">
      <div class="div-119">
        <div class="column-18">
          <div class="div-120">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-30" />
            <div class="div-121">
              <div class="div-122">mahotsav</div>
              <div class="div-123">03 Sept to 04 Sept 2024</div>
            </div>
          </div>
        </div>
        <div class="column-19">
          <div class="div-124">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-31" />
            <div class="div-125">
              <div class="div-126">Aavega</div>
              <div class="div-127">03 Sept to 04 Sept 2024</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-128">
      <div class="div-129">
        <div class="column-20">
          <div class="div-130">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-32" />
            <div class="div-131">
              <div class="div-132">Spic Macay</div>
              <div class="div-133">03 Dec 2024</div>
            </div>
          </div>
        </div>
        <div class="column-21">
          <div class="div-134">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-33" />
            <div class="div-135">
              <div class="div-136">Ektha Diwas</div>
              <div class="div-137">03 Dec 2024</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="div-138">Facilities</div>
    <div class="div-139">
      <div class="div-140">
        <div class="column-22">
          <div class="div-141">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-34" />
          </div>
        </div>
        <div class="column-23">
          <div class="div-142">
            <div class="div-143">
              <div class="div-144">
                <div class="column-24">
                  <div class="div-145">
                    <div class="div-146">Canteen and Shopping Facility</div>
                    <div class="div-147">
                      <img loading="lazy" src="./assets/icons/canteen.svg" class="img-35" />
                      <div class="div-148"></div>
                    </div>
                  </div>
                </div>
                <div class="column-25">
                  <div class="div-149">
                    <div class="div-150">Medical Facility</div>
                    <div class="div-151">
                      <img loading="lazy" src="./assets/icons/medical.svg" class="img-36" />
                      <div class="div-152"></div>
                    </div>
                  </div>
                </div>
                <div class="column-26">
                  <div class="div-153">
                    <div class="div-154">Hostel Facility</div>
                    <div class="div-155">
                      <img loading="lazy" src="./assets/icons/hostel.svg" class="img-37" />
                      <div class="div-156"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="div-157">
              <div class="div-158">
                <div class="column-27">
                  <div class="div-159">
                    <div class="div-160">Security and safety</div>
                    <div class="div-161">
                      <img loading="lazy" src="./assets/icons/security.svg" class="img-38" />
                      <div class="div-162"></div>
                    </div>
                  </div>
                </div>
                <div class="column-28">
                  <div class="div-163">
                    <div class="div-164">Transport Facility</div>
                    <div class="div-165">
                      <img loading="lazy" src="./assets/icons/tranport.svg" class="img-39" />
                      <div class="div-166"></div>
                    </div>
                  </div>
                </div>
                <div class="column-29">
                  <div class="div-167">
                    <div class="div-168">Banking facility</div>
                    <div class="div-169">
                      <img loading="lazy" src="./assets/icons/banking.svg" class="img-40" />
                      <div class="div-170"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Library -->
    <div class="div-171">
      <div class="div-172">
        <div class="column-30">
          <div class="div-173">
            <div class="div-174">Library</div>
            <div class="div-175">
              The Central library at Vignan's University, inaugurated in the year
              of 2005 by the Coal and Mines Minister, Govt. of India, Sri. Dasari
              Narayana Rao has an exclusive user friendly and comfort oriented
              infrastructure, which is spread over a space of about 5902 Sqm. It
              is an air conditioned, aesthetically designed facility with plenty
              of indoor greenery, modern furniture and reprographic conveniences.
            </div>
          </div>
          <div class="div-192-mob">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-44" />
          </div>
        </div>
        <div class="column-31">
          <div class="div-176">
            <div class="div-177">NTR Vignan Library Infrastructure</div>
            <div class="div-178">
              The NTR library stocks more than 1,12,633 volumes, which include
              competitive exam resources for UPSC, IES etc, and plenty of
              audio-visual learning materials. Also, 261 national and
              international referred journals are available.
            </div>
            <div class="div-179">
              <div class="div-251">
                <div class="div-252">Explore More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img-58" />
              </div>
              <div class="div-253"></div>
            </div>
            <div class="div-182">Online Resources</div>
            <div class="div-183">
              Vignan's University subscribes to the online Journals and now
              available for all students and faculty through IP based (no need of
              password)
            </div>
            <div class="div-184">
              <div class="div-251">
                <div class="div-252">Explore More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img-58" />
              </div>
              <div class="div-253"></div>
            </div>
            <div class="div-187">Vignan Library Services</div>
            <div class="div-188">
              The artistically designed octagonal shaped library with more than
              1,12,633 volumes, plenty of audio - visual materials & about 7009
              National & International journals, is indeed a rich repository of
              knowledge facilitating prospects for future research.
            </div>
            <div class="div-189">
              <div class="div-251">
                <div class="div-252">Explore More</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img-58" />
              </div>
              <div class="div-253"></div>
            </div>
          </div>
        </div>
        <div class="column-32">
          <div class="div-192">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-44" />
          </div>
        </div>
      </div>
    </div>

    <!-- Holistic Training Program at Vignan -->
    <div class="div-193">
      <div class="div-194">
        <div class="column-33">
          <div class="div-195">
            <div class="div-203-mob">Emotional and Physiological Development.</div>
            <div class="div-196">
              Along-with state of art facilities we also keep emphasis on
              emotional trainings that indulges kindness, sympathy, empathy & love
              among our students. We also provide concealing to the students on
              various areas where they can hone their skills & upgrade themselves
              professionally. Various students have benefited from such
              counselling sessions.
            </div>
            <div class="div-197">Holistic Training Program at Vignan</div>
            <div class="div-198">
              Holistic training in education integrates Student Support Services
              for individual well-being, emphasizes Language & Communication
              skills, and cultivates essential Soft Skills and Life Skills. This
              comprehensive approach ensures students develop academically,
              emotionally, and socially, preparing them for a successful and
              balanced future.
            </div>
            <div class="div-199">
              <button class="cta_button_primary Ss-btn_txt">
                <div>Explore Programs</div> <img src="./assets/icons/Button_forwardarrow.png" />
              </button>
            </div>
          </div>
        </div>
        <div class="column-34">
          <div class="div-201">
            <img loading="lazy" srcset="./assets/images/image1.png" class="img-47" />
          </div>
        </div>
        <div class="column-35">
          <div class="div-202">
            <div class="div-203">Emotional and Physiological Development.</div>
            <div class="div-204">Emotional Support That We Offer</div>
            <div class="div-205">
              We provide a nurturing environment with comprehensive emotional
              support, fostering student well-being and resilience throughout
              their educational journey.
            </div>
            <div class="div-206">
              <button class="cta_button_primary Ss-btn_txt">
                <div class="text1">Explore More</div> <img src="./assets/icons/Button_forwardarrow.png" />
              </button>
            </div>
            <div class="div-208">
              <img loading="lazy" srcset="./assets/images/image1.png" class="img-49" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Anti Ragging -->
    <div class="div-209">
      <div class="div-210">
        <div class="column-36">
          <div class="div-211">
            <div class="div-212">
              <div class="column-37">
                <div class="div-213">
                  <img loading="lazy" srcset="./assets/images/image1.png" class="img-50" />
                </div>
              </div>
              <div class="column-38">
                <div class="div-214">
                  <div class="div-215">Anti Ragging</div>
                  <div class="div-216">
                    Ragging in essence is a human rights abuse... In present times
                    shocking incidents of ragging have come to the notice... The
                    student is physically tortured or psychologically
                    terrorized...&quot;
                  </div>
                  <div class="div-217">
                    <button class="cta_button_primary Ss-btn_txt">
                      <div>Read More </div><img src="./assets/icons/Button_forwardarrow.png" />
                    </button>
                  </div>
                  <div class="div-219">
                    <img loading="lazy" srcset="./assets/images/image1.png" class="img-52" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="column-39">
          <div class="div-220">
            <div class="div-221">
              <div class="div-222">
                <div class="div-223">
                  <br />
                  800 - 180 - 5522
                </div>
                <div class="div-224">Toll Free No</div>
              </div>
              <div class="div-225">
                <img loading="lazy" src="./assets/icons/tollfree.svg" class="img-53" />
                <div class="div-226"></div>
              </div>
            </div>
            <div class="div-227">Grievance Redressal</div>
            <div class="div-228">
              The function of the Cell is to look into the grievances lodged by
              any student, and judge its merit, and take appropriate actions for
              redressal. Anyone with a grievance may approach any member of the
              grievance redressal cell, or any faculty member of the department.
              The complaint can be in writing, or oral.
            </div>
            <div class="div-229">
              <button class="cta_button_primary Ss-btn_txt">
                <div>Read More </div><img src="./assets/icons/Button_forwardarrow.png" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="div-231">Institutional Committees</div>
    <div class="div-232">
      <div class="div-233">
        <div class="column-40">
          <div class="div-234">
            <div class="div-235">
              Parents Teachers
              <br />
              Association
            </div>
            <div class="div-236">
              <div class="div-251">
                <div class="div-252">View Details</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img-58" />
              </div>
              <div class="div-253"></div>
            </div>

          </div>
        </div>
        <div class="column-41">
          <div class="div-239">
            <div class="div-240">Admissions Advisory Committee</div>
            <div class="div-241">
              <div class="div-251">
                <div class="div-252">View Details</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img-58" />
              </div>
              <div class="div-253"></div>
            </div>
          </div>
        </div>
        <div class="column-42">
          <div class="div-244">
            <div class="div-245">Evaluation Standards Committee</div>
            <div class="div-246">
              <div class="div-251">
                <div class="div-252">View Details</div>
                <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img-58" />
              </div>
              <div class="div-253"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="div-249">
      <button class="cta_button_primary Ss-btn_txt">
        <div>View All</div> <img src="./assets/icons/Button_forwardarrow.png" />
      </button>
    </div>
    <div class="div-250">
      <div>
        <div class="div-254">
          <div class="div-255">View All</div>
          <img loading="lazy" src="./assets/icons/arrow_outward.png" class="img6" />
        </div>
        <div class="div-256"></div>
      </div>
    </div>



  </div>




  <!-- footer start -->
  <div class="div-foot">
    <div class="foot">

      <div class="footer">
        <div class="footer_innrdiv">
          <div class="ftr_col1">
            <div class="bethefirst_div">
              <div class="bethefirst_txt">Be The First to Know.</div>
            </div>
            <div class="subscribe_div">
              <div class="subscribe_txt">Subscribe to the newsletter for all the updates</div>
              <!-- <div style="align-self: stretch; height: 82px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 13px; display: flex"">
                <label for="label">
                    <input type="text" id="label" placeholder=""  style=" background: transparent;">
                    <span>Enter E-mail id</span>
                    <div class="label_smallcta smallcta_btn_primary">
                        <img src="assets/icons/arrow_forward_white.png" />
                    </div>
                </label> -->

              <div class="emaildiv">
                <div class="email_innrdiv">

                  <label for="label">
                    <input type="email" id="label" placeholder="" style=" background: transparent;">
                    <span>Enter E-mail id</span>
                    <div class="label_smallcta smallcta_btn_primary">
                      <img src="./assets/icons/arrow_forward_white.png" />
                    </div>
                  </label>


                  <div style="opacity: 0; color: #CC1F1F; font-size: 13px; font-family: Familjen Grotesk; font-weight: 400; line-height: 18.20px; word-wrap: break-word">
                    Error Message</div>
                </div>
              </div>
            </div>
          </div>
          <div class="ftrcontact_div">
            <div class="ftrcontact_innrdiv">
              <div class="ftrcontact_txt">Contact Us </div>
              <div class="clznm_div">
                <div class="clznm_txt">Vignan's Foundation for Science, Technology and Research <br />(Deemed to
                  be University), Vadlamudi, Guntur-522213</div>
                <div class="ftr_cntdetails">
                  <div class="ftr_cntdetails_txt">info@vignan.ac.in</div>
                  <div class="ftr_cntdetails_txt"> 0863-2344700 / 701 </div>
                </div>
              </div>
            </div>
            <div class="ftr_socialmediadivs">
              <img src="./assets/icons/Linkedin.png" />
              <img src="./assets/icons/Facebook.png" />
              <img src="./assets/icons/Instagram.png" />
              <img src="./assets/icons/youtube.png" />


            </div>
          </div>
        </div>
        <div class="ftr_row2">
          <div class="ftr_row2_cols">
            <div class="ftr_row2_col_hdr">Admission</div>
            <div class="ftr_row2_col_optsdiv">
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Apply Online</a>

                <!-- <div style="width: 1px; height: 0px; border: 1px rgba(0, 0, 0, 0) solid"></div> -->
              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">International Students</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Why Choose Us?</a>

              </div>
              <div style="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Announcements</a>
              </div>
              <div style="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Refund Policy</a>
              </div>
            </div>
          </div>

          <div class="ftr_row2_cols">
            <div class="ftr_row2_col_hdr">Student</div>
            <div class="ftr_row2_col_optsdiv">
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Wellness</a>

                <!-- <div style="width: 1px; height: 0px; border: 1px rgba(0, 0, 0, 0) solid"></div> -->
              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Pay Tuition Fee</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Examinations</a>

              </div>
              <div style="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Internship Portal</a>
              </div>
              <div style="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Slam Book</a>
              </div>
              <div style="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Outlook ( Access Mails)</a>
              </div>
              <div style="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">NCC</a>
              </div>
            </div>
          </div>

          <div class="ftr_row2_cols">
            <div class="ftr_row2_col_hdr">Accreditation</div>
            <div class="ftr_row2_col_optsdiv">
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">NAAC</a>

                <!-- <div style="width: 1px; height: 0px; border: 1px rgba(0, 0, 0, 0) solid"></div> -->
              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">NBA</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">DSIR Certified</a>

              </div>


            </div>
          </div>

          <div class="ftr_row2_cols">
            <div class="ftr_row2_col_hdr">OTHERS</div>
            <div class="ftr_row2_col_optsdiv">
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Blogs</a>

                <!-- <div style="width: 1px; height: 0px; border: 1px rgba(0, 0, 0, 0) solid"></div> -->
              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Vignan Online</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">MHRD- NMEICT</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">ARIIA</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Communities</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Feedback</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Careers</a>

              </div>


            </div>
          </div>


          <div class="ftr_row2_cols">
            <div class="ftr_row2_col_hdr">internal portals</div>
            <div class="ftr_row2_col_optsdiv">
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">DEO</a>

                <!-- <div style="width: 1px; height: 0px; border: 1px rgba(0, 0, 0, 0) solid"></div> -->
              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Faculty</a>

              </div>
              <div class="ftr_row2_col_opts">
                <a href="#" class="ftr_row2_col_optstxt">Student</a>

              </div>


            </div>
          </div>






        </div>
        <div class="copyrightsdiv">
          <div class="copyrights_txt">Copyrights © 2023 Vignan University. All rights reserved.</div>

          <div class="privacypolicy_div">
            <a href="#" class="privacypolicytxt">Privacy Policy</a>
          </div>

        </div>
      </div>


    </div>
  </div>
  <!-- footer ends -->

</body>

</html>