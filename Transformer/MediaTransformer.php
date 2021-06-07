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

use Sulu\Bundle\MediaBundle\Media\Manager\MediaManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class MediaTransformer implements TransformerInterface
{
    private MediaManagerInterface $mediaManager;
    private RequestStack $requestStack;
    private string $imageFormat;

    public function __construct(
        MediaManagerInterface $mediaManager,
        RequestStack $requestStack,
        string $imageFormat
    ) {
        $this->mediaManager = $mediaManager;
        $this->requestStack = $requestStack;
        $this->imageFormat = $imageFormat;
    }

    public function transform($value): string
    {
        if (empty($ids = $value['ids'])) {
            return '';
        }
        $id = reset($ids);

        if (!$request = $this->requestStack->getMasterRequest()) {
            return '';
        }

        $formats = $this->mediaManager->getFormatUrls([$id], $request->getLocale());

        if (!array_key_exists($this->imageFormat, $formats[$id])) {
            throw new \LogicException(sprintf("Format %s not exists, formats are: %s", $this->imageFormat, array_keys($formats[$id])));
        }

        return $formats[$id][$this->imageFormat];
    }
}
