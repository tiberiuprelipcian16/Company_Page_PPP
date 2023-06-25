<?php 
	$mesaj = $_POST['mesaj'];
	$email = "tiberiuprelipcian16@gmail.com";
	$recipient = "tiberiuprelipcian16@gmail.com";
	$subject = "Contact Pnt IT Company";
	$mailheader = "From: Pnt IT \n";

	mail($recipient, $subject, $mesaj, $mailheader);
	echo "
	
	<center>
    <a 
style = '
background-color: black; 
color: white;
border-radius: 30px;
padding: 10px;
text-decoration: none;
margin: 10vw;
'
href='https://tiberiuprelipcian16.github.io/Company_Page_PPP/'>Back</a>

</center>
";
?>