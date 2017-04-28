<img alt="Logo" src="http://coderslab.pl/wp-content/themes/coderslab/svg/logo-coderslab.svg" width="400">


# OOP/MySQL &ndash; egzamin


## Jak zacząć?

1. Stwórz [*fork*][forking] repozytorium z zadaniami.
2. [*Sklonuj*][ref-clone] repozytorium na swój komputer.
3. Rozwiąż zadania i [*skomituj*][ref-commit] zmiany do swojego repozytorium.
4. [*Wypchnij*][ref-push] zmiany do swojego repozytorium na GitHubie.
5. Stwórz [*pull request*][pull-request] do oryginalnego repozytorium, gdy skończysz egzamin.

**Pamiętaj, że pull request musi być stworzony, aby Mentor dostał Twoje odpowiedzi**.

* Podczas egzaminu możesz korzystać z notatek, kodu napisanego wcześniej, internetu i prezentacji.
* Zabroniona jest jakakolwiek komunikacja z innymi kursantami.

## Pytania otwarte
Odpowiedzi wpisz w pliku `answers.txt`.

### Pytanie 1 (1,5 pkt)  
  
1. Jakie znasz relacje w MySQL?  
2. Opisz je i podaj przykład, w jakim taka relacja może być użyta.

### Pytanie 2 (2 pkt)  

Jakie są cztery główne założenia programowania obiektowego?
Opisz je.

## Zadania praktyczne  

Kod wpisz w odpowiednim pliku, zgodnie z poleceniem zadania.  

**BARDZO WAŻNE** - Wasze zadania są sprawdzanie przy pomocy automatycznego systemu.  
  
Aby odpowiedzi zostały uznane za poprawne strony **MUSZĄ** wyświetlać te same komunikaty co w treści zadania,  
a funkcje i metody **MUSZĄ** posiadać nazwy dokładnie takie same jak podane w zadaniu.

### Zadanie przygotowawcze

1. Wypełnij dane do połączenia z bazą danych wpisując je do odpowiednich stałych znajdujących się w pliku `config.php`.  
2. W zadaniach wymagających połączenia do bazy danych korzystaj z tych zmiennych (plik `config.php` jest już dołączony do plików odpowiedzi).  
3. Zaimportuj też dane znajdujące się w pliku `exam.sql` do swojej bazy danych.

**Zanim zaczniesz rozwiązywać zadanie dokładnie przeczytaj całą jego treść**

### Zadanie 1 (5 pkt)  

W bazie danych mamy następujące tabele:
```SQL
* Users: id : int, username : varchar(60), email : varchar(60), password : varchar(60)
* Messages: id : int, user_id: int, message : text
* Items: id : int, name : varchar(40), description : text, price : decimal(7,2)
* Orders: id : int, description : text
```
  
Napisz następujące zapytania SQL (zapytania mają być wpisane w odpowiednie zmienne znajdujące się w pliku `zad1.php`):
  1. (1 pkt) Stworzenie tabeli `Destinations`:  
     ```SQL
     * Destinations: id : int, user_id : int, address : text, lat : decimal(13,10), long : decimal(13,10)
     ```
     * kolumna `id` ma być kluczem głównym,  
     * kolumna `user_id` ma być kluczem zewnętrznym łączącym tabelę `Destinations` z tabelką `Users` za pomocą relacji wiele do jednego  
       (Użytkownik może mieć wiele destynacji, destynacja może być przypisana tylko do jednego użytkownika). 
  2. (1 pkt) Stworzenie relacji wiele do wielu między tabelami `Items` a `Orders`.  
     Tabela łącząca ma się nazywać `Items_Orders`.
  3. (0.5 pkt) Dodanie do tabeli `Items_Orders` (stworzonej w punkcie 2) wpisu łączącego zamówienie (tabela `Orders`) o `id` `6` z przedmiotem (tabela `Items`) o `id` `2`.
  4. (0.5 pkt) Wybranie wszystkich przedmiotów o cenie większej niż `50`, `posortowanych rosnąco` po `cenie`.
  5. (0.5 pkt) Dodanie do tabeli `Orders` nowego zamówienia o opisie `Przykładowy opis 1`.
  6. (0.5 pkt) Usuniecie użytkownika o `id` `10`.
  7. (0.5 pkt) Wybranie wszystkich użytkowników, którzy maja jakąś wiadomość, `posortowanych rosnąco` po `id` użytkownika.

### Zadanie 2 (3 pkt)  

W pliku `zad2_receiver.php` napisz kod PHP, który wypisze na stronie wszystkie wiadomości dla użytkownika o `id` przekazanym przez `GET` (zmienna o nazwie `userId`).  
Strona powinna spełniać następujące wymogi:
  1. (1 pkt) Wiadomości powinny zostać wyświetlone w formacie `<id wiadomości>, <treść wiadomości>` po jednej wiadomości w linii. 
  2. (1 pkt) W przypadku w którym użytkownik nie posiada żadnej wiadomości w systemie, na stronie powinien pojawić się komunikat:  
     `Brak wiadomości dla danego użytkownika`
  3. (0.5 pkt) W przypadku wejścia na stronę **inną** metodą niż `GET` na stronie powinien wyświetlić się komunikat:  
     `Proszę wejść na stronę metodą GET`. 
  4. (0.5 pkt) W przypadku wejścia na stronę i nie przesłania `id` strona powinna wyświetlić komunikat:  
     `Brak przesłania wymaganych danych GET`.

W pliku `zad2_sender.html` znajduje się kilka linków które pomogą Ci przetestować twój kod.

**Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.**

### Zadanie 3 (2 pkt)  

W pliku `zad3.php` jest formularz służący do dodania nowego przedmiotu do bazy danych.  
Przeanalizuj go. Następnie w tym samym pliku napisz kod, który:
  1. (1 pkt) W przypadku wejścia na tę stronę metodą `POST` pobierze informacje przesłane jako:  
     `name`, `description`, `price`.  
     Jeżeli nie zostaną przesłane wszystkie dane to strona powinna wyświetlić komunikat:  
     `Brak przesłania wymaganych danych POST`. 
  2. (1 pkt) Doda te dane do bazy danych do tabeli `Items`.  
     Po dodaniu przedmiotu powinien wyświetlić komunikat:  
     `Do bazy danych został dodany nowy przedmiot o id <id dodanego przedmiotu>`  
     np. `Do bazy danych został dodany nowy przedmiot o id 11`.

**Pamiętaj o poprawnym połączeniu do bazy danych i jego zamknięciu.**

### Zadanie 4 (3 pkt)  

W pliku `zad4.php` znajduje się klasa `MyDate`.  
Przeanalizuj dokładnie jej kod a następnie:
  1. (1 pkt) Dopisz konstruktor, który nie przyjmując żadnych parametrów, stworzy obiekt `MyDate` nastawiony na `1 Stycznia 2000r.`.
  2. (1 pkt) Dopisz publiczne getery i setery dla atrybutów klasy.  
     Setery nie powinny pozwolić na nastawienie danych znajdujących się poza opisanymi zakresami (komentarze w pliku).  
     W przypadku próby takiego zapisu atrybut klasy nie powinien być zmieniony (do sprawdzenia czy przekazana zmienna jest liczbą całkowitą użyj funkcji `is_integer`).
  3. (1 pkt) Dopisz ciało metody `moveForwardByDay()`.  
     Metoda ta powinna przesuwać datę do przodu o jeden dzień.
     Pamiętaj o zachowaniu poprawnych wartości zarówno dni (nie powinno przekroczyć wartości `31`), jak i miesięcy (nie powinno przekroczyć wartości `12`) i lat.  
     Dla uproszczenia możesz założyć że każdy miesiąc ma `31` dni.

### Zadanie 5 (3.5 pkt)  

Napisz kod PHP klasy `VIPUser`. Klasa ma spełniać następujące właściwości:
  1. (0.5 pkt) Dziedziczyć po klasie `User` (znajduje się w pliku `User.php`).
  2. (0.5 pkt) Mieć dodatkowy publiczny atrybut: ```vipCardNumber```.
  3. (1 pkt) Mieć konstruktor, który przyjmuje następujące dane:  
     * imię
     * nazwisko
     * mail
     * numer karty VIP
     
     Imię, nazwisko i mail mają być przekazywane do konstruktora klasy nadrzędnej.  
     Konstruktor ma sprawdzać, czy podany numer jest prawidłowy (założenia są opisane w punkcie `4`).  
     Jeżeli jest - to go nastawiać, jeżeli nie  &ndash; to numer ma być nastawiony na ```null```.
  4. (1 pkt) Mieć publiczną, statyczną metodę ```checkCard($newNumber)```  
     Numer jest prawidłowy, jeżeli jest większy niż `999` i podzielny przez `2`.
     Funkcja ma **zwracać** wartość logiczną.
  5. (0.5 pkt) Mieć publiczne funkcję ```setVipCardNumber($newCardNumber)``` i ```getVipCardNumber()```.  
     Funkcja set ma nastawiać zmienną `vipCardNumber` (jeżeli podany nowy numer spełnia założenia z punktu `4`, jeżeli nie to ma pozostawić poprzednia wartość), a funkcja get &ndash; ją zwracać.

**Nie zmieniaj nic w pliku User.php**

<!-- Links -->
[forking]: https://guides.github.com/activities/forking/
[ref-clone]: http://gitref.org/creating/#clone
[ref-commit]: http://gitref.org/basic/#commit
[ref-push]: http://gitref.org/remotes/#push
[ref-rand]: http://php.net/manual/pl/function.rand.php
[pull-request]: https://help.github.com/articles/creating-a-pull-request
