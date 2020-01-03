function userCheck () {
    let userInput = document.getElementById("username").value;

    if (userInput == "001") {
        window.location.href = "../public/index.php";

    } else if (userInput == "002") {
        window.location.href = "../public/admin.php";
    } else {
        document.getElementById("username").value = '';
        window.alert("User ID is not valid");
    }
}