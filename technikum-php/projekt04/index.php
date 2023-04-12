<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podstawy aplikacji internetowych</title>
</head>
<body>
    <h2>Jakiego polecenia użyjecie aby zmienić kolor tekstu na zielony?</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus quae earum, laboriosam placeat maiores facere alias adipisci atque velit id quidem inventore dignissimos error, corporis dolorem, sed quas modi labore!
    </p>
    <ol>
<li>
    <pre><font color="#00ff00">Tekst</font></pre>
</li>
<li>
    <p style="color: #00ff00;">Tekst</p>
</li>
<li>
    .kolorzielony { color: #00ff00;}
    <p class="kolorzielony">Tekst</p>
</li>
<li>
    <p id ="kolorzielony">Tekst</p>
</li>
</ol> 
<hr>
<h2>Jakiego znacznika należy użyć, aby tekst był w następnej linii?</h2>
<ol>
    <li>Należy użyć komendy: br</li>
</ol>
<hr>
<h2>
    <h2>W jaki sposób dodać do strony html kaskadowe arkusze stylów?</h2>
<ol>
<li>
    link rel="stylesheet" href="style.css"
</li>
<li>
        <...style="..."></...>
</li>
</ol>
<hr>
<h2> w jaki sposób w css odwołać się do znacznika HTML, np. h1?</h2>
<ol>
<li>
    w arkuszu wpisać podan znacznik, pn.
    h1 { }
</li>
</ol>
<hr>
<h2>Do czego służy walidacja stron internetowych?</h2>
<ol>
<li>
    Do sprawdzania błędów składniowych znaczników html
</li>
</ol>
<hr>
<h2>Czy w języku JavaScript występuje typ zmiennej I jak to jest określone?</h2>
<ol>
<li>
    tworzymy zmienną lub stałą za pomocą znaczników var, let, const.
    Podajemy nazwę zmiennej, a typ określamy podając wartość zmiennej
</li>
</ol>
<hr>
<h2>Zmienne typu int odnoszą się do liczb:</h2>
<ol>
<li>
        Liczb całkowitych
</li>
</ol>
<hr>
<h2>Jakie wartości będą kolejno wypisane w konsolo w wyniku działania poniższego działania?</h2>
var x = 1;
++x;
console.log(x++);
console.log(--x);
console.log(++x);
</h2>
<ul>
<li>
    2 2 3
</li>
</ul>
<h2>
    Co wykona poniższy fragment kodu:

    const txt = "kartofel";
    const tab = [...txt];
    console.log(tab);
</h2>
<p>
[
  'k', 'a', 'r',
  't', 'o', 'f',
  'e', 'l'
]
</p>
<hr>
<h2>Podaj odsyłacz odnoszący się do mail'a?</h2>
<p> 
a href="mailto:adres@domena.de"></a>
</p>
<hr>
<h2>
    Fragment kodu napisany w języku HTML zamieszczony poniżej przedstawia listę
<ul>
    li /li</br>
    li /li</br>
    li /li
</ul>
</h2>
<p>punktowaną</p>
<hr>
<h2>
    Polecenie colspan służy do łączenia komórek tabeli w poziomie, natomiast rowspan w pionie.
    Narysuj jaką tabelę wyświetli fragment kodu napisany w języku HTML?
    <table border="1">
        <tr>
            <td rowspan="2"></td>
            <td></td>
</tr>
<tr>
    <td></td>
</tr>
</table>
</h2>
<p>
-----</br>
| | |</br>
| | |</br>
| | |</br>
-----
</p>
<hr>
<h2>
    W palecie kolorów RGB kolor żółty jest połączeniem dwóch kolorów zielonego i czerwonego 
    Napisz kod szesnastkowy oznaczający kolor żółty
</h2>
<h2> 
    Który z formatów graficznych pozwala na zapis przejstego tła?
</h2>
<ul> 
    <li>png</li>
    <li>raw</li>
    <li>gif</li>
</ul>
<hr>
<h2>
    co oznacza i jakie znasz oprogramowanie CMS?
</h2>
<ol> 
    <li>Drupal</li>
    <li>Joomla</li>
    <li>Wordpress</li>
    <li>Mambo</li>
    <li>PHPNews</li>
</ol>
<hr>
<h2>Wymień 5 elementów które możesz umieścić w formularzu:</h2>
<li>input (number)</li>
<li>input (submit)</li>
<li>input (text)</li>
<li>input (password)</li>
<li>textarea</li>
<li>option</li>
<li>select</li>
</ol>
W skrypcie PHP należy utworzyć cookie o nazwie które przymie wartość.
Cookie ma być dostępne przez jedną godzinę od jego utworzenia.
W tym celu nalezy w skrypcie PHP użyć funkcji:
</h2>
<p>
    setcookie("nazwa"."opis",time()+3600);
</p>
<hr>
<h2>
    Napisz instrukcjęw języku JavaScript deklarującą tablicę i wyświetl ją w podany poniżej sposób:

    Polska
    Czech
    Słowacja
    Dania 
    Norwegia

</h2>
<p>
    const tab = ["Polska","Czechy","Słowacja","Dania","Norwegia"]
    tab.foreach(elem) =>  console.log(a) 

</p>
<hr>
<h2>
    Po wykonaniu zamieszczonego poniżej skryptu napisanego w języku JavaScript
    w konsoli zostanie wypisana wartość:

    var a = 5;
    var b = a--;
    a *= 3;
    cconsole.log(a + " " + b);
</h2>
<p>
 12 5
</p>
<hr>
<h2>
W języku JavaScript poprzez deklarację var x="true" 
tworzy się zmienna jakiego typu?
</h2>
<p>
string, ponieważ są znaki cudzysłów
</p>
<hr>
<h2>
    Napisz polecenie do ustawiania tła na stronie www.
</h2>
<ol>
    <li>
        Dodawanie stylu:
        body {background-color: #color;}
        bocy {background-image: url("nazwapliku"); }

        body bg color="kolor">
    </li>
</ol>

<font face="sans">elo dodawanie elo elo elo</font>
</body>
</html>