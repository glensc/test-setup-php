<?php

namespace Niden\Tests\unit\library\Constants;

use CliTester;
use Niden\Constants\Relationships;

class RelationshipsCest
{
    public function checkConstants(CliTester $I)
    {
        $I->assertEquals('companies', Relationships::COMPANIES);
        $I->assertEquals('individual-types', Relationships::INDIVIDUAL_TYPES);
        $I->assertEquals('individuals', Relationships::INDIVIDUALS);
        $I->assertEquals('product-types', Relationships::PRODUCT_TYPES);
        $I->assertEquals('products', Relationships::PRODUCTS);
        $I->assertEquals('users', Relationships::USERS);
    }
}
