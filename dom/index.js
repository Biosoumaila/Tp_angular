document.querySelector("h1").style.background = "yellow";
const questionContainer = document.querySelector(".click-event");
// questionContainer.style.borderRadius = "150px";
const btn1 = document.querySelector("#btn-1");
const btn2 = document.getElementById("btn-2");
const response = document.querySelector("p")


questionContainer.addEventListener('click',()=>{
    questionContainer.classList.toggle("question-clicked");
});
btn1.addEventListener('click', () => {
    response.classList.add('show-response');
    response.style.backgroundColor = "red";
});
btn2.addEventListener('click', () => {
   
    response.classList.add('show-response');
    response.style.backgroundColor = "green";
});