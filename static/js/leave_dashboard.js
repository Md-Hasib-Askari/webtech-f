const setApprove = (id) => {
    window.location.href = `leave_dashboard.php?action=approve&emp_id=${id}`;
};

const setReject = (id) => {
    window.location.href = `leave_dashboard.php?action=reject&emp_id=${id}`;
};

const viewDetails = (id) => {
    const xhr = new XMLHttpRequest();
    xhr.open(
        "GET",
        `../controllers/leave_dashboard.php?action=view&emp_id=${id}`,
        true
    );

    xhr.onload = () => {
        if (xhr.status === 200) {
            const res = JSON.parse(xhr.responseText);
            const details = document.getElementById("details");
            details.innerHTML = `
                <h2>Application Details</h2>
                <p><strong>Employee ID:</strong> ${res.emp_id}</p>
                <p><strong>Employee Name:</strong> ${res.emp_name}</p>
                <p><strong>Leave Type:</strong> ${res.leave_type}</p>
                <p><strong>Start Date:</strong> ${res.start_date}</p>
                <p><strong>End Date:</strong> ${res.end_date}</p>
                <p><strong>Reason:</strong> ${res.reason}</p>
                <p><strong>Status:</strong> ${res.status}</p>
            `;
        }
    };

    xhr.send();
};
