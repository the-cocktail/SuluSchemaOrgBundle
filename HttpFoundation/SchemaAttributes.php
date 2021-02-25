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

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\HttpFoundation;

class SchemaAttributes
{
    private array $schemaAttributes = [];

    /**
     * @param string $key
     * @param mixed $data
     */
    public function addAttribute(string $key, $data): void
    {
        if (null === $data) {
            throw new \RuntimeException('Data must not be null for key ' . $key);
        }
        $this->schemaAttributes[$key][] = $data;
    }
    public function getAttributes(): array
    {
        return $this->schemaAttributes;
    }
}
