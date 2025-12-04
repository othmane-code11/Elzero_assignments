<form action="" method="POST">
    <input type="text" name="user">
    <input type="submit" name="submit" value="Send">
</form>
<?php
    $admins = ["Osama", "Ahmed", "Sayed"];

    // Input Name "Osama"
    if (isset($_POST["submit"])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["user"])) {
                $name = $_POST["user"];
                echo "The Request Method Is Post And Username Is $name<br>";
                if (in_array($name, $admins)) {
                    echo "This Username $name Is Admin";
                }
            }
        }
    }
    // Needed Output
    // "The Request Method Is Post And Username Is Osama"
    // "This Username Osama Is Admin"