
<?php
$to = "bilal5ziani@gmail.com";
$subject = "طلب جديد من الموقع";
$message = "الاسم: " . $_POST['name'] . "\n"
         . "الهاتف: " . $_POST['phone'] . "\n"
         . "العنوان: " . $_POST['address'] . "\n"
         . "المنتج: " . $_POST['product'];
$headers = "From: store@yourdomain.com";

if (mail($to, $subject, $message, $headers)) {
    echo "تم إرسال الطلب بنجاح.";
} else {
    echo "حدث خطأ أثناء الإرسال.";
}
?>
