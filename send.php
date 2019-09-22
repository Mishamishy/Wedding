<?php 

if(isset($_POST['submit'])){
    $to = "zubkovaoks1993@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
    $from = "zubkovaoks1993@gmail.com"; // Здесь нужно написать e-mail, от кого будут приходить письма, например no-reply@epicblog.net
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $subject = "Форма отправки сообщений с сайта";
    $subject2 = "Copy of your form submission";
    $message = "ФИО посетителя: ". $first_name . ' '. $second_name . '<br>' . " | Адрес электронной почты: "  . $_POST['email'] . " | Комментарий: " . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    mail($to,$subject,$message,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы с нетерпением ждем Вас.";
	echo "<br /><br /><a href='http://ugryumovmm.ru/mywedding/'>Вернуться на сайт.</a>";

}

?>
<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://ugryumovmm.ru/mywedding/");}
window.setTimeout("changeurl();",3000);
</script>