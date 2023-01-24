window.onload = updateClock;

var minutos=29;
var segundos = 59;

function updateClock() {
  document.getElementById('countdown').innerHTML = minutos +":"+ segundos;
  if(segundos==0 && minutos==0){
    console.log('Final');
  }else{
    segundos-=1;
    if(segundos==0)
    {
        segundos=59;
        minutos-=1;
    }

    setTimeout("updateClock()",1000);
    
  }
}