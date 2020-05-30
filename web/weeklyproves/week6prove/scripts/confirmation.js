let image_indexes = JSON.parse(sessionStorage.getItem("cart_items"))
if (!image_indexes.length) {
    image_indexes = JSON.parse(sessionStorage.getItem("confirmation_items")) || []
}

if (image_indexes.length) {
    image_indexes.forEach(image_index => {
        document.getElementById('confirmation_cart_items').innerHTML += `
            <div id="cart_item_${image_index}" class="cart_items_grid">
                <img class="cart_image" src=${all_images[image_index].src}>
                <div class="cart_description">
                    <p>${all_images[image_index].title}</p>
                    <p>${all_images[image_index].price}</p>
                </div>
            </div>
        `
    })
} else {
    // if there are no items in the array, display the 'your cart is empty' message
    document.getElementById('confirmation_cart_items').style.display = 'none'
}

sessionStorage.setItem("confirmation_items", JSON.stringify(image_indexes))
sessionStorage.setItem("cart_items", '[]')