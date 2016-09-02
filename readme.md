# Podstawy PHP &ndash; egzamin 2

## Wytyczne

1. Żeby zacząć, stwórz tak zwany [**fork**][forking] repozytorium z zadaniami.
2. Następnie [**sklonuj**][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [**skomituj**][ref-commit] zmiany do swojego repozytorium.
4. [**Wypchnij**][ref-push] zmiany na swoje repozytorium na GitHubie.
5. [Stwórz **pull request**][pull-request] do oryginalnego repozytorium, gdy skończysz egzamin.

**Pamiętaj, że pull request musi być stworzony, aby wykładowca dostał Twoje odpowiedzi**.

* Podczas egzaminu możesz korzystać z notatek, kodu napisanego wcześniej, internetu i prezentacji.
* Zabroniona jest jakakolwiek komunikacja z innymi kursantami.

## Pytania otwarte
Odpowiedzi wpisz w pliku **answers.txt**.

### Pytanie 1
(1,5 pkt)
Jakie znasz relacje w MySQL? Opisz je i podaj przykład, w jakim taka relacja może być użyta.

### Pytanie 2
(2 pkt)
Jakie są cztery główne założenia programowania obiektowego? Opisz je.

## Zadania praktyczne
Kod wpisz w odpowiednim pliku, zgodnie z poleceniem zadania.

### Zadanie Przygotowawcze
Wypełnij dane do połączenia z bazą danych wpisując je do odpowiednich zmiennych znajdujących się w pliku `config.php`. W zadanich wymagających połączenia do bazy danych kożystaj z btych zmiennych (plik `config.php` jest już dołączony do plików odpowiedzi).
Zaimportuj też dane znajdujące się w pliku `exam.sql` do swojej bazy danych.

### Zadanie 1
(3,5 pkt)

W bazie danych mamy następujące tablice:
```SQL
* Users: id : int, username : varchar(60), email : varchar(60), password : varchar(60)
* Messages: id : int, user_id: int, message : text
* Items: id : int, name : varchar(40), description : text, price : real(7,2)
* Orders: id : int, description : text
```
Napisz następujące zapytania SQL (zapytania mają być wpisane w odpowiednie zmienne znajdujące się w pliku zad1.php):

a. Stworzenie tabelki `Item_Reviews`: 
  ```SQL
  * Item_Reviews: id : int, item_id : int, review : text, points : decimal(2,1)
  ```
  Kolumna `id` ma być kluczem głównym, kolumna `user_id` ma być kluczem zewnętrznym łączącym tabelkę `Destinations` z tabelką `Users` za pomocą relacji wiele do wielu. 
b. Stworzenie relacji wiele do wielu między tabelami `Items` a `Orders`. Tabelka ma się nazywać `Items_Orders`. Kolumny które będą kluczami zewnętrznymi mają się nazywać `item_id` i `order_id`.
c. Dopisanie do zamówienia o id 6 trzech przedmiotów (tabelka `Items`) o podanych id: 2, 5 i 9. Jeżeli chcesz to napisać w więcej niż jednym zapytaniu SQL pamiętaj żeby je rozdzielić średnikiem `;`.
d. Wybranie wszystkich przedmiotów o cenie większej niż 50, sortując je od najtańszego do najdroższego.
e. Włożenie do tabeli `Orders` nowego zamówienia o opisie "Przykładowy opis 1".
f. Usuniecie użytkownika o `id` 10.
g. Wybranie wszystkich użytkowników, którzy maja jakaś wiadomość.

Za każde zapytanie przysługuje pół punktu.

### Zadanie 2
(2 pkt)
Napisz kod PHP, który wypisze na stronie wszystkie wiadomości dla użytkownika o `id` przekazanym przez GET (zmienna o nazwie `userId`). Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.

### Zadanie 3
(2 pkt)
W pliku `zad3_form.php` napisz formularz spełniający następujące założenia:
1. Ma przenosić do strony `zad3_receiver.php` metodą POST.
2. Pobierać pola: `name`, `description`, `price`.

W pliku `zad3_receiver.php` napisz kod, który:
1. W przypadku wejścia na tę stronę metodą POST pobierze informacje przesłane jako: `name`, `description`, `price`.
2. Wpisze te dane do bazy danych do tabeli `Items`.

Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.

TODO: Zmienić treść zadania 4
### Zadanie 4
(4 pkt) - powiększenie o jeden punkt
Napisz kod PHP klasy `VIPUser`. Klasa ma spełniać następujące właściwości:

1. Dziedziczyć po klasie `User` (znajduje się w pliku **User.php**).
2. Mieć dodatkowy atrybut: ```vipCardNumber```.
3. Mieć konstruktor, który przyjmuje następujące dane: imię, nazwisko, mail, numer karty VIP. Imię, nazwisko i mail mają być przekazywane do konstruktora klasy nadrzędnej. Konstruktor ma sprawdzać, czy podany numer jest prawidłowy. Jeżeli jest  &ndash; to go nastawiać, jeżeli nie  &ndash; to numer ma być nastawiony na ```null```.
4. Mieć prywatną metodę ```checkCard($newNumber)``` &ndash; numer jest prawidłowy, jeżeli jest większy niż 999 i podzielny przez 2. Funkcja ma zwracać wartość logiczną.
5. Mieć publiczną metodę ```useViPCard()``` &ndash; ciało metody może zostać puste.
6. Mieć publiczną funkcję ```setVipCardNumber($newCardNumber)``` i ```getVipCardNumber()```. Funkcja set ma nastawiać zmienną `vipCardNumber` (jeżeli podany nowy numer spełnia założenia), a funkcja get &ndash; ją zwracać.


<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
