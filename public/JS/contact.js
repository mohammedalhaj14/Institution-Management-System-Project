function contact() {
    let msg = document.getElementById("message").value;
    let clientEmail = document.getElementById("email").value;
    let clientName = document.getElementById("name").value;
    if (msg == "" && clientEmail == "" && clientName == "") {
    alert("Please Fill All The Required Fields!");
    }
}
