document.getElementById("submitBtn").addEventListener("click", function my(e) {
    var msg = document.getElementById("message");
    if (msg.value == "") {
        e.preventDefault();
        var x = document.querySelector('.feedback');
        x.classList.add("show");
        setTimeout(function() {
            x.classList.remove('show');
        }, 5000);
    } else {

        e.preventDefault();
        document.getElementsByClassName("message-content")[0].innerHTML = msg.value;
        document.getElementById("message-form").reset();
    }


});