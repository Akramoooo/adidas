const menBtnHover = document.querySelector(".men-btn");
const menBtnInfo = document.querySelector(".men-btn-info");

menBtnHover.addEventListener("mouseenter", function () {
    Object.assign(menBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "430px",
        flexDirection:"row"

    });
});

menBtnHover.addEventListener("mouseleave", function () {
    menBtnInfo.style.display = "none";
});

menBtnInfo.addEventListener("mouseenter", function () {
    Object.assign(menBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "430px",
        flexDirection:"row"
    });
});

menBtnInfo.addEventListener("mouseleave", function () {
    menBtnInfo.style.display = "none";
});


