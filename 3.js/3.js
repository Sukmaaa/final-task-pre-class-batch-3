function setString() {
    const inputString = document.getElementById("string").value;
    let stringFilter = [...new Set(inputString)].join("");


    document.getElementById("output").innerHTML = `<div class='alert'><strong>Result : </strong><br>${stringFilter}</div>`;


    return false
}