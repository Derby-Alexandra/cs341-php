// read session storage and get array of image indexes
let image_indexes = JSON.parse(sessionStorage.getItem("cart_items")) || []

// generate divs or img grid using the image index array to get image
//  data from the all_images array 
// if the array has items, display those items (ie. generate the cart item divs)
if (image_indexes.length) {
    image_indexes.forEach(image_index => {
        document.getElementById('cart_items_grid').innerHTML += `
            <div id="cart_item_${image_index}" class="cart_items_grid">
                <img class="cart_image" src=${all_images[image_index].src}>
                <div class="cart_description">
                    <p>${all_images[image_index].title}</p>
                    <p>${all_images[image_index].price}</p>
                    <button class="remove_from_cart" data-index=${image_index}>Remove from Cart</button>
                </div>
            </div>
        `
        document.getElementById('checkout_button_div').style.display = 'block'
    })
    let remove_buttons = Array.from(document.getElementsByClassName(`remove_from_cart`))
    remove_buttons.forEach(button => {
        button.addEventListener('click', remove_from_cart)
    }
    
    )
} else {
    // if there are no items in the array, display the 'your cart is empty' message
    document.getElementById('empty_cart').style.display = 'block'
    document.getElementById('checkout_button_div').style.display = 'none'
}

function remove_from_cart(event) {
    // remove the cart item from the session storage
    let remove_item_index = Number(event.target.dataset.index)
    let cart_items = JSON.parse(sessionStorage.getItem("cart_items")) || []
    cart_items = cart_items.filter(item_index => {
        return item_index !== remove_item_index
    })
    sessionStorage.setItem("cart_items", JSON.stringify(cart_items));
    // remove the html elements from the page
    document.getElementById(`cart_item_${remove_item_index}`).remove()
    if (!cart_items.length) {
        document.getElementById('empty_cart').style.display = 'block'
        document.getElementById('checkout_button_div').style.display = 'none'

    }
}

document.getElementById("checkout_button").addEventListener("click", function(){
    window.location="checkout.php"
  });


