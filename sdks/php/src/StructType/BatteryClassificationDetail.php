<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BatteryClassificationDetail StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes attributes of a battery or cell that are used for classification purposes. Typically this structure would be used to allow customers to declare batteries or cells for which full dangerous goods documentation and procedures
 * are not required.
 * @subpackage Structs
 */
class BatteryClassificationDetail extends AbstractStructBase
{
    /**
     * The Material
     * Meta informations extracted from the WSDL
     * - documentation: Describes the material composition of the battery or cell.
     * - minOccurs: 0
     * @var string
     */
    public $Material;
    /**
     * The Packing
     * Meta informations extracted from the WSDL
     * - documentation: Describes the packing arrangement of the battery or cell with respect to other items within the same package.
     * - minOccurs: 0
     * @var string
     */
    public $Packing;
    /**
     * The RegulatorySubType
     * Meta informations extracted from the WSDL
     * - documentation: A regulation specific classification for the battery or cell.
     * - minOccurs: 0
     * @var string
     */
    public $RegulatorySubType;
    /**
     * Constructor method for BatteryClassificationDetail
     * @uses BatteryClassificationDetail::setMaterial()
     * @uses BatteryClassificationDetail::setPacking()
     * @uses BatteryClassificationDetail::setRegulatorySubType()
     * @param string $material
     * @param string $packing
     * @param string $regulatorySubType
     */
    public function __construct($material = null, $packing = null, $regulatorySubType = null)
    {
        $this
            ->setMaterial($material)
            ->setPacking($packing)
            ->setRegulatorySubType($regulatorySubType);
    }
    /**
     * Get Material value
     * @return string|null
     */
    public function getMaterial()
    {
        return $this->Material;
    }
    /**
     * Set Material value
     * @uses \EnumType\BatteryMaterialType::valueIsValid()
     * @uses \EnumType\BatteryMaterialType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $material
     * @return \StructType\BatteryClassificationDetail
     */
    public function setMaterial($material = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BatteryMaterialType::valueIsValid($material)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $material, implode(', ', \EnumType\BatteryMaterialType::getValidValues())), __LINE__);
        }
        $this->Material = $material;
        return $this;
    }
    /**
     * Get Packing value
     * @return string|null
     */
    public function getPacking()
    {
        return $this->Packing;
    }
    /**
     * Set Packing value
     * @uses \EnumType\BatteryPackingType::valueIsValid()
     * @uses \EnumType\BatteryPackingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $packing
     * @return \StructType\BatteryClassificationDetail
     */
    public function setPacking($packing = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BatteryPackingType::valueIsValid($packing)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $packing, implode(', ', \EnumType\BatteryPackingType::getValidValues())), __LINE__);
        }
        $this->Packing = $packing;
        return $this;
    }
    /**
     * Get RegulatorySubType value
     * @return string|null
     */
    public function getRegulatorySubType()
    {
        return $this->RegulatorySubType;
    }
    /**
     * Set RegulatorySubType value
     * @uses \EnumType\BatteryRegulatorySubType::valueIsValid()
     * @uses \EnumType\BatteryRegulatorySubType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regulatorySubType
     * @return \StructType\BatteryClassificationDetail
     */
    public function setRegulatorySubType($regulatorySubType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BatteryRegulatorySubType::valueIsValid($regulatorySubType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $regulatorySubType, implode(', ', \EnumType\BatteryRegulatorySubType::getValidValues())), __LINE__);
        }
        $this->RegulatorySubType = $regulatorySubType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\BatteryClassificationDetail
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
