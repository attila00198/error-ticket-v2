# Error ticket V2

## Leírás

A felhasználó hibajegyet nyithat amelyet egy magasabb jogosultsággal rendelkező személy kezelhet. Egy felhasználó létrehozhat több hibajegyet és ezek állapotát nyomonkövetheti a profilján.

## Szökséges a project futtatásához:
- Egy adatbázis a mgfelelő táblákkal (tickets, users)

## A project structurája
- config/
    - config.php
- controllers/
    - ticketController.php
    - userController.php
- includes/
    - autoload.php
    - router.php
- models/
    - ticketModel.php
    - userModel.php
- views/
    - loginView.php
    - signupVuew.php
    - newTicketView.php
    - ticketsView.php
    - userView.php
- public/
    - css/
        - style.css
    - js/
        - script.js
- index.js