<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShippingDocumentSpecification StructType
 * Meta informations extracted from the WSDL
 * - documentation: Contains all data required for additional (non-label) shipping documents to be produced in conjunction with a specific shipment.
 * @subpackage Structs
 */
class ShippingDocumentSpecification extends AbstractStructBase
{
    /**
     * The ShippingDocumentTypes
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the types of shipping documents requested by the shipper.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ShippingDocumentTypes;
    /**
     * The CertificateOfOrigin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CertificateOfOriginDetail
     */
    public $CertificateOfOrigin;
    /**
     * The CommercialInvoiceDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\CommercialInvoiceDetail
     */
    public $CommercialInvoiceDetail;
    /**
     * The CustomPackageDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of each package-level custom document (the same specification is used for all packages).
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomDocumentDetail[]
     */
    public $CustomPackageDocumentDetail;
    /**
     * The CustomShipmentDocumentDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of a shipment-level custom document.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CustomDocumentDetail[]
     */
    public $CustomShipmentDocumentDetail;
    /**
     * The ExportDeclarationDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ExportDeclarationDetail
     */
    public $ExportDeclarationDetail;
    /**
     * The GeneralAgencyAgreementDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GeneralAgencyAgreementDetail
     */
    public $GeneralAgencyAgreementDetail;
    /**
     * The NaftaCertificateOfOriginDetail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\NaftaCertificateOfOriginDetail
     */
    public $NaftaCertificateOfOriginDetail;
    /**
     * The Op900Detail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials packages.
     * - minOccurs: 0
     * @var \StructType\Op900Detail
     */
    public $Op900Detail;
    /**
     * The DangerousGoodsShippersDeclarationDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the 1421c document for dangerous goods shipment.
     * - minOccurs: 0
     * @var \StructType\DangerousGoodsShippersDeclarationDetail
     */
    public $DangerousGoodsShippersDeclarationDetail;
    /**
     * The FreightAddressLabelDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the OP-900 document for hazardous materials.
     * - minOccurs: 0
     * @var \StructType\FreightAddressLabelDetail
     */
    public $FreightAddressLabelDetail;
    /**
     * The ReturnInstructionsDetail
     * Meta informations extracted from the WSDL
     * - documentation: Specifies the production of the return instructions document.
     * - minOccurs: 0
     * @var \StructType\ReturnInstructionsDetail
     */
    public $ReturnInstructionsDetail;
    /**
     * Constructor method for ShippingDocumentSpecification
     * @uses ShippingDocumentSpecification::setShippingDocumentTypes()
     * @uses ShippingDocumentSpecification::setCertificateOfOrigin()
     * @uses ShippingDocumentSpecification::setCommercialInvoiceDetail()
     * @uses ShippingDocumentSpecification::setCustomPackageDocumentDetail()
     * @uses ShippingDocumentSpecification::setCustomShipmentDocumentDetail()
     * @uses ShippingDocumentSpecification::setExportDeclarationDetail()
     * @uses ShippingDocumentSpecification::setGeneralAgencyAgreementDetail()
     * @uses ShippingDocumentSpecification::setNaftaCertificateOfOriginDetail()
     * @uses ShippingDocumentSpecification::setOp900Detail()
     * @uses ShippingDocumentSpecification::setDangerousGoodsShippersDeclarationDetail()
     * @uses ShippingDocumentSpecification::setFreightAddressLabelDetail()
     * @uses ShippingDocumentSpecification::setReturnInstructionsDetail()
     * @param string[] $shippingDocumentTypes
     * @param \StructType\CertificateOfOriginDetail $certificateOfOrigin
     * @param \StructType\CommercialInvoiceDetail $commercialInvoiceDetail
     * @param \StructType\CustomDocumentDetail[] $customPackageDocumentDetail
     * @param \StructType\CustomDocumentDetail[] $customShipmentDocumentDetail
     * @param \StructType\ExportDeclarationDetail $exportDeclarationDetail
     * @param \StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @param \StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @param \StructType\Op900Detail $op900Detail
     * @param \StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @param \StructType\FreightAddressLabelDetail $freightAddressLabelDetail
     * @param \StructType\ReturnInstructionsDetail $returnInstructionsDetail
     */
    public function __construct(array $shippingDocumentTypes = array(), \StructType\CertificateOfOriginDetail $certificateOfOrigin = null, \StructType\CommercialInvoiceDetail $commercialInvoiceDetail = null, array $customPackageDocumentDetail = array(), array $customShipmentDocumentDetail = array(), \StructType\ExportDeclarationDetail $exportDeclarationDetail = null, \StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null, \StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null, \StructType\Op900Detail $op900Detail = null, \StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null, \StructType\FreightAddressLabelDetail $freightAddressLabelDetail = null, \StructType\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this
            ->setShippingDocumentTypes($shippingDocumentTypes)
            ->setCertificateOfOrigin($certificateOfOrigin)
            ->setCommercialInvoiceDetail($commercialInvoiceDetail)
            ->setCustomPackageDocumentDetail($customPackageDocumentDetail)
            ->setCustomShipmentDocumentDetail($customShipmentDocumentDetail)
            ->setExportDeclarationDetail($exportDeclarationDetail)
            ->setGeneralAgencyAgreementDetail($generalAgencyAgreementDetail)
            ->setNaftaCertificateOfOriginDetail($naftaCertificateOfOriginDetail)
            ->setOp900Detail($op900Detail)
            ->setDangerousGoodsShippersDeclarationDetail($dangerousGoodsShippersDeclarationDetail)
            ->setFreightAddressLabelDetail($freightAddressLabelDetail)
            ->setReturnInstructionsDetail($returnInstructionsDetail);
    }
    /**
     * Get ShippingDocumentTypes value
     * @return string[]|null
     */
    public function getShippingDocumentTypes()
    {
        return $this->ShippingDocumentTypes;
    }
    /**
     * Set ShippingDocumentTypes value
     * @uses \EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $shippingDocumentTypes
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setShippingDocumentTypes(array $shippingDocumentTypes = array())
    {
        $invalidValues = array();
        foreach ($shippingDocumentTypes as $shippingDocumentSpecificationShippingDocumentTypesItem) {
            if (!\EnumType\RequestedShippingDocumentType::valueIsValid($shippingDocumentSpecificationShippingDocumentTypesItem)) {
                $invalidValues[] = var_export($shippingDocumentSpecificationShippingDocumentTypesItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes = $shippingDocumentTypes;
        return $this;
    }
    /**
     * Add item to ShippingDocumentTypes value
     * @uses \EnumType\RequestedShippingDocumentType::valueIsValid()
     * @uses \EnumType\RequestedShippingDocumentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ShippingDocumentSpecification
     */
    public function addToShippingDocumentTypes($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\RequestedShippingDocumentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \EnumType\RequestedShippingDocumentType::getValidValues())), __LINE__);
        }
        $this->ShippingDocumentTypes[] = $item;
        return $this;
    }
    /**
     * Get CertificateOfOrigin value
     * @return \StructType\CertificateOfOriginDetail|null
     */
    public function getCertificateOfOrigin()
    {
        return $this->CertificateOfOrigin;
    }
    /**
     * Set CertificateOfOrigin value
     * @param \StructType\CertificateOfOriginDetail $certificateOfOrigin
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setCertificateOfOrigin(\StructType\CertificateOfOriginDetail $certificateOfOrigin = null)
    {
        $this->CertificateOfOrigin = $certificateOfOrigin;
        return $this;
    }
    /**
     * Get CommercialInvoiceDetail value
     * @return \StructType\CommercialInvoiceDetail|null
     */
    public function getCommercialInvoiceDetail()
    {
        return $this->CommercialInvoiceDetail;
    }
    /**
     * Set CommercialInvoiceDetail value
     * @param \StructType\CommercialInvoiceDetail $commercialInvoiceDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setCommercialInvoiceDetail(\StructType\CommercialInvoiceDetail $commercialInvoiceDetail = null)
    {
        $this->CommercialInvoiceDetail = $commercialInvoiceDetail;
        return $this;
    }
    /**
     * Get CustomPackageDocumentDetail value
     * @return \StructType\CustomDocumentDetail[]|null
     */
    public function getCustomPackageDocumentDetail()
    {
        return $this->CustomPackageDocumentDetail;
    }
    /**
     * Set CustomPackageDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomDocumentDetail[] $customPackageDocumentDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setCustomPackageDocumentDetail(array $customPackageDocumentDetail = array())
    {
        foreach ($customPackageDocumentDetail as $shippingDocumentSpecificationCustomPackageDocumentDetailItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentSpecificationCustomPackageDocumentDetailItem instanceof \StructType\CustomDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomPackageDocumentDetail property can only contain items of \StructType\CustomDocumentDetail, "%s" given', is_object($shippingDocumentSpecificationCustomPackageDocumentDetailItem) ? get_class($shippingDocumentSpecificationCustomPackageDocumentDetailItem) : gettype($shippingDocumentSpecificationCustomPackageDocumentDetailItem)), __LINE__);
            }
        }
        $this->CustomPackageDocumentDetail = $customPackageDocumentDetail;
        return $this;
    }
    /**
     * Add item to CustomPackageDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomDocumentDetail $item
     * @return \StructType\ShippingDocumentSpecification
     */
    public function addToCustomPackageDocumentDetail(\StructType\CustomDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomPackageDocumentDetail property can only contain items of \StructType\CustomDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomPackageDocumentDetail[] = $item;
        return $this;
    }
    /**
     * Get CustomShipmentDocumentDetail value
     * @return \StructType\CustomDocumentDetail[]|null
     */
    public function getCustomShipmentDocumentDetail()
    {
        return $this->CustomShipmentDocumentDetail;
    }
    /**
     * Set CustomShipmentDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomDocumentDetail[] $customShipmentDocumentDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setCustomShipmentDocumentDetail(array $customShipmentDocumentDetail = array())
    {
        foreach ($customShipmentDocumentDetail as $shippingDocumentSpecificationCustomShipmentDocumentDetailItem) {
            // validation for constraint: itemType
            if (!$shippingDocumentSpecificationCustomShipmentDocumentDetailItem instanceof \StructType\CustomDocumentDetail) {
                throw new \InvalidArgumentException(sprintf('The CustomShipmentDocumentDetail property can only contain items of \StructType\CustomDocumentDetail, "%s" given', is_object($shippingDocumentSpecificationCustomShipmentDocumentDetailItem) ? get_class($shippingDocumentSpecificationCustomShipmentDocumentDetailItem) : gettype($shippingDocumentSpecificationCustomShipmentDocumentDetailItem)), __LINE__);
            }
        }
        $this->CustomShipmentDocumentDetail = $customShipmentDocumentDetail;
        return $this;
    }
    /**
     * Add item to CustomShipmentDocumentDetail value
     * @throws \InvalidArgumentException
     * @param \StructType\CustomDocumentDetail $item
     * @return \StructType\ShippingDocumentSpecification
     */
    public function addToCustomShipmentDocumentDetail(\StructType\CustomDocumentDetail $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CustomDocumentDetail) {
            throw new \InvalidArgumentException(sprintf('The CustomShipmentDocumentDetail property can only contain items of \StructType\CustomDocumentDetail, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CustomShipmentDocumentDetail[] = $item;
        return $this;
    }
    /**
     * Get ExportDeclarationDetail value
     * @return \StructType\ExportDeclarationDetail|null
     */
    public function getExportDeclarationDetail()
    {
        return $this->ExportDeclarationDetail;
    }
    /**
     * Set ExportDeclarationDetail value
     * @param \StructType\ExportDeclarationDetail $exportDeclarationDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setExportDeclarationDetail(\StructType\ExportDeclarationDetail $exportDeclarationDetail = null)
    {
        $this->ExportDeclarationDetail = $exportDeclarationDetail;
        return $this;
    }
    /**
     * Get GeneralAgencyAgreementDetail value
     * @return \StructType\GeneralAgencyAgreementDetail|null
     */
    public function getGeneralAgencyAgreementDetail()
    {
        return $this->GeneralAgencyAgreementDetail;
    }
    /**
     * Set GeneralAgencyAgreementDetail value
     * @param \StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setGeneralAgencyAgreementDetail(\StructType\GeneralAgencyAgreementDetail $generalAgencyAgreementDetail = null)
    {
        $this->GeneralAgencyAgreementDetail = $generalAgencyAgreementDetail;
        return $this;
    }
    /**
     * Get NaftaCertificateOfOriginDetail value
     * @return \StructType\NaftaCertificateOfOriginDetail|null
     */
    public function getNaftaCertificateOfOriginDetail()
    {
        return $this->NaftaCertificateOfOriginDetail;
    }
    /**
     * Set NaftaCertificateOfOriginDetail value
     * @param \StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setNaftaCertificateOfOriginDetail(\StructType\NaftaCertificateOfOriginDetail $naftaCertificateOfOriginDetail = null)
    {
        $this->NaftaCertificateOfOriginDetail = $naftaCertificateOfOriginDetail;
        return $this;
    }
    /**
     * Get Op900Detail value
     * @return \StructType\Op900Detail|null
     */
    public function getOp900Detail()
    {
        return $this->Op900Detail;
    }
    /**
     * Set Op900Detail value
     * @param \StructType\Op900Detail $op900Detail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setOp900Detail(\StructType\Op900Detail $op900Detail = null)
    {
        $this->Op900Detail = $op900Detail;
        return $this;
    }
    /**
     * Get DangerousGoodsShippersDeclarationDetail value
     * @return \StructType\DangerousGoodsShippersDeclarationDetail|null
     */
    public function getDangerousGoodsShippersDeclarationDetail()
    {
        return $this->DangerousGoodsShippersDeclarationDetail;
    }
    /**
     * Set DangerousGoodsShippersDeclarationDetail value
     * @param \StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setDangerousGoodsShippersDeclarationDetail(\StructType\DangerousGoodsShippersDeclarationDetail $dangerousGoodsShippersDeclarationDetail = null)
    {
        $this->DangerousGoodsShippersDeclarationDetail = $dangerousGoodsShippersDeclarationDetail;
        return $this;
    }
    /**
     * Get FreightAddressLabelDetail value
     * @return \StructType\FreightAddressLabelDetail|null
     */
    public function getFreightAddressLabelDetail()
    {
        return $this->FreightAddressLabelDetail;
    }
    /**
     * Set FreightAddressLabelDetail value
     * @param \StructType\FreightAddressLabelDetail $freightAddressLabelDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setFreightAddressLabelDetail(\StructType\FreightAddressLabelDetail $freightAddressLabelDetail = null)
    {
        $this->FreightAddressLabelDetail = $freightAddressLabelDetail;
        return $this;
    }
    /**
     * Get ReturnInstructionsDetail value
     * @return \StructType\ReturnInstructionsDetail|null
     */
    public function getReturnInstructionsDetail()
    {
        return $this->ReturnInstructionsDetail;
    }
    /**
     * Set ReturnInstructionsDetail value
     * @param \StructType\ReturnInstructionsDetail $returnInstructionsDetail
     * @return \StructType\ShippingDocumentSpecification
     */
    public function setReturnInstructionsDetail(\StructType\ReturnInstructionsDetail $returnInstructionsDetail = null)
    {
        $this->ReturnInstructionsDetail = $returnInstructionsDetail;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ShippingDocumentSpecification
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
