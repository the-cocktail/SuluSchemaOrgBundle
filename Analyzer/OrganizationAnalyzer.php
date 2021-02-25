<?php

/**
 * This file is part of Sulu SchemaOrg Bundle.
 *
 * (c) The Cocktail Experience S.L.
 *
 *  This source file is subject to the MIT license that is bundled
 *  with this source code in the file LICENSE.
 */

namespace TheCocktail\Bundle\SuluSchemaOrgBundle\Analyzer;

use TheCocktail\Bundle\SuluSchemaOrgBundle\Builder\OrganizationBuilder;
use TheCocktail\Bundle\SuluSchemaOrgBundle\HttpFoundation\SchemaAttributes;
use Sulu\Bundle\ContactBundle\Entity\AccountRepositoryInterface;
use Symfony\Component\HttpFoundation\Request;

class OrganizationAnalyzer implements SchemaOrgAnalyzerInterface
{
    private AccountRepositoryInterface $repository;
    private SchemaAttributes $attributes;

    public function __construct(
        AccountRepositoryInterface $repository,
        SchemaAttributes $attributes
    ) {
        $this->repository = $repository;
        $this->attributes = $attributes;
    }

    public function analyze(Request $request): void
    {
        if ($request->isXmlHttpRequest()) {
            return;
        }

        if ($account = $this->repository->findOneBy(['uid' => 'main'])) {
            $this->attributes->addAttribute(OrganizationBuilder::KEY, $account);
        }
    }
}
