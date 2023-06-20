<?php 
	$mesaj = $_POST['mesaj'];
	$email = "tiberiuprelipcian16@gmail.com";
	$recipient = "tiberiuprelipcian16@gmail.com";
	$subject = "Mimi";
	$mailheader = "From: Mimi \n";

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
href='http://qxzyq.avantisys-tech.com'>Back</a>

</center>
";
?>
