<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Extension;

use Spatie\SchemaOrg\BaseType;

class ExtensionChain
{
    /**
     * @var ExtensionInterface[]
     */
    private array $extensions = [];

    public function addExtension(ExtensionInterface $extension): void
    {
        $this->extensions[] = $extension;
    }

    /**
     * @param BaseType $baseType
     * @param BaseType[] $defined
     * @return mixed
     */
    public function extend(BaseType $baseType, array $defined)
    {
        foreach ($this->extensions as $extension) {
            if (in_array(get_class($baseType), $extension->getTypes())) {
                $extension->extend($baseType, $defined);
            }
        }
    }
}
