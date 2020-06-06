let addtocart = document.getElementsByClassName('addtocart')
for (let i=0; i<addtocart.length; i++) {
    addtocart[i].addEventListener('click', function(event) {
        let cart = localStorage.getItem('cart') || '[]'
        let parsedcart = JSON.parse(cart)
        parsedcart.push(event.target.dataset.artworkid)
        localStorage.setItem('cart', JSON.stringify(parsedcart))
    })
}
