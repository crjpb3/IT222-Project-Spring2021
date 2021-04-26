function textFunction() {
    var timetext = document.getElementById("time");
    var text = document.getElementById("text");
    var newtext = document.getElementById("newtext");
    var button = document.getElementById("button");


    //text.style.visibility = "hidden";
    text.style.color = "red";
    text.innerHTML = "SOLD";
    button.style.visibility = "hidden";
    timetext.innerHTML = "Bids have ended."
    //newtext.innerHTML = "SOLD";
}

function dateFunction() {
    var timetext = document.getElementById("time");
    var text = document.getElementById("text");
    var newtext = document.getElementById("newtext");
    var button = document.getElementById("button");

    var d = new Date();
    var datetext = new Date(d.getTime() + 5 * 60000);

    timetext.innerHTML = "You have until <b>" + datetext + "</b> to make any bids!";

    button.onclick = " ";

    setTimeout(textFunction, 300000);

}