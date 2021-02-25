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
use Sulu\Bundle\ContactBundle\Entity\Account;
use TheCocktail\Bundle\SuluSchemaOrgBundle\Exception\SchemaException;

class OrganizationBuilder implements BuilderInterface
{
    const KEY = 'schema_organization';

    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function build(string $key, $data): BaseType
    {
        if (!$data instanceof Account) {
            throw new SchemaException(sprintf('Data could not be transformed %s expected, %s given', Account::class, gettype($data)));
        }
        $schema = $this->config['schema'];
        $org = Schema::$schema();
        $org->name($data->getName());

        if ($description = $data->getNote()) {
            $org->description($description);
        }
        if ($phone = $data->getMainPhone()) {
            $org->telephone($phone);
        }
        if ($address = $data->getMainAddress()) {
            $orgAddress = Schema::postalAddress();

            if ($locality = $address->getCity()) {
                $orgAddress->addressLocality($locality);
            }
            if ($zip = $address->getZip()) {
                $orgAddress->postalCode($zip);
            }
            $org->address($orgAddress);
        }

        return $org;
    }

    public function support(string $key): bool
    {
        return $key === self::KEY;
    }
}
