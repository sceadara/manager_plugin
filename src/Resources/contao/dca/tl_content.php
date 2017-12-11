<?php

/**
 * CEELEMENT
 *
 * @package   nandecore-bundles
 * @author    Chris Kirchmaier <ck@nandecore.net>
 * @copyright 2017 Nandecore
 * @license   CC
 */

// Element palettes
$GLOBALS['TL_DCA']['tl_content']['palettes']['headline'] =
    '{type_legend},type,headline,subheadline,secondline;' .
    '{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['palettes']['headline']    = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['headline']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['text']        = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['text']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['list']        = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['list']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['table']       = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['table']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['sliderStart'] = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['sliderStart']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['code']        = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['code']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['markdown']    = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['markdown']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink']   = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['hyperlink']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['image']       = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['image']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']     = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['gallery']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['player']      = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['player']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['youtube']     = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['youtube']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['vimeo']       = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['vimeo']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['download']    = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['download']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['downloads']   = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['downloads']
);
$GLOBALS['TL_DCA']['tl_content']['palettes']['form']        = str_replace(
    'headline',
    'headline,subheadline,secondline',
    $GLOBALS['TL_DCA']['tl_content']['palettes']['form']
);

// Element fields
$GLOBALS['TL_DCA']['tl_content']['fields']['secondline']  = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['secondline'],
    'search'    => true,
    'inputType' => 'text',
    'eval'      => [
        'maxlength' => 200,
        'tl_class'  => 'clr'
    ],
    'sql'       => "varchar(255) NOT NULL DEFAULT ''"
];
$GLOBALS['TL_DCA']['tl_content']['fields']['subheadline'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['subheadline'],
    'search'    => true,
    'inputType' => 'inputUnit',
    'options'   => [
        'h2',
        'h3',
        'h4',
        'h5',
        'h6'
    ],
    'eval'      => [
        'maxlength' => 200,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL DEFAULT ''"
];
