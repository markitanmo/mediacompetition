function openavtor() {
    var delay_popup = 1;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
}
function avtorexit()
{
    document.getElementById('overlay').style.display='none';
}

function regform(){
    document.getElementById('overlay').style.display='none';
    var delay_popup = 0;
    setTimeout("document.getElementById('overlay1').style.display='block'", delay_popup);
}

function avtoform(){
    document.getElementById('overlay1').style.display='none';
    var delay_popup = 0;
    setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
}

function openchange() {
    var delay_popup = 1;
    setTimeout("document.getElementById('overlay2').style.display='block'", delay_popup);
}
function changexit()
{
    document.getElementById('overlay2').style.display='none';
}