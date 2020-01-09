function userCheck () {

    // this is the java for the login page, this validates the input against either 1 for a normal user
    // or 2 for an admin

    let userInput = document.getElementById("username").value;

    if (userInput == "1") {
        window.location.href = "../public/index.php";
        alert();
    } else if (userInput == "2") {
        window.location.href = "../public/admin.php";
        alert();
    } else {
        document.getElementById("username").value = '';
        window.alert("User ID is not valid");
    }
}