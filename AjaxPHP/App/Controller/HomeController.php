<?php

namespace App\Controller;

use App\Model\AdminModel;

class HomeController
{

    public function __construct()
    {
        $this->model = new AdminModel();
    }

    public function render()
    {
        $sondages = $this->model->getSondages();
        $questions = $this->model->getQuestions();
        $reponses = $this->model->getReponses();

        require ROOT . "/App/view/home/sondageConsult.php";
    }

    public function renderHome()
    {
        require ROOT . "/App/view/home/home.php";
    }

    public function home()
    {
        require ROOT . "/App/view/home/home.php";
    }
}
