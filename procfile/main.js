//https://api.telegram.org/bot5439820694:AAFtbI-H46_Xs367vj6MbZeWs0GE6EHz2S0/sendMessage?chat_id=-1001889550833&text=halojuga

function kirimPesan() {

    var nama = document.getElementById('nama');
    var email = document.getElementById('email');
    var pesan = document.getElementById('pesan');

    var gabungan = 'Nama%3A%0A' + nama.value + '%0AEmail%3A%0A' + email.value + '%0APesan%3A%0A' + pesan.value;
    

    var token = '5439820694:AAFtbI-H46_Xs367vj6MbZeWs0GE6EHz2S0'; // Ganti dengan token bot yang kamu buat
    var grup = '-1001541535085'; // Ganti dengan chat id dari bot yang kamu buat

    $.ajax({
        url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
        method: POST,
    })
}
