<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DocTabContentZone001 StructType
 * @subpackage Structs
 */
class DocTabContentZone001 extends AbstractStructBase
{
    /**
     * The DocTabZoneSpecifications
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DocTabZoneSpecification[]
     */
    public $DocTabZoneSpecifications;
    /**
     * Constructor method for DocTabContentZone001
     * @uses DocTabContentZone001::setDocTabZoneSpecifications()
     * @param \StructType\DocTabZoneSpecification[] $docTabZoneSpecifications
     */
    public function __construct(array $docTabZoneSpecifications = array())
    {
        $this
            ->setDocTabZoneSpecifications($docTabZoneSpecifications);
    }
    /**
     * Get DocTabZoneSpecifications value
     * @return \StructType\DocTabZoneSpecification[]|null
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->DocTabZoneSpecifications;
    }
    /**
     * Set DocTabZoneSpecifications value
     * @throws \InvalidArgumentException
     * @param \StructType\DocTabZoneSpecification[] $docTabZoneSpecifications
     * @return \StructType\DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications = array())
    {
        foreach ($docTabZoneSpecifications as $docTabContentZone001DocTabZoneSpecificationsItem) {
            // validation for constraint: itemType
            if (!$docTabContentZone001DocTabZoneSpecificationsItem instanceof \StructType\DocTabZoneSpecification) {
                throw new \InvalidArgumentException(sprintf('The DocTabZoneSpecifications property can only contain items of \StructType\DocTabZoneSpecification, "%s" given', is_object($docTabContentZone001DocTabZoneSpecificationsItem) ? get_class($docTabContentZone001DocTabZoneSpecificationsItem) : gettype($docTabContentZone001DocTabZoneSpecificationsItem)), __LINE__);
            }
        }
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
    /**
     * Add item to DocTabZoneSpecifications value
     * @throws \InvalidArgumentException
     * @param \StructType\DocTabZoneSpecification $item
     * @return \StructType\DocTabContentZone001
     */
    public function addToDocTabZoneSpecifications(\StructType\DocTabZoneSpecification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DocTabZoneSpecification) {
            throw new \InvalidArgumentException(sprintf('The DocTabZoneSpecifications property can only contain items of \StructType\DocTabZoneSpecification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DocTabZoneSpecifications[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\DocTabContentZone001
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
