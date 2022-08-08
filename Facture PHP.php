<!DOCTYPE html>
<html>
<head>
    <style>
    body{
        height: 842px;
        width: 1100px;
        margin-left: auto;
        margin-right: auto;
        }

    </style>
    <meta charset="utf-8">
    <link rel="stylesheet" href="FacturePHP.css" />
    
    <title>Facture de votre commande</title>
</head>
<body>
    <table align="center" border="0" width="80%">
        <tr>
            <td><strong>FACTURE</strong></td>
            <td></td>
            <td align="right"><img src="https://svgsilh.com/svg/296729.svg" height="120"></td>
            
        </tr>
    </table>
    <?php
    $donnees_client = array(
        "prenom_nom" => "Pierre Velon",
        "adresse" => "154 Avenue de Cristiano Ronaldo",
        "ville" => "Marbella",
        "pays" => "Espagne",
        "facture_date" => "10 février 2022" 
    );

    $donnees_entreprise = array(
        "nom_entreprise" => "MK Livraisons",
        "adresse" => "4 allée dumont d'urville",
        "ville" => "93600 - Aulnay-Sous-Bois",
        "siren" => "529661761"
    );

    ?>
    <br>
    <br>
    <br>
    <br>

    <table align="center" border="0" width="80%">
        <tr>
            <td><font size="4"><strong>Adresse de la société :</strong></font></td>
            <td><font size="4"><strong>Adresse du client :</strong></font></td>
            <td></td>
        </tr>
        <tr>
            <td><font size="3">
                <p><?php echo($donnees_entreprise["nom_entreprise"]); ?> <br />
                <?php echo($donnees_entreprise["adresse"]); ?> <br />
                <?php echo($donnees_entreprise["ville"]); ?> <br />
                 </p> <br />
            </font></td>
            <td><font size="3">
                <p><?php echo($donnees_client["prenom_nom"]); ?> <br />
                <?php echo($donnees_client["adresse"]); ?> <br />
                <?php echo($donnees_client["ville"]); ?> <br />
                <?php echo($donnees_client["pays"]); ?> </p> <br />
            </font></td>
            <td><font size="3">
                <p> <?php echo("Numero SIREN : ".$donnees_entreprise["siren"]).""; ?> <br />
                <?php echo("Facture du : ".$donnees_client["facture_date"]).""; ?> </p></font><br />
            </td>
        </tr>
             
    </table>
    <br>
    <br>
    <table align="center" width="80%" border="0">
        <tr>
            <td>
                <p><font size="3">Bonjour Pierre,</p>
                <p>Nous vous remercions pour votre votre confiance. <br />
                    Voici un recapitulatif de votre commande :
                </p></font>
            </td>
            <td></td>
            <td><strong><font size="6" >Page 1 sur 1</font></strong></td>

        </tr>
    </table>

    <?php
      $prestations = array(
       array(
       "quantité" => mt_rand(1,5),
        "service" => "Livraison d'un aspirateur",
        "prix" => 35,
        "tva" => 20,
        ),
       array(
       "quantité" => mt_rand(1,5),
        "service" => "Livraison d'un ordinateur",
        "prix" => 40,
        "tva" => 20,
        ),
        array(
        "quantité" => mt_rand(1,5),
        "service" => "Livraison d'une machine a laver",
        "prix" => 60,
        "tva" => 20,
        ),
        array(
        "quantité" => mt_rand(1,5),
        "service" => "Livraison d'une télévision",
        "prix" => 50,
        "tva" => 20,
        ),
        


        );

     

       ?>
       <br>
       <br>
       <br>

       <table border="1" width="80%" align="center" cellpadding="10">
            <tr>
                  <td align="center"><font size="4"><b>Quantité</b></font></td>
                  <td align="center"><font size="4"><b>Service</b></font></td>
                  <td align="center"><font size="4"><b>Prix Unitaire HT €</b></font></td>
                  <td align="center"><font size="4"><b>TVA %</b></font></td>
                  <td align="center"><font size="4"><b>TVA €</b></font></td>
                  <td align="center"><font size="4"><b>PRIX TTC €</b></font></td>

            </tr>
            <tr align="center">
                <?php
                foreach ($prestations as $services)
                {
                  echo("<tr>
                        <td>".$services["quantité"]."</td>
                        <td>".$services["service"]."</td>
                        <td>".$services["prix"]." €</td>
                        <td>".$services["tva"]." %</td>
                        <td>".$services["prix"] * $services["quantité"] * $services["tva"] / 100 ."  €</td>
                        <td>".$services["prix"] * $services["quantité"] * 1.20."€");
                        ;
                        
                                
                        
                        }
                ?> 
            </tr>
             
       </table>
       <table border="0" width="80%" align="center" cellpadding="10">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align="right"><strong><font size="4">Total HT :</font></strong></td>
            <td align="right"><?php echo($prestations[0]["prix"] * $prestations[0]["quantité"] + $prestations[1]["prix"] * $prestations[1]["quantité"] + $prestations[2]["prix"] * $prestations[2]["quantité"] + $prestations[3]["prix"] * $prestations[3]["quantité"]."€") ?> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align="right"><strong><font size="4">TVA € (20%) :</font></strong></td>
            <td align="right"><?php echo($prestations[0]["prix"] * $prestations[0]["quantité"] * $prestations[0]["tva"] / 100 + $prestations[1]["prix"] * $prestations[1]["quantité"] * $prestations[1]["tva"] / 100 + $prestations[2]["prix"] * $prestations[2]["quantité"] * $prestations[2]["tva"] / 100 + $prestations[3]["prix"] * $prestations[3]["quantité"] * $prestations[3]["tva"] / 100 ."€") ?></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align="right"><strong><font size="4">Total TTC :</font></strong></td>
            <td align="right"><?php echo(($prestations[0]["prix"] * $prestations[0]["quantité"] + $prestations[1]["prix"] * $prestations[1]["quantité"] + $prestations[2]["prix"] * $prestations[2]["quantité"] + $prestations[3]["prix"] * $prestations[3]["quantité"]) + $prestations[0]["prix"] * $prestations[0]["quantité"] * $prestations[0]["tva"] / 100 + $prestations[1]["prix"] * $prestations[1]["quantité"] * $prestations[1]["tva"] / 100 + $prestations[2]["prix"] * $prestations[2]["quantité"] * $prestations[2]["tva"] / 100 + $prestations[3]["prix"] * $prestations[3]["quantité"] * $prestations[3]["tva"] / 100 . "€") ?></td>
        </tr>
       </table>
       <br>
       <br>
       <br>
       <table align="center" width="80%" border="0">
            <tr>
                <td><p><strong><font size="4">Conditions générales</font></strong></p>
                <p><font size="3">La facture doit être payée dans un délai de 30 jours après sa date d'émission. En cas de retard de paiement, les pénalités de retard s'élèvent à 10% du montant total de la facture. L'indémnité forfaitaire pour frais de recouvrement est de 40 euros.</font></p>
            </tr>
       </table>
       <p align="center"><strong>www.MKLivraisons.com</strong></p>
       <p align="center">SAS au capital de 5000 € inscrite au RCS de Paris.</p>

</body>
</html>