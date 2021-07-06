<?php


namespace App\Controller\Admin;


use App\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function index()
    {
        return $this->render->render('admin/index/index.twig');
    }
}