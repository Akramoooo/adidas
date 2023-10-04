const saleBtnHover = document.querySelector(".sale-btn");
const saleBtnInfo = document.querySelector(".sale-btn-info");

saleBtnHover.addEventListener("mouseenter", function () {
    Object.assign(saleBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "300px",
        flexDirection:"row"

    });
});

saleBtnHover.addEventListener("mouseleave", function () {
    saleBtnInfo.style.display = "none";
});

saleBtnInfo.addEventListener("mouseenter", function () {
    Object.assign(saleBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "300px",
        flexDirection:"row"

    });
});

saleBtnInfo.addEventListener("mouseleave", function () {
    saleBtnInfo.style.display = "none";
});