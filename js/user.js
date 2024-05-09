gsap.from(".sidebar", { duration: 1, x: -200, ease: "power2.out" });
gsap.from(".content", { duration: 1, opacity: 0, delay: 1 });

document.getElementById("publicar").addEventListener("click", function() {
    gsap.from(".post-area", { duration: 0.5, y: -50, opacity: 0, ease: "power2.out" });
});
