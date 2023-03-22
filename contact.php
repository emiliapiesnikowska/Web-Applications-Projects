

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

</head>

<body>


    <header>
        <h1 id="logo"> WEGAŃSKIE PRZEPISY</h1>

        <nav>
            <ul class="menu">
                <li><a href="indexzalogowany.php">STRONA GŁÓWNA</a></li>
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
        <section>
			
            <form enctype="multipart/form-data" action="upload.php"  method="POST">
				<div id="tabela">
				  <h1>Wrzuć zdjęcie do swojej galerii!<h1>
				  <h4>Podziel się z nami swoimi przepisami!<h4/>
                    <input type="text" name="filetitle" placeholder="Tytuł zdjęcia" /><br/>
                    <input type="text" value="Watermark" name="watermark" /><br/>
					<input type="text" value="Autor" name="name"/><br/>
					<input type="file" name="file" /><br/>
                    <input type="radio" name="prywatnosc" value="public" checked>Zdjęcie publiczne<br />
                    <input type="radio" name="prywatnosc" value="private">Zdjęcie prywatne<br />
                    <button type="submit" name="submit">Wrzuć zdjęcie</button>
                </div>
            </form>
           
            
        </section>


        <section>

            <h2>Galeria zdjęć</h2>

		
			

            <div id="galeria">
              <?php include('galeria.php');?>

            </div>


        </section>

    </main>



    <footer>
        Najlepsze wegańskie przepisy Emilia Pieśnikowska &copy; wszelkie prawa zastrzeżone. Masz jakieś pytania? <a href="mailto: emilia.piesnikowska@gmail.com">Kliknij, aby do mnie napisać!</a>
    </footer>
</body>

</html>