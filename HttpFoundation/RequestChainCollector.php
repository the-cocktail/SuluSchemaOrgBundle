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

use Symfony\Component\HttpFoundation\Request;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Analyzer\SchemaOrgAnalyzerInterface;

class RequestChainCollector
{
    /**
     * @var SchemaOrgAnalyzerInterface[]
     */
    private array $analyzers = [];

    public function addAnalyzer(SchemaOrgAnalyzerInterface $analyzer): void
    {
        $this->analyzers[] = $analyzer;
    }

    public function analyze(Request $request): void
    {
        foreach ($this->analyzers as $analyzer) {
            $analyzer->analyze($request);
        }
    }
}
