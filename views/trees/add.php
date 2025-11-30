<?php include "../views/layouts/header.php"; ?>

<h2>Ajouter un Enregistrement d'Arbre</h2>

<form action="../../controllers/TreeController.php?action=store" 
      method="POST" 
      enctype="multipart/form-data" 
      onsubmit="return validateForm();">

    <!-- Enumerator -->
    <label>Enqueteur</label>
    <select name="enqueteur" required>
        <option value="">-- Sélectionner --</option>
        <option value="Exauce Tshibanda">Exauce Tshibanda</option>
        <option value="Johnatha Lubula">Johnatha Lubula</option>
        <option value="Roland Miezi">Roland Miezi</option>
        <option value="Voltaire Lulami">Voltaire Lulami</option>
        <option value="Glody Kusa">Glody Kusa</option>
        <option value="Alain Mayungu">Alain Mayungu</option>
    </select>

    <!-- Numero de l'Arbre -->
    <label>Numero de l'Arbre*</label>
    <input type="text" name="numero_arbre" required>

    <!-- Espece -->
    <label>Espece de l'Arbre*</label>
    <input type="text" name="espece_arbre" required>

    <!-- Etat -->
    <label>État de l'Arbre</label>
    <input type="text" name="etat_arbre">

    <!-- Problème -->
    <label>Qu'est-ce qui ne va pas avec l'arbre?</label>
    <textarea name="probleme_arbre"></textarea>

    <!-- Age -->
    <label>Âge (yyyy-mm)</label>
    <input type="month" name="age">

    <!-- Mise à Terre -->
    <label>Date de Mise à Terre (yyyy-mm)</label>
    <input type="month" name="mise_a_terre">

    <!-- Floraison -->
    <label>Y a-t-il déjà eu la floraison?</label>
    <select name="floraison" id="floraison" onchange="toggleFloraisonDate()">
        <option value="Non">Non</option>
        <option value="Oui">Oui</option>
    </select>

    <div id="floraison_date_div" style="display:none;">
        <label>Date de Première Floraison</label>
        <input type="month" name="premiere_floraison">
    </div>

    <!-- Fructification -->
    <label>Y a-t-il déjà eu fructification?</label>
    <select name="fructification" id="fructification" onchange="toggleFructificationDate()">
        <option value="Non">Non</option>
        <option value="Oui">Oui</option>
    </select>

    <div id="fructification_date_div" style="display:none;">
        <label>Date de Première Fructification</label>
        <input type="month" name="premiere_fructification">
    </div>

    <!-- Recolte -->
    <label>Y a-t-il déjà eu récolte?</label>
    <select name="recolte" id="recolte" onchange="toggleRecolteDetails()">
        <option value="Non">Non</option>
        <option value="Oui">Oui</option>
    </select>

    <div id="recolte_details_div" style="display:none;">
        <label>Première Année de Récolte</label>
        <input type="number" name="premiere_recolte_annee" min="1900" max="2100">

        <label>Nombre de Récoltes</label>
        <input type="number" name="nombre_recoltes" min="0">
    </div>

    <!-- Photo -->
    <label>Photo de la plante</label>
    <input type="file" name="plant_photo" accept="image/*">

    <!-- Optional GPS (if available) -->
    <label>GPS (lat,lon,alt,acc)</label>
    <input type="text" name="start_geopoint" placeholder="-1.2345 29.4567 1200 5">

    <br><br>
    <button type="submit">Submit</button>

</form>

<script>
function toggleFloraisonDate() {
    document.getElementById("floraison_date_div").style.display =
        document.getElementById("floraison").value === "Oui"
        ? "block" : "none";
}

function toggleFructificationDate() {
    document.getElementById("fructification_date_div").style.display =
        document.getElementById("fructification").value === "Oui"
        ? "block" : "none";
}

function toggleRecolteDetails() {
    document.getElementById("recolte_details_div").style.display =
        document.getElementById("recolte").value === "Oui"
        ? "block" : "none";
}

function validateForm() {
    // Basic client-side validation
    const numero = document.querySelector('input[name="numero_arbre"]').value;
    const espece = document.querySelector('input[name="espece_arbre"]').value;

    if (numero.trim() === "" || espece.trim() === "") {
        alert("Numero and Espece de l'Arbre are required!");
        return false;
    }

    return true;
}
</script>

<?php include "../views/layouts/footer.php"; ?>
