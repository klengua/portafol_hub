window.addEventListener("scroll", function() {
    var head = this.document.querySelector(".head");
    head.classList.toggle("sticky", window.scrollY > 0);
})