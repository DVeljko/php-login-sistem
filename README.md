# PHP Login Sistem

Ovo je jednostavan login sistem urađen u čistom PHP-u, sa podrškom za:

- Registraciju korisnika
- Prijavu korisnika
- Rad sa sesijama
- Proveru tačnih podataka iz MySQL baze
- Zaštitu stranica (samo ulogovani korisnici mogu da pristupe)

## Tehnologije koje su korišćene

- PHP
- MySQL (phpMyAdmin)
- HTML
- XAMPP (lokalni server)

## Struktura fajlova

- `baza.php` – konekcija sa bazom podataka
- `login.php` – forma za prijavu
- `proveraLogin.php` – obrada prijave
- `registruj.php` – forma za registraciju
- `proveraRegistracije.php` – obrada registracije
- `pocetna.php` – početna stranica nakon logovanja
- `logout.php` – fajl za odjavljivanje korisnika

## Pokretanje projekta

1. Pokreni XAMPP i startuj Apache i MySQL.
2. Napravi bazu `web_shop` i tabelu `korisnici`.
3. Učitaj fajlove u `htdocs` folder.
4. Otvori u browseru `localhost/naziv_foldera/login.php`.
5. Registrovanje i prijavljivanje korisnika je spremno!

## Napomena

Ovaj sistem koristi osnovni rad sa sesijama i nije još implementirana potpuna sigurnost (npr. **prepared statements** i **hashovanje lozinki**) – to će Laravel automatski rešavati u kasnijem razvoju.

