{
    // ハンバーガーメニュー
    const h = document.getElementById("hamburger");
    const b = document.getElementById("bar-area");
    b.addEventListener("click", () => {
        h.classList.toggle("on");
    });
}
