//alert("coucou");



//console.log("coucou");

//var chat = "Hello";
//console.log(chat);




//const title = document.querySelector("#box");
//co//nst title = document.querySelector("btn-1");

//const question = document.querySelector("h2");

// document.querySelector("h2").style.color = 'green';

// const questionContenair = document.querySelector(".click-event");

// console.log(questionContenair);

// const bonneReponse = document.querySelector("#btn-1");
// document.querySelector("#btn-1").style.background = 'green';

// const reponse = document.querySelector("p");
// //console.log(bonneReponse);

// const mauvaiseReponse = document.querySelector("#btn-2");
//document.querySelector("#btn-2").style.background = 'red';
//ocument.querySelector("#btn-2").disabled = true;

//console.log(mauvaiseReponse);

//bonneReponse.addEventListener("click",() =>{
    //console.log(click);
 //   reponse.style.visibility = "visible";
//})


//questionContenair.addEventListener("click",() =>{
  //  console.log(click);
    // questionContenair.style.borderRadius = "100px";
// })



//console.log = question

// console.log(title);
// console.log(btn1);

//========== Opérateurs======///



//console.log(5+4);

//Opérateurs d'affectation

let total = 0;

//total = total + 1;
//total++;

//--total;

//total += 5;
//total += 5;
 
//console.log(total);

//============= Structure de contrôle=======//

let x = 20;
let y = 5;

// if (x<y) {
 //console.log("x existe");
//}

// if (!x) {
    //console.log("x existe pas");
//}

//if (x===y) {
   // console.log("x égale à y");
//} else {
//    console.log("x est supérieur à y")
//}




if (x==y && x > 5) {
console.log("true");
 } else {
  console.log("false")
}
 
if (x==y || x > 5) {
    console.log("true");
     } else {
      console.log("false")
    }

// concaténation

console.log(x + "&" + y + "sont différents");

//ternaire

if (x==y) ("coucou");

x == y ? console.log("true") : console.log("false");

// =======================================================


// mousemove ============
  
  const mouse = document.querySelector(".mouse");
  console.log(mouse);

  window.addEventListener("mousemove", (e) =>{
   // console.log(" x:",e.pageX, "y", e.pageY);
    mouse.style.left = e.pageX + "px";
   // mouse.style.background = 'red';
    mouse.style.top = e.pageY + "px"
    //mouse.style.top = e.clientY + "px";
  })

window.addEventListener("mousedown",()=> {

   // console.log("test");
   mouse.style.transform = "scale(1)translate(-50%, -50%)";
   mouse.style.border = "2px solid red";
  })

  const questionContainer = document.querySelector(".question");
  console.log(questionContainer);
  

//questionContainer.addEventListener("mouseenter", (e)=>{

//     questionContainer.style.background = "yellow";
// })   
//     questionContainer.addEventListener("mousseleave",()=>{
//         questionContainer.style.background = "red";
//     })
// questionContainer.addEventListener("mousseover",()=>{
//     questionContainer.style.background = "red";
//     })   

//============== keypress===============================

const keypressContainer = document.querySelector(".keypress");
//console.log(keypressContainer);

const key = document.getElementById("key");
//console.log(key);

document.addEventListener("keypress",(e)=>{
console.log("test");
key.textContent += e.key;

if(e.key === "j") {
    keypressContainer.style.background = "yellow";
}else if(e.key === "b") {
    keypressContainer.style.background = "blue";
}else {
    keypressContainer.style.background = "green";
}

if(e.key === "k"){
    ring(e.key)

}

})

const ring = () => {

    const audio = new Audio();

    //audio.src = key +"mp3";
    audio.src = "../k.mp3"

    audio.play();

}
//kring();

// Formulaire ===================================================================

const inputName = document.querySelector(' input[type="text"]')
console.log(inputName);

inputName.addEventListener('input' , (e)=>{
  console.log(e.target.value);
  let pseudo = e.target.value;
  console.log(pseudo);

})


