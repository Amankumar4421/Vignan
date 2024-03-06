const items = document.querySelectorAll(".slide");
const control = document.querySelector(".controls");

for (let i = 0; i < items.length; i++) {
  const progressBarContainer = document.createElement("div");
  progressBarContainer.className = "progress-bar";

  const progressBar = document.createElement("div");
  progressBar.className = "progress";

  progressBarContainer.appendChild(progressBar);
  control.appendChild(progressBarContainer);
}
let currentIndex = 0;

const pb = document.querySelectorAll(".progress-bar");
setTimeout(function () {pb[0].classList.add("active");}, 1);


function showSlide(index) {
  currentIndex = index;
  items.forEach((item) => {
    item.classList.remove("active");
  });
  items[currentIndex].classList.add("active");

  pb.forEach((item) => {
    item.classList.remove("active");
  });
  pb[currentIndex].classList.add("active");
}

function nextSlide() {
  currentIndex = (currentIndex + 1) % items.length;
  showSlide(currentIndex);
}

function prevSlide() {
  currentIndex = (currentIndex - 1 + items.length) % items.length;
  showSlide(currentIndex);
}

const progress = document.querySelectorAll(".progress");



let id;

const toggleButton = document.createElement("button");
toggleButton.className = "toggle-btn";
toggleButton.innerHTML = '<i class="fas fa-play"></i>';

function toggleState() {
  if (toggleButton.innerHTML === '<i class="fas fa-pause"></i>') {
    toggleButton.innerHTML = '<i class="fas fa-play"></i>';
    clearInterval(id);
    pb[currentIndex].childNodes[0].style.transition = 'none';
  } else {
    toggleButton.innerHTML = '<i class="fas fa-pause"></i>';
    if(id){
    nextSlide();
    pb[currentIndex].childNodes[0].style.transition = 'width 5s linear';
    }
    id = setInterval(nextSlide,5000);
  }
}

toggleButton.addEventListener("click", toggleState);

toggleState();

control.appendChild(toggleButton);


// const pro = document.querySelectorAll('.progress-bar');
// for (let i = 0; i < pro.length; i++) {
//   const box = pro[i];
//   box.addEventListener('click', () => {
//     showSlide(i);
//   });
// }