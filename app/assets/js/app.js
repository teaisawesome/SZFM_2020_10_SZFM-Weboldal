const text = document.querySelector(".fancy");
//uj
const text2 = document.querySelector(".fancy2");

const strText = text.textContent;
//uj
const strText2 = text2.textContent;

const splitText = strText.split("");
//uj
const splitText2 = strText2.split("");

text.textContent = "";
//uj
text2.textContent = " ";

for(let i=0; i<splitText.length; i++)
{
    text.innerHTML += "<span>"+ splitText[i] + "</span>";
}
//uj
for(let j=0; j<splitText2.length; j++)
{
    text2.innerHTML += "<span>"+ splitText2[j] + "</span>";
}

let char = 0;
let timer = setInterval(onTick, 50);

//uj
let timer2 = setInterval(onTick2, 50);
let char2 = 0;



function onTick(){
    const span = text.querySelectorAll('span')[char];
    span.classList.add("fade");
    char++
    if(char === splitText.length){
        complete();
        return;
    }
}

//uj
function onTick2(){
    const span2 = text2.querySelectorAll('span')[char2];
    span2.classList.add("fade");
    char2++
    if(char2 === splitText2.length){
        complete2();
        return;
    }
}

function complete(){
    clearInterval(timer);
    timer = null;
}

//uj 
function complete2(){
    clearInterval(timer2);
    timer2 = null;
}

// slie show start 

const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks =document.querySelectorAll('.nav-links li');

    burger.addEventListener('click',()=>{
        //Toggle Nav
        nav.classList.toggle('nav-active');

        //Animaljuk a linkeket
        navLinks.forEach( (link,index) => {
                if(link.style.animation) {
                    link.style.animation = '';
                }else{
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;

            }
        });

        //burger animation -> ('toogle') | css ben is... |
        burger.classList.toggle('toggle');
    });
    
}

//uj
const navSlide2 = () => {
    const burger2 = document.querySelector('.burger2');
    const nav2 = document.querySelector('.nav-linksBel');
    const navLinks2 =document.querySelectorAll('.nav-linksBel li');

    burger2.addEventListener('click',()=>{
        //Toggle Nav2
        nav2.classList.toggle('nav-active');

        //Animaljuk a linkeket2
        navLinks2.forEach( (link,index) => {
                if(link.style.animation) {
                    link.style.animation = '';
                }else{
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.4}s`;
            }
        });
        
        //burger2 animation -> ('toogle') | css ben is... |
        burger2.classList.toggle('toggle');
    });
}

navSlide();
navSlide2();