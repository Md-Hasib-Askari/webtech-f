function validateForm() {
    
    var empId = document.getElementById("emp_id").value;
    var empPass = document.getElementById("emp_pass").value;
    var errorMessage = document.getElementById("error-message");

    
    errorMessage.innerHTML = "";

   
    if (empId === "") {
        errorMessage.innerHTML = "Employee ID cannot be empty!";
        return false;  
    }   

    
    if (empPass === "") {
        errorMessage.innerHTML = "Password cannot be empty!";
        return false;  
    }

    
    if (empPass.length < 8) {
        errorMessage.innerHTML = "Password must be at least 6 characters long!";
        return false;  
    }

    
    return true;
}
