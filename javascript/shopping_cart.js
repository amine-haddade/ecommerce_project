// ready()
// function ready() {
//     let buttonAddToCart = document.querySelectorAll(".product .button-add-cart i");
//     for (let i = 0; i < buttonAddToCart.length; i++) {
//         let button = buttonAddToCart[i];
//         button.addEventListener("click", (e) => {

//             let buttonClicked = e.target;

//             let divProduit = buttonClicked.parentElement.parentElement.parentElement;

//             let priceProduit = divProduit.querySelector(".prix h5").innerText;

//             let title = divProduit.querySelector("h4").innerText;

//             let imgSrc = divProduit.querySelector("a img").src;

//             AddToCart(title, priceProduit, imgSrc);

            
//         });
//     }
// }

// function AddToCart(title, price, img) {
//     let table = document.querySelector(".table tbody");
//     if (!table) {
//         console.log("Table element not found");
//         return;
//     }
    
//     let newtr = document.createElement("tr");
//     let trContent = `
//         <td><img class="image_cart" src="${img}" alt=""></td>
//         <td>
//             <p class="nameCatégorie">
//                 Catégorie
//             </p>
//             <p class="nameProduit">
//                 ${title}
//             </p>
//         </td>
//         <td class="price">${price}</td>
//         <td>
//             <input type="number" min="1" max="10" value="1">
//         </td>
//         <td>
//             <i class="fa-regular fa-trash-can"></i>
//         </td>`;
    
//     newtr.innerHTML = trContent;
//     table.appendChild(newtr);
// }


