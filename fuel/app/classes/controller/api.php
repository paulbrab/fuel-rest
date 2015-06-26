<?php
class Controller_Api extends Controller_Rest
{

    public function get_hello()
    {
        return $this->response(array(
            'hello' => 'world'
        ));
    }
}