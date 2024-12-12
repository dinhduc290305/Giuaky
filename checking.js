function validateForm(event) {
    const fullName = document.getElementById("full_Name").value.trim();
    const dob = document.getElementById("dob").value;
    const genderMale = document.getElementById("male").checked;
    const genderFemale = document.getElementById("female").checked;
    const hometown = document.getElementById("hometown").value.trim();
    const group = document.getElementById("group").value.trim();
        if (!fullName) {
            alert("Họ và tên không được để trống.");
            event.preventDefault();
            return;
        }
        if (!dob) {
            alert("Ngày sinh không được để trống.");
            event.preventDefault();
            return;
        }
        if (!genderMale && !genderFemale) {
            alert("Vui lòng chọn giới tính.");
            event.preventDefault();
            return;
        }
        if (!hometown) {
            alert("Địa chỉ không được để trống.");
            event.preventDefault();
            return;
        }
        if (!group) {
            alert("Nhóm không được để trống.");
            event.preventDefault();
            return;
        }
}
document.addEventListener("DOMContentLoaded", function () {
const form = document.getElementById("form");
form.addEventListener("submit", validateForm);
});