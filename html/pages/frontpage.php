<?php include('functions/getblogtitles.php'); ?>

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 center-block" style="float: none;">
                <img class="overlay img-circle" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/005/081/0e5/38560cb.jpg">
                <h2>Erik Røed</h2>
                <p style="text-align: justify;">
                    Hei på deg og velkommen til mitt nettsted!
                    Som introduksjonen og domenet tilsier så er altså mitt navn <strong>Erik</strong>! Jeg er født og oppvokst i de dype skoger, på <strong>Rena</strong>! For tiden er jeg bosatt i <strong>Kristiansand</strong> og studerer ved
                    <a href="https://uia.no" target="_blank">Universitetet i Agder</a>.
                    Her studerer jeg <strong>Master i Informasjonssystemer</strong>.
                    På fritiden liker jeg å drive med programmering og IT generelt.
                </p>
                <?php
                    $sql = "SELECT * FROM portfolio;";
                    $result = mysqli_query($dbc, $sql) or die("FEIL".mysqli_error($dbc));
                    echo "Test: ".mysqli_num_rows($result);
                ?>
            </div>
        </div>
    </div>
</div>