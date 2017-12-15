<?php

namespace Taseera\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUser
 *
 * @ORM\Table(name="t_user", indexes={@ORM\Index(name="idx_s_name", columns={"s_name"}), @ORM\Index(name="idx_s_username", columns={"s_username"})})
 * @ORM\Entity(repositoryClass="Taseera\BackendBundle\Repository\TUserRepository")
 */
class TUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_reg_date", type="datetime")
     */
    private $dtRegDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_mod_date", type="datetime", nullable=true)
     */
    private $dtModDate;

    /**
     * @var string
     *
     * @ORM\Column(name="s_name", type="string", length=255)
     */
    private $sName;

    /**
     * @var string
     *
     * @ORM\Column(name="s_username", type="string", length=255)
     */
    private $sUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="s_password", type="string", length=255)
     */
    private $sPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="s_secret", type="string", length=255, nullable=true)
     */
    private $sSecret;

    /**
     * @var string
     *
     * @ORM\Column(name="s_email", type="string", length=255, unique=true)
     */
    private $sEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="s_website", type="string", length=255, nullable=true)
     */
    private $sWebsite;

    /**
     * @var string
     *
     * @ORM\Column(name="s_phone_land", type="string", length=50, nullable=true)
     */
    private $sPhoneLand;

    /**
     * @var string
     *
     * @ORM\Column(name="s_phone_mobile", type="string", length=50, nullable=true)
     */
    private $sPhoneMobile;

    /**
     * @var bool
     *
     * @ORM\Column(name="b_enabled", type="boolean")
     */
    private $bEnabled;

    /**
     * @var bool
     *
     * @ORM\Column(name="b_active", type="boolean")
     */
    private $bActive;

    /**
     * @var string
     *
     * @ORM\Column(name="s_pass_code", type="string", length=255, nullable=true)
     */
    private $sPassCode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="s_pass_date", type="datetime", nullable=true)
     */
    private $sPassDate;

    /**
     * @var string
     *
     * @ORM\Column(name="s_pass_ip", type="string", length=255, nullable=true)
     */
    private $sPassIp;

    /**
     * @var string
     *
     * @ORM\Column(name="d_coord_lat", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $dCoordLat;

    /**
     * @var string
     *
     * @ORM\Column(name="d_coord_long", type="decimal", precision=10, scale=6, nullable=true)
     */
    private $dCoordLong;

    /**
     * @var bool
     *
     * @ORM\Column(name="b_company", type="boolean")
     */
    private $bCompany;

    /**
     * @var int
     *
     * @ORM\Column(name="i_items", type="integer", nullable=true)
     */
    private $iItems;

    /**
     * @var int
     *
     * @ORM\Column(name="i_comments", type="integer", nullable=true)
     */
    private $iComments;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_access_date", type="datetime")
     */
    private $dtAccessDate;

    /**
     * @var string
     *
     * @ORM\Column(name="s_access_ip", type="string", length=255, nullable=true)
     */
    private $sAccessIp;

    /**
     * @ORM\ManyToOne(targetEntity="Taseera\BackendBundle\Entity\TCountry")
     */
    private $tCountry;

    /**
     * @ORM\ManyToOne(targetEntity="Taseera\BackendBundle\Entity\TRegion")
     */
    private $tRegion;

    /**
     * @ORM\ManyToOne(targetEntity="Taseera\BackendBundle\Entity\TCity")
     */
    private $tCity;

    /**
     * @ORM\ManyToOne(targetEntity="Taseera\BackendBundle\Entity\TCityArea")
     */
    private $tCityArea;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dtRegDate
     *
     * @param \DateTime $dtRegDate
     *
     * @return TUser
     */
    public function setDtRegDate($dtRegDate)
    {
        $this->dtRegDate = $dtRegDate;

        return $this;
    }

    /**
     * Get dtRegDate
     *
     * @return \DateTime
     */
    public function getDtRegDate()
    {
        return $this->dtRegDate;
    }

    /**
     * Set dtModDate
     *
     * @param \DateTime $dtModDate
     *
     * @return TUser
     */
    public function setDtModDate($dtModDate)
    {
        $this->dtModDate = $dtModDate;

        return $this;
    }

    /**
     * Get dtModDate
     *
     * @return \DateTime
     */
    public function getDtModDate()
    {
        return $this->dtModDate;
    }

    /**
     * Set sName
     *
     * @param string $sName
     *
     * @return TUser
     */
    public function setSName($sName)
    {
        $this->sName = $sName;

        return $this;
    }

    /**
     * Get sName
     *
     * @return string
     */
    public function getSName()
    {
        return $this->sName;
    }

    /**
     * Set sUsername
     *
     * @param string $sUsername
     *
     * @return TUser
     */
    public function setSUsername($sUsername)
    {
        $this->sUsername = $sUsername;

        return $this;
    }

    /**
     * Get sUsername
     *
     * @return string
     */
    public function getSUsername()
    {
        return $this->sUsername;
    }

    /**
     * Set sPassword
     *
     * @param string $sPassword
     *
     * @return TUser
     */
    public function setSPassword($sPassword)
    {
        $this->sPassword = $sPassword;

        return $this;
    }

    /**
     * Get sPassword
     *
     * @return string
     */
    public function getSPassword()
    {
        return $this->sPassword;
    }

    /**
     * Set sSecret
     *
     * @param string $sSecret
     *
     * @return TUser
     */
    public function setSSecret($sSecret)
    {
        $this->sSecret = $sSecret;

        return $this;
    }

    /**
     * Get sSecret
     *
     * @return string
     */
    public function getSSecret()
    {
        return $this->sSecret;
    }

    /**
     * Set sEmail
     *
     * @param string $sEmail
     *
     * @return TUser
     */
    public function setSEmail($sEmail)
    {
        $this->sEmail = $sEmail;

        return $this;
    }

    /**
     * Get sEmail
     *
     * @return string
     */
    public function getSEmail()
    {
        return $this->sEmail;
    }

    /**
     * Set sWebsite
     *
     * @param string $sWebsite
     *
     * @return TUser
     */
    public function setSWebsite($sWebsite)
    {
        $this->sWebsite = $sWebsite;

        return $this;
    }

    /**
     * Get sWebsite
     *
     * @return string
     */
    public function getSWebsite()
    {
        return $this->sWebsite;
    }

    /**
     * Set sPhoneLand
     *
     * @param string $sPhoneLand
     *
     * @return TUser
     */
    public function setSPhoneLand($sPhoneLand)
    {
        $this->sPhoneLand = $sPhoneLand;

        return $this;
    }

    /**
     * Get sPhoneLand
     *
     * @return string
     */
    public function getSPhoneLand()
    {
        return $this->sPhoneLand;
    }

    /**
     * Set sPhoneMobile
     *
     * @param string $sPhoneMobile
     *
     * @return TUser
     */
    public function setSPhoneMobile($sPhoneMobile)
    {
        $this->sPhoneMobile = $sPhoneMobile;

        return $this;
    }

    /**
     * Get sPhoneMobile
     *
     * @return string
     */
    public function getSPhoneMobile()
    {
        return $this->sPhoneMobile;
    }

    /**
     * Set bEnabled
     *
     * @param boolean $bEnabled
     *
     * @return TUser
     */
    public function setBEnabled($bEnabled)
    {
        $this->bEnabled = $bEnabled;

        return $this;
    }

    /**
     * Get bEnabled
     *
     * @return bool
     */
    public function getBEnabled()
    {
        return $this->bEnabled;
    }

    /**
     * Set bActive
     *
     * @param boolean $bActive
     *
     * @return TUser
     */
    public function setBActive($bActive)
    {
        $this->bActive = $bActive;

        return $this;
    }

    /**
     * Get bActive
     *
     * @return bool
     */
    public function getBActive()
    {
        return $this->bActive;
    }

    /**
     * Set sPassCode
     *
     * @param string $sPassCode
     *
     * @return TUser
     */
    public function setSPassCode($sPassCode)
    {
        $this->sPassCode = $sPassCode;

        return $this;
    }

    /**
     * Get sPassCode
     *
     * @return string
     */
    public function getSPassCode()
    {
        return $this->sPassCode;
    }

    /**
     * Set sPassDate
     *
     * @param \DateTime $sPassDate
     *
     * @return TUser
     */
    public function setSPassDate($sPassDate)
    {
        $this->sPassDate = $sPassDate;

        return $this;
    }

    /**
     * Get sPassDate
     *
     * @return \DateTime
     */
    public function getSPassDate()
    {
        return $this->sPassDate;
    }

    /**
     * Set sPassIp
     *
     * @param string $sPassIp
     *
     * @return TUser
     */
    public function setSPassIp($sPassIp)
    {
        $this->sPassIp = $sPassIp;

        return $this;
    }

    /**
     * Get sPassIp
     *
     * @return string
     */
    public function getSPassIp()
    {
        return $this->sPassIp;
    }

    /**
     * Set dCoordLat
     *
     * @param string $dCoordLat
     *
     * @return TUser
     */
    public function setDCoordLat($dCoordLat)
    {
        $this->dCoordLat = $dCoordLat;

        return $this;
    }

    /**
     * Get dCoordLat
     *
     * @return string
     */
    public function getDCoordLat()
    {
        return $this->dCoordLat;
    }

    /**
     * Set dCoordLong
     *
     * @param string $dCoordLong
     *
     * @return TUser
     */
    public function setDCoordLong($dCoordLong)
    {
        $this->dCoordLong = $dCoordLong;

        return $this;
    }

    /**
     * Get dCoordLong
     *
     * @return string
     */
    public function getDCoordLong()
    {
        return $this->dCoordLong;
    }

    /**
     * Set bCompany
     *
     * @param boolean $bCompany
     *
     * @return TUser
     */
    public function setBCompany($bCompany)
    {
        $this->bCompany = $bCompany;

        return $this;
    }

    /**
     * Get bCompany
     *
     * @return bool
     */
    public function getBCompany()
    {
        return $this->bCompany;
    }

    /**
     * Set iItems
     *
     * @param integer $iItems
     *
     * @return TUser
     */
    public function setIItems($iItems)
    {
        $this->iItems = $iItems;

        return $this;
    }

    /**
     * Get iItems
     *
     * @return int
     */
    public function getIItems()
    {
        return $this->iItems;
    }

    /**
     * Set iComments
     *
     * @param integer $iComments
     *
     * @return TUser
     */
    public function setIComments($iComments)
    {
        $this->iComments = $iComments;

        return $this;
    }

    /**
     * Get iComments
     *
     * @return int
     */
    public function getIComments()
    {
        return $this->iComments;
    }

    /**
     * Set dtAccessDate
     *
     * @param \DateTime $dtAccessDate
     *
     * @return TUser
     */
    public function setDtAccessDate($dtAccessDate)
    {
        $this->dtAccessDate = $dtAccessDate;

        return $this;
    }

    /**
     * Get dtAccessDate
     *
     * @return \DateTime
     */
    public function getDtAccessDate()
    {
        return $this->dtAccessDate;
    }

    /**
     * Set sAccessIp
     *
     * @param string $sAccessIp
     *
     * @return TUser
     */
    public function setSAccessIp($sAccessIp)
    {
        $this->sAccessIp = $sAccessIp;

        return $this;
    }

    /**
     * Get sAccessIp
     *
     * @return string
     */
    public function getSAccessIp()
    {
        return $this->sAccessIp;
    }

    /**
     * Set tCountry
     *
     * @param \Taseera\BackendBundle\Entity\TCountry $tCountry
     *
     * @return TUser
     */
    public function setTCountry(\Taseera\BackendBundle\Entity\TCountry $tCountry = null)
    {
        $this->tCountry = $tCountry;

        return $this;
    }

    /**
     * Get tCountry
     *
     * @return \Taseera\BackendBundle\Entity\TCountry
     */
    public function getTCountry()
    {
        return $this->tCountry;
    }

    /**
     * Set tRegion
     *
     * @param \Taseera\BackendBundle\Entity\TRegion $tRegion
     *
     * @return TUser
     */
    public function setTRegion(\Taseera\BackendBundle\Entity\TRegion $tRegion = null)
    {
        $this->tRegion = $tRegion;

        return $this;
    }

    /**
     * Get tRegion
     *
     * @return \Taseera\BackendBundle\Entity\TRegion
     */
    public function getTRegion()
    {
        return $this->tRegion;
    }

    /**
     * Set tCity
     *
     * @param \Taseera\BackendBundle\Entity\TCity $tCity
     *
     * @return TUser
     */
    public function setTCity(\Taseera\BackendBundle\Entity\TCity $tCity = null)
    {
        $this->tCity = $tCity;

        return $this;
    }

    /**
     * Get tCity
     *
     * @return \Taseera\BackendBundle\Entity\TCity
     */
    public function getTCity()
    {
        return $this->tCity;
    }

    /**
     * Set tCityArea
     *
     * @param \Taseera\BackendBundle\Entity\TCityArea $tCityArea
     *
     * @return TUser
     */
    public function setTCityArea(\Taseera\BackendBundle\Entity\TCityArea $tCityArea = null)
    {
        $this->tCityArea = $tCityArea;

        return $this;
    }

    /**
     * Get tCityArea
     *
     * @return \Taseera\BackendBundle\Entity\TCityArea
     */
    public function getTCityArea()
    {
        return $this->tCityArea;
    }
}
