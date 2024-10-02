<?php
class User {
    public $name;
    public $role;

    public function __construct($name, $role) {
        $this->name = $name;
        $this->role = $role;
    }

    public function display() {
        echo "Name: " . $this->name . ", Role: " . $this->role;
    }
}

// Vulnerability: Deserializing user input without validation
if (isset($_POST['data'])) {
    $user = unserialize($_POST['data']); // Untrusted input
    $user->display();
}
?>

<form method="POST" action="deserialize.php">
    Serialized Data: <input type="text" name="data">
    <input type="submit" value="Submit">
</form>
