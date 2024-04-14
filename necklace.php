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
                <h2>mongela <br>
                    <span></span>
                </h2>
                <br>

                <h3>TND. 12,800</h3><br>
                <br><br><br><br>
                <label for="qte">collier</label>
                <input type="number" name="qte" id="qte" onchange="updateTotal()" min="0" />
                <br><br><br><br>
                <label for="qte">Totale</label>
                <strong id="total">0</strong>
                <br><br><br><br>
                <button>Buy Now</button>
                <script>
                function updateTotal() {
                    var prix = 12.800; // or you can fetch this value dynamically if it changes
                    var qteInput = document.getElementById("qte");
                    var qte = qteInput.value;
                    var total = prix * qte;
                    document.getElementById("total").textContent = "TND. " + total.toFixed(2);
                }
                </script>
            </div>
        </div>
    </div>

    <script>
    </script>
</body>

</html>