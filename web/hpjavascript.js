let grid_images = document.getElementsByClassName('grid_images')
for (let i=0; i<grid_images.length; i++) {
    grid_images[i].addEventListener('click', image_zoom)
}

function image_zoom(event) {
    document.getElementById('image_zoom').style.display = 'block'
    let target_link = event.target.src  
    document.getElementById('zoom_style').src = target_link
}

function close_image() {
    document.getElementById('image_zoom').style.display = 'none'
}

