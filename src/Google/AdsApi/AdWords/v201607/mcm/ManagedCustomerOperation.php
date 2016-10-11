<?php

namespace Google\AdsApi\AdWords\v201607\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerOperation extends \Google\AdsApi\AdWords\v201607\cm\Operation
{

    /**
     * @var \Google\AdsApi\AdWords\v201607\mcm\ManagedCustomer $operand
     */
    protected $operand = null;

    /**
     * @param string $operator
     * @param string $OperationType
     * @param \Google\AdsApi\AdWords\v201607\mcm\ManagedCustomer $operand
     */
    public function __construct($operator = null, $OperationType = null, $operand = null)
    {
      parent::__construct($operator, $OperationType);
      $this->operand = $operand;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\mcm\ManagedCustomer
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\mcm\ManagedCustomer $operand
     * @return \Google\AdsApi\AdWords\v201607\mcm\ManagedCustomerOperation
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

}