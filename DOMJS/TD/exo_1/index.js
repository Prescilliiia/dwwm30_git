const button = document.querySelector('button');
//console.log(button)

const p1= document.getElementById('parag1');
//console.log(p1);


changerStyle = () => {
    p1.classList.add("active")
    
}
changerStyle();



button.addEventListener("click",() =>{
    changerStyle();
})