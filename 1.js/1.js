function pascalTriangle() {
    let pascal = parseInt(document.getElementById("pascal").value); //panggil value dan ubah ke bilangan bulat
    let pattern = []; // buat array kosong dengan nama pattern
    for (let row = 0; row <= pascal; row++) { //lalukan perulangan dengan nama row/baris dan limit sesuai isi inputan
        for (let i = pascal; i >= row; i--) { //kemudian lakukan perulangan lagi dengan awal dimulai susuai inputan dan 
            pattern.push("&nbsp;");
        }
        let value = 1;
        for (let col = 0; col <= row; col++) {
            pattern.push(`${value} \n `);

            // Rumus = value * (baris-kolom) / (kolom + 1)
            value = value * (row - col) / (col + 1);
        }
        pattern.push("<br>");
    }
    document.getElementById("output1").innerHTML = `<div class='alert'><strong>Result : </strong><br>${pattern.join("")}</div>`;

    return false;
}
