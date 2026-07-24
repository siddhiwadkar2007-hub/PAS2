// ===============================
// Sidebar Toggle
// ===============================

const sidebar = document.querySelector(".sidebar");
const mainContent = document.querySelector(".main-content");
const sidebarToggle = document.getElementById("sidebarToggle");

if (sidebar && mainContent && sidebarToggle) {

    sidebarToggle.addEventListener("click", function () {

        sidebar.classList.toggle("closed");
        mainContent.classList.toggle("full");

    });

}

const themeBtn = document.getElementById("themeToggle");
const themeIcon = document.getElementById("themeIcon");

themeBtn.addEventListener("click", () => {

    document.body.classList.toggle("dark-theme");

    if(document.body.classList.contains("dark-theme")){

        themeIcon.classList.remove("bi-moon-fill");
        themeIcon.classList.add("bi-sun-fill");

    }else{

        themeIcon.classList.remove("bi-sun-fill");
        themeIcon.classList.add("bi-moon-fill");

    }

});

// ===============================
// Current Date
// ===============================

const currentDate = document.getElementById("currentDate");

if (currentDate) {

    const options = {
        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric"
    };

    currentDate.innerHTML = new Date().toLocaleDateString("en-IN", options);

}
/* ==========================================
   EDIT USER POPUP
========================================== */

const editModal = document.getElementById("editModal");
const editContent = document.getElementById("editContent");

if (!editModal || !editContent) {

    console.warn("Edit modal elements not found on this page.");

}
else {

/* Open Popup */

document.querySelectorAll(".editUserBtn").forEach(button => {

    button.addEventListener("click", function () {

        let userId = this.dataset.id;

        editModal.style.display = "flex";

        editContent.innerHTML = `
            <div class="loading">
                <i class="bi bi-arrow-repeat"></i>
                Loading...
            </div>
        `;

        fetch("edit_user.php?id=" + userId)
        .then(response => response.text())
        .then(data => {

            editContent.innerHTML = data;

        });

    });

});

/* Close Popup */

document.querySelectorAll(".closeModal").forEach(button => {

    button.addEventListener("click", function(){

        editModal.style.display = "none";

    });

});

/* Close when clicking outside */

window.addEventListener("click", function(e){

    if(e.target == editModal){

        editModal.style.display = "none";

    }

});
/* ==========================================
   UPDATE USER AJAX
========================================== */

document.addEventListener("submit", function(e){

    if(e.target.id=="editUserForm"){

        e.preventDefault();

        let formData = new FormData(e.target);

        fetch(window.location.origin +
        "/practical-assessment-system/modules/admin/edit_user.php?id=" +
        formData.get("user_id"),
        {

            method:"POST",

            body:formData

        })

        .then(res=>res.text())

        .then(data=>{

            if(data.trim()=="SUCCESS"){

                alert("User Updated Successfully");

                document.getElementById("editModal").style.display="none";

                location.reload();

            }
            else{

                document.getElementById("editContent").innerHTML=data;

            }

        });

    }

});

}