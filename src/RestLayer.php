<?php

namespace Aztech\Layers\Rest;

use Aztech\Layers\Layer;
use Symfony\Component\HttpFoundation\Request;
use Aztech\Layers\Rest\ResourceProvider\ResourceProvider;

class RestLayer implements Layer
{

    private $provider;

    private $serializer;

    public function __construct(ResourceProvider $provider, ResourceSerializer $serializer)
    {

    }

    /**
     * (non-PHPdoc)
     *
     * @see \Aztech\Layers\Layer::__invoke()
     */
    public function __invoke(Request $request)
    {
        // TODO: Auto-generated method stub
    }
}