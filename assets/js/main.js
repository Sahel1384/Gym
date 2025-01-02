/**
 *
 */

let sidebtn = document.querySelector(".toggle-sidebar-btn");
let body = document.querySelector("body");
sidebtn.addEventListener("click", () => {
  body.classList.toggle("toggle-sidebar");
});

let moonbtn = document.getElementById("moonbtn");
moonbtn.addEventListener("click", () => {
  body.classList.toggle("dark");
});
