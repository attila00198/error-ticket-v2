<?php

$uri = explode('/', $_SERVER['REQUEST_URI']);
switch ($uri[1]) {
    case 'tickets':
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $desctiption = $_POST["description"];
            $ticketsModel = new TicketsModel();
            if ($ticketsModel->createTicket($name, $email, $desctiption)) {
                $tickets = $ticketsModel->getAllTickets();
                include_once "includes/tickets.php";
            } else {
                include_once "views/newTicketView.php";
            }
        }

        if (isset($_POST["success"])) {
            $id = $_POST["id"];
            $ticketsModel = new TicketsModel();
            $ticketsModel->updateTicket($id);
        }

        if (isset($_POST["delete"])) {
            $id = $_POST["id"];
            $ticketsModel = new TicketsModel();
            $ticketsModel->deleteTicket($id);
        }

        if (!isset($uri[2])) {
            $tickets = null;
            $ticketsModel = new TicketsModel();
            $tickets = $ticketsModel->getAllTickets();
            include_once "views/ticketsView.php";
        } else {
            $id = (int) $uri[2];
            include_once 'views/singleTicketView.php';
        }
        break;

    case 'login':
        if(!isset($_POST["signin"])) {
            include_once "views/loginView.php";
        } else {
            echo '<span class="alert alert-info">A funkció még nem működik. Megértését köszönjük.</span>';
        }
        break;

    case 'signup':
        echo "<h1>Regisztráció</h1>";
        break;
    default:
        include 'views/loginView.php';
        break;
}
