<?php

namespace Projects\DidYouDoItBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TaskType extends AbstractType
{
    
    /** Indicate if the TaskType is in create mode or edit mode */
    private $createMode;

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        if ($this->createMode)
        {
            $builder
                ->add('libelle');
        }
        else
        {
            $builder
                ->add('checked', 'checkbox', array(
                    'required' => false,
                ))
                ->add('libelle');
        }
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projects\DidYouDoItBundle\Entity\Task'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projects_didyoudoitbundle_task';
    }

    /** Inject in the TaskType if is it in create mode or edit mode
     */
    public function setCreateMode($createMode)
    {
        $this->createMode = $createMode;
    }
}
