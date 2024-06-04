// size surat
function checkHeightLetter() {
    const parentElem = document.getElementsByClassName("surat")[0];
    const parentBreakElem = document.getElementsByClassName("page-break")[0];
    const width = parentElem.clientWidth;
    const height = parentElem.clientHeight;
    const breakHeight = (width * 29.7) / 21;
    const count = Math.floor(height / breakHeight);
    // remove semua pembatas
    for (let item of parentBreakElem.children) {
        parentBreakElem.removeChild(item);
    }
    // create pembatas baru
    for (let index = 1; index <= count; index++) {
        const breakItem = document.createElement("div");
        breakItem.classList.add("page-break-item");
        breakItem.style.height = `${breakHeight * count}px`;
        parentBreakElem.appendChild(breakItem);
    }
}

checkHeightLetter();
const config = { attributes: true, childList: true, subtree: true };
new MutationObserver((mutationList, observer) => {
    checkHeightLetter();
}).observe(document.getElementsByClassName("surat")[0], config);
