<?php
            
            try{
                
                $req = $bdd->prepare('insert into article (nom_article, nom_vendeur, ticket) values (?,?)');
                $req->bindParam(1,$nom_article,PDO::PARAM_STR);
                $req->bindParam(2,$nom_vendeur,PDO::PARAM_STR);
                $req->bindParam(2,$ticket,PDO::PARAM_STR);
                $req->execute();

                echo"<p>article : $nom_article, vendeur: $nom_vendeur, ticket: $ticket enregistré.</p>";


            }catch(Exception $error){
                die('Erreur : '.$error->getMessage());
            }
        
    ?>
</body>
</html>