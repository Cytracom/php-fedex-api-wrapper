<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationResult
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationResult
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressValidationResult';

    /**
     * The client reference id for the validated address.
     *
     * @param string $clientReferenceId
     * @return AddressValidationResult
     */
    public function setClientReferenceId($clientReferenceId)
    {
        $this->ClientReferenceId = $clientReferenceId;
        return $this;
    }
    
    /**
     * Returns The client reference id for the validated address.
     *
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->ClientReferenceId;
    }
    
    /**
     * Specifies the degree to SHARE service was able to cannonicalise the address provided, as per USPS standards and match it to an address already in the internal FedEx address repository.
     *
     * @param \FedEx\AddressValidationService\SimpleType\OperationalAddressStateType|string $state
     * @return AddressValidationResult
     */
    public function setState($state)
    {
        $this->State = $state;
        return $this;
    }
    
    /**
     * Returns Specifies the degree to SHARE service was able to cannonicalise the address provided, as per USPS standards and match it to an address already in the internal FedEx address repository.
     *
     * @return \FedEx\AddressValidationService\SimpleType\OperationalAddressStateType|string
     */
    public function getState()
    {
        return $this->State;
    }
    
    /**
     * Set Classification
     *
     * @param \FedEx\AddressValidationService\SimpleType\FedExAddressClassificationType|string $classification
     * @return AddressValidationResult
     */
    public function setClassification($classification)
    {
        $this->Classification = $classification;
        return $this;
    }
    
    /**
     * Returns Set Classification
     *
     * @return \FedEx\AddressValidationService\SimpleType\FedExAddressClassificationType|string
     */
    public function getClassification()
    {
        return $this->Classification;
    }
    
    /**
     * Set EffectiveContact
     *
     * @param Contact $effectiveContact
     * @return AddressValidationResult
     */
    public function setEffectiveContact(Contact $effectiveContact)
    {
        $this->EffectiveContact = $effectiveContact;
        return $this;
    }
    
    /**
     * Returns Set EffectiveContact
     *
     * @return Contact
     */
    public function getEffectiveContact()
    {
        return $this->EffectiveContact;
    }
    
    /**
     * Set EffectiveAddress
     *
     * @param Address $effectiveAddress
     * @return AddressValidationResult
     */
    public function setEffectiveAddress(Address $effectiveAddress)
    {
        $this->EffectiveAddress = $effectiveAddress;
        return $this;
    }
    
    /**
     * Returns Set EffectiveAddress
     *
     * @return Address
     */
    public function getEffectiveAddress()
    {
        return $this->EffectiveAddress;
    }
    
    /**
     * Set ParsedAddressPartsDetail
     *
     * @param ParsedAddressPartsDetail $parsedAddressPartsDetail
     * @return AddressValidationResult
     */
    public function setParsedAddressPartsDetail(ParsedAddressPartsDetail $parsedAddressPartsDetail)
    {
        $this->ParsedAddressPartsDetail = $parsedAddressPartsDetail;
        return $this;
    }
    
    /**
     * Returns Set ParsedAddressPartsDetail
     *
     * @return ParsedAddressPartsDetail
     */
    public function getParsedAddressPartsDetail()
    {
        return $this->ParsedAddressPartsDetail;
    }
    
    /**
     * Additional attributes about the validated address from FedEx address respository..
     *
     * @param AddressAttribute[] $attributes
     * @return AddressValidationResult
     */
    public function setAttributes(array $attributes)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    
    /**
     * Returns Additional attributes about the validated address from FedEx address respository..
     *
     * @return AddressAttribute[]
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    

    
}