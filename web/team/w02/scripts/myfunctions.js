function alerttext() {
    window.alert("Clicked!");
}
function changetext(newText) {
    document.getElementById("btnChangeText").innerHTML = newText;
}
function changeColor() {
    var clientColor = document.getElementById('colorInputBox').value;
    document.getElementById("one").style.backgroundColor = clientColor;
}