<?php
/**
 * Created by PhpStorm.
 * User: Vivi
 * Date: 1/17/2018
 * Time: 2:59 AM
 */

namespace Coinbase\Wallet\Resource;
use Coinbase\Wallet\Enum\ResourceType;

class BitcoinCashNetwork extends Resource
{
    public function __construct()
    {
        parent::__construct(ResourceType::BITCOIN_CASH_NETWORK);
    }
}