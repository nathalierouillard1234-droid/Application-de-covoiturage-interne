require '../app/models/Trajet.php';
require '../app/models/Agence.php';

class TrajetController {

    public function create() {
        $agenceModel = new Agence();
        $agences = $agenceModel->all();

        require '../app/views/trajet/create.php';
    }

    public function store() {
        if ($_POST['depart'] == $_POST['arrivee']) {
            die("Erreur agences identiques");
        }

        if ($_POST['date_arrivee'] < $_POST['date_depart']) {
            die("Erreur date");
        }

        $trajet = new Trajet();
        $trajet->create($_POST);

        header('Location: /');
    }

    public function delete() {
        $trajet = new Trajet();
        $trajet->delete($_GET['id']);

        header('Location: /');
    }
}