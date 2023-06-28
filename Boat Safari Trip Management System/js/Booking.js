const form = document.getElementById("form");
const FirstName = document.getElementById("First Name");
const LastName = document.getElementById("Last Name");
const PhoneNo = document.getElementById("Phone No");
const Email = document.getElementById("Email");
const Country = document.getElementById("Country");
const WhatTypeOfAServiceDoYouNeed = document.getElementById(
  "What Type Of A Service Do You Need"
);
const NoOfAdults = document.getElementById("No Of Adults");
const ChildrenWithTheirAges = document.getElementById(
  "Children With Their Ages(Below 12 years"
);
const WhatIsYourBudgetPerNightPerPersonForAccommodationWithBreakfast =
  document.getElementById(
    "What Is Your Budget Per Night Per Person For Accommodation With Breakfast"
  );

form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  //get the values from the inputs
  const FirstNameValue = FirstName.value.trim();
  const LastNameValue = LastNAme.value.trim();
  const PhoneNoValue = PhoneNo.value.trim();
  const EmailValue = Email.value.trim();
  const CountryValue = Country.value.trim();
  const NoOfAdultsValue = NoOfAdults.value.trim();
  const ChildrenWithTheirAgesValue = ChildrenWithTheirAges.value.trim();
  const WhatIsYourBudgetPerNightPerPersonForAccommodationWithBreakfastValue =
    WhatIsYourBudgetPerNightPerPersonForAccommodationWithBreakfast.value.trim();

  if (FirstNameValue === "") {
    //show error
    //add error class
    setErrorFor(FirstName, "First Name cannot be blank");
  } else {
    //add success class
    setSuccessFor(FirstName);
  }

  if (LastNameValue === "") {
    setErrorFor(Email, "Last Name cannot be blank");
  } else {
    setSuccessFor(LastName);
  }

  if (PhoneNoValue === "") {
    setErrorFor(PhoneNo, "Phone No cannot be blank");
  } else {
    setSuccessFor(PhoneNo);
  }

  if (EmailValue === "") {
    setErrorFor(Email, "Email cannot be blank");
  } else {
    setSuccessFor(Email);
  }

  if (CountryValue === "") {
    setErrorFor(Country, "country cannot be blank");
  } else {
    setSuccessFor(Country);
  }

  if (NoOfAdultsValue === "") {
    setErrorFor(NoOfAdults);
  } else {
    setSuccessFor(NoOfAdults);
  }

  if (ChildrenWithTheirAgesValue === "") {
    setErrorFor(ChildrenWithTheirAges);
  } else {
    setSuccessFor(ChildrenWithTheirAges);
  }

  if (
    WhatIsYourBudgetPerNightPerPersonForAccommodationWithBreakfastValue === ""
  ) {
    setErrorFor(WhatIsYourBudgetPerNightPerPersonForAccommodationWithBreakfast);
  } else {
    setSuccessFor(
      WhatIsYourBudgetPerNightPerPersonForAccommodationWithBreakfast
    );
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement; //.form-control
  const small = formControl.querySelector("small");

  //add error message inside small
  small.innerText = message;

  //add error class
  formControl.className = "fomr-control error";
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-control success";
}

form.addEventListener('submit', (e) => {
  e.preventDefault()
})

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
