function add_to_cart(event) {
    let add_item_index = Number(event.target.dataset.index)
    let cart_items = JSON.parse(sessionStorage.getItem("cart_items")) || []
    cart_items.push(add_item_index)
    sessionStorage.setItem("cart_items", JSON.stringify(cart_items));
}
