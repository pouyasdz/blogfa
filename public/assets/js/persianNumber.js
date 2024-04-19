const allElement = document.querySelectorAll(".persian-num");

allElement.forEach(element => {
    const main = element.innerHTML;
    const newContent = Number(main).toLocaleString("fa-IR");
    element.innerHTML = newContent
})