function clearBlog() {
    var result = confirm('Do you want to proceed?');
    if (result) {
        document.getElementById("blogForm").reset();
    }
}

var form = document.getElementById("blogForm");
form.addEventListener("submit", function(event) {
    var title = document.getElementById("inputTitle").value;
    var content = document.getElementById("inputBlog").value;
    var date = document.getElementById("inputDate").value; 

    if ((title == "") || (content == "") || (date == "")) {
        var Section = document.getElementById("error");
        event.preventDefault();

        if (!Section.hasChildNodes()) {
            var Message = document.createElement("label");
            Message.textContent = "You have to fill in all the fields.";
            Message.style.color = "red";
            Section.appendChild(Message);

            var br1 = document.createElement("br");
            var br2 = document.createElement("br");
            Message.appendChild(br1);
            Message.appendChild(br2);
        }
    }

    // setting the border color to red
    if (title == ""){
        var Border = document.getElementById("inputTitle");
        Border.style.borderColor = "red";
    }

    if (content == ""){
        var Border = document.getElementById("inputBlog");
        Border.style.borderColor = "red";
    }

    if (date == ""){
        var Border = document.getElementById("inputDate");
        Border.style.borderColor = "red";
    }


    // resetting the border color
    if (title != ""){
        var Border = document.getElementById("inputTitle");
        Border.style.borderColor = "";
    }

    if (content != ""){
        var Border = document.getElementById("inputBlog");
        Border.style.borderColor = "";
    }

    if (date!= ""){
        var Border = document.getElementById("inputDate");
        Border.style.borderColor = "";
    }
});