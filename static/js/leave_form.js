function submitForm() {
    const emp_id = document.getElementById("emp_id");
    const emp_name = document.getElementById("emp_name");
    const leave_type = document.getElementById("leave_type");
    const from_date = document.getElementById("leave_from");
    const to_date = document.getElementById("leave_to");
    const reason = document.getElementById("reason");
    const error = document.getElementById("error_message");
    const success_message = document.getElementById("success_message");

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../controllers/leave_form.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    const data = {
        emp_id: emp_id.value,
        emp_name: emp_name.value,
        leave_type: leave_type.value,
        leave_from: from_date.value,
        leave_to: to_date.value,
        reason: reason.value,
    };
    xhr.send(JSON.stringify(data));

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            const response = JSON.parse(xhr.responseText);
            error.innerHTML = "";
            success_message.innerHTML = "";
            if (response.status === "success") {
                success_message.innerHTML = `<p>${response.message}</p>`;
            } else {
                let message = "";
                for (const error of response.message) {
                    message += `<p>* ${error}</p>`;
                }
                error.innerHTML = message;
            }
        }
    };
}

addEventListener("submit", (e) => {
    e.preventDefault();
    submitForm();
});
