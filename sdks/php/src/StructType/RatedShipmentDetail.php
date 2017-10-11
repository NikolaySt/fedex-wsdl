<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RatedShipmentDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: This class groups the shipment and package rating data for a specific rate type for use in a rating reply, which groups result data by rate type.
 * @subpackage Structs
 */
class RatedShipmentDetail extends AbstractStructBase
{
    /**
     * The EffectiveNetDiscount
     * Meta informations extracted from the WSDL
     * - documentation: The difference between "list" and "account" total net charge.
     * - minOccurs: 0
     * @var \StructType\Money
     */
    public $EffectiveNetDiscount;
    /**
     * The AdjustedCodCollectionAmount
     * Meta informations extracted from the WSDL
     * - documentation: Express COD is shipment level.
     * - minOccurs: 0
     * @var \StructType\Money
     */
    public $AdjustedCodCollectionAmount;
    /**
     * The ShipmentRateDetail
     * Meta informations extracted from the WSDL
     * - documentation: The shipment-level totals for this rate type.
     * - minOccurs: 0
     * @var \StructType\ShipmentRateDetail
     */
    public $ShipmentRateDetail;
    /**
     * The RatedPackages
     * Meta informations extracted from the WSDL
     * - documentation: The package-level data for this rate type.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RatedPackageDetail[]
     */
    public $RatedPackages;
    /**
     * Constructor method for RatedShipmentDetail
     * @uses RatedShipmentDetail::setEffectiveNetDiscount()
     * @uses RatedShipmentDetail::setAdjustedCodCollectionAmount()
     * @uses RatedShipmentDetail::setShipmentRateDetail()
     * @uses RatedShipmentDetail::setRatedPackages()
     * @param \StructType\Money $effectiveNetDiscount
     * @param \StructType\Money $adjustedCodCollectionAmount
     * @param \StructType\ShipmentRateDetail $shipmentRateDetail
     * @param \StructType\RatedPackageDetail[] $ratedPackages
     */
    public function __construct(\StructType\Money $effectiveNetDiscount = null, \StructType\Money $adjustedCodCollectionAmount = null, \StructType\ShipmentRateDetail $shipmentRateDetail = null, array $ratedPackages = array())
    {
        $this
            ->setEffectiveNetDiscount($effectiveNetDiscount)
            ->setAdjustedCodCollectionAmount($adjustedCodCollectionAmount)
            ->setShipmentRateDetail($shipmentRateDetail)
            ->setRatedPackages($ratedPackages);
    }
    /**
     * Get EffectiveNetDiscount value
     * @return \StructType\Money|null
     */
    public function getEffectiveNetDiscount()
    {
        return $this->EffectiveNetDiscount;
    }
    /**
     * Set EffectiveNetDiscount value
     * @param \StructType\Money $effectiveNetDiscount
     * @return \StructType\RatedShipmentDetail
     */
    public function setEffectiveNetDiscount(\StructType\Money $effectiveNetDiscount = null)
    {
        $this->EffectiveNetDiscount = $effectiveNetDiscount;
        return $this;
    }
    /**
     * Get AdjustedCodCollectionAmount value
     * @return \StructType\Money|null
     */
    public function getAdjustedCodCollectionAmount()
    {
        return $this->AdjustedCodCollectionAmount;
    }
    /**
     * Set AdjustedCodCollectionAmount value
     * @param \StructType\Money $adjustedCodCollectionAmount
     * @return \StructType\RatedShipmentDetail
     */
    public function setAdjustedCodCollectionAmount(\StructType\Money $adjustedCodCollectionAmount = null)
    {
        $this->AdjustedCodCollectionAmount = $adjustedCodCollectionAmount;
        return $this;
    }
    /**
     * Get ShipmentRateDetail value
     * @return \StructType\ShipmentRateDetail|null
     */
    public function getShipmentRateDetail()
    {
        return $this->ShipmentRateDetail;
    }
    /**
     * Set ShipmentRateDetail value
     * @param \StructType\ShipmentRateDetail $shipmentRateDetail
     * @return \StructType\RatedShipmentDetail
     */
    public function setShipmentRateDetail(\StructType\ShipmentRateDetail $shipmentRateDetail = null)
    {
        $this->ShipmentRateDetail = $shipmentRateDetail;
        return $this;
    }
    /**
     * Get RatedPackages value
     * @return \StructType\RatedPackageDetail[]|null
     */
    public function getRatedPackages()
    {
        return $this->RatedPackages;
    }
    /**
     * Set RatedPackages value
     * @throws \InvalidArgumentException
     * @param \StructType\RatedPackageDetail[] $ratedPackages
     * @return \StructType\RatedShipmentDetail
     */
    public function setRatedPackages(array $ratedPackages = array())
    {
        foreach ($ratedPackages as $ratedShipmentDetailRatedPackagesItem) {
            // validation for constraint: itemType
            if (!$ratedShipmentDetailRatedPackagesItem instanceof \StructType\RatedPackageDetail) {
                throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \StructType\RatedPackageDetail, "%s" given', is_object($ratedShipmentDetailRatedPackagesItem) ? get_class($ratedShipmentDetailRatedPackagesItem) : gettype($ratedShipmentDetailRatedPackagesItem)), __LINE__);
            }
        }
        $this->RatedPackages = $ratedPackages;
        return $this;
    }
    /**
     * Add item to RatedPackages value
     * @throws \InvalidArgumentException
     * @param \StructType\RatedPackageDetail $item
     * @return \StructType\RatedShipmentDetail
     */
    public function addToRatedPackages(\StructType\RatedPackageDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RatedPackageDetail) {
            throw new \InvalidArgumentException(sprintf('The RatedPackages property can only contain items of \StructType\RatedPackageDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RatedPackages[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RatedShipmentDetail
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
