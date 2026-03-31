class Database {
    public static function connect() {
        return new PDO("mysql:host=localhost;dbname=covoiturage", "root", "", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
}