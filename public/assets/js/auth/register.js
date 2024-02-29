const inputController = document.querySelector("#input-controller");
const controllerBtn = inputController.children[1];
const controllerInput = inputController.children[0];

const btnVariant = {
    visible: "ri-eye-line",
    unvisible: "ri-eye-off-line",
};

// focus, focusout
controllerInput.addEventListener("focus", () => {
    inputController.classList.remove("border-gray-200");
    inputController.classList.add("border-blue-500");
});
controllerInput.addEventListener("focusout", () => {
    inputController.classList.remove("border-blue-500");
    inputController.classList.add("border-gray-200");
});

controllerBtn.addEventListener("click", () => {
    const inputType = controllerInput.type;
    if (inputType == "password") {
        controllerInput.type = "text";
        controllerBtn.firstChild.classList.remove(btnVariant.visible);
        controllerBtn.firstChild.classList.add(btnVariant.unvisible);
    } else {
        controllerInput.type = "password";
        controllerBtn.firstChild.classList.remove(btnVariant.unvisible);
        controllerBtn.firstChild.classList.add(btnVariant.visible);
    }
});
