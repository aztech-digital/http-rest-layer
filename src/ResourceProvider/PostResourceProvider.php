<?php

namespace Aztech\Layers\Rest\ResourceProvider;

use Symfony\Component\HttpFoundation\Request;

interface PostResourceProvider extends ResourceProvider
{
    /**
     * Handler for a POST operation.
     *
     * @param Request $request Contains the full request for the POST call.
     * @param array $data Contains the decoded POST body.
     * @return ResourceOperationResult
     */
    public function handlePostResource(Request $request, array $data);
}