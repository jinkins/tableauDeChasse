function connexion1()
{
    $.ajax(
            {
                type: "POST",
                url: "connexion.php",
                data: "qui=" + $("#qui").val() + "&mdp=" + $("#mdp").val(),
                datatype: "xml",
                success: connexion2,
                error: function() {
                    alert('La connexion à la base de donnée a échouée.');
                }
            }
    )
}

function connexion2(r)
{
   
    var resultat;
    resultat = $(r).find("resultat").text();
    console.log(resultat);

    if (resultat == "non")
    {
        $("#footer").html("<h2>Connexion refusée</h2>");
    }

    else
    {
        window.location = resultat;
    }
}
