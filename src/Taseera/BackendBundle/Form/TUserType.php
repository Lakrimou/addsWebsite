<?php

namespace Taseera\BackendBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TUserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sName', TextType::class, array(
                'label'=>'الاسم'
            ))
            ->add('sUsername', TextType::class, array(
                'label'=>'اسم المستخدم'))
            ->add('sPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'invalid_message' => 'حقول كلمة العبور غير متطابقة',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options'  => array('label' => 'كلمة العبور'),
                'second_options' => array('label' => 'اعادة كلمة العبور')))
            ->add('sEmail', EmailType::class, array(
                'label'=>'الايميل'
            ))
            ->add('sWebsite', UrlType::class, array(
                'label'=>'موقع الويب'
            ))
            ->add('sPhoneLand', NumberType::class, array(
                'label'=>'الهاتف القار'
            ))
            ->add('sPhoneMobile', NumberType::class, array(
                'label'=>'الهاتف الجوال'))
            ->add('tCountry', EntityType::class, array(
                'class'=>'TaseeraBackendBundle:TCountry',
                'choice_label'=>'sName',
                'label'=>'البلد'
            ))
            ->add('tRegion', EntityType::class, array(
                'class'=>'TaseeraBackendBundle:TRegion',
                'choice_label'=>'sName',
                'label'=>'المدينة',
            ))
            ->add('tCity', EntityType::class, array(
                'class'=>'TaseeraBackendBundle:TCity',
                'choice_label'=>'sName',
                'label'=>'الحي'
            ))
            ->add('tCityArea', EntityType::class, array(
                'class'=>'TaseeraBackendBundle:TCityArea',
                'choice_label'=>'sName',
                'label'=>'المنطقة'
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Taseera\BackendBundle\Entity\TUser'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'taseera_backendbundle_tuser';
    }


}
