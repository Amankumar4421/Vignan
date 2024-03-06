<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Image Carousel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Familjen+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
      
      body {
        margin: 0;
        padding: 0;
        background-color: #f2f1ed !important;
        font-family: DM Serif Display, -apple-system, Roboto, Helvetica,sans-serif;
      }
      .carousel {
        width: 60%;
        overflow: hidden;
      }

      .carousel-container {
        height: 100%;
        display: flex;
        align-items: end;
        transition: transform 1.5s ease;
      }
      .carousel-item{
        display: flex;
        align-items: end;
        height: 500px;
        padding-right: 20px;
      }

      .carousel-item img {
        width: 400px;
        height: 300px;
        transition: height 1.5s ease;
      }

      .carousel-item.active img {
        width: 400px;
        height: 550px;
      }

      .carousel-controls {
        display: flex;
        justify-content: center;
        margin-top: 10px;
        gap: 10px;
        margin-left: 200px;
      }

      .main {
        margin-top: 100px;
        margin-left: 100px;
        height: 600px;
        display: flex;
        flex-direction: row-reverse;
        justify-content: center;
      }

      .carousel1 {
        width: 40%;
        overflow: hidden;
        /* margin: 0 auto; */
      }

      .carousel-container1 {
        display: flex;
        align-items: end;
        transition: transform 1.5s ease;
      }

      .carousel-item1 {
        width: 100%;
        max-width: 480px;
        /* text-align: center; */
        /* display: none; */
      }

      .carousel-item1.active {
        display: block;
      }

      /* Add transition effect for smooth slide changes */
      .carousel-item1 {
        opacity: 0;
        transition: opacity 1.5s ease;
      }

      .carousel-item1.active {
        opacity: 1;
      }

      .carousel-controls1 {
        display: flex;
        justify-content: end;
      }

      .carousel-controls1 button {
        margin: 0 5px;
        cursor: pointer;
      }

      .div {
        align-self: stretch;
        display: flex;
        max-width: 600px;
        flex-direction: column;
        font-size: 16px;
        color: var(--Colors-Text-Color, #000);
        font-weight: 400;
        text-align: start;
      }
      .div-2 {
        text-transform: uppercase;
        width: 100%;
        font: 500 25px/100% Familjen Grotesk, -apple-system, Roboto, Helvetica,
          sans-serif;
      }
      .div-3 {
        margin-top: 25px;
        width: 100%;
        font: 61px/61px DM Serif Display, -apple-system, Roboto, Helvetica,
          sans-serif;
      }
      .div-4 {
        font-family: Familjen Grotesk, sans-serif;
        line-height: 140%;
        text-transform: uppercase;
        margin-top: 49px;
        width: 100%;
      }
      .div-5 {
        margin-top: 31px;
        width: 130%;
        font: 31px/37px DM Serif Display, -apple-system, Roboto, Helvetica,
          sans-serif;
      }
      .div-6 {
        line-height: 22px;
        margin-top: 31px;
        width: 130%;
      }
      .div-7 {
        justify-content: center;
        align-self: start;
        display: flex;
        margin-top: 31px;
        gap: 0px;
        color: var(--Colors-Buttons-Primary-Button, #992e00);
        white-space: nowrap;
        line-height: 140%;
        /* padding: 0 20px; */
      }
      .div-8 {
        font-family: Familjen Grotesk, sans-serif;
        flex-grow: 1;
      }
      .img {
        aspect-ratio: 1;
        object-fit: auto;
        object-position: center;
        width: 16px;
        align-self: start;
        margin-top: 6px;
      }
      .div-9 {
        background-color: var(--Colors-Buttons-Primary-Button, #992e00);
        width: 90px;
        height: 1px;
      }
      .btn {
        width: 40px;
        height: 40px;
        border-radius: 300px;
        color: white;
        background-color: #992E00;
        border: 0px;
      }
      .progressbar2 {
        width: 80%;     
      }
    </style>
  </head>
  <body>
    <div class="main">
      <div class="carousel">
        <div class="carousel-container">
          <div class="carousel-item active">
            <img src="image1.png" alt="Slide 1"/>
          </div>
          <div class="carousel-item">
            <img src="image1.png" alt="Slide 2"/>
          </div>
          <div class="carousel-item">
            <img src="image1.png" alt="Slide 3"/>
          </div>
        </div>
      </div>

      <div class="carousel1">
        <div class="carousel-container1">
          <div class="carousel-item1 active">
            <div class="div">
              <div class="div-2">NEWS-1</div>
              <div class="div-3">What's Up in Department.</div>
              <div class="div-4">04, Dec, 2023</div>
              <div class="div-5">
                Vignan Students National Level Yoga Championship
              </div>
              <div class="div-6">
                Lorem ipsum dolor sit amet consectetur. Amet risus massa nunc
                commodo. Diam ac sed nec dolor sit amet sit adipiscing massa.
                Amet risus massa nunc commodo. Diam ac sed nec dolor sit amet
                sit adipiscing massa.
              </div>
              <div class="div-7">
                <div class="div-8">Read More</div>
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae4eb7400aa0d14efca9b1b64f65d3f06e7b991d2c0119cd6d90a2a1e0ac820e?apiKey=6e30b4624a33470c932d804c931f26a1&"
                  class="img"
                />
              </div>
              <div class="div-9"></div>
            </div>
          </div>
          <div class="carousel-item1">
            <div class="div">
              <div class="div-2">NEWS-2</div>
              <div class="div-3">What's Up in Department.</div>
              <div class="div-4">04, Dec, 2023</div>
              <div class="div-5">
                Vignan Students National Level Yoga Championship
              </div>
              <div class="div-6">
                Lorem ipsum dolor sit amet consectetur. Amet risus massa nunc
                commodo. Diam ac sed nec dolor sit amet sit adipiscing massa.
                Amet risus massa nunc commodo. Diam ac sed nec dolor sit amet
                sit adipiscing massa.
              </div>
              <div class="div-7">
                <div class="div-8">Read More</div>
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae4eb7400aa0d14efca9b1b64f65d3f06e7b991d2c0119cd6d90a2a1e0ac820e?apiKey=6e30b4624a33470c932d804c931f26a1&"
                  class="img"
                />
              </div>
              <div class="div-9"></div>
            </div>
          </div>
          <div class="carousel-item1">
            <div class="div">
              <div class="div-2">NEWS-3</div>
              <div class="div-3">What's Up in Department.</div>
              <div class="div-4">04, Dec, 2023</div>
              <div class="div-5">
                Vignan Students National Level Yoga Championship
              </div>
              <div class="div-6">
                Lorem ipsum dolor sit amet consectetur. Amet risus massa nunc
                commodo. Diam ac sed nec dolor sit amet sit adipiscing massa.
                Amet risus massa nunc commodo. Diam ac sed nec dolor sit amet
                sit adipiscing massa.
              </div>
              <div class="div-7">
                <div class="div-8">Read More</div>
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/ae4eb7400aa0d14efca9b1b64f65d3f06e7b991d2c0119cd6d90a2a1e0ac820e?apiKey=6e30b4624a33470c932d804c931f26a1&"
                  class="img"
                />
              </div>
              <div class="div-9"></div>
            </div>
          </div>
        </div>
        <div class="carousel-controls">
          <button class="btn" onclick="prevSlide()"><img src="arrow_back_white.png" alt=""></button>
          <button class="btn" onclick="nextSlide()"><img src="arrow_forward_white.png" alt=""></button>
        </div>
        <progress id="progress" class="progressbar2" value="10" max="100"></progress>
      </div>
    </div>

    <script>
      const progress = document.querySelector("#progress");
      const container = document.querySelector(".carousel-container");
      const items = document.querySelectorAll(".carousel-item");
      let currentIndex = 0;

      function showSlide(index) {
        currentIndex = index;
        const offset = -currentIndex * items[0].offsetWidth;
        container.style.transform = `translateX(${offset}px)`;
        items.forEach((item) => {
          item.classList.remove("active");
        });
        items[currentIndex].classList.add("active");
      }

      const container1 = document.querySelector(".carousel-container1");
      const items1 = document.querySelectorAll(".carousel-item1");
      let currentIndex1 = 0;

      function showSlide1(index) {
        currentIndex1 = index;
        const offset = -currentIndex1 * items1[0].offsetWidth;
        container1.style.transform = `translateX(${offset}px)`;
        items1.forEach((item, i) => {
          if (i === index) {
            item.classList.add("active");
          } else {
            item.classList.remove("active");
          }
        });
        progress.value = (currentIndex1+1) * 33.33;
        // console.log(currentIndex1);
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % items.length;
        showSlide(currentIndex);

        currentIndex1 = (currentIndex1 + 1) % items1.length;
        showSlide1(currentIndex1);
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        showSlide(currentIndex);

        currentIndex1 = (currentIndex1 - 1 + items1.length) % items1.length;
        showSlide1(currentIndex1);
      }

      
      setInterval(nextSlide, 3000);
    </script>
  </body>
</html>
