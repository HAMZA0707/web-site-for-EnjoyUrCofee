


<!DOCTYPE html>
<html lang="en">
<head>

 <style>
        :root{
    --brown:#89260d;
    --red:#ff0000;
    --brow:#rgb(237, 147, 1)
}

*{
    margin:0; padding:0;
    box-sizing: border-box;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    scroll-behavior: smooth;
    scroll-padding-top: 6rem;
    overflow-x: hidden;
}

section{
    padding:2rem 9%;
}

.heading{
    text-align: center;
    font-size: 4rem;
    color:rgb(0, 0, 0);
    padding:1rem;
    margin:2rem 0;
    background:#ffdad1 ;
}

.heading span{
    color:var(--brown);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    border-radius: 5rem;
    background:#333;
    color:#fff;
    padding:.9rem 3.5rem;
    cursor: pointer;
    font-size: 1.7rem;
    filter: drop-shadow(2px 2px 2px black);
}

.btn:hover{
    background:var(--brown);
}

header{
    position: fixed;
    top:0; left:0; right:0;
    background:#89260d;
    padding:2rem 9%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 1000;
    max-height: 90px;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
}

header .logo{
width: 100px ;
height: 100px;
}


header .navbar a{
    font-size: 2rem;
    padding:0 1.5rem;
    color:rgb(255, 255, 255);
    margin-left: 20px;
}

header .navbar a:hover{
    color:var(--brow);
}

header .icons a{
    font-size: 2.5rem;
    color:rgb(255, 255, 255);
    margin-left: 1.5rem;
}

header .icons a:hover{
    color:var(--red);
}

header #toggler{
    display: none;
}

header .fa-bars{
    font-size: 3rem;
    color:#333;
    border-radius: .5rem;
    padding:.5rem 1.5rem;
    cursor: pointer;
    border:.1rem solid rgba(0,0,0,.3);
    display: none;
}

.home{
    display: flex;
    align-items: center;
    min-height: 100vh;
    background-size: cover;
    background-position: center;
}
.vid-b{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
}

.home .content{
    max-width: 50rem;
}

.home .content h3{
    font-size: 6rem;
    color:rgb(0, 0, 0);
}

.home .content span{
    font-size: 3.5rem;
    color:var(--brown);
    padding:1rem 0;
    line-height: 1.5;
}

.home .content p{
    font-size: 1.5rem;
    color:rgb(255, 255, 255);
    padding:1rem 0;
    line-height: 1.5;
}

.about .row{
    display: flex;
    align-items: center;
    gap:2rem;
    flex-wrap: wrap;
    padding:2rem 0;
    padding-bottom: 3rem;
}

.about .row .im{
    flex:1 1 40rem;
    position: relative;
}

.about .row .im img{
    width:100%;
    border:1.5rem solid #fff;
    border-radius: .5rem;
    filter: drop-shadow(2px 2px 2px black);
    height: 100%;
    object-fit: cover;
}

.about .row .im h3{
    position: absolute;
    top:50%; mix-blend-mode: darken;
    font-size: 3rem;
    background:#fff;
    width:100%;
    padding:1rem 2rem;
    text-align: center;
    mix-blend-mode: screen;
}

.about .row .content{
    flex:1 1 40rem;
}

.about .row .content h3{
    font-size: 3rem;
    color:#333;
}

.about .row .content p{
    font-size: 1.5rem;
    color:#999;
    padding:.5rem 0;
    padding-top: 1rem;
    line-height: 1.5;
}

.icons-container{
    background:#eee;
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons{
    background:#fff;
    border:.1rem solid rgba(0,0,0,.1);
    padding:2rem;
    display: flex;
    align-items: center;
    flex:1 1 25rem;
}

.icons-container .icons img{
    height:5rem;
    margin-right: 2rem;
}

.icons-container .icons h3{
    color:#333;
    padding-bottom: .5rem;
    font-size: 1.5rem;
}

.icons-container .icons span{
    color:#555;
    font-size: 1.3rem;
}

.products .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.products .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    border:.1rem solid rgba(0,0,0,.1);
    position: relative;    
}

.products .box-container .box .discount{
    position: absolute;
    top:0.5rem; left:0.5rem;
    padding:0.5rem 1rem;
    font-size: 0.5rem;
    color:var(--brown);
    background:rgba(255, 51, 153,.05);
    z-index: 1;
    border-radius: .5rem;
}

.products .box-container .box .image{
    position: relative;
    text-align: center;
    padding-top: 0.5rem;
    padding-left: 0px;
    padding-right: 0px;
    overflow:hidden;
    
    
}

.products .box-container .box .image img{
    height:25rem;
    
}

.products .box-container .box:hover .image img{
    transform: scale(1.1);
}

.products .box-container .box .image .icons{
    position: absolute;
    bottom:-7rem; left:0; right:0;
    display: flex;
}

.products .box-container .box:hover .image .icons{
    bottom:0;
}

.products .box-container .box .image .icons a{
    height: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    width:50%;
    background:var(--brown);
    color:#fff;
}

.products .box-container .box .image .icons .cart-btn{
    border-left: .1rem solid #fff7;
    border-right: .1rem solid #fff7;
    width:100%;
}

.products .box-container .box .image .icons a:hover{
    background:#333;
}

.products .box-container .box .content{
    padding:2rem;
    text-align: center;
}

.products .box-container .box .content h3{
    font-size: 2.5rem;
    color:rgb(0, 0, 0);
}

.products .box-container .box .content .price{
    font-size: 2.5rem;
    color:var(--brown);
    font-weight: bolder;
    padding-top: 1rem;
}

.products .box-container .box .content .price span{
    font-size: 1.5rem;
    color:#999;
    font-weight: lighter;
    text-decoration: line-through;
}

.review .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.review .box-container .box{
    flex:1 1 30rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border-radius: .5rem;
    padding:3rem 2rem;
    position: relative;
    border:.1rem solid rgba(0,0,0,.1);
}

.review .box-container .box .fa-quote-right{
    position: absolute;
    bottom:3rem; right:3rem;
    font-size: 6rem;
    color:#eee;
}

.review .box-container .box .stars i{
    color:var(--brown);
    font-size: 2rem;
}

.review .box-container .box p{
    color:#999;
    font-size: 1.5rem;
    line-height: 1.5;
    padding-top: 2rem;
}

.review .box-container .box .user{
    display: flex;
    align-items: center;
    padding-top: 2rem;
}

.review .box-container .box .user img{
    height:6rem;
    width:6rem;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 1rem;
}

.review .box-container .box .user h3{
    font-size: 2rem;
    color:#333;
}

.review .box-container .box .user span{
    font-size: 1.5rem;
    color:#999;
}

.contact .row{
    display: flex;
    flex-wrap: wrap-reverse;
    gap:1.5rem;
    align-items: center;
}

.contact .row form{
    flex:1 1 40rem;
    padding:2rem 2.5rem;
    box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    border:.1rem solid rgba(0,0,0,.1);
    background: #fff;
    border-radius: .5rem;
}

.contact .row .image{
    flex:1 1 40rem;
}

.contact .row .image img{
    width: 100%;
}

.contact .row form .box{
    padding:1rem;
    font-size: 1.7rem;
    color:#333;
    text-transform: none;
    border:.1rem solid rgba(0,0,0,.1);
    border-radius: .5rem;
    margin:.7rem 0;
    width: 100%;
}

.contact .row form .box:focus{
    border-color: var(--brown);
}

.contact .row form textarea{
    height: 15rem;
    resize: none;
}

.footer .box-container{
    display: flex;
    flex-wrap: wrap;
    gap:1.5rem;
}

.footer .box-container .box{
    flex:1 1 25rem;
}

.footer .box-container .box h3{
    color:#333;
    font-size: 2.5rem;
    padding:1rem 0;
}

.footer .box-container .box a{
    display: block;
    color:#666;
    font-size: 1.5rem;
    padding:1rem 0;
}

.footer .box-container .box a:hover{
    color:var(--brown);
    text-decoration: underline;
}

.footer .box-container .box  img{
    margin-top: 1rem;
}

.footer .credit{
    text-align: center;
    padding:1.5rem;
    margin-top: 1.5rem;
    padding-top: 2.5rem;
    font-size: 2rem;
    color:#333;
    border-top: .1rem solid rgba(0,0,0,.1);
    padding-bottom: 9rem;
}

.footer .credit span{
    color:var(--brown);
}
/* media queries  */
@media (max-width:991px){
    
    html{
        font-size: 55%;
    }

    header{
        padding:2rem;
    }

    section{
        padding:2rem;
    }

    .home{
        background-position: left;
    }

}

@media (max-width:768px){

    header .fa-bars{
        display: block;
    }

    header .navbar{
        position:absolute;
        top:100%; left:0; right:0;
        background:#eee;
        border-top: .1rem solid rgba(0,0,0,.1);
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    header #toggler:checked ~ .navbar{
        clip-path:polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }

    header .navbar a{
        margin:1.5rem;
        padding:1.5rem;
        background:rgb(255, 144, 85);
        border:.1rem solid rgba(0,0,0,.1);
        display: block;
    }

    .home .content h3{
        font-size: 5rem;
    }

    .home .content span{
        font-size: 2.5rem;
    }

    .icons-container .icons h3{
        font-size: 2rem;
    }
    
    .icons-container .icons span{
        font-size: 1.7rem;
    }
    .roww .column .card{
      display: block;
    }
    
}

@media (max-width:450px){
    
    html{
        font-size: 50%;
    }

    .heading{
        font-size: 3rem;
    }

}
.roww {
    display: flex;
    
    text-align: center;
    padding:1rem;
    margin:2rem 0;
  }
  .column {
    width: 100%;
    padding: 0.5em 0;
  }
  h1 {
    width: 100%;
    text-align: center;
    font-size: 3.5em;
    padding:1rem;
    margin:2rem 0;
    color: #1f003b;
    background:#ffdad1 ;
  }
  h1 span{
    color: #89260d;
  }
  .card {
    box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
    padding: 3.5em 1em;
    border-radius: 0.6em;
    color: #1f003b;
    cursor: pointer;
    transition: 0.3s;
    background-color: #ffffff;
  }
  .card .img-container {
    width: 12em;
    height: 12em;
    background-color: #ffe1a5;
    padding: 0.5em;
    border-radius: 50%;
    margin: 0 auto 2em auto;
  }
  .card img {
    width: 100%;
    border-radius: 50%;
  }
  .card h3 {
    font-weight: 500;
  }
  .card p {
    font-weight: 300;
    text-transform: uppercase;
    margin: 0.5em 0 2em 0;
    letter-spacing: 2px;
  }
  .icons {
    width: 20%;
    min-width: 180px;
    margin: auto;
    display: flex;
    justify-content: space-between;
  }
  .card a {
    text-decoration: none;
    color: inherit;
    font-size: 1.4em;
  }
  .card:hover {
    background: linear-gradient(#ea6c45, #f8ce8b);
    color: #ffffff;
  }
  .card:hover .img-container {
    transform: scale(1.15);
  }
  @media  (max-width:  768px) {
    section .roww {
      padding: 1em 7em;
      display: block;
    }
    section .roww h1.or{
        width: 550px;
        margin-left: -65px;
    }
    
  }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive flower website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   

<!-- header section starts  -->

<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <img class="logo" src="images/logoo.png" alt="">

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#review">review</a>
        <a href="#our team">our team</a>
        <a href="#cn">contact</a>
    </nav>

    <div class="icons">
        <a href="index4.php" class="fas fa-heart"></a>
        <a href="index4.php" class="fas fa-shopping-cart"></a>
        <a href="index2.php" class="fas fa-user"></a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <video src="images/vid.mp4" loop autoplay muted play-inline class="vid-b"></video>
        <h3>Enjoy Ur Coffee</h3>
        <span> The best coffe & and its derivatives</span>
        <p> </p>
        <a href="#products" class="btn">Shop now</a>
        
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span> about </span> us </h1>

    <div class="row">

        <div class="im">
            <img  src="images/1.png" alt="">
            <h3>Enjoy Ur Coffee</h3>
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Enjoy Ur Coffee offers a unique coffee house environment unlike others. We are not only a place to drop in 
                and get your morning cup of coffee (although you are more than welcome to do that), we are a place where you 
                can sit down and enjoy that tailor-made cup of coffee. If you need to work, we have a seating area created specifically for you.
                 If you need to rest, we have a soft-seating area in front of a stone fire place that is perfect for your weary mind and body. 
                 We offer a delicious variety of Coffee. We have everything from classic coffee to our house made specialty beverages.  
                 All of our cakes are made in-house with all natural ingredients (no chemicals or preservatives) ensuring you the highest 
                 quality in taste & health.  You can complete your coffee with one of our delicious sweet treats made by our very own baker.
                 We look forward to serving you at Enjoy Ur Coffee!</p>
            <a href="" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <img src="images/icon-1.png" alt="">
        <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-2.png" alt="">
        <div class="info">
            <h3>2 days returns</h3>
            <span>moneyback guarantee</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-3.png" alt="">
        <div class="info">
            <h3>offer & gifts</h3>
            <span>on all orders</span>
        </div>
    </div>

    <div class="icons">
        <img src="images/icon-4.png" alt="">
        <div class="info">
            <h3>secure paymens</h3>
            <span>protected by paypal</span>
        </div>
    </div>
   
</section>

<!-- icons section ends -->

<!-- prodcuts section starts  -->

<section class="products" id="products">

    <h1 class="heading"> latest <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/11.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Green lemon cake</h3>
                <div class="price"> mad5.99 <span>mad9.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-15%</span>
            <div class="image">
                <img src="images/2.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Sweet strawberry</h3>
                <div class="price"> mad1.99 <span>mad3.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/3.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Cheesecake</h3>
                <div class="price"> mad2.99 <span>mad3.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-20%</span>
            <div class="image">
                <img src="images/4.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Banana and vanilla</h3>
                <div class="price"> mad12.99 <span>mad15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-17%</span>
            <div class="image">
                <img src="images/5.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Nespresso</h3>
                <div class="price"> mad10.99 <span>mad14.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-3%</span>
            <div class="image">
                <img src="images/6.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Breakfast</h3>
                <div class="price">mad15.99 <span>mad18.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-18%</span>
            <div class="image">
                <img src="images/7.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Pistachio Ice Cream Cone</h3>
                <div class="price"> mad10.99 <span>mad12.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-10%</span>
            <div class="image">
                <img src="images/8.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Jus Orange</h3>
                <div class="price"> mad10.99 <span>mad15.99</span> </div>
            </div>
        </div>

        <div class="box">
            <span class="discount">-5%</span>
            <div class="image">
                <img src="images/9.png" alt="">
                <div class="icons">
                    <a href="index4.php" class="fas fa-heart"></a>
                    <a href="index4.php" class="cart-btn">add to cart</a>
                    <a href="index1.php" class="fas fa-share"></a>
                </div>
            </div>
            <div class="content">
                <h3>Ice Cream Sundae</h3>
                <div class="price"> mad13.99 <span>mad16.99</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- prodcuts section ends -->

<!-- review section starts  -->

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Thanks for the great coffee.</p>
        <div class="user">
            <img src="images/pic-1.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>How wonderful you are at your work, thanks for the service.</p>
        <div class="user">
            <img src="images/pic-2.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Thank you for this service it's a great experience.</p>
        <div class="user">
            <img src="images/pic-3.png" alt="">
            <div class="user-info">
                <h3>john deo</h3>
                <span>happy customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
    
</section>
<!-- review section ends -->

<!-- our team section starts  -->

<section class="our team" id="our team">
    <div class="roww">
      <h1 class="or">Our <span>Team</span> </h1>
    </div>
    <div class="roww">
      <!-- Column 1-->
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="images/hamza.png" >
          </div>
          <h3>Hamza Benmoussa</h3>
          <p>Etudiant</p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Column 2-->
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="images/simo.png" >
          </div>
          <h3>Mohammed Chirah</h3>
          <p>Etudiant</p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <!-- Column 3-->
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="images/soukaina.png" >
          </div>
          <h3>Soukaina Talibi</h3>
          <p>Etudiant</p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card">
          <div class="img-container">
            <img src="images/laila.png" >
          </div>
          <h3>Laila Libourki</h3>
          <p>Etudiant</p>
          <div class="icons">
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin"></i>
            </a>
            <a href="#">
              <i class="fab fa-github"></i>
            </a>
            <a href="#">
              <i class="fas fa-envelope"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer" id="cn">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">our Team</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorite</a>
        </div>

        <div class="box">
            <h3>locations</h3>
            <a href="#">Morocco , Casablanca , 2Mars</a>
          
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+212-456-7890</a>
            <a href="#">Enjoy Ur Coffee@gmail.com</a>
            <a href="#">Casablanca - morroco 24000</a>
            <img src="images/payment.png" alt="">
        </div>

    </div>

    <div class="credit"> created by <span> Enjoy Ur Coffee</span> | all rights reserved </div>

</section>

<!-- footer section ends -->
    
</body>
</html>

