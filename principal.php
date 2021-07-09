<DOCTYPE html>
    <html lang="pt-br">
    <head>
        <title>Cappuccino</title>    
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
     
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
        
           var pergunta=prompt("Principal caracteristica pra fazer CTF?")
            var resposta="s"

            if (pergunta == 'Atenção'){
                alert('Parabéns <3 ')
            
        } else{
            alert("...")
                window.location.href="https://www.youtube.com/watch?v=0vxCFIGCqnI"
        
        } 
        $(".nav-toggle").on('click', ()=>{
            $('.nav-toggle').slideToggle("slow")
            })  

            $(document).ready(()=>{
                $('.email').mouseenter(() => {
                    $('.email').addClass('script')
                    
                })

                $('.email').mouseleave(() => {
                    $('.email').removeClass("script");
                    
                })

                $('.password').mouseenter(()=>{
                    $('.password').addClass("script");
                })

                $(".password").mouseleave(()=>{
                    $(".password").removeClass("script");
                })
            })

            

            

    
</script>
    </head>



    <body>

   
     
         
    <link rel="shortcut icon" href="imagens/cappuccino.ico" />
    <div class="container">
        <header>
           
            <img src="imagens/cappuccinos.png" alt="cabeçalho">
            <div id="menu"> <!--INICIO DA DIV MENU -->
                    
                <input type="checkbox" id="navicon">
                <div class="nav-toggle">
                    <label for="navicon" class="hamburger">
                      <span> <img id="cafe" src="gifs/capp.gif"></span>

                  </label>
                </div>
                  <nav class="sidebar" role="complementary">
                 <ul id="navegacao">                                        
                  
                    <a href="#">
                        <li>Menu </li>
                    </a>
                    
                    <a href="#">
                        <li>Cappuccino </li> 
                    </a>
                    
                    <a href="#">
                        <li>Staff</li>
                    </a>

                    <a href="flag-easy.php">
                        <li>Flag-Easy.txt</li>
                    </a>
                   </ul>    

                     </nav>

                 
                 
            </div> <!--FIM DA DIV MENU -->
        </header>
        <main>
            <h1 id="h1">História do Cappuccino</h1>
            <section class="conteudo-a">
                <img class="img-a" src="imagens/cappuccino-texto1.jpg" alt="cappuccino">
                <p class="historia"> Criação do Cappuccino é atribuída á um monge, o monge era italiano Marco D'Aviano , 
                    foi um dos que mais resistiram a invasão dos Eslâmicos na Europa.<br>
                    No meio de uma dessas batalhas , o exército italiano impediu a entrada dos invasores no país, 
                    que na hora da fuga , deixaram para traz sacas de café.<br>
                        
                    Os italianos não curtiam tanto esse tipo de café , por ter um gosto amargo , então tiveram a brilhante ideia de misturar com leite e mel.
                    Assim , conseguiriam a iguaria deixada pelos inimigos.<br>
                        
                    Meio que sem querer , surgiu o cappuccino. Vale lembrar , 
                    que o nome é em homenagem ao D'Aviano:cappucio que significa capuz e ino, 
                    o que resulta em "pequeno capuz".<br>
                    Uma alusão ao capuz e até a cor das vestes da ordem dos monges , á qual Marco pertencia.
                    </p>
            </section>
            <h1 id="h2">História da Cappuccino Team</h1> 
            <section class="conteudo-b">
                <p class="historia" id="hb">
                    / ... .. .- -- --- / ..- -. / - . .- -- / -.. .. / .... .- -.-. -.- . .-. / .-- .... .. - . / .... .- - / -.-. .... . 
                    / -.-. .. / .--. .. .- -.-. -.-. .. --- -. --- / .-.. . / -. ..- --- ...- . / .--. . .-. ... --- -. . / -.-. .... . / ...- --- --. -.. .. --- -. ---
                    / -.-. --- -. --- ... -.-. . .-. . / .-.. .----. .... .- -.-. -.- .. -. --. / . / .- .-.. - .-. . / .--. .- .-. - .. / -..  
                    / ... .. -.-. ..- .-. . --.. --.. .- / -.. . .-.. .-.. . / .. -. ..-. --- .-. -- .- --.. .. --- -. .. .-.-.- # .-.. .- / 
                    / ... - --- .-. .. .- / # / .. -. .. --.. .. .- - .- / -.. --- .--. --- / -.-. .... . / ... .. .- -- --- / .-. .. -- .- ... - .. / -.. . .-.. ..- ... .. 
                    / -.. .- / ..- -. / -.-. . .-. - --- / -.-. --- .-. ... --- / -.. .. / .... .- -.-. -.- .. -. --. --..-- / . / -. . .-.. / ... . -. ... --- / -.-. .... . 
                    / . .-. .- ...- .- -- --- / .-. .. ..- -. .. - .. / --.- ..- .. / ... ..- / --.- ..- . ... - --- / ... . .-. ...- . .-. / -.. --- ...- . / -. --- -.
                    / -.-. .----. . .-. .- / -- --- .-.. - --- / . / ... - .- ...- .- -- --- / ... - ..- -.. .. .- -. -.. --- / -.-. --- -- . / .- .-.. / ... --- .-.. .. - --- --..-- / -- .- / ..-. .. -. 
                    / --.- ..- .- -. -.. --- / -. --- -. / # / ...- . -. ..- - / ..-. ..- --- .-. .. / ..- -. .----. .. -.. . .- .-.-.- # # -- --- ... - .-. .. .- -- --- 
                    / .-.. .- / .-. . .- .-.. - # / --.- ..- .. --..-- / .. -. ... . --. -. .. .- -- --- / .- .-.. .-.. . / .--. . .-. ... --- -. . / .-.. .- / ...- . .-. .-
                    / .- .-. - . / -.. . .-.. .-.. .----. .... .- -.-. -.- .. -. --. --..-- / -.. .. .- -- --- / .-.. --- .-. --- / .. .-.. / -.. .. .-. .. - - --- / -.. .. 
                    / --- - - . -. . .-. . / --.- ..- . ... - .- / -- .- --. -. .. ..-. .. -.-. .- / -.-. --- -. --- ... -.-. . -. --.. .- .-.-.- # # -- .- / .--. --- .. / - .. / -.-. .... .. . -.. .. .-.-.- # -....- -.-. --- ... - . .-. # /
                    / .-. . .- .. ... ..--.. # # -. --- --..-- / -. --- -. / ..- -. / -.-. . -. - . ... .. -- --- --..-- / ... --- .-.. --- / .-.. .- / - ..- .- / -.. .. ... .--. --- -. .. -... .. .-.. .. 
                    / -.-. --- -. / -. --- .. / -.-. ./ .--. .- --. .- / -- --- .-.. - --- / -.--. -- .- / ... . / ...- ..- --- .. / -- .- -. -.. .- -.-. .. / .-.. --- / ... .--. --- -. ... --- .-. / - -- .--- / ... ..--- -.--.- # . / --.- ..- .- -. -.. ---
                    / .- -... -... .. .- -- --- / .. -. .. --.. .. .- - --- / .- / ..-. --- .-. -- .- .-. . /
                    .-.. .- / -. --- ... - .-. .- / ... --.- ..- .- -.. .-. .- / . / .- -... -... .. .- -- --- / .- ...- ..- - --- / .. .-.. / -. --- ... - .-. --- / .--. .-. .. -- --- / ... - ..-    -.. . -. - . --..-- / # / .- .-.. .-.. --- .-. .- / -.-. .... . / # / .. -. .. --.. .. .- - .- / .-.. .- / -. --- ... - .-. .- / ... - --- .-. .. .- # --- .-. .- / - .. / ..-. .- -.-. -.-. 
                    / ... - . ... ... .- / -.. --- -- .- -. -.. .- / ./ -.-. ..- .. / .... .- / -.. --- ...- ..- - --- / .-. .. ... .--. --- -. -.. . .-. . / .. .-.. / -. --- ...- . .-.. .-.. .. -. --- # - .. / ... - .- .. / -.. .. ...- . .-. - . -.. --- / -.--. # # / # # / # # -.--.- # -... . -. . --..-- / -... . -. ...- . -. 
                </p>
               <img id="img-b" src="gifs/capp.gif" alt="">
            </section>
        </main>
        <footer>              

             <form>
                <h2>Login</h2>
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Email">
                    <div class="underline"></div>
                </div>
                <div class="input-field">
                    <input type="password" name="password" id="password" placeholder="Senha">
                    <div class="underline"></div>
                </div>
                <div id="descricao">
                    <textarea name="textarea" id="textarea" cols="23" rows="3" placeholder="Descrição"></textarea>
                </div>
                <button>Enviar</button>
                <p>Nesse universo de cappuccinos paralelo, <br> aqui nasce novos monges...</p>
            </form>
            <p id="rodape">&copy; 2021 -Todos os direitos reservados -<em> Cappuccino Team</em></p>
        </footer>     
    </div>
           
<?php
    $username="marco";
    $password="M4lucaopaporetorockyou2@21";
    function login($username, $password) {
        $sql = mysql_query("SELECT id, user_level FROM users WHERE password = '" . $password ."' AND username = '" . $username . "' LIMIT 1");
        if($sql === false) return false;
        else {$resp = mysql_fetch_array( $sql );
            session_regenerate_id(true);
            $session_id = $resp[ id ];
            $session_username = $username;
            $session_level = $resp[ user_level ];
            $_SESSION['user_id'] = $session_id;
            $_SESSION['user_level'] = $session_level;
            $_SESSION['user_name'] = $session_username;
            $_SESSION['user_lastactive'] = time();return true;  }}


            $_SESSION['cookinho']='S09USHsnMyctUGFyYWIzLW5zJy1BdGVuw6cnw6Mnb30=';
           
            
        
        ?>
           
           
           
            <!--<footer>rodape</foooter>-->
    
    
    </body>
    
</html>
    