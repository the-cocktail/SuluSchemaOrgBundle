<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

declare(strict_types=1);

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Extension;

use Spatie\SchemaOrg\BaseType;

interface ExtensionInterface
{
    /**
     * Extend a Schema create
     *
     * @param BaseType $schema Schema to extend
     * @param BaseType[] $defined all Schema defined
     */
    public function extend(BaseType $schema, array $defined): void;

    /**
     * Return an array with sopported clases. Example:
     *
     * return [Event::class, Article::class];
     *
     * @return array
     */
    public function getTypes(): array;
}
