var bil1 = "", bil2 = "", bil3 = "", opr = "";
function Angka(Angka) {
    document.getElementById('hasil').value += Angka;
}

function Operator(o) {
    bil1 = document.getElementById('hasil').value;
    document.getElementById('hasil').value = "";
    opr = o;
}
function Hasil() {
    bil2 = document.getElementById('hasil').value;
    switch (opr) {
        case '+':
            bil3 = parseFloat(bil1) + parseFloat(bil2);
            break;

        case '-':
            bil3 = parseFloat(bil1) - parseFloat(bil2);
            break;
        case '*':
            bil3 = parseFloat(bil1) * parseFloat(bil2);
            break;

        case '/':
            bil3 = parseFloat(bil1) / parseFloat(bil2);
            break;
    }
    document.getElementById('hasil').value = bil3;
}