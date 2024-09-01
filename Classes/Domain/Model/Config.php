<?php

namespace BLX\Cmi5\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/*
 * This file is part of the TYPO3 extension cmi5.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

class Config extends \T3SBS\T3sbootstrap\Domain\Model\Config
{
    /**
     * cmiSettings
     *
     * @var string
     */
    protected $cmiSettings = '';
    /**
     * cmiEnabled
     *
     * @var bool
     */
    protected $cmiEnabled = false;
    /**
     * cmiObjpropLang
     *
     * @var string
     */
    protected $cmiObjpropLang = '';
    /**
     * cmiDatamodelAuActtype
     *
     * @var string
     */
    protected $cmiDatamodelAuActtype = '';
    /**
     * cmiDatamodelAuId
     *
     * @var string
     */
    protected $cmiDatamodelAuId = '';
    /**
     * cmiDatamodelAuTitle
     *
     * @var string
     */
    protected $cmiDatamodelAuTitle = '';
    /**
     * cmiDatamodelAuDescr
     *
     * @var string
     */
    protected $cmiDatamodelAuDescr = '';
    /**
     * cmiDatamodelAuMoveon
     *
     * @var string
     */
    protected $cmiDatamodelAuMoveon = '';
    /**
     * cmiDatamodelAuLaunchmethod
     *
     * @var string
     */
    protected $cmiDatamodelAuLaunchmethod = '';
    /**
     * cmiDatamodelAuMasteryscore
     *
     * @var string
     */
    protected $cmiDatamodelAuMasteryscore = '';
    /**
     * cmiDatamodelAuLaunchparms
     *
     * @var string
     */
    protected $cmiDatamodelAuLaunchparms = '';
    /**
     * cmiDatamodelAuUrl
     *
     * @var string
     */
    protected $cmiDatamodelAuUrl = '';
    /**
     * cmiDatamodelAuEntitlementkey
     *
     * @var string
     */
    protected $cmiDatamodelAuEntitlementkey = '';
    /**
     * cmiDatamodelAuObjectives
     *
     * @var string
     */
    protected $cmiDatamodelAuObjectives = '';
    /**
     * cmiDatamodelCourseDescr
     *
     * @var string
     */
    protected $cmiDatamodelCourseDescr = '';
    /**
     * cmiDatamodelCourseTitle
     *
     * @var string
     */
    protected $cmiDatamodelCourseTitle = '';
    /**
     * cmiDatamodelCourseId
     *
     * @var string
     */
    protected $cmiDatamodelCourseId = '';

    /**
     * Returns the cmiSettings
     *
     * @return string $cmiSettings
     */
    public function getCmiSettings()
    {
        return $this->cmiSettings;
    }
    /**
     * Sets the cmiSettings
     *
     * @param string $cmiSettings
     * @return void
     */
    public function setCmiSettings($cmiSettings)
    {
        $this->cmiSettings = $cmiSettings;
    }
    /**
     * Returns the cmiEnabled
     *
     * @return bool
     */
    public function getCmiEnabled()
    {
        return $this->cmiEnabled;
    }
    /**
     * Sets the cmiEnabled
     *
     * @param bool $cmiEnabled
     * @return void
     */
    public function setCmiEnabled($cmiEnabled)
    {
        $this->cmiEnabled = $cmiEnabled;
    }
    /**
     * Returns the boolean state of cmiEnabled
     *
     * @return bool
     */
    public function isCmiEnabled()
    {
        return $this->cmiEnabled;
    }
    /**
     * Returns the cmiObjpropLang
     *
     * @return string $cmiObjpropLang
     */
    public function getCmiObjpropLang()
    {
        return $this->cmiObjpropLang;
    }
    /**
     * Sets the cmiObjpropLang
     *
     * @param string $cmiObjpropLang
     * @return void
     */
    public function setCmiObjpropLang($cmiObjpropLang)
    {
        $this->cmiObjpropLang = $cmiObjpropLang;
    }
    /**
     * Returns the cmiDatamodelAuActtype
     *
     * @return string $cmiDatamodelAuActtype
     */
    public function getCmiDatamodelAuActtype()
    {
        return $this->cmiDatamodelAuActtype;
    }
    /**
     * Sets the cmiDatamodelAuActtype
     *
     * @param string $cmiDatamodelAuActtype
     * @return void
     */
    public function setCmiDatamodelAuActtype($cmiDatamodelAuActtype)
    {
        $this->cmiDatamodelAuActtype = $cmiDatamodelAuActtype;
    }
    /**
     * Returns the cmiDatamodelAuId
     *
     * @return string $cmiDatamodelAuId
     */
    public function getCmiDatamodelAuId()
    {
        return $this->cmiDatamodelAuId;
    }
    /**
     * Sets the cmiDatamodelAuId
     *
     * @param string $cmiDatamodelAuId
     * @return void
     */
    public function setCmiDatamodelAuId($cmiDatamodelAuId)
    {
        $this->cmiDatamodelAuId = $cmiDatamodelAuId;
    }
    /**
     * Returns the cmiDatamodelAuTitle
     *
     * @return string $cmiDatamodelAuTitle
     */
    public function getCmiDatamodelAuTitle()
    {
        return $this->cmiDatamodelAuTitle;
    }
    /**
     * Sets the cmiDatamodelAuTitle
     *
     * @param string $cmiDatamodelAuTitle
     * @return void
     */
    public function setCmiDatamodelAuTitle($cmiDatamodelAuTitle)
    {
        $this->cmiDatamodelAuTitle = $cmiDatamodelAuTitle;
    }
    /**
     * Returns the cmiDatamodelAuDescr
     *
     * @return string $cmiDatamodelAuDescr
     */
    public function getCmiDatamodelAuDescr()
    {
        return $this->cmiDatamodelAuDescr;
    }
    /**
     * Sets the cmiDatamodelAuDescr
     *
     * @param string $cmiDatamodelAuDescr
     * @return void
     */
    public function setCmiDatamodelAuDescr($cmiDatamodelAuDescr)
    {
        $this->cmiDatamodelAuDescr = $cmiDatamodelAuDescr;
    }
    /**
     * Returns the cmiDatamodelAuMoveon
     *
     * @return string $cmiDatamodelAuMoveon
     */
    public function getCmiDatamodelAuMoveon()
    {
        return $this->cmiDatamodelAuMoveon;
    }
    /**
     * Sets the cmiDatamodelAuMoveon
     *
     * @param string $cmiDatamodelAuMoveon
     * @return void
     */
    public function setCmiDatamodelAuMoveon($cmiDatamodelAuMoveon)
    {
        $this->cmiDatamodelAuMoveon = $cmiDatamodelAuMoveon;
    }
    /**
     * Returns the cmiDatamodelAuLaunchmethod
     *
     * @return string $cmiDatamodelAuLaunchmethod
     */
    public function getCmiDatamodelAuLaunchmethod()
    {
        return $this->cmiDatamodelAuLaunchmethod;
    }
    /**
     * Sets the cmiDatamodelAuLaunchmethod
     *
     * @param string $cmiDatamodelAuLaunchmethod
     * @return void
     */
    public function setCmiDatamodelAuLaunchmethod($cmiDatamodelAuLaunchmethod)
    {
        $this->cmiDatamodelAuLaunchmethod = $cmiDatamodelAuLaunchmethod;
    }
    /**
     * Returns the cmiDatamodelAuMasteryscore
     *
     * @return string $cmiDatamodelAuMasteryscore
     */
    public function getCmiDatamodelAuMasteryscore()
    {
        return $this->cmiDatamodelAuMasteryscore;
    }
    /**
     * Sets the cmiDatamodelAuMasteryscore
     *
     * @param string $cmiDatamodelAuMasteryscore
     * @return void
     */
    public function setCmiDatamodelAuMasteryscore($cmiDatamodelAuMasteryscore)
    {
        $this->cmiDatamodelAuMasteryscore = $cmiDatamodelAuMasteryscore;
    }
    /**
     * Returns the cmiDatamodelAuLaunchparms
     *
     * @return string $cmiDatamodelAuLaunchparms
     */
    public function getCmiDatamodelAuLaunchparms()
    {
        return $this->cmiDatamodelAuLaunchparms;
    }
    /**
     * Sets the cmiDatamodelAuLaunchparms
     *
     * @param string $cmiDatamodelAuLaunchparms
     * @return void
     */
    public function setCmiDatamodelAuLaunchparms($cmiDatamodelAuLaunchparms)
    {
        $this->cmiDatamodelAuLaunchparms = $cmiDatamodelAuLaunchparms;
    }
    /**
     * Returns the cmiDatamodelAuObjectives
     *
     * @return string $cmiDatamodelAuObjectives
     */
    public function getCmiDatamodelAuObjectives()
    {
        return $this->cmiDatamodelAuObjectives;
    }
    /**
     * Sets the cmiDatamodelAuObjectives
     *
     * @param string $cmiDatamodelAuObjectives
     * @return void
     */
    public function setCmiDatamodelAuObjectives($cmiDatamodelAuObjectives)
    {
        $this->cmiDatamodelAuObjectives = $cmiDatamodelAuObjectives;
    }
    /**
     * Returns the cmiDatamodelAuUrl
     *
     * @return string $cmiDatamodelAuUrl
     */
    public function getCmiDatamodelAuUrl()
    {
        return $this->cmiDatamodelAuUrl;
    }
    /**
     * Sets the cmiDatamodelAuUrl
     *
     * @param string $cmiDatamodelAuUrl
     * @return void
     */
    public function setCmiDatamodelAuUrl($cmiDatamodelAuUrl)
    {
        $this->cmiDatamodelAuUrl = $cmiDatamodelAuUrl;
    }
    /**
     * Returns the cmiDatamodelAuEntitlementkey
     *
     * @return string $cmiDatamodelAuEntitlementkey
     */
    public function getCmiDatamodelAuEntitlementkey()
    {
        return $this->cmiDatamodelAuEntitlementkey;
    }
    /**
     * Sets the cmiDatamodelAuEntitlementkey
     *
     * @param string $cmiDatamodelAuEntitlementkey
     * @return void
     */
    public function setCmiDatamodelAuEntitlementkey($cmiDatamodelAuEntitlementkey)
    {
        $this->cmiDatamodelAuEntitlementkey = $cmiDatamodelAuEntitlementkey;
    }
    /**
     * Returns the cmiDatamodelCourseDescr
     *
     * @return string $cmiDatamodelCourseDescr
     */
    public function getCmiDatamodelCourseDescr()
    {
        return $this->cmiDatamodelCourseDescr;
    }
    /**
     * Sets the cmiDatamodelCourseDescr
     *
     * @param string $cmiDatamodelCourseDescr
     * @return void
     */
    public function setCmiDatamodelCourseDescr($cmiDatamodelCourseDescr)
    {
        $this->cmiDatamodelCourseDescr = $cmiDatamodelCourseDescr;
    }
    /**
     * Returns the cmiDatamodelCourseTitle
     *
     * @return string $cmiDatamodelCourseTitle
     */
    public function getCmiDatamodelCourseTitle()
    {
        return $this->cmiDatamodelCourseTitle;
    }
    /**
     * Sets the cmiDatamodelCourseTitle
     *
     * @param string $cmiDatamodelCourseTitle
     * @return void
     */
    public function setCmiDatamodelCourseTitle($cmiDatamodelCourseTitle)
    {
        $this->cmiDatamodelCourseTitle = $cmiDatamodelCourseTitle;
    }
    /**
     * Returns the cmiDatamodelCourseId
     *
     * @return string $cmiDatamodelCourseId
     */
    public function getCmiDatamodelCourseId()
    {
        return $this->cmiDatamodelCourseId;
    }
    /**
     * Sets the cmiDatamodelCourseId
     *
     * @param string $cmiDatamodelCourseId
     * @return void
     */
    public function setCmiDatamodelCourseId($cmiDatamodelCourseId)
    {
        $this->cmiDatamodelCourseId = $cmiDatamodelCourseId;
    }
}
