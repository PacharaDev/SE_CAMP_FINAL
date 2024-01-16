<html>
    <head>
        <meta charset= "utf-8">
    </head>
    <body>
        <center>
            <h1>ตารางสูตรคูณแม่  {{ $myinput }}</h1>
            <div class = "box" >
                <div>
                    <?php
                    for($i = 1; $i <= 24; $i++){
                        echo "{$myinput} x {$i} = " . $myinput * $i . '<br/>';
                    }
                    ?>
                </div>
            </div>
        </center>
    </body>
</html>
