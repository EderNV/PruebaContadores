<?php

session_start();

$_SESSION['test'] = 8;


?>

<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body onload="Reset()">
        <div>

        <form>
        
        <button type="button" onclick="click0()"><span id="b0clicks">0</span></button>
            <button type="button" onclick="return clickLink()"><span id="bclicks">0</span></button>
            
            <button type="button" onclick="return click2()"><span id="b2clicks">0</span></button>
            <button type="button" onclick="return click3()"><span id="b3clicks">0</span></button>
        </form>

        <html>
    <head>
        <title>Contador de clicks</title>


<script >
    var sec=0
    function click3(){
        sec++
        if (sec == 1) {
               
                document.getElementById("b3clicks").innerHTML = sec;
                localStorage.setItem("contador3", sec);
               
                
            }
            else
            {
               
                document.getElementById("b3clicks").innerHTML = sec;
                localStorage.setItem("contador3", sec);
                
                
            }

    }

</script>

<script >
    var sec0=0
    function click0(){


        sec0++
        if (sec0 == 1) {
               
                document.getElementById("b0clicks").innerHTML = sec0;
                
                
            }
            else
            {
               
                document.getElementById("b0clicks").innerHTML = sec0;
               
                
                
            }

    }
</script>

<script >
    var sec2=0
    function click2(){


        sec2++
        if (sec2 == 1) {
               
                document.getElementById("b2clicks").innerHTML = sec2;
                $_SESSION["test"]=sec2;
                
            }
            else
            {
               
                document.getElementById("b2clicks").innerHTML = sec2;
               $_SESSION["test"]=sec2;
                
                
            }

    }
</script>

        <script>
        var i = 0
        var secion=0
        

        function clickLink() {
            i++;
            if (i == 1) {
               
                document.getElementById("bclicks").innerHTML = i;
                document.cookie="contador="+i;
            }
            else
            {
               
                document.getElementById("bclicks").innerHTML = i;
                document.cookie="contador="+i;
            }
        }
        function Reset() {
            var nombre= "contador=";
            var decodedCookie = decodeURIComponent(document.cookie);
             var ca = decodedCookie.split(';');
             for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(nombre) == 0) {
            
            document.getElementById("bclicks").innerHTML = c;
        }
    }


            document.getElementById("b2clicks").innerHTML = <?php echo $_SESSION['test'] ?> ;
            var nombre = localStorage.getItem("contador3");
            document.getElementById("b3clicks").innerHTML = nombre ;
        }
        </script>
    
        
        
        </div>
    </body>
</html>
