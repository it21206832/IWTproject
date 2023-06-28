let searchBtn = document.querySelector("#search-btn");
let searchBar = document.querySelector(".search-bar-container");
let menuBtn = document.querySelector("#menu-bar");
let navBar = document.querySelector(".navbar");
let formBtn = document.querySelector("#feedback-btn");
let feedbackForm = document.querySelector(".feedback-form-container");
let formClose = document.querySelector("#form-close");
let videoBtn = document.querySelectorAll(".vid-btn");

window.onscroll = () => {
  searchBtn.classList.remove("fa-times");
  searchBar.classList.remove("active");
  menuBtn.classList.remove("fa-times");
  navBar.classList.remove("active");
};

searchBtn.addEventListener("click", () => {
  searchBtn.classList.toggle("fa-times");
  searchBar.classList.toggle("active");
});

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("fa-times");
  navBar.classList.toggle("active");
});

formBtn.addEventListener("click", () => {
  feedbackForm.classList.add("active");
});

formClose.addEventListener("click", () => {
  feedbackForm.classList.remove("active");
});

videoBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    document.querySelector(".controls .active").classList.remove("active");
    btn.classList.add("active");
    let src = btn.getAttribute("data-src");
    document.querySelector("#video-slider").src = src;
  });
});
