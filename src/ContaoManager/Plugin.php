<?php

/**
 * CEELEMENT
 *
 * @package   nandecore-bundles
 * @author    Chris Kirchmaier <ck@nandecore.net>
 * @copyright 2017 Nandecore
 * @license   CC
 */

namespace NaCore\Bundle\CustomElement\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use NaCore\Bundle\Element;
use Contao\CoreBundle\ContaoCoreBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(Element\CeElement::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
