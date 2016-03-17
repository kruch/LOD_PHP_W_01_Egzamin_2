# PHP - Egzamin 2

## Jak rozwiązywać zadania?

Żeby rozwiązać egzamin musisz wykonać następujące kroki:

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
2. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
5. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium kiedy skończysz wszystkie ćwiczenia.

Pamiętaj że pull request **MUSI** być stworzony, inaczej wykładowca nie dostanie twoich odpowiedzi.

Podczas egzaminu możecie kożystać z notatek, kodu napisanego wcześniej, internetu i prezentacji. Zabroniona jest jakakolwiek komunikacja z innymi kursantami.

## Pytania otwarte
Odpowiedzi wpisz w pliku answers.txt.

### Pytanie 1 (1.5 ptk)
Napisz jakie znasz relacje w MySql? Opisz je i podaj przykład w jakim taka relacja może być użyta.

### Pytanie 2 (2 ptk)
Jakie są 4 główne założenia programowania obiektowego? Opisz je.

## Zadanie praktyczne
Kod wpisz w odpowiednim pliku.

### Zadanie 1 (4.5 ptk)
W bazie danych mamy następujące tablice:
* Users: id : int, name : varchar(60), email : varchar(60), password : varchar(60)
* Messages: id : int, user_id: int, message : text
* Items: id : int, name : varchar(40), description : text, price : real(7,2)
* Orders: id : int, description : text

Napisz następujące zapytania sql (wystarczą same zapytanie SQL - nie musicie pisać kodu PHP):

1. Tworzcą tabelke Users (email ma być unikatowy) - 0.5ptk
2. Tworzcą tabelke Messages (pamitaj o relacji 1:wiele z tabelką Users) - 1ptk
2. Wybranie wszystkich itemów o cenie większej niż 13 - 0.5ptk
3. Włożenie do tablicy Orders nowego zamówienia o opisie "przykładowy opis" - 0.5ptk
4. Usuniecie użytkownika o id 7 - 0.5ptk
5. Stworzenie relacji wiele do wielu pomiędzy tabelami Items a Orders - 0.5ptk
6. Wybranie wszystkich użytkowników którzy maja jakaś wiadomość - 0.5ptk
7. Wybranie wszystkich użytkowników o imieniu zaczynającym się od L - 0.5ptk

### Zadanie 2 (4 ptk)
Napisz kod PHP który wypisze na stronie wszystkie wiadomości dla użytkownika o id 5 (tabele takie same jak w poprzednim zadaniu). Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.

### Zadanie 3 (4 ptk)
W pliku zad3_form.php napsiz formularz spełniający następujące założenia:

1. Ma przenosić do strony zad3_reciver.php metodą POST,
2. Pobierać pola: name, description, price.

W pliku zad3_reciver.php napisz kod który:

1. W przypadku wejścia na tą stronę metodą POST pobierze informacje przesłane jako: name, description, price,
2. Wpisze te dane do bazy danych do tabelki Items (tabelka taka sama jak w zadaniu 1).

Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.

### Zadanie 4 (4 ptk)
Napisz kod PHP klasy VIPUser. Klasa ma spełniać następujące właściwości: 

1. Dziedziczyć po klasie User (znajduje się w pliku User.php)
2. Posiadać dodatkowy atrybut: ```vipCardNumber```
3. Posiadać konstruktor który przyjmuje następujące dane: imię, nazwisko, mail, numer karty VIP. Imię, nazwisko i mail mają być przekazywane do konstruktora klasy nadrzędnej. Konstruktor ma sprawdzać czy podany numer jest prawidowy.
4. Posiadać prywatną metodę ```checkCard()``` – numer jest prawidowy jeżeli jest wikszy od 999 i podzielny przez 2.
5. Posiadać publiczną metodę ```useViPCard()``` – ciało metody może zostać puste.
6. Posiadać publiczą funkcję ```setVipCardNumber($newCardNumber)``` i ```getVipCardNumber()```. Funkcja set ma nastaiwać zmienną vipCardNumber (tylko jeżeli podany nowy numker spenia zaożenia) a funkcja get ją zwracać.
 

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
