<?php

namespace Desmay\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of RegistrationType
 *
 * @author Kevin Desmay
 */
class RegistrationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('firstname');
        $builder->add('lastname');
        $builder->add('dateborn', 'date', array(
            'widget' => 'single_text',
            'attr'   =>  array(
                'class'   => 'datepicker',
            )
        ));
        $builder->add('sexe', 'choice', array(
            'expanded' => true,
            'choices' => array('1' => 'Man', '0' => 'Woman'),
            'data' => '1',
        ));
    }

    public function getParent() {
        return 'fos_user_registration';
    }

    public function getName() {
        return 'app_user_registration';
    }

}
