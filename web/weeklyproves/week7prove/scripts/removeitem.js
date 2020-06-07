let removefromcart = document.getElementsByClassName('removefromcart')
for (let i=0; i<removefromcart.length; i++) {
    removefromcart[i].addEventListener('click', function(event) {
        let cart = localStorage.getItem('cart') || '[]'
        let parsedcart = JSON.parse(cart)
        parsedcart.filter(id=>{id!=parseInt(event.target.dataset.artworkid)})
        localStorage.setItem('cart', JSON.stringify(parsedcart))
        document.getElementById(`index_grid_images_${parseInt(event.target.dataset.artworkid)}`).remove()
    })
}
