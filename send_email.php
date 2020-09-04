<?php
$statusMsg='';
if (isset($_POST['submit'])) {
   echo "entre en el if";
   if(isset($_FILES["file"]["name"])){
      
       $email = trim($_POST['email']);
       $name = trim($_POST['name']). " ".trim($_POST['last_name_1']). " ".trim($_POST['last_name_2']);
       $subject = trim($_POST['subject']);
       $dni = trim($_POST['dni']);
       $phone = trim($_POST['phone']);
       $n_doc = trim($_POST['n_doc']);
       $n_folio = trim($_POST['n_folio']);
       $type_doc = trim($_POST['type_doc']);
   
   $fromemail =  $email;
   //$subject="Uploaded file attachment";
   $email_message = '<h2>Datos del Solicitante</h2>
                       <p><b>Name:</b> '.$name.'</p>
                       <p><b>Dni:</b> '.$dni.'</p>
                       <p><b>Email:</b> '.$email.'</p>
                       <p><b>Subject:</b> '.$subject.'</p>
                       <p><b>Telefono:</b><br/>'.$phone.'</p>
                       <p><b>Folios:</b><br/>'.$n_folio.'</p>';
   $email_message.="<p><b>Porfavor, revisar archivo adjunto</p>";
   $semi_rand = md5(uniqid(time()));
   $headers = "From: ".$fromemail;
   $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    
       $headers .= "\nMIME-Version: 1.0\n" .
       "Content-Type: multipart/mixed;\n" .
       " boundary=\"{$mime_boundary}\"";
    
   if($_FILES["file"]["name"]!= ""){  
      echo "estoy en el 2do if";
    $strFilesName = $_FILES["file"]["name"];  
    $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
    
    
       $email_message .= "This is a multi-part message in MIME format.\n\n" .
       "--{$mime_boundary}\n" .
       "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
       "Content-Transfer-Encoding: 7bit\n\n" .
       $email_message .= "\n\n";
    
    
       $email_message .= "--{$mime_boundary}\n" .
       "Content-Type: application/octet-stream;\n" .
       " name=\"{$strFilesName}\"\n" .
       //"Content-Disposition: attachment;\n" .
       //" filename=\"{$fileatt_name}\"\n" .
       "Content-Transfer-Encoding: base64\n\n" .
       $strContent  .= "\n\n" .
       "--{$mime_boundary}--\n";
   }
   $toemail="juansilupumaza@gmail.com"; 
    
   if(mail($toemail, $subject, $email_message, $headers)){
      $statusMsg= "Email send successfully with attachment";
   }else{
      $statusMsg= "Not sent";
   }
   }

}

   ?>