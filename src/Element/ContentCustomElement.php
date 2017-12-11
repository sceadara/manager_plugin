<?php

/**
 * CEELEMENT
 *
 * @package   nandecore-bundles
 * @author    Chris Kirchmaier <ck@nandecore.net>
 * @copyright 2017 Nandecore
 * @license   CC
 */

namespace NaCore\Bundle\CustomElement\Element;

use Contao\ContentElement;
use Contao\StringUtil;

/**
 * Class ContentCustomElement
 *
 * @package NaCore\Bundle\CustomElement
 */
class ContentCustomElement extends ContentElement
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $strTemplate = 'ce_nc_customelement';


    /**
     * Display a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        return parent::generate();
    }


    /**
     * Generate the module
     *
     * @return void
     */
    protected function compile()
    {
        $arrSubheadline              = StringUtil::deserialize($this->subheadline);
        $this->Template->subheadline = is_array($arrSubheadline) ? $arrSubheadline['value'] : $arrSubheadline;
        $this->Template->shl         = is_array($arrSubheadline) ? $arrSubheadline['unit'] : 'h2';
    }
}
