document.addEventListener("DOMContentLoaded",(event)=>{
    const links=document.querySelectorAll(".link");
    links.forEach((link)=>{
        if(link.classList.contains("active")){
            link.classList.remove("active");
        }
        if(link.href===window.location.href){
            link.classList.add("active")

        }
    })
})
let image_profil=document.querySelectorAll(".imageprofil");
image_profil.forEach((image)=>{
    image.addEventListener("click",(e)=>{
        let down_menu_profil=document.querySelectorAll(".down_user");
        down_menu_profil.forEach((ele)=>{
        ele.classList.toggle("down");
        })
    });
    
})

document.addEventListener("DOMContentLoaded", function() {

const body=document.querySelector("body");
const headreSection=document.getElementsByClassName("titleCart")[0];
showBtn=document.querySelector(".checkout-button");
allContent=document.getElementsByClassName("evrly")[0];
closBtn=document.getElementById("clos-btn");
exitButton=document.getElementById("clos");


if (showBtn) {
    showBtn.addEventListener("click", () => {
        body.classList.add("active");
        headreSection.scrollIntoView({ behavior: 'smooth' });

    });
} else {
    console.error("showBtn element not found");
}if (allContent) {
    if (exitButton) {
        exitButton.addEventListener("click", () => {
            body.classList.remove("active");
        });
    } else {
        console.error("exitButton element not found");
    }

    allContent.addEventListener("click", () => {
        body.classList.remove("active");
    });
} else {
    console.error("allContent element not found");
}

if (closBtn) {
    closBtn.addEventListener("click", () => {
        body.classList.remove("active");
    });
} else {
    console.error("closBtn element not found");
}
})
 
// active link header
// function activeLinks() {
//     let allLinks = document.querySelectorAll("header nav ul li a");

//     // Fonction pour désélectionner tous les liens
//     function deselectAllLinks() {
//         allLinks.forEach((el) => {
//             el.classList.remove("active");
//         });
//     }

//     // Vérifie s'il y a un lien actif enregistré dans localStorage
//     let activeLink = localStorage.getItem("activeLink");

//     // Désélectionne tous les liens au chargement de la page
    
//     if (activeLink) {
//         deselectAllLinks();
//         // Sélectionne le lien actif enregistré s'il existe dans la navigation
//         document.querySelector(`header nav ul li a[href="${activeLink}"]`).classList.add("active");;
        
//     }

//     // Écouteur d'événement click sur les liens
//     window.addEventListener("click", (e) => {
//         if (e.target.matches("header nav ul li a")) {
//             // Désélectionne tous les liens
    

//             // Sélectionne le lien cliqué
//             e.target.classList.add("active");

//             // Enregistre le lien actif dans localStorage
//             localStorage.setItem("activeLink", e.target.getAttribute("href"));
//         }
//     });
// }


function activeLinks(){
    let allLinks=document.querySelectorAll("header nav ul li a");

    function deletActiveClass(){
        allLinks.forEach((ele)=>{
            ele.classList.remove("active");

        })
    }
    let testLocalLInk=localStorage.getItem("linkClicked")
    if(testLocalLInk){
        deletActiveClass()
        document.querySelector(`header nav ul li a[href*="${testLocalLInk}"`).classList.add("active");
    }
    
    window.addEventListener("click",(e)=>{
        if(e.target.matches("header nav ul li a")){
            localStorage.setItem("linkClicked",e.target.getAttribute("href"));
        }
    })
}


let menuButton=document.getElementById("buttonMenu");
let navMedia=document.getElementById("nav")

menuButton.addEventListener("click",(e)=>{
    navMedia.classList.add("active-sidebar")
    
})

let markButtonHide=document.getElementById("x-mark");
markButtonHide.addEventListener("click",(e)=>{
    navMedia.classList.remove("active-sidebar")
})



/*   scroll up icon*/

let scrollUPicon=document.querySelector(".scroll_up");
const he=document.getElementsByClassName("hero_section_home")[0];

console.log(scrollUPicon)
console.log(he)


window.addEventListener("scroll",(e)=>{
    if(window.scrollY>=350){
        scrollUPicon.classList.add("show")
    }
    
    else{
        scrollUPicon.classList.remove("show")
    }
})

scrollUPicon.addEventListener("click",(e)=>{
    he.scrollIntoView({behavior:'smooth'})
})




