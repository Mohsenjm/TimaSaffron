function openFunction(){
    document.getElementById("topMenu").style.display="flex";
    document.getElementById("bottomMenu").style.display="flex";
    document.getElementById("open").style.display="none"
    document.getElementById("close").style.display="block";

}

function closeFunction(){
    document.getElementById("topMenu").style.display="none";
    document.getElementById("bottomMenu").style.display="none";
    document.getElementById("open").style.display="block"
    document.getElementById("close").style.display="none";

}
