var params = new URLSearchParams(window.location.search);
var error = params.get("error");

if (error == "incorrectCredentials") {
    var Section = document.getElementById("error");
    if (Section) {
        var Message = document.createElement("label");
        Message.textContent = "You have entered an incorrect username and/or password.";
        Message.style.color = "red";
        Section.appendChild(Message);

        var br1 = document.createElement("br");
        var br2 = document.createElement("br");
        Message.appendChild(br1);
        Message.appendChild(br2);
    }
}
