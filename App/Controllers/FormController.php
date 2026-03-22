<?php

namespace App\Controllers;

class FormController
{
    /**
     * Show the user input form.
     *
     * @return void
     */
    public function showForm()
    {
        require_once __DIR__ . "/../Views/form.php";
    }

    /**
     * Handle form submission.
     *
     * @return void
     */
    public function handleSubmit()
    {
        $firstName = $_POST['first_name'] ?? '';
        $age = $_POST['age'] ?? '';

        echo (! empty($firstName)) ? "Your entered name is " . $firstName . ". "  : '';
        echo (! empty($age)) ? "Your entered age is " . $age . ". "  : '';
    } 
}