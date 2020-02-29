<?php


abstract class Controller
{
    protected $request;
    protected $action;

    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction() {
        return $this->{$this->action}();
    }

    public function returnView($viewModel, $fullView) {
        $view = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if ($fullView) {
            require_once './views/main.php';
        } else {
            require_once $view;
        }
    }
}