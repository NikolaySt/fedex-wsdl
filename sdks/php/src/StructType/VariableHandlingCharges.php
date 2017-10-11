<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariableHandlingCharges StructType
 * @subpackage Structs
 */
class VariableHandlingCharges extends AbstractStructBase
{
    /**
     * The VariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Money
     */
    public $VariableHandlingCharge;
    /**
     * The FixedVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Money
     */
    public $FixedVariableHandlingCharge;
    /**
     * The PercentVariableHandlingCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Money
     */
    public $PercentVariableHandlingCharge;
    /**
     * The TotalCustomerCharge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Money
     */
    public $TotalCustomerCharge;
    /**
     * Constructor method for VariableHandlingCharges
     * @uses VariableHandlingCharges::setVariableHandlingCharge()
     * @uses VariableHandlingCharges::setFixedVariableHandlingCharge()
     * @uses VariableHandlingCharges::setPercentVariableHandlingCharge()
     * @uses VariableHandlingCharges::setTotalCustomerCharge()
     * @param \StructType\Money $variableHandlingCharge
     * @param \StructType\Money $fixedVariableHandlingCharge
     * @param \StructType\Money $percentVariableHandlingCharge
     * @param \StructType\Money $totalCustomerCharge
     */
    public function __construct(\StructType\Money $variableHandlingCharge = null, \StructType\Money $fixedVariableHandlingCharge = null, \StructType\Money $percentVariableHandlingCharge = null, \StructType\Money $totalCustomerCharge = null)
    {
        $this
            ->setVariableHandlingCharge($variableHandlingCharge)
            ->setFixedVariableHandlingCharge($fixedVariableHandlingCharge)
            ->setPercentVariableHandlingCharge($percentVariableHandlingCharge)
            ->setTotalCustomerCharge($totalCustomerCharge);
    }
    /**
     * Get VariableHandlingCharge value
     * @return \StructType\Money|null
     */
    public function getVariableHandlingCharge()
    {
        return $this->VariableHandlingCharge;
    }
    /**
     * Set VariableHandlingCharge value
     * @param \StructType\Money $variableHandlingCharge
     * @return \StructType\VariableHandlingCharges
     */
    public function setVariableHandlingCharge(\StructType\Money $variableHandlingCharge = null)
    {
        $this->VariableHandlingCharge = $variableHandlingCharge;
        return $this;
    }
    /**
     * Get FixedVariableHandlingCharge value
     * @return \StructType\Money|null
     */
    public function getFixedVariableHandlingCharge()
    {
        return $this->FixedVariableHandlingCharge;
    }
    /**
     * Set FixedVariableHandlingCharge value
     * @param \StructType\Money $fixedVariableHandlingCharge
     * @return \StructType\VariableHandlingCharges
     */
    public function setFixedVariableHandlingCharge(\StructType\Money $fixedVariableHandlingCharge = null)
    {
        $this->FixedVariableHandlingCharge = $fixedVariableHandlingCharge;
        return $this;
    }
    /**
     * Get PercentVariableHandlingCharge value
     * @return \StructType\Money|null
     */
    public function getPercentVariableHandlingCharge()
    {
        return $this->PercentVariableHandlingCharge;
    }
    /**
     * Set PercentVariableHandlingCharge value
     * @param \StructType\Money $percentVariableHandlingCharge
     * @return \StructType\VariableHandlingCharges
     */
    public function setPercentVariableHandlingCharge(\StructType\Money $percentVariableHandlingCharge = null)
    {
        $this->PercentVariableHandlingCharge = $percentVariableHandlingCharge;
        return $this;
    }
    /**
     * Get TotalCustomerCharge value
     * @return \StructType\Money|null
     */
    public function getTotalCustomerCharge()
    {
        return $this->TotalCustomerCharge;
    }
    /**
     * Set TotalCustomerCharge value
     * @param \StructType\Money $totalCustomerCharge
     * @return \StructType\VariableHandlingCharges
     */
    public function setTotalCustomerCharge(\StructType\Money $totalCustomerCharge = null)
    {
        $this->TotalCustomerCharge = $totalCustomerCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\VariableHandlingCharges
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
