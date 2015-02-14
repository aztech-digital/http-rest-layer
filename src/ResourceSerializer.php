<?php

namespace Aztech\Layers\Rest;

interface ResourceSerializer
{
    public function serialize(Resource $resource);
}