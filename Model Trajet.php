class Trajet {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAvailable() {
        return $this->db->query("
            SELECT t.*, a1.nom AS depart, a2.nom AS arrivee
            FROM trajets t
            JOIN agences a1 ON a1.id = t.agence_depart_id
            JOIN agences a2 ON a2.id = t.agence_arrivee_id
            WHERE places_disponibles > 0
            AND date_depart >= NOW()
            ORDER BY date_depart ASC
        ")->fetchAll();
    }

    public function create($data) {
        $stmt = $this->db->prepare("
            INSERT INTO trajets 
            (agence_depart_id, agence_arrivee_id, date_depart, date_arrivee, places_total, places_disponibles, utilisateur_id)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ");

        return $stmt->execute([
            $data['depart'],
            $data['arrivee'],
            $data['date_depart'],
            $data['date_arrivee'],
            $data['places_total'],
            $data['places_total'],
            $_SESSION['user']['id']
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM trajets WHERE id = ?");
        return $stmt->execute([$id]);
    }
}