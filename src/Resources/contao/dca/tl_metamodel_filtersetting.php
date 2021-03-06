<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package    MetaModels
 * @subpackage FilterTextCombine
 * @author     Christopher Boelter <christopher@boelter.eu>
 * @author     Christopher Bölter <c.boelter@cogizz.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

/**
 * palettes
 */
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['textcombine extends default'] = array
(
    '+config' => array(
        'textcombine_attributes',
        'textcombine_operator',
        'urlparam',
        'label',
        'placeholder',
        'textsearch',
        'template'
    ),
);

/**
 * fields
 */
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['textcombine_attributes'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textcombine_attributes'],
    'exclude'   => true,
    'inputType' => 'select',
    'sql'       => 'blob NOT NULL',
    'eval'      => array(
        'doNotSaveEmpty'     => true,
        'alwaysSave'         => true,
        'submitOnChange'     => false,
        'includeBlankOption' => true,
        'mandatory'          => true,
        'tl_class'           => 'long',
        'chosen'             => false,
        'multiple'           => true
    ),
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['textcombine_operator'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textcombine_operator'],
    'exclude'   => true,
    'inputType' => 'select',
    'sql'       => 'varchar(3) NOT NULL default \'\'',
    'options'   => array('or', 'and'),
    'reference' => $GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references'],
    'eval'      => array(
        'doNotSaveEmpty'     => true,
        'alwaysSave'         => true,
        'submitOnChange'     => false,
        'includeBlankOption' => false,
        'mandatory'          => false,
        'tl_class'           => 'w50 clr',
        'chosen'             => false,
        'multiple'           => false
    ),
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['textsearch'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['textsearch'],
    'exclude'   => true,
    'inputType' => 'select',
    'sql'       => 'varchar(32) NOT NULL default \'\'',
    'options'   => array('exact', 'beginswith', 'endswith'),
    'reference' => $GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['references'],
    'eval'      => array(
        'tl_class'           => 'w50',
        'includeBlankOption' => true
    )
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['placeholder'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['placeholder'],
    'exclude'   => true,
    'inputType' => 'text',
    'sql'       => 'varchar(255) NOT NULL default \'\'',
    'eval'      => array('tl_class' => 'w50')
);
