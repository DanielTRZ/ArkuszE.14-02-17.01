<!DOCTYPE html>
<html lang="pl">

  <head>
  <meta charset="utf-8">
  <title>Wynajmujemy Samochody</title>
  <meta name="description" content="Opis zawartości strony dla wyszukiwarek">
  <meta name="keywords" content="słowa, kluczowe, opisujące, zawartość">
  <link rel="stylesheet" href="styl.css">
  </head>
  <body>

 <div id="baner">
 <h1>Wyanjem Samochodów</h1>
 </div>
	  
 <div id="lewy">
 <h2>DZIŚ POLECAMY TOYOTĘ ROCZNIK 2014</h2>
     <?php
     $connect=mysqli_connect('localhost','root','','wynajem')or die ("Błąd połączenia :".mysqli_error());
     $q1=mysqli_query($connect,'SELECT id, model, kolor FROM `samochody` WHERE rocznik = 2014 AND marka = "Toyota"'); 
		
     while($data = mysqli_fetch_assoc($q1))
     {
     echo $data['id'].' '.'Toyota'.' '.$data['model'].' '.'Kolor:'.' '.$data['kolor'];
     }
  
     ?>
 <h2>WSZYSTKIE DOSTĘPNE SAMOCHODY</h2>
     <?php
     $connect=mysqli_connect('localhost','root','','wynajem')or die ("Błąd połączenia :".mysqli_error());
     $q1=mysqli_query($connect,'SELECT id, marka, model, rocznik FROM samochody'); 
						
     while($data = mysqli_fetch_assoc($q1))
     {
     echo '<li>'.$data['id'].' '.$data['marka'].' '.$data['model'].' '.$data['rocznik'].'</li>';
     }
     ?>
 </div>
 <div id="srodkowy">
 <h2>ZAMÓWIONE AUTA Z NUMERAMI TELEFONÓW KLIENTÓW</h2>
     <?php
     $connect=mysqli_connect('localhost','root','','wynajem')or die ("Błąd połączenia :".mysqli_error());
     $q1=mysqli_query($connect,'SELECT samochody.id, model, telefon FROM samochody JOIN zamowienia ON samochody.id = zamowienia.Samochody_id'); 
						
      while($data = mysqli_fetch_assoc($q1))
      {
      echo '<ul>'.$data['id'].' '.$data['model'].' '.$data['telefon'].'</ul>';
      }        
     ?>
 </div>
 <div id="prawy">
   
 <h2>NASZA OFERTA</h2>
	 
 <ul>
 <li>Fiat</li>
 <li>Toyota</li>
 <li>Opel</li>
 <li>Mercedes</li>
 </ul>
	 
 Tu pobierzesz naszą<a href="baza.txt"> bazę danych</a>
 <p>autor strony:00000000000</p>
 </div>
 </body>
 </html>
 
