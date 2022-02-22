

<div class="head">
        <div class="logo">
                    <a href=""><img src="https://raw.githubusercontent.com/rkosova/pineanddine_hamk/master/images/pinelogo.png"></a>
                </div>
                <div class="navbar">
                    <a href="home.html">home page</a>
                    <a href="menu.html">menu</a>
                    <a href="reservetable.html">reserve table</a>
                    <a href="aboutus.html">about us</a>
                    <a href="Contact.html">contact</a>
                </div>
    </div>

    <style>
  .head {
 display: flex;
 align-items: center;
 justify-content: space-between;
}

.logo img{
 width: 100px;
 height: 100px;
}

.navbar {
 flex-basis: 50%;
}

.navbar a{
 font-family: 'Playfair Display', serif;
 font-size: 22px;
 color: black;
 letter-spacing: 0.05em;
 text-decoration: underline 0.15em rgba(0, 0, 0, 0);
   text-underline-offset: 0.2em;
   transition: text-decoration-color 150ms, text-underline-offset 200ms;
   margin-left: 2%;
}

.navbar a:hover {
 text-decoration-color: black;
   text-underline-offset: 0.4em;
}

</style>