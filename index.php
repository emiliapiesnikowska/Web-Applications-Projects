<?php 
require('mongodb.php');
	
	?>
<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Najlepsze przepisy!</title>
    <meta name="description" content="Blog dotyczący kuchni wegańskiej. Przedstawienie przepisów na wegańskie dania i napoje." />
    <meta name="keywords" content="gotowanie, przepisy, wegańskie" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="author" content="Emilia Pieśnikowska" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="style.css" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="application/javascript" src="javascript.js"></script>
    

</head>

<body>
    <a name="gora"></a>
    <header>
        <h1 id="logo"> WEGAŃSKIE PRZEPISY</h1>
        <nav>
            <ul class="menu">
                <li><a href="index.php">STRONA GŁÓWNA</a></li>
                <li><a href="contact.php">GALERIA ZDJĘĆ</a></li>

            </ul>
            <div id="photos" class="photos">
                <figure class="photo">
                    <img src="zdjecia/matcha.jpg" />
                </figure>
                <figure class="photo">
                    <img src="zdjecia/curry.jpg" />
                </figure>
                <figure class="photo1">
                    <img src="zdjecia/bowl.jpg" />
                </figure>
                <figure class="photo">
                    <img src="zdjecia/mieta.jpg" />
                </figure>
                <figure class="photo">
                    <img src="zdjecia/tost.jpg" />
                </figure>
                <figure class="photo">
                    <img src="zdjecia/green.jpg" />
                </figure>
            </div>

        </nav>


    </header>

    <main>
        <section >
            <div class="login">
                <form enctype="multipart/form-data" action="login.php" method="POST">

                    Login:<input type="text" name="login"><br />
                    Hasło:<input type="password" name="haslo" /><br />
                    <input type="submit" name="submit" value="Zaloguj się" />
                </form>
				
				</br>
				</br>
				</br>
				
				
				
				<form enctype="multipart/form-data" action="register.php" method="POST">
		<p><b>Zarejestruj się jeśli to Twoje pierwsze odwiedziny na stronie.</b></br></br>
			Nazwa użytkownika:<input type="text" value="username" name="username"/></br>
			E - mail:<input type="text"  name="mail"/></br>
			Wpisz hasło:<input type="password"  name="password" /></br>
			Powtórz hasło:	<input type="password"  name="password2" /></br>
		<input type="submit" value="Zarejestruj się!" name="register"/>
	</form>
            </div>
        </section>






        <article class="container">

            <section>
                <h1 class="ostatnie">OSTATNIE WPISY</h1>

                <div id="square">
                    <h2 class="title">SYROP DYNIOWY</h2>
                    <img src="zdjecia/syrop.jpg" class="photo2" />
                    <p> Korzenny, rozgrzewający – do kultowej kawy, owsianki, ale też do lodów i deserów. Syrop dyniowy pumpkin spice to pozycja obowiązkowa w jesiennej kuchni!</p>
                </div>

                <div id="square">
                    <h2 class="title"> KRĄŻKI JABŁKOWE</h2>
                    <img src="zdjecia/krazki.jpg" class="photo2" />
                    <p class="opis">Robimy je z cebuli lub pora, ale rzadko z owoców. Jabłka są do tego idealne, a ciepłe chrupiące krążki z jabłek smakują i pachną niczym pyszne racuszki.</p>


                </div>

                <div id="square">
                    <h2 class="title">KOTLETY Z MARCHEWKI</h2>
                    <img src="zdjecia/kotlety.jpg" class="photo2" />
                    <p>Prosty w przyrządzeniu, odpowiednio zbilansowany, a do tego jeszcze smaczny posiłek na diecie roślinnej? To łatwe! Przekonaj się sam, udowodnię Ci to właśnie w tym wpisie.</p>
                </div>

                <div id="square">
                    <h2 class="title">PIECZONY KALAFIOR</h2>
                    <img src="zdjecia/kalafior.jpg" class="photo2" />
                    <p>Idealne kawałki pieczonego kalafiora w genialnej panierce. Razem z nuggetsami z pieczarekto moje ulubione finger food. Spróbujcie przygotować je sami!</p>
                </div>

            </section>


        </article>



    </main>



    <footer>
        Najlepsze wegańskie przepisy Emilia Pieśnikowska &copy; wszelkie prawa zastrzeżone Masz jakieś pytania? <a href="mailto: emilia.piesnikowska@gmail.com">Kliknij, aby do mnie napisać!</a>

    </footer>
    <a href="#gora">Go to the top of the page</a><br />
 <script src="javascript.js"></script>
</body>

</html>