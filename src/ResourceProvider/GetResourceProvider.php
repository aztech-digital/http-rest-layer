<?php

namespace Aztech\Layers\Rest\ResourceProvider;

use Aztech\Layers\Layer;
use Symfony\Component\HttpFoundation\Request;

interface GetResourceProvider extends ResourceProvider
{
    /**
     * Handler for a GET resource call.
     *
     * @param Request $request Contains the full request data for the call.
     * @param string $resourceId Id of the requested resource.
     * @return Resource
     */
    public function getResource(Request $request, $resourceId);
}