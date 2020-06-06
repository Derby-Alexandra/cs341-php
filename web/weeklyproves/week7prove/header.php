        <h1>Digital Photo Sales</h1>
        <nav>
            <ul>
                <li class="link_font"><a href="index.php">Home</a></li>
                <li class="link_font"><a href="browseartwork.php">Artwork</a></li>
                <li class="link_font"><a id="cartbutton">Cart</a></li>
                <li class="link_font"><a href="artistlogin.php">Artist Login</a></li>
            </ul>
        </nav>
<script>
     document.getElementById('cartbutton').addEventListener('click', function(event) {
        let cart = localStorage.getItem('cart') || '[]'
        window.location=`cart.php?artworkids=${cart}`
     })
</script>