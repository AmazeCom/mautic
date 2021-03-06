<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\AssetBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class FormSubmitActionDownloadFileType
 *
 * @package Mautic\AssetBundle\Form\Type
 */
class FormSubmitActionDownloadFileType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm (FormBuilderInterface $builder, array $options)
    {
        $builder->add('asset', 'asset_list', array(
            'expanded'      => false,
            'multiple'      => false,
            'label'         => 'mautic.asset.form.submit.assets',
            'label_attr'    => array('class' => 'control-label'),
            'empty_value'   => false,
            'required'      => false,
            'attr'       => array(
                'class'   => 'form-control',
                'tooltip' => 'mautic.asset.form.submit.assets_descr'
            )
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return "asset_submitaction_downloadfile";
    }
}
