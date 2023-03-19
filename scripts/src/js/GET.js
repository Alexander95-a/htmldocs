window.onload = function(){
    if(localStorage.getItem("flag")){
        document.getElementById("fio1").innerHTML=localStorage.getItem("fio1");
        document.getElementById("fio2").innerHTML=localStorage.getItem("fio2");
        document.getElementById("round").innerHTML=localStorage.getItem("round");
        document.getElementById("gender").innerHTML=localStorage.getItem("gender");
    
        
    }
   
}