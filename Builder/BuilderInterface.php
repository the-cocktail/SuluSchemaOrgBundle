<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Builder;

use Spatie\SchemaOrg\BaseType;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Exception\SchemaException;

interface BuilderInterface
{
    /**
     * Build all Schemas and return SchemaOrg data
     *
     * @param string $key
     * @param mixed $data
     * @return BaseType
     *
     * @throws SchemaException
     */
    public function build(string $key, $data): BaseType;

    /**
     * Check if builder supports key before build
     *
     * @param string $key
     * @return bool
     */
    public function support(string $key): bool;
}
