// Const
const contacts = document.querySelector("#contacts");
const searchField = document.querySelector("#searchField");
const addNewBtn = document.getElementById("addNew");
const addNewModalClose = document.querySelectorAll(".addNewModalClose");
const firstname = document.getElementById("firstname");
const lastname = document.getElementById("lastname");
const phonenumber = document.getElementById("phonenumber");
const emailaddress = document.getElementById("emailaddress");
const description = document.getElementById("grid-description");
const contactFormSubmit = document.getElementById("contactFormSubmit");
const addNewModel = document.getElementById("addNewModel");
// const pagesNumber = document.getElementById("pagesNumber");
const contactForm = document.getElementById("contactForm");
const toggleMenu = document.getElementById("toggleMenu");
let addNewModelOpen = false;   //Indicates the state (open/close) of Add New Model
// let currentPage = pagesNumber.firstElementChild;  //Indicate pagination of the current table page


addNewBtn.addEventListener('click', () => {
    addNewModel.style.display = "unset";
})
addNewModalClose.forEach(button => {
    button.addEventListener("click", function() {
        addNewModel.style.display = "none";
    });
});
