<?php

class TicketsModel extends Database {
    public function getAllTickets()
    {
        $sql = "SELECT * FROM tickets ORDER BY created_at desc";
        $stmt = $this->connect()->query($sql);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getTicket($id)
    {
        # code...
    }

    public function createTicket($name, $email, $description)
    {
        $sql = "INSERT INTO tickets (created_by, email, desctiption) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        
        try {
            $stmt->execute([$name, $email, $description]);
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
            return false;
        }
    }

    public function updateTicket($id)
    {
        $sql = "UPDATE tickets SET solved = 1 WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        try {
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
            return false;
        }
    }

    public function deleteTicket($id)
    {
        $sql = "DELETE FROM tickets WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        try {
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
            return false;
        }
    }
}