function initButtons() {
  document.querySelectorAll(".page-guides button").forEach((button) => {
    button.addEventListener("click", (element) => {

      const target =
        element.target.attributes["data-thetarget"].textContent;
        console.log('target', target)
      const targetDisplay = document.querySelector(target).style.display;

      if (!targetDisplay || targetDisplay === "none") {
        document.querySelector(target).style.display = "block";
      } else {
        document.querySelector(target).style.display = "none";
      }
    });
  });
}

setTimeout(() => {
  initButtons();
}, 500);
