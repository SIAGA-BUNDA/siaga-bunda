<?php
class signOut
{
    public function index()
    {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_destroy();
            echo "masuk";
        }
    }
}