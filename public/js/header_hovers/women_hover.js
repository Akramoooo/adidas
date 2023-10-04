const womenBtnHover = document.querySelector(".women-btn");
const womenBtnInfo = document.querySelector(".women-btn-info");

womenBtnHover.addEventListener("mouseenter", function () {
    Object.assign(womenBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "430px",
        flexDirection:"row"

    });
});

womenBtnHover.addEventListener("mouseleave", function () {
    womenBtnInfo.style.display = "none";
});

womenBtnInfo.addEventListener("mouseenter", function () {
    Object.assign(womenBtnInfo.style, {
        display: "flex",
        position: "absolute",
        top: "88px",
        height: "430px",
        flexDirection:"row"

    });
});

womenBtnInfo.addEventListener("mouseleave", function () {
    womenBtnInfo.style.display = "none";
});