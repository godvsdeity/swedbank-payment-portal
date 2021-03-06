<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationResponse;

use SwedbankPaymentPortal\BankLink\CommunicationEntity\PurchaseRequest\Transaction;
use JMS\Serializer\Annotation;

/**
 * The container for the XML response.
 *
 * @Annotation\XmlRoot("Response")
 * @Annotation\AccessType("public_method")
 */
class CardTxn
{
    /**
     * Three D secure container.
     *
     * @var ThreeDSecure
     *
     * @Annotation\Type("SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationResponse\ThreeDSecure")
     * @Annotation\SerializedName("ThreeDSecure")
     */
    private $threeDSecure;

    /**
     * The Card scheme of the card provided by the cardholder during the capture process.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("card_scheme")
     */
    private $cardScheme;

    /**
     * Token.
     *
     * @var string
     *
     * @Annotation\Type("string")
     * @Annotation\XmlElement(cdata=false)
     */
    private $token;

    /**
     * CardTxn constructor.
     *
     * @param ThreeDSecure $threeDSecure
     * @param string       $cardScheme
     * @param string       $token
     */
    public function __construct(ThreeDSecure $threeDSecure, $cardScheme, $token)
    {
        $this->threeDSecure = $threeDSecure;
        $this->cardScheme = $cardScheme;
        $this->token = $token;
    }

    /**
     * ThreeDSecure getter.
     *
     * @return ThreeDSecure
     */
    public function getThreeDSecure()
    {
        return $this->threeDSecure;
    }

    /**
     * ThreeDSecure setter.
     *
     * @param ThreeDSecure $threeDSecure
     */
    public function setThreeDSecure($threeDSecure)
    {
        $this->threeDSecure = $threeDSecure;
    }

    /**
     * CardScheme getter.
     *
     * @return string
     */
    public function getCardScheme()
    {
        return $this->cardScheme;
    }

    /**
     * CardScheme setter.
     *
     * @param string $cardScheme
     */
    public function setCardScheme($cardScheme)
    {
        $this->cardScheme = $cardScheme;
    }

    /**
     * Token getter.
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Token setter.
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
}
