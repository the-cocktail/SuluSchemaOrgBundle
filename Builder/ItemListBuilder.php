<?php

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Builder;

use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Schema;

class ItemListBuilder implements BuilderInterface
{
    const KEY = 'itemList';

    public function build(string $key, $data): BaseType
    {
        $itemList = Schema::itemList();
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
        $itemList->itemListElement($items);

        return $itemList;
    }

    public function support(string $key): bool
    {
        return $key === self::KEY;
    }
}
