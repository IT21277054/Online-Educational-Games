function discount() { 
    var numVal1 = Number(document.getElementById("submonths").value);
    
    var total = numVal1 * 5;

    document.getElementById("total").innerHTML=total;
}
