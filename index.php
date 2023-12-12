<?php

// Singleton.
class User {
    private static $instance;

    public static function get_instance() {
        if(!isset(self::$instance)) {
            echo "Check happens here.".PHP_EOL;
            self::$instance = new self();
        }
        echo '1'.PHP_EOL;
        return self::$instance;
    }

    public function __toString() {
        return "test";
    }
}

$user1 = User::get_instance();
$user2 = User::get_instance();
$user3 = User::get_instance();

echo $user1.PHP_EOL;