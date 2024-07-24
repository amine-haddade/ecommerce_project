const main_product = document.getElementById("principal_image");
const small_product = document.getElementsByClassName("small_product");

// Check if main_product and small_product exist
if (main_product && small_product.length > 0) {
    // Loop through each small product element
    for (let i = 0; i < small_product.length; i++) {
        // Assign onclick event handler
        small_product[i].onclick = function() {
            main_product.src = small_product[i].src;
        };
    }
}
