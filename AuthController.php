require '../app/models/User.php';

class AuthController {

    public function login() {
        require '../app/views/login.php';
    }

    public function loginPost() {
        $userModel = new User();
        $user = $userModel->findByEmail($_POST['email']);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: /');
        } else {
            echo "Erreur login";
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /');
    }
}