<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>interactif</title>
</head>

<body>

    <form id="myForm">

        <span class="form_col">Sexe :</span>
        <label><input name="sex" type="radio" value="H" />H</label>
        <label><input name="sex" type="radio" value="F" />F</label>
        <span class="tooltip">Vous devez sélectionnez votre sexe</span>
        <br /><br />

        <label class="form_col" for="lastName">Nom :</label>
        <input name="lastName" id="lastName" type="text" />
        <span class="tooltip">Un nom ne peut pas faire moins de 2 caractères</span>
        <br /><br />

        <label class="form_col" for="firstName">Prénom :</label>
        <input name="firstName" id="firstName" type="text" />

        <span class="tooltip">Un prénom ne peut pas faire moins de 2 caractères</span>
        <br /><br />

        <label class="form_col" for="age">Âge :</label>
        <input name="age" id="age" type="text" />
        <span class="tooltip">L'âge doit être compris entre 5 et 140</span>
        <br /><br />

        <label class="form_col" for="login">Pseudo :</label>
        <input name="login" id="login" type="text" />
        <span class="tooltip">Le pseudo ne peut pas faire moins de 4 caractères</span>
        <br /><br />

        <label class="form_col" for="pwd1">Mot de passe :</label>
        <input name="pwd1" id="pwd1" type="password" />
        <span class="tooltip">Le mot de passe ne doit pas faire moins de 6 caractères</span>

        <br /><br />

        <label class="form_col" for="pwd2">Mot de passe (confirmation) :</label>
        <input name="pwd2" id="pwd2" type="password" />
        <span class="tooltip">Le mot de passe de confirmation doit être identique à celui d'origine</span>
        <br /><br />

        <label class="form_col" for="country">Pays :</label>

        <select name="country" id="country">
            <option value="none">Sélectionnez votre pays de résidence</option>
            <option value="en">Angleterre</option>
            <option value="us">États-Unis</option>
            <option value="fr">France</option>
        </select>
        <span class="tooltip">Vous devez sélectionner votre pays de résidence</span>

        <br /><br />

        <span class="form_col"></span>
        <label><input name="news" type="checkbox" /> Je désire recevoir la newsletter chaque mois.</label>
        <br /><br />

        <span class="form_col"></span>
        <input type="submit" value="M'inscrire" /> <input type="reset" value="Réinitialiser le formulaire" />
    </form>
     <script type="text/javascript" src="js/script_modif.js"></script>
</body>




<style type="text/css">
    body {
    padding-top: 50px;
}
    
.form_col {
    display: inline-block;
    margin-right: 15px;
    padding: 3px 0px;
    width: 200px;
    min-height: 1px;
    text-align: right;
}
    
input {
    padding: 2px;
    border: 1px solid #CCC;
    border-radius: 2px;
    outline: none; /* Retire les bordures appliquées par certains navigateurs (Chrome notamment) lors du focus des éléments <input> */
}
    
input:focus {
    border-color: rgba(82, 168, 236, 0.75);
    box-shadow: 0 0 8px rgba(82, 168, 236, 0.5);
}
    
.correct {
    border-color: rgba(68, 191, 68, 0.75);
}
    
.correct:focus {
    border-color: rgba(68, 191, 68, 0.75);
    box-shadow: 0 0 8px rgba(68, 191, 68, 0.5);
}
    
.incorrect {
    border-color: rgba(191, 68, 68, 0.75);
}
    
.incorrect:focus {
    border-color: rgba(191, 68, 68, 0.75);
    box-shadow: 0 0 8px rgba(191, 68, 68, 0.5);
}
    
.tooltip {
    display: inline-block;
    margin-left: 20px;
    padding: 2px 4px;
    border: 1px solid #555;
    background-color: #CCC;
    border-radius: 4px;
}
</style>

</html>
