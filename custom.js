let navbar = document.getElementById("navbar");
let stickybtn = document.getElementById("stickybtn");
window.addEventListener("scroll", () => {
  if (window.scrollY > 200) {
    navbar.classList.add("bg-color");
    stickybtn.style.display = "block";
  } else {
    navbar.classList.remove("bg-color");
    stickybtn.style.display = "none";
  }
});
stickybtn.onclick = () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
};
