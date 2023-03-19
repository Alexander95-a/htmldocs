function new_page(){
    var fio1 = document.getElementById("InputFio1").value;
    var fio2 = document.getElementById("InputFio2").value;
    var round = document.getElementById("InputRound").value;
    var gender = document.getElementById("InputGender").value;

    
    localStorage.setItem("flag",true);
    localStorage.setItem("fio1",fio1);
    localStorage.setItem("fio2",fio2);
    localStorage.setItem("round",round);
    localStorage.setItem("gender",gender);


}