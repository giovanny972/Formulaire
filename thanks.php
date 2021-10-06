
<body>
    <form action="thanks.php" method="POST">
         <p> 
            <?php
                echo ("Merci $_POST[user_lastname] $_POST[user_name] de nous avoir contacté à propos de $_POST[sujet].

                Un de nos conseiller vous contactera soit à l’adresse $_POST[user_email] ou par téléphone au $_POST[user_number] dans les plus brefs délais pour traiter votre demande : 

                $_POST[user_message]");
            ?> 
        </p>
    </form>
   
</body>
</html>
