<?php

namespace SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationRequest\Transaction;

use Jms\Serializer\Annotation;

/**
 * The container for 3D secure.
 *
 * @Annotation\AccessType("public_method")
 */
class ThreeDSecure
{
    /**
     * The time and date of the transaction.
     *
     * @var \DateTime
     *
     * @Annotation\Type("DateTime<'Ymd H:i:s'>")
     * @Annotation\SerializedName("purchase_datetime")
     * @Annotation\XmlElement(cdata=false)
     */
    private $purchaseDatetime;

    /**
     * Instructs the Payment Gateway to attempt the 3-D Secure authentication process.
     *
     * 3-D Secure is mandated and must always be attempted. yes – attempt 3-D Secure
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\Type("string")
     * @Annotation\AccessType("reflection")
     */
    private $verify = 'yes';

    /**
     * Browser type.
     *
     * @var Browser
     *
     * @Annotation\SerializedName("Browser")
     * @Annotation\Type("SwedbankPaymentPortal\CC\HCCCommunicationEntity\AuthorizationRequest\Transaction\Browser")
     */
    private $browser;

    /**
     * The URL of the website on which the payment is being made.
     *
     * Will be displayed to cardholder on the issuer authentication page.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("merchant_url")
     * @Annotation\Type("string")
     */
    private $merchantUrl;

    /**
     * A short description of what has been purchased.
     *
     * This is shown to the card holder on the issuer authentication page.
     *
     * @var string
     *
     * @Annotation\XmlElement(cdata=false)
     * @Annotation\SerializedName("purchase_desc")
     * @Annotation\Type("string")
     */
    private $purchaseDescription;

    /**
     * ThreeDSecure constructor.
     *
     * @param string    $purchaseDescription
     * @param string    $merchantUrl
     * @param Browser   $browser
     * @param \DateTime $purchaseDatetime
     */
    public function __construct($purchaseDescription, $merchantUrl, Browser $browser, \DateTime $purchaseDatetime)
    {
        $this->purchaseDescription = $purchaseDescription;
        $this->merchantUrl = $merchantUrl;
        $this->purchaseDatetime = $purchaseDatetime;
        $this->browser = $browser;
    }

    /**
     * PurchaseDatetime getter.
     *
     * @return \DateTime
     */
    public function getPurchaseDatetime()
    {
        return $this->purchaseDatetime;
    }

    /**
     * PurchaseDatetime setter.
     *
     * @param \DateTime $purchaseDatetime
     */
    public function setPurchaseDatetime($purchaseDatetime)
    {
        $this->purchaseDatetime = $purchaseDatetime;
    }

    /**
     * MerchantUrl getter.
     *
     * @return string
     */
    public function getMerchantUrl()
    {
        return $this->merchantUrl;
    }

    /**
     * MerchantUrl setter.
     *
     * @param string $merchantUrl
     */
    public function setMerchantUrl($merchantUrl)
    {
        $this->merchantUrl = $merchantUrl;
    }

    /**
     * PurchaseDescription getter.
     *
     * @return string
     */
    public function getPurchaseDescription()
    {
        return $this->purchaseDescription;
    }

    /**
     * PurchaseDescription setter.
     *
     * @param string $purchaseDescription
     */
    public function setPurchaseDescription($purchaseDescription)
    {
        $this->purchaseDescription = $purchaseDescription;
    }

    /**
     * Verify getter.
     *
     * @return string
     */
    public function getVerify()
    {
        return $this->verify;
    }

    /**
     * Verify setter.
     *
     * @param string $verify
     */
    public function setVerify($verify)
    {
        $this->verify = $verify;
    }

    /**
     * Browser getter.
     *
     * @return Browser
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Browser setter.
     *
     * @param Browser $browser
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    }
}
