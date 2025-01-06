var Mahasiswa = new Array();

function Simpan() {
    let nim = document.f1.nim.value;
    let nama = document.f1.nama.value;
    Mahasiswa.push([nim, nama]);
    alert('Data tersimpan');
}


function Tampil() {
    let baris = Mahasiswa.length;
    let data = "";
    for (i = 0; i < baris; i++) {
        data += Mahasiswa[i][0] + "|" + Mahasiswa[i][1] + "<br>";
        document.getElementById('tbl').innerHTML = data;
    }
}
