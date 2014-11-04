<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressValidationRequest
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressValidationRequest
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressValidationRequest';

    /**
     * Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @param WebAuthenticationDetail $webAuthenticationDetail
     * @return AddressValidationRequest
     */
    public function setWebAuthenticationDetail(WebAuthenticationDetail $webAuthenticationDetail)
    {
        $this->WebAuthenticationDetail = $webAuthenticationDetail;
        return $this;
    }
    
    /**
     * Returns Descriptive data to be used in authentication of the sender's identity (and right to use FedEx web services).
     *
     * @return WebAuthenticationDetail
     */
    public function getWebAuthenticationDetail()
    {
        return $this->WebAuthenticationDetail;
    }
    
    /**
     * Set ClientDetail
     *
     * @param ClientDetail $clientDetail
     * @return AddressValidationRequest
     */
    public function setClientDetail(ClientDetail $clientDetail)
    {
        $this->ClientDetail = $clientDetail;
        return $this;
    }
    
    /**
     * Returns Set ClientDetail
     *
     * @return ClientDetail
     */
    public function getClientDetail()
    {
        return $this->ClientDetail;
    }
    
    /**
     * Set TransactionDetail
     *
     * @param TransactionDetail $transactionDetail
     * @return AddressValidationRequest
     */
    public function setTransactionDetail(TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Returns Set TransactionDetail
     *
     * @return TransactionDetail
     */
    public function getTransactionDetail()
    {
        return $this->TransactionDetail;
    }
    
    /**
     * Set Version
     *
     * @param VersionId $version
     * @return AddressValidationRequest
     */
    public function setVersion(VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * Returns Set Version
     *
     * @return VersionId
     */
    public function getVersion()
    {
        return $this->Version;
    }
    
    /**
     * Set InEffectAsOfTimestamp
     *
     * @param dateTime $inEffectAsOfTimestamp
     * @return AddressValidationRequest
     */
    public function setInEffectAsOfTimestamp($inEffectAsOfTimestamp)
    {
        $this->InEffectAsOfTimestamp = $inEffectAsOfTimestamp;
        return $this;
    }
    
    /**
     * Returns Set InEffectAsOfTimestamp
     *
     * @return dateTime
     */
    public function getInEffectAsOfTimestamp()
    {
        return $this->InEffectAsOfTimestamp;
    }
    
    /**
     * Set AddressesToValidate
     *
     * @param AddressToValidate[] $addressesToValidate
     * @return AddressValidationRequest
     */
    public function setAddressesToValidate(array $addressesToValidate)
    {
        $this->AddressesToValidate = $addressesToValidate;
        return $this;
    }
    
    /**
     * Returns Set AddressesToValidate
     *
     * @return AddressToValidate[]
     */
    public function getAddressesToValidate()
    {
        return $this->AddressesToValidate;
    }
    

    
}