<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Transformer;

class PageTreeRouteTransformer implements TransformerInterface
{
    public function transform($value)
    {
        return $value['path'];
    }
}
