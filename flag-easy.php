<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Flag Easy</title>    
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
        <script src="dist/bundle.js"></script>
  <script> 
 
        

      

          
        var message="";

            function clickIE() {if (document.all) {(message);return false;}}
            function clickNS(e) {if
            (document.layers||(document.getElementById&&!document.all)) {
            if (e.which==2||e.which==3) {(message);return false;}}}
            if (document.layers)
            {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
            else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

            document.oncontextmenu=new Function("return false")


 

          


            document.onkeypress = function (event) {
            if (e.ctrlKey &&
                (e.keyCode === 123)) {
                    return false;
                }
            };


            

            document.onkeydown = function(e) {
            if (e.ctrlKey &&
            (e.keyCode === 85)) {
                return false;
                }
            };  

           

            
        


    </script>
    </head>
    <body>
        
    <center><h1>Boa,se chegou até aqui foi pela atenção óbvia :')</h1>
        <h6>Procure um pouco mais que achará a flag...</h6>            
</center>
        <!--S09UQy17MT0ycGllY2Utb2YtY2FrZTE9JzInfQ==-->

</body>
</html>