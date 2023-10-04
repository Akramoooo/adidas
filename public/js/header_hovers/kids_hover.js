const kidsBtnHover = document.querySelector(".kids-btn");
const kidsBtnInfo = document.querySelector(".kids-btn-info");

kidsBtnHover.addEventListener("mouseenter", function () {
    Object.assign(kidsBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "430px",
        flexDirection:"row"

    });
});

kidsBtnHover.addEventListener("mouseleave", function () {
    kidsBtnInfo.style.display = "none";
});

kidsBtnInfo.addEventListener("mouseenter", function () {
    Object.assign(kidsBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "430px",
        flexDirection:"row"

    });
});

kidsBtnInfo.addEventListener("mouseleave", function () {
    kidsBtnInfo.style.display = "none";
});