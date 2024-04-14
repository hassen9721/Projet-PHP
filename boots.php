<?php
 require_once "header.php";
 require_once "session.php";
 Verifier_session();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/product.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <title>site web de vente</title>
    <!-- <link rel="stylesheet" href="css/boots.css"> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>
    <br><br><br><br><br><br>

    <div class="container">

        <div class="imgBx">
            <img src="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true"
                alt="Nike Jordan Proto-Lyte Image">
        </div>
        <div class="details">
            <div class="content">
                <h2>Jordan Proto-Lyte <br>
                    <span>Running Collection</span>
                </h2>

                <p class="product-colors">Available Colors:
                    <span class="black active" data-color-primary="#000" data-color-sec="#212121"
                        data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto.png?raw=true"></span>
                    <span class="red" data-color-primary="#7E021C" data-color-sec="#bd072d"
                        data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_red_black.png?raw=true"></span>
                    <span class="orange" data-color-primary="#CE5B39" data-color-sec="#F18557"
                        data-pic="https://github.com/anuzbvbmaniac/Responsive-Product-Card---CSS-ONLY/blob/master/assets/img/jordan_proto_orange_black.png?raw=true"></span>
                </p>
                <h3>TND. 12,800</h3><br><br><br><br>
                <label for="qte">Quantite</label>
                <input type="number" name="qte" id="qte" onchange="updateTotal()" min="0" />
                <br><br><br><br>
                <label for="qte">Totale</label>

                <strong id="total">0</strong>
                <br><br><br><br>
                <button>Buy Now</button>
            </div>
        </div>
    </div>

    <script>
    // Change The Picture and Associated Element Color when Color Options Are Clicked.
    $(".product-colors span").click(function() {
        $(".product-colors span").removeClass("active");
        $(this).addClass("active");
        $(".active").css("border-color", $(this).attr("data-color-sec"))
        $("body").css("background", $(this).attr("data-color-primary"));
        $(".content h2").css("color", $(this).attr("data-color-sec"));
        $(".content h3").css("color", $(this).attr("data-color-sec"));
        $(".container .imgBx").css("background", $(this).attr("data-color-sec"));
        $(".container .details button").css("background", $(this).attr("data-color-sec"));
        $(".imgBx img").attr('src', $(this).attr("data-pic"));
    });

    function updateTotal() {
        var prix = 12.800; // or you can fetch this value dynamically if it changes
        var qteInput = document.getElementById("qte");
        var qte = qteInput.value;
        var total = prix * qte;
        document.getElementById("total").textContent = "TND. " + total.toFixed(2);
    }
    </script>
</body>

</html>