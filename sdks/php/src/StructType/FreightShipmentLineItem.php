<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FreightShipmentLineItem StructType
 * Meta informations extracted from the WSDL
 * - documentation: Description of an individual commodity or class of content in a shipment.
 * @subpackage Structs
 */
class FreightShipmentLineItem extends AbstractStructBase
{
    /**
     * The FreightClass
     * Meta informations extracted from the WSDL
     * - documentation: Freight class for this line item.
     * - minOccurs: 0
     * @var string
     */
    public $FreightClass;
    /**
     * The Packaging
     * Meta informations extracted from the WSDL
     * - documentation: Specification of handling-unit packaging for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Packaging;
    /**
     * The Pieces
     * Meta informations extracted from the WSDL
     * - documentation: Number of pieces for this commodity or class line.
     * - minOccurs: 0
     * @var int
     */
    public $Pieces;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: Customer-provided description for this commodity or class line.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight for this commodity or class line.
     * - minOccurs: 0
     * @var \StructType\Weight
     */
    public $Weight;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\Dimensions
     */
    public $Dimensions;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - documentation: Volume (cubic measure) for this commodity or class line.
     * - minOccurs: 0
     * @var \StructType\Volume
     */
    public $Volume;
    /**
     * Constructor method for FreightShipmentLineItem
     * @uses FreightShipmentLineItem::setFreightClass()
     * @uses FreightShipmentLineItem::setPackaging()
     * @uses FreightShipmentLineItem::setPieces()
     * @uses FreightShipmentLineItem::setDescription()
     * @uses FreightShipmentLineItem::setWeight()
     * @uses FreightShipmentLineItem::setDimensions()
     * @uses FreightShipmentLineItem::setVolume()
     * @param string $freightClass
     * @param string $packaging
     * @param int $pieces
     * @param string $description
     * @param \StructType\Weight $weight
     * @param \StructType\Dimensions $dimensions
     * @param \StructType\Volume $volume
     */
    public function __construct($freightClass = null, $packaging = null, $pieces = null, $description = null, \StructType\Weight $weight = null, \StructType\Dimensions $dimensions = null, \StructType\Volume $volume = null)
    {
        $this
            ->setFreightClass($freightClass)
            ->setPackaging($packaging)
            ->setPieces($pieces)
            ->setDescription($description)
            ->setWeight($weight)
            ->setDimensions($dimensions)
            ->setVolume($volume);
    }
    /**
     * Get FreightClass value
     * @return string|null
     */
    public function getFreightClass()
    {
        return $this->FreightClass;
    }
    /**
     * Set FreightClass value
     * @uses \EnumType\FreightClassType::valueIsValid()
     * @uses \EnumType\FreightClassType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightClass
     * @return \StructType\FreightShipmentLineItem
     */
    public function setFreightClass($freightClass = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FreightClassType::valueIsValid($freightClass)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $freightClass, implode(', ', \EnumType\FreightClassType::getValidValues())), __LINE__);
        }
        $this->FreightClass = $freightClass;
        return $this;
    }
    /**
     * Get Packaging value
     * @return string|null
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    /**
     * Set Packaging value
     * @uses \EnumType\PhysicalPackagingType::valueIsValid()
     * @uses \EnumType\PhysicalPackagingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packaging
     * @return \StructType\FreightShipmentLineItem
     */
    public function setPackaging($packaging = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PhysicalPackagingType::valueIsValid($packaging)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packaging, implode(', ', \EnumType\PhysicalPackagingType::getValidValues())), __LINE__);
        }
        $this->Packaging = $packaging;
        return $this;
    }
    /**
     * Get Pieces value
     * @return int|null
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    /**
     * Set Pieces value
     * @param int $pieces
     * @return \StructType\FreightShipmentLineItem
     */
    public function setPieces($pieces = null)
    {
        // validation for constraint: int
        if (!is_null($pieces) && !is_numeric($pieces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($pieces)), __LINE__);
        }
        $this->Pieces = $pieces;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\FreightShipmentLineItem
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Weight value
     * @return \StructType\Weight|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \StructType\Weight $weight
     * @return \StructType\FreightShipmentLineItem
     */
    public function setWeight(\StructType\Weight $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \StructType\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \StructType\Dimensions $dimensions
     * @return \StructType\FreightShipmentLineItem
     */
    public function setDimensions(\StructType\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Volume value
     * @return \StructType\Volume|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \StructType\Volume $volume
     * @return \StructType\FreightShipmentLineItem
     */
    public function setVolume(\StructType\Volume $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\FreightShipmentLineItem
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
