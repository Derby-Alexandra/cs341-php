// generate the image elements
let images_div = document.getElementById('grid_for_images')
all_images.forEach((image, index) => {
    images_div.innerHTML += `<img src='${image.src}' data-index=${index} class='grid_images'>`
})
    

let grid_images = document.getElementsByClassName('grid_images')
for (let i=0; i<grid_images.length; i++) {
    grid_images[i].addEventListener('click', image_zoom)
}

function image_zoom(event) {
    let imageIndex = event.target.dataset.index
    document.getElementById('image_zoom').style.display = 'block'
    document.getElementById('para_zoom').innerHTML = `
        ${all_images[imageIndex].title}<br>
        ${all_images[imageIndex].price}<br>
        <button data-index=${imageIndex} class="add_to_cart">Add to Cart</button>
    `
    document.getElementsByClassName('add_to_cart')[0].addEventListener('click', add_to_cart)
    let target_link = event.target.src  
    document.getElementById('zoom_style').src = target_link
}

function close_image() {
    document.getElementById('image_zoom').style.display = 'none'
}

function add_to_cart(event) {
    let add_item_index = Number(event.target.dataset.index)
    let cart_items = JSON.parse(sessionStorage.getItem("cart_items")) || []
    cart_items.push(add_item_index)
    sessionStorage.setItem("cart_items", JSON.stringify(cart_items));
}

