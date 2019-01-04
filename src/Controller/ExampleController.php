<?php

namespace App\Controller;

class ExampleController
{
    /**
     * GET /example
     *
     * @return array
     */
    public function cgetAction()
    {
        return [ 'foo' => 'bar' ];
    }

    /**
     * GET /example/123
     *
     * @return array
     */
    public function getAction($id)
    {
        return [ 'id' => $id ];
    }

    /**
     * PUT /example/123
     *
     * @return array
     */
    public function putAction($id)
    {
        return [ 'id' => $id ];
    }
}
