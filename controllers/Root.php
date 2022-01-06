<?php
    namespace Controller;

    use Library\Controller;

    class Root extends Controller {
        public function __construct() {
            $this->user = $this->__model('user');
        }

        public function __index() {
            $this->__view("pb-home");
            $this->__template("pb-page", array(
                "head" => array(
                    ["style", 'pb-home.css', array('origin' => 'dynamic')]
                ),
                "body" => array(
                    ["script", 'pb-home.js', array('origin' => 'dynamic')]
                )
            ));
        }

        public function Install() {
            $this->__view("install");
            $this->__template("pb-page", array(
                "head" => array(
                    ["style", 'install.css', array('origin' => 'dynamic')]
                )
            ));
        }
    }