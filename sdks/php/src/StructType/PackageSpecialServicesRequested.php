<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageSpecialServicesRequested StructType
 * Meta informations extracted from the WSDL
 * - documentation: These special services are available at the package level for some or all service types. If the shipper is requesting a special service which requires additional data, the package special service type must be present in the
 * specialServiceTypes collection, and the supporting detail must be provided in the appropriate sub-object below.
 * @subpackage Structs
 */
class PackageSpecialServicesRequested extends AbstractStructBase
{
    /**
     * The SpecialServiceTypes
     * Meta informations extracted from the WSDL
     * - documentation: The types of all special services requested for the enclosing shipment or package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SpecialServiceTypes;
    /**
     * The CodDetail
     * Meta informations extracted from the WSDL
     * - documentation: For use with FedEx Ground services only; COD must be present in shipment's special services.
     * - minOccurs: 0
     * @var \StructType\CodDetail
     */
    public $CodDetail;
    /**
     * The DangerousGoodsDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DangerousGoodsDetail
     */
    public $DangerousGoodsDetail;
    /**
     * The BatteryDetails
     * Meta informations extracted from the WSDL
     * - documentation: Provides details about the batteries or cells that are contained within this specific package.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\BatteryClassificationDetail[]
     */
    public $BatteryDetails;
    /**
     * The DryIceWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Weight
     */
    public $DryIceWeight;
    /**
     * The SignatureOptionDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\SignatureOptionDetail
     */
    public $SignatureOptionDetail;
    /**
     * The PriorityAlertDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\PriorityAlertDetail
     */
    public $PriorityAlertDetail;
    /**
     * The AlcoholDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\AlcoholDetail
     */
    public $AlcoholDetail;
    /**
     * Constructor method for PackageSpecialServicesRequested
     * @uses PackageSpecialServicesRequested::setSpecialServiceTypes()
     * @uses PackageSpecialServicesRequested::setCodDetail()
     * @uses PackageSpecialServicesRequested::setDangerousGoodsDetail()
     * @uses PackageSpecialServicesRequested::setBatteryDetails()
     * @uses PackageSpecialServicesRequested::setDryIceWeight()
     * @uses PackageSpecialServicesRequested::setSignatureOptionDetail()
     * @uses PackageSpecialServicesRequested::setPriorityAlertDetail()
     * @uses PackageSpecialServicesRequested::setAlcoholDetail()
     * @param string[] $specialServiceTypes
     * @param \StructType\CodDetail $codDetail
     * @param \StructType\DangerousGoodsDetail $dangerousGoodsDetail
     * @param \StructType\BatteryClassificationDetail[] $batteryDetails
     * @param \StructType\Weight $dryIceWeight
     * @param \StructType\SignatureOptionDetail $signatureOptionDetail
     * @param \StructType\PriorityAlertDetail $priorityAlertDetail
     * @param \StructType\AlcoholDetail $alcoholDetail
     */
    public function __construct(array $specialServiceTypes = array(), \StructType\CodDetail $codDetail = null, \StructType\DangerousGoodsDetail $dangerousGoodsDetail = null, array $batteryDetails = array(), \StructType\Weight $dryIceWeight = null, \StructType\SignatureOptionDetail $signatureOptionDetail = null, \StructType\PriorityAlertDetail $priorityAlertDetail = null, \StructType\AlcoholDetail $alcoholDetail = null)
    {
        $this
            ->setSpecialServiceTypes($specialServiceTypes)
            ->setCodDetail($codDetail)
            ->setDangerousGoodsDetail($dangerousGoodsDetail)
            ->setBatteryDetails($batteryDetails)
            ->setDryIceWeight($dryIceWeight)
            ->setSignatureOptionDetail($signatureOptionDetail)
            ->setPriorityAlertDetail($priorityAlertDetail)
            ->setAlcoholDetail($alcoholDetail);
    }
    /**
     * Get SpecialServiceTypes value
     * @return string[]|null
     */
    public function getSpecialServiceTypes()
    {
        return $this->SpecialServiceTypes;
    }
    /**
     * Set SpecialServiceTypes value
     * @uses \EnumType\PackageSpecialServiceType::valueIsValid()
     * @uses \EnumType\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $specialServiceTypes
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setSpecialServiceTypes(array $specialServiceTypes = array())
    {
        $invalidValues = array();
        foreach ($specialServiceTypes as $packageSpecialServicesRequestedSpecialServiceTypesItem) {
            if (!\EnumType\PackageSpecialServiceType::valueIsValid($packageSpecialServicesRequestedSpecialServiceTypesItem)) {
                $invalidValues[] = var_export($packageSpecialServicesRequestedSpecialServiceTypesItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes = $specialServiceTypes;
        return $this;
    }
    /**
     * Add item to SpecialServiceTypes value
     * @uses \EnumType\PackageSpecialServiceType::valueIsValid()
     * @uses \EnumType\PackageSpecialServiceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function addToSpecialServiceTypes($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PackageSpecialServiceType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\PackageSpecialServiceType::getValidValues())), __LINE__);
        }
        $this->SpecialServiceTypes[] = $item;
        return $this;
    }
    /**
     * Get CodDetail value
     * @return \StructType\CodDetail|null
     */
    public function getCodDetail()
    {
        return $this->CodDetail;
    }
    /**
     * Set CodDetail value
     * @param \StructType\CodDetail $codDetail
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setCodDetail(\StructType\CodDetail $codDetail = null)
    {
        $this->CodDetail = $codDetail;
        return $this;
    }
    /**
     * Get DangerousGoodsDetail value
     * @return \StructType\DangerousGoodsDetail|null
     */
    public function getDangerousGoodsDetail()
    {
        return $this->DangerousGoodsDetail;
    }
    /**
     * Set DangerousGoodsDetail value
     * @param \StructType\DangerousGoodsDetail $dangerousGoodsDetail
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setDangerousGoodsDetail(\StructType\DangerousGoodsDetail $dangerousGoodsDetail = null)
    {
        $this->DangerousGoodsDetail = $dangerousGoodsDetail;
        return $this;
    }
    /**
     * Get BatteryDetails value
     * @return \StructType\BatteryClassificationDetail[]|null
     */
    public function getBatteryDetails()
    {
        return $this->BatteryDetails;
    }
    /**
     * Set BatteryDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\BatteryClassificationDetail[] $batteryDetails
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setBatteryDetails(array $batteryDetails = array())
    {
        foreach ($batteryDetails as $packageSpecialServicesRequestedBatteryDetailsItem) {
            // validation for constraint: itemType
            if (!$packageSpecialServicesRequestedBatteryDetailsItem instanceof \StructType\BatteryClassificationDetail) {
                throw new \InvalidArgumentException(sprintf('The BatteryDetails property can only contain items of \StructType\BatteryClassificationDetail, "%s" given', is_object($packageSpecialServicesRequestedBatteryDetailsItem) ? get_class($packageSpecialServicesRequestedBatteryDetailsItem) : gettype($packageSpecialServicesRequestedBatteryDetailsItem)), __LINE__);
            }
        }
        $this->BatteryDetails = $batteryDetails;
        return $this;
    }
    /**
     * Add item to BatteryDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\BatteryClassificationDetail $item
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function addToBatteryDetails(\StructType\BatteryClassificationDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BatteryClassificationDetail) {
            throw new \InvalidArgumentException(sprintf('The BatteryDetails property can only contain items of \StructType\BatteryClassificationDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BatteryDetails[] = $item;
        return $this;
    }
    /**
     * Get DryIceWeight value
     * @return \StructType\Weight|null
     */
    public function getDryIceWeight()
    {
        return $this->DryIceWeight;
    }
    /**
     * Set DryIceWeight value
     * @param \StructType\Weight $dryIceWeight
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setDryIceWeight(\StructType\Weight $dryIceWeight = null)
    {
        $this->DryIceWeight = $dryIceWeight;
        return $this;
    }
    /**
     * Get SignatureOptionDetail value
     * @return \StructType\SignatureOptionDetail|null
     */
    public function getSignatureOptionDetail()
    {
        return $this->SignatureOptionDetail;
    }
    /**
     * Set SignatureOptionDetail value
     * @param \StructType\SignatureOptionDetail $signatureOptionDetail
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setSignatureOptionDetail(\StructType\SignatureOptionDetail $signatureOptionDetail = null)
    {
        $this->SignatureOptionDetail = $signatureOptionDetail;
        return $this;
    }
    /**
     * Get PriorityAlertDetail value
     * @return \StructType\PriorityAlertDetail|null
     */
    public function getPriorityAlertDetail()
    {
        return $this->PriorityAlertDetail;
    }
    /**
     * Set PriorityAlertDetail value
     * @param \StructType\PriorityAlertDetail $priorityAlertDetail
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setPriorityAlertDetail(\StructType\PriorityAlertDetail $priorityAlertDetail = null)
    {
        $this->PriorityAlertDetail = $priorityAlertDetail;
        return $this;
    }
    /**
     * Get AlcoholDetail value
     * @return \StructType\AlcoholDetail|null
     */
    public function getAlcoholDetail()
    {
        return $this->AlcoholDetail;
    }
    /**
     * Set AlcoholDetail value
     * @param \StructType\AlcoholDetail $alcoholDetail
     * @return \StructType\PackageSpecialServicesRequested
     */
    public function setAlcoholDetail(\StructType\AlcoholDetail $alcoholDetail = null)
    {
        $this->AlcoholDetail = $alcoholDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\PackageSpecialServicesRequested
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
