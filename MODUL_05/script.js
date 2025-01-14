$(document).ready(function () {
    //1. Dasar Selektor
    $('#header').css('text-align', 'center');//Mengubah Align text pada header
    $('li').css('magin', '5px');//Memberi mArgin pada semua <li>

    //2. Selektor Atribut
    $('img[alt="Alumni Photo 1"]').css('border', '2px solid red');//mengubah border pada gambar dengan alt="Alumni Photo 1"

    //3.Selektor Hirarki
    $('#alumniList li').css('font-size', '18px');//Mengubah font size pada semua <li> di dalam #alumniList

    //4.Selektor Filter
    $('li:even').css('color', 'blue');//mengubah warna test pada elemen <li> genap
    $('.featured').addclass('highlight');//Menambahkan class hightlight pada elemen dengan class featured

    //Even Handling untuk Galeri Foto
    $('.gallery img').on('click', function () {
        var src = $(this).attr('src');
        $('#modalImage').attr('src', src);
        $('#myModal').fadeIn();
    });

    $('.modal .close').on('click', function () {
        $('#myModal').fadeOut();
    });

    $(window).on('click', function (event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').fadeOut();
        }
    });
});