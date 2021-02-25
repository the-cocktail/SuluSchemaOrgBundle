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

use Spatie\SchemaOrg\Schema;
use Sulu\Bundle\PageBundle\Markup\Link\PageLinkProvider;
use Symfony\Component\HttpFoundation\RequestStack;

class PageSelectionTransformer implements TransformerInterface
{
    private PageLinkProvider $linkProvider;
    private RequestStack $requestStack;

    public function __construct(PageLinkProvider $linkProvider, RequestStack $requestStack)
    {
        $this->linkProvider = $linkProvider;
        $this->requestStack = $requestStack;
    }

    public function transform($value)
    {
        if (!$request = $this->requestStack->getCurrentRequest()) {
            return null;
        }
        $linkItems = $this->linkProvider->preload($value, $request->getLocale());
        $items = [];
        $i = 1;
        foreach ($linkItems as $linkItem) {
            $listItem = Schema::listItem();
            $listItem->position($i);
            $listItem->name($linkItem->getTitle());
            $listItem->url($linkItem->getUrl());
            $items[] = $listItem;
            ++$i;
        }
        return $items;
    }
}
