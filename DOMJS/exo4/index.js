const Toggle = document.querySelector("#output");
const aside = document.querySelector("aside");
const button = document.querySelector("button");

button.addEventListener("click",() =>{

if(aside.style.visibility === "visible"){
aside.style.visibility = "hidden";} else {
    aside.style.visibility = "visible"  
}
  console.log(aside);
})


//===============================================================

const btn = document.querySelector(" #output > button");

btn.addEventListener('click',() => {

    let aside = this.nextElementSiblings;
    aside.style.display = aside.style.display === "none" ? "block" : 
}), false;
  
