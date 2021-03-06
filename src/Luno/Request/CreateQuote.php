<?php declare(strict_types=1);

namespace Luno\Request;

class CreateQuote extends AbstractRequest
{
  /**
   * Amount to buy or sell in the pair base currency.
   */
  protected $base_amount;

  /**
   * Currency pair to trade. The pair can also be flipped if you want to buy
   * or sell the counter currency (e.g. ZARXBT).
   */
  protected $pair;

  /**
   * <code>BUY</code> or <code>SELL</code>.
   */
  protected $type;

  /**
   * Optional account for the pair's base currency.
   */
  protected $base_account_id;

  /**
   * Optional account for the pair's counter currency.
   */
  protected $counter_account_id;
  
  /**
   * @return float
   */
  public function getBaseAmount(): float
  {
    if (!isset($this->base_amount)) {
      return 0;
    }
    return $this->base_amount;
  }

  /**
   * @param float $baseAmount
   */
  public function setBaseAmount(float $baseAmount)
  {
    $this->base_amount = $baseAmount;
  }

  /**
   * @return string
   */
  public function getPair(): string
  {
    if (!isset($this->pair)) {
      return "";
    }
    return $this->pair;
  }

  /**
   * @param string $pair
   */
  public function setPair(string $pair)
  {
    $this->pair = $pair;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }

  /**
   * @return string
   */
  public function getBaseAccountId(): string
  {
    if (!isset($this->base_account_id)) {
      return "";
    }
    return $this->base_account_id;
  }

  /**
   * @param string $baseAccountId
   */
  public function setBaseAccountId(string $baseAccountId)
  {
    $this->base_account_id = $baseAccountId;
  }

  /**
   * @return string
   */
  public function getCounterAccountId(): string
  {
    if (!isset($this->counter_account_id)) {
      return "";
    }
    return $this->counter_account_id;
  }

  /**
   * @param string $counterAccountId
   */
  public function setCounterAccountId(string $counterAccountId)
  {
    $this->counter_account_id = $counterAccountId;
  }
}

// vi: ft=php
