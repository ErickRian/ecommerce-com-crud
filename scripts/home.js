const Dropdown = document.getElementById("dropdown-container")
const Menu = document.getElementById("menu")
const Close = document.getElementById("close")

Menu.addEventListener("click", () => {
    Dropdown.style.animation = "dropdownopen 0.2s ease-in-out forwards";
})

Close.addEventListener("click", () => {
    Dropdown.style.animation = "dropdownclose 0.2s ease-in-out forwards";
})

/* Slide de Produtos */

const slideItems = document.querySelectorAll(".item-container");

slideItems.forEach(slider => {
    


slider.children[slider.children.length - 1].addEventListener("click", () => {
    slider.scrollBy(220, 0);
});

slider.children[0].addEventListener("click", () => {
    slider.scrollBy(-220, 0);
});

});
