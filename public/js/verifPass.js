function writedivmdp(texte)
{
    document.getElementById('mdpalert').innerHTML = texte;
}

function checkMdp()
{
    var mdp1 = document.getElementById("pass1").value,
    mdp2 = document.getElementById("pass2").value;
    if (mdp1 !== mdp2)
    {
    writedivmdp('<span style="color:#cc0000">Les mots de passe ne correspondent pas !</span>');
    }
    else
    {
    writedivmdp('<span style="color:#1A7917">Mots de passe OK !</span>');
    }
}