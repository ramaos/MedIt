const popupOverlay = document.querySelector(".popup-overlay");
const popupClose = document.querySelector(".popup-close");
console.log(popupClose);
popupClose.addEventListener("click", function () {
  popupOverlay.style.display = "none";
});
