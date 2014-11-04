<?php
namespace FedEx\AddressValidationService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AddressToValidate
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Address Validation Service
 */
class AddressToValidate
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AddressToValidate';

    /**
     * A reference id provided by the client.
     *
     * @param string $clientReferenceId
     * @return AddressToValidate
     */
    public function setClientReferenceId($clientReferenceId)
    {
        $this->ClientReferenceId = $clientReferenceId;
        return $this;
    }
    
    /**
     * Returns A reference id provided by the client.
     *
     * @return string
     */
    public function getClientReferenceId()
    {
        return $this->ClientReferenceId;
    }
    
    /**
     * Set Contact
     *
     * @param Contact $contact
     * @return AddressToValidate
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * Returns Set Contact
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return AddressToValidate
     */
    public function setAddress(Address $address)
    {
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Set Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    

    
}