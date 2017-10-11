<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomLabelDetail StructType
 * @subpackage Structs
 */
class CustomLabelDetail extends AbstractStructBase
{
    /**
     * The CoordinateUnits
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoordinateUnits;
    /**
     * The TextEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomLabelTextEntry[]
     */
    public $TextEntries;
    /**
     * The GraphicEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomLabelGraphicEntry[]
     */
    public $GraphicEntries;
    /**
     * The BoxEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomLabelBoxEntry[]
     */
    public $BoxEntries;
    /**
     * The TextBoxEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomLabelTextBoxEntry[]
     */
    public $TextBoxEntries;
    /**
     * The BarcodeEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomLabelBarcodeEntry[]
     */
    public $BarcodeEntries;
    /**
     * Constructor method for CustomLabelDetail
     * @uses CustomLabelDetail::setCoordinateUnits()
     * @uses CustomLabelDetail::setTextEntries()
     * @uses CustomLabelDetail::setGraphicEntries()
     * @uses CustomLabelDetail::setBoxEntries()
     * @uses CustomLabelDetail::setTextBoxEntries()
     * @uses CustomLabelDetail::setBarcodeEntries()
     * @param string $coordinateUnits
     * @param \StructType\CustomLabelTextEntry[] $textEntries
     * @param \StructType\CustomLabelGraphicEntry[] $graphicEntries
     * @param \StructType\CustomLabelBoxEntry[] $boxEntries
     * @param \StructType\CustomLabelTextBoxEntry[] $textBoxEntries
     * @param \StructType\CustomLabelBarcodeEntry[] $barcodeEntries
     */
    public function __construct($coordinateUnits = null, array $textEntries = array(), array $graphicEntries = array(), array $boxEntries = array(), array $textBoxEntries = array(), array $barcodeEntries = array())
    {
        $this
            ->setCoordinateUnits($coordinateUnits)
            ->setTextEntries($textEntries)
            ->setGraphicEntries($graphicEntries)
            ->setBoxEntries($boxEntries)
            ->setTextBoxEntries($textBoxEntries)
            ->setBarcodeEntries($barcodeEntries);
    }
    /**
     * Get CoordinateUnits value
     * @return string|null
     */
    public function getCoordinateUnits()
    {
        return $this->CoordinateUnits;
    }
    /**
     * Set CoordinateUnits value
     * @uses \EnumType\CustomLabelCoordinateUnits::valueIsValid()
     * @uses \EnumType\CustomLabelCoordinateUnits::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coordinateUnits
     * @return \StructType\CustomLabelDetail
     */
    public function setCoordinateUnits($coordinateUnits = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CustomLabelCoordinateUnits::valueIsValid($coordinateUnits)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coordinateUnits, implode(', ', \EnumType\CustomLabelCoordinateUnits::getValidValues())), __LINE__);
        }
        $this->CoordinateUnits = $coordinateUnits;
        return $this;
    }
    /**
     * Get TextEntries value
     * @return \StructType\CustomLabelTextEntry[]|null
     */
    public function getTextEntries()
    {
        return $this->TextEntries;
    }
    /**
     * Set TextEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelTextEntry[] $textEntries
     * @return \StructType\CustomLabelDetail
     */
    public function setTextEntries(array $textEntries = array())
    {
        foreach ($textEntries as $customLabelDetailTextEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailTextEntriesItem instanceof \StructType\CustomLabelTextEntry) {
                throw new \InvalidArgumentException(sprintf('The TextEntries property can only contain items of \StructType\CustomLabelTextEntry, "%s" given', is_object($customLabelDetailTextEntriesItem) ? get_class($customLabelDetailTextEntriesItem) : gettype($customLabelDetailTextEntriesItem)), __LINE__);
            }
        }
        $this->TextEntries = $textEntries;
        return $this;
    }
    /**
     * Add item to TextEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelTextEntry $item
     * @return \StructType\CustomLabelDetail
     */
    public function addToTextEntries(\StructType\CustomLabelTextEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomLabelTextEntry) {
            throw new \InvalidArgumentException(sprintf('The TextEntries property can only contain items of \StructType\CustomLabelTextEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextEntries[] = $item;
        return $this;
    }
    /**
     * Get GraphicEntries value
     * @return \StructType\CustomLabelGraphicEntry[]|null
     */
    public function getGraphicEntries()
    {
        return $this->GraphicEntries;
    }
    /**
     * Set GraphicEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelGraphicEntry[] $graphicEntries
     * @return \StructType\CustomLabelDetail
     */
    public function setGraphicEntries(array $graphicEntries = array())
    {
        foreach ($graphicEntries as $customLabelDetailGraphicEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailGraphicEntriesItem instanceof \StructType\CustomLabelGraphicEntry) {
                throw new \InvalidArgumentException(sprintf('The GraphicEntries property can only contain items of \StructType\CustomLabelGraphicEntry, "%s" given', is_object($customLabelDetailGraphicEntriesItem) ? get_class($customLabelDetailGraphicEntriesItem) : gettype($customLabelDetailGraphicEntriesItem)), __LINE__);
            }
        }
        $this->GraphicEntries = $graphicEntries;
        return $this;
    }
    /**
     * Add item to GraphicEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelGraphicEntry $item
     * @return \StructType\CustomLabelDetail
     */
    public function addToGraphicEntries(\StructType\CustomLabelGraphicEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomLabelGraphicEntry) {
            throw new \InvalidArgumentException(sprintf('The GraphicEntries property can only contain items of \StructType\CustomLabelGraphicEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GraphicEntries[] = $item;
        return $this;
    }
    /**
     * Get BoxEntries value
     * @return \StructType\CustomLabelBoxEntry[]|null
     */
    public function getBoxEntries()
    {
        return $this->BoxEntries;
    }
    /**
     * Set BoxEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelBoxEntry[] $boxEntries
     * @return \StructType\CustomLabelDetail
     */
    public function setBoxEntries(array $boxEntries = array())
    {
        foreach ($boxEntries as $customLabelDetailBoxEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailBoxEntriesItem instanceof \StructType\CustomLabelBoxEntry) {
                throw new \InvalidArgumentException(sprintf('The BoxEntries property can only contain items of \StructType\CustomLabelBoxEntry, "%s" given', is_object($customLabelDetailBoxEntriesItem) ? get_class($customLabelDetailBoxEntriesItem) : gettype($customLabelDetailBoxEntriesItem)), __LINE__);
            }
        }
        $this->BoxEntries = $boxEntries;
        return $this;
    }
    /**
     * Add item to BoxEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelBoxEntry $item
     * @return \StructType\CustomLabelDetail
     */
    public function addToBoxEntries(\StructType\CustomLabelBoxEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomLabelBoxEntry) {
            throw new \InvalidArgumentException(sprintf('The BoxEntries property can only contain items of \StructType\CustomLabelBoxEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BoxEntries[] = $item;
        return $this;
    }
    /**
     * Get TextBoxEntries value
     * @return \StructType\CustomLabelTextBoxEntry[]|null
     */
    public function getTextBoxEntries()
    {
        return $this->TextBoxEntries;
    }
    /**
     * Set TextBoxEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelTextBoxEntry[] $textBoxEntries
     * @return \StructType\CustomLabelDetail
     */
    public function setTextBoxEntries(array $textBoxEntries = array())
    {
        foreach ($textBoxEntries as $customLabelDetailTextBoxEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailTextBoxEntriesItem instanceof \StructType\CustomLabelTextBoxEntry) {
                throw new \InvalidArgumentException(sprintf('The TextBoxEntries property can only contain items of \StructType\CustomLabelTextBoxEntry, "%s" given', is_object($customLabelDetailTextBoxEntriesItem) ? get_class($customLabelDetailTextBoxEntriesItem) : gettype($customLabelDetailTextBoxEntriesItem)), __LINE__);
            }
        }
        $this->TextBoxEntries = $textBoxEntries;
        return $this;
    }
    /**
     * Add item to TextBoxEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelTextBoxEntry $item
     * @return \StructType\CustomLabelDetail
     */
    public function addToTextBoxEntries(\StructType\CustomLabelTextBoxEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomLabelTextBoxEntry) {
            throw new \InvalidArgumentException(sprintf('The TextBoxEntries property can only contain items of \StructType\CustomLabelTextBoxEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TextBoxEntries[] = $item;
        return $this;
    }
    /**
     * Get BarcodeEntries value
     * @return \StructType\CustomLabelBarcodeEntry[]|null
     */
    public function getBarcodeEntries()
    {
        return $this->BarcodeEntries;
    }
    /**
     * Set BarcodeEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelBarcodeEntry[] $barcodeEntries
     * @return \StructType\CustomLabelDetail
     */
    public function setBarcodeEntries(array $barcodeEntries = array())
    {
        foreach ($barcodeEntries as $customLabelDetailBarcodeEntriesItem) {
            // validation for constraint: itemType
            if (!$customLabelDetailBarcodeEntriesItem instanceof \StructType\CustomLabelBarcodeEntry) {
                throw new \InvalidArgumentException(sprintf('The BarcodeEntries property can only contain items of \StructType\CustomLabelBarcodeEntry, "%s" given', is_object($customLabelDetailBarcodeEntriesItem) ? get_class($customLabelDetailBarcodeEntriesItem) : gettype($customLabelDetailBarcodeEntriesItem)), __LINE__);
            }
        }
        $this->BarcodeEntries = $barcodeEntries;
        return $this;
    }
    /**
     * Add item to BarcodeEntries value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomLabelBarcodeEntry $item
     * @return \StructType\CustomLabelDetail
     */
    public function addToBarcodeEntries(\StructType\CustomLabelBarcodeEntry $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomLabelBarcodeEntry) {
            throw new \InvalidArgumentException(sprintf('The BarcodeEntries property can only contain items of \StructType\CustomLabelBarcodeEntry, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BarcodeEntries[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\CustomLabelDetail
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
