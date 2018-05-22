<?php

namespace Luno\Request;

class GetQuote extends AbstractRequest
{
  /**
   * ID of the quote to retrieve.
   */
  protected $id;

  public function getId(): integer {
    return $this->id;
  }

  public function setId(integer $id) {
    $this->id = $id;
  }
}

// vi: ft=php