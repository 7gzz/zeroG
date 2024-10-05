<?php

namespace App\Controllers;

use Framework\Database;

class Controller
{
    protected $db;


    public function __construct()
    {
        $config = require_once basePath('/config/db.php');
        $this->db = new Database($config);
    }

    public function home_index()
    {
        if (isset($_SESSION['user_id'])) {
            $matches = $this->db->query('SELECT * FROM matches')->fetchAll();

            $today = date("Y-m-d");
            $challenge = $this->db->query('SELECT * FROM daily_challenge where Date(date) = :today', ['today' => $today])->fetch();



            loadView('home', [
                'matches' => $matches,
                'challenge' => $challenge
            ]);
        } else {
            loadView('login');
        }
    }

    public function leaderboard()
    {
        $lists = $this->db->query('SELECT * FROM users ORDER BY points DESC')->fetchAll();
        loadView('leaderboard', ['lists' => $lists]);
    }

    public function matches()
    {
        $matches = $this->db->query('SELECT * FROM matches')->fetchAll();

        $sport['name'] = 'All Matches';

        loadView(
            'matches',
            [
                'matches' => $matches,
                'sport' => $sport
            ]
        );
    }

    public function sportMatches($params)
    {
        $id = $params['id'];

        $sport = $this->db->query('SELECT * FROM sport where id = :id', ['id' => $id])->fetch();
        $matches = $this->db->query('SELECT * FROM matches where sport_id = :id', ['id' => $id])->fetchAll();

        loadView('matches', [
            'matches' => $matches,
            'sport' => $sport
        ]);
    }


    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_SESSION['user_id'])) {
                header('Location: /');
            } else {
                loadView('login');
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->db->query("SELECT * FROM users WHERE email = ?", [$email])->fetch();

            if ($user && password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['username'];

                header('Location: /');
            }
        }
    }

    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_SESSION['user_id'])) {
                header('Location: /');
            } else {
                loadView('signup');
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $user_name = $_POST['userFullName'];
            $user_username = $_POST['userName'];
            $email = $_POST['userEmail'];
            $password = $_POST['userPassword'];
            $country = $_POST['userCountry'];
            $age = $_POST['userAge'];
            $mission = $_POST['userMission'];
            $rank = $_POST['userRank'];

            $this->db->query("INSERT INTO `astrogames`.`users` (`username`, `password`, `email`, `name`, `age`, `country`, `mission`, `rank`) VALUES (:username, :password, :email, :name, :age, :country, :mission, :rank);", [
                'username' => $user_username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'email' => $email,
                'name' => $user_name,
                'age' => $age,
                'country' => $country,
                'mission' => $mission,
                'rank' => $rank
            ]);

            header('Location: /login');
        }
    }

    public function profile($params): void
    {
        $id = $params['id'];

        $profile = $this->db->query('SELECT * FROM users where id = :id', $params)->fetch();

        loadView('profile', ['profile' => $profile]);
    }

    public function logout()
    {
        session_destroy();
        header('Location: /');
    }

    public function challenge()
    {
        $this->db->query('update users set points = points + 1 where id = :id', ['id' => $_SESSION['user_id']]);

        $_SESSION['daily_challenge'] = true;

        header('Location: /');
    }
}
