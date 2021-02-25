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

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Builder;

use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Schema;

class BreadcrumbBuilder implements BuilderInterface
{
    const KEY = 'breadcrumb';
    private array $schemaConfig;

    public function build(string $key, $data): BaseType
    {
        $breadcrumb = Schema::breadcrumbList();
        $items = [];
        $i = 1;
        foreach ($data as $value) {
            $listItem = Schema::listItem();
            $listItem->position($i);
            $item = Schema::thing();
            $item->setProperty('@id', $value['url']);
            $item->name($value['title']);
            $listItem->item($item);
            $items[] = $listItem;
            ++$i;
        }
        $breadcrumb->itemListElement($items);

        return $breadcrumb;
    }

    public function support(string $key): bool
    {
        return $key === self::KEY;
    }
}
