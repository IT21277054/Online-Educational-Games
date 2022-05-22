
function validateCode() {
    // Get the value of the input field with id="numb"
    let x = document.getElementById("promocode").value;
    // If x is Not a Number or less than one or greater than 10

    if (x == 12345) {
        var dis= 1;
    } else {
        alert("Invalid promocode");
        var dis= 0;
    }

}

function displayDiscount() {
    documet .getElementById("discount").innerHTML=dis;
}

function displayTotal(){
    var numVal1 = Number(document.getElementById("total").value);
    var numVal2 = Number(document.getElementById("discount").value) / 100;
    var totalValue = numVal1 - (numVal1 * numVal2)
    document.getElementById("finalVal").value = totalValue.toFixed(2);
}