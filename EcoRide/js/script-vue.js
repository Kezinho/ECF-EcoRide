const checkboxElectric = document.getElementById("electric-car");
const checkboxPrice = document.getElementById("lowest-price");
const checkboxStars = document.getElementById("five-stars");
const logo = document.querySelector(".logo");

const allTrips = document.querySelectorAll("section[class^='trips']");

logo.addEventListener("click", () => {
  window.location.href = "/index.html";
});

function filterTrips() {
  allTrips.forEach((trip) => {
    trip.style.display = "none";

    const isElectric = trip.querySelector(".leaf") !== null;
    const isCheapest = trip.classList.contains("trips-3");
    const isFiveStars = trip.classList.contains("trips-2");

    if (
      (checkboxElectric.checked && isElectric) ||
      (checkboxPrice.checked && isCheapest) ||
      (checkboxStars.checked && isFiveStars) ||
      (!checkboxElectric.checked &&
        !checkboxPrice.checked &&
        !checkboxStars.checked)
    ) {
      trip.style.display = "flex";
    }
  });
}

checkboxElectric.addEventListener("change", filterTrips);
checkboxPrice.addEventListener("change", filterTrips);
checkboxStars.addEventListener("change", filterTrips);
