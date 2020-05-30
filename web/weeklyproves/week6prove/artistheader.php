<h1>Digital Photo Sales</h1>
<nav>
    <ul>
        <li class="link_font"><a href="artistaccount.php">Home</a></li>
        <li class="link_font"><a href="accountinformation.php">Account</a></li>
        <li class="link_font"><a class="artistlink" href="">Artwork</a></li>
        <li class="link_font"><a href="index.php">Logout</a></li>
    </ul>
</nav>
<script>
    let userdata = localStorage.getItem('userdata')
    console.log('userdata: ', userdata)
    document.getElementById('artistlink').href = "artworkinformation.php?artistid=" + userdata.artistid
</script>
    