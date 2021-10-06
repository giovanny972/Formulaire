    <body>
        <form  action="thanks.php"  method="POST">
            <div>
                <label  for="nom">                   Nom  :</label>
                <input  type="text"  id="nom"  name="user_name">
            </div>
            <div>
                <label  for="prenom">                 PréNom :</label>
                <input  type="text"  id="prenom"  name="user_lastname">
            </div>
            <div>
                <label  for="courriel">         Courriel  :</label>
                <input  type="email"  id="courriel"  name="user_email">
            </div>
            <div>
                <label  for="message">Numéro de téléphone :</label>
                <input  type="text"  id="message"  name="user_number">
            </div>
            <div>
                <select name="sujet" id="Macdo-select">
                    <option value="">--Please choose an option--</option>
                    <option value="1Macdo">Manger 1 macdo</option>
                    <option value="2Macdo">Manger 2 macdo</option>
                    <option value="3Macdo">Manger 3 macdo</option>
                </select>
            </div>
            <div>
                <label  for="message">            Message :</label>
                <textarea  id="message"  name="user_message"></textarea>
            </div>
            <div  class="button">
             <input type="submit" value="button"> 
            </div>
        </form>
    </body>