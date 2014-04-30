$(document).ready(function() {
    $('#formulaire').submit(function() {
        if ($('#confirme').val() === '1') {
            enregistrer();

        } else {

            confirmer();
        }

        return false;
    });
    $('#annuler').click(function() {
        window.close();
    });

    $('input:text.nombre').blur(function() {
        validerNombre(this);

    });
    $('input:text.texte').blur(validerTexte(this));
});

function confirmer() {

    var url1 = 'lister.php?';

    window.open(url1 + $('#formulaire').serialize(), "", "width=1200,height=500,menubar=no,location=no");
}

function enregistrer() {
//    alert($('#commande').val());

    var url2 = 'commande.php';

    $.get(url2
            , $('#formulaire').serialize()
            , function(data) {
                alert(data);
                window.close();
            }
    );


}

function enregistrer1() {

    var url1 = 'commande.php?';
    ;

    window.open(url1 + $('#formulaire').serialize());
}
