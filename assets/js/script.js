// Const
const addNewBtn = document.getElementById("addNew");
const editNewBtn = document.querySelectorAll("#editNew");
const addNewModalClose = document.querySelectorAll(".addNewModalClose");
const addNewModel = document.getElementById("addNewModel");
const editNewModel = document.getElementById("editNewModel");
const firstname = document.getElementById("editfirstname");
const lastname = document.getElementById("editlastname");
const phonenumber = document.getElementById("editPhoneNumber");
const emailaddress = document.getElementById("editEmailAddress");
const description = document.getElementById("editDescription");
const contactFormEdit = document.getElementById("contactFormEdit");


addNewBtn.addEventListener('click', () => { // Open Add Modal
    addNewModel.style.display = "unset";
})

editNewBtn.forEach(btn => { // Open Edit Modal
    btn.addEventListener("click", function () {
        editNewModel.style.display = "unset";
        let passedArray = JSON.parse(btn.getAttribute('data'));
        firstname.value = lastname.value = passedArray.name;
        phonenumber.value = passedArray.phone;
        emailaddress.value = passedArray.email;
        description.value = passedArray.description;
        contactFormEdit.attributes.action.value += `?id=${passedArray.id}`
    })
});
addNewModalClose.forEach(button => { // Close All Modal
    button.addEventListener("click", function() {
        addNewModel.style.display = "none";
        editNewModel.style.display = "none";
    });
});
