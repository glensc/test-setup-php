<?php

declare(strict_types=1);

namespace Niden\Api\Controllers\Users;

use Niden\Api\Controllers\BaseController;
use Niden\Constants\Relationships;
use Niden\Models\Users;
use Niden\Transformers\BaseTransformer;

/**
 * Class GetController
 *
 * @package Niden\Api\Controllers\Users
 */
class GetController extends BaseController
{
    /** @var string */
    protected $model       = Users::class;

    /** @var string */
    protected $resource    = Relationships::USERS;

    /** @var string */
    protected $transformer = BaseTransformer::class;

    /** @var array<string,bool> */
    protected $sortFields  = [
        'id'            => true,
        'status'        => true,
        'username'      => true,
        'password'      => false,
        'issuer'        => true,
        'tokenPassword' => false,
        'tokenId'       => false,
    ];

    /** @var string */
    protected $orderBy     = 'username';
}
