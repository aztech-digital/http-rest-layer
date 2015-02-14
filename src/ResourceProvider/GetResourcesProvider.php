<?php

namespace Aztech\Layers\Rest\ResourceProvider;

use Aztech\Layers\Layer;
use Symfony\Component\HttpFoundation\Request;

interface GetResourceProvider extends ResourceProvider
{
    /**
     * Handler for GET operation without a resource identifier.
     *
     * @param Request $request Contains the full request for the GET call, allowing the provider to handle extra
     * parameters such as pagination.
     * @return Resource[]
     */
    public function getResources(Request $request);
}