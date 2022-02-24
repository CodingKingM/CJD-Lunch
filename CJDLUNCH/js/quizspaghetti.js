function checkspaghetti() {
alert('in function')
  var c=0;
  var q1=document.quiz.question1.value;
  var q2=document.quiz.question2.value;
  var q3=document.quiz.question3.value; 
  
  var result=document.getElementById('result');
  var quiz=document.getElementById("quiz");
  if (q1=="Italy") {c++}
  if (q2=="350 Different types") {c++}
  if (q3=="Capellini") {c++}
  

  
     quiz.style.display="none";
    
     if (c<=2) {
       result.textContent='You got ' +c+' Qesutions wrong. Please try again. '
     } else {
      result.textContent='You got ' +c+' Questions correct. Good job !. '
     }
}


