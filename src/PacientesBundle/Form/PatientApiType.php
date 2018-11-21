<?php

    namespace PacientesBundle\Form;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    class PatientApiType extends PatientType
    {
        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => 'PacientesBundle\Entity\Pacientes',
                    'csrf_protection' => 'false'
            ));
        }
        /**
         * {@inheritdoc}
         */
        public function getBlockPrefix()
        {
            return '';
        }

}
