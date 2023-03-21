document
  .querySelector("#trigger-overlay")
  .addEventListener("click", function () {
    document.querySelector(".overlay").classList.add("open");
  });
document.querySelector("#close-overlay").addEventListener("click", function () {
  document.querySelector(".overlay").classList.remove("open");
});
/* document.querySelector("#closeitem").addEventListener("click", function () {
  document.querySelector(".overlay").classList.remove("open");
}); */
