<?php


class HomeController extends Controller {

    public function index() {
        // Default for first load
        if (!$this->f3->exists('email')) {
            $this->f3->set('email', '');
        }

        echo Template::instance()->render('index.html');
    }

}
