
addEventListener("keydown", function(event) {
    if (event.keyCode == 49)


    isPaused = false;


  });
  addEventListener("keyup", function(event) {
    if (event.keyCode == 51)
    isPaused = true;

  });
  addEventListener("keyup", function(event) {
  if (event.keyCode == 50)
    isPaused = true;

});



//Баллы слева
  addEventListener("keyup", function(event) { 
    if (event.keyCode == 81)

    scoreLeftElementDisplay.textContent = scoreLeft += 1;


  }); 
  addEventListener("keyup", function(event) { 
    if (event.keyCode == 65) 
    scoreLeftElementDisplay.textContent = scoreLeft -= 1;


    //Баллы справа

  }); 
  addEventListener("keyup", function(event) { 
    if (event.keyCode == 87) 
    scoreRightElementDisplay.textContent = scoreRight += 1;

  }); 
  addEventListener("keyup", function(event) { 
    if (event.keyCode == 83) 
    scoreRightElementDisplay.textContent = scoreRight -= 1;

  }); 

