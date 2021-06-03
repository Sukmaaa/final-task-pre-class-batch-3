function countingDiscount() {
    const nameVoucher = document.getElementById("voucher").value;
    const shoping = document.getElementById("bayar").value;

    let discountPercent = 0;
    let minshoping = 0;
    let maxDiscount = 0;
    let discount = 0;
    if (nameVoucher == "DumbWaysJos") {
        discountPercent = 21.1;
        minshoping = 50000;
        maxDiscount = 20000;
        if (shoping >= minshoping) {
            discount = maxDiscount;
        } else {
            discount = shoping * discountPercent / 100;
        }
    } else if (nameVoucher == "DumbWaysMantap") {
        discountPercent = 30;
        minshoping = 80000;
        maxDiscount = 40000;
        if (shoping >= minshoping) {
            discount = maxDiscount;
        } else {
            discount = shoping * discountPercent / 100;
        }
    } else {
        document.write(`Voucher Invalid <br>`);
    }

    uangBayar = shoping - discount;
    kembalian = shoping - uangBayar;


    document.getElementById("output").innerHTML =
        `<div class='alert'>=============== Result =============== <br>

    Jumlah uang anda : Rp.${shoping}<br>
    Uang yang harus dibayar : Rp.${uangBayar}<br>
    Diskon: Rp.${discount}<br>
    kembalian : Rp.${kembalian} <br>
    
    ============= Terima Kasih ============</div>`
    return false
}