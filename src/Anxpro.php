<?php

namespace Account\Wallet;

use \Monolog\Logger;
use \Account\Account;
use \Account\DisabledAccount;
use \Account\SimpleAccountType;
use \Account\AccountFetchException;
use \Apis\FetchHttpException;
use \Apis\FetchException;
use \Apis\Fetch;
use \Openclerk\Currencies\CurrencyFactory;

/**
 * Represents the ANXPRO exchange wallet.
 */
class Anxpro extends AbstractAnx {

  public function getName() {
    return "ANXPRO";
  }

  public function getCode() {
    return "anxpro";
  }

  function getURL() {
    return "https://anxpro.com/";
  }

  function getBalanceURL() {
    return "https://anxpro.com/api/2/money/info";
  }

}
