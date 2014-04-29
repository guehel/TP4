$('#document').ready(function(){
    alert('test');
});


function effacer() {
    var liste = document.getElementsByTagName('input');
    for (var i = 0; i < liste.length; i++) {
        if (liste[i].getAttribute("type") == "text") {
            liste[i].value = "";
        }
    }

}

function rechercherModele() {
    window.open("./rechercheModele.php");
}

function cacheProfs(classe) {
    var listeformation = document.getElementsByClassName(classe);
    for (var i = 0; i < listeformation.length; i++) {
       cacherClasse(listeformation[i].value);
    }


}

function cacherClasse(classe){
     var listeProf = document.getElementsByClassName(classe);
     for (var j = 0; j < listeProf.length; j++) {
               listeProf[j].style.visibility = 'collapse';
    }
}

function restrindreFormateur() {
    var classe = 'choixFormation';
    cacheProfs(classe);
    var formation = document.getElementById('formation').value;
    var listeProf = document.getElementsByClassName(formation);
    for (var j = 0; j < listeProf.length; j++) {
        listeProf[j].style.visibility = 'visible';
//   listeProf[j].className = 'apparent';
    }
}

function afficherEtudiant() {
    var etudiant = document.getElementById('id_etudiants').value;
    alert(etudiant);
    document.getElementById('nom').innerHTML = etudiant[3];
    document.getElementById('prenom').innerHTML = etudiant[4];
}

function modifier(classe) {
    var listeProf = document.getElementsByClassName(classe);

    for (var j = 0; j < listeProf.length; j++) {
        listeProf[j].innerHTML = "<input type ='button'>" + listeProf[j].innerHTML + "</input>"

    }
}

function chargerEtudiant(id, nom, prenom, nationalite, formation) {
//    alert("test");
    document.getElementById('modifEtudiant').className = 'apparent';
    document.getElementById('idEtudiant').value = id;
    document.getElementById('nom').value = nom;
    document.getElementById('prenom').value = prenom;
    document.getElementById('nationalite').options[nationalite].selected = true;
    document.getElementById('formation').options[formation].selected = true;

    restrindreFormateur();

}