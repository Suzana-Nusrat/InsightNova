console.log("InsightNova AI loaded successfully.");

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".glass-card");

    cards.forEach(card => {
        card.addEventListener("mouseenter", () => {
            card.style.transform = "translateY(-10px)";
        });

        card.addEventListener("mouseleave", () => {
            card.style.transform = "translateY(0)";
        });
    });
});