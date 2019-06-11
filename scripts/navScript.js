menu.onclick = function showMenu()
{
    var x = document.getElementById("myTopNav");

    if (x.className === "topNav")
    {
        x.className += " responsive";
    }
    else
    {
        x.className = "topNav";
    }
}