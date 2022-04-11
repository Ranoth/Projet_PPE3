<?php

namespace App\Form;

use App\Entity\Medicaments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MedicamentsType extends AbstractType
{
     /**
     * permet d'avoir la configuration de base d'un champ !
     *
     * @param string $label
     * @param string $placeholder
     * @return array
     */
    private function getConfiguration($label, $placeholder){
        return [
            'label' => $label, 
            'attr' => [
                'placeholder' => $placeholder
            ]
        ];

    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_commercial',TextType::class, $this->getConfiguration("nom commercial", "tapez un nom commercial"))
            ->add('Prix_Echantion',TextType::class, $this->getConfiguration("Prix échantion", "tapez un Prix"))
            ->add('contre_indication',TextType::class, $this->getConfiguration("contre indication", "tapez une contre indication"))
            ->add('effet',TextType::class, $this->getConfiguration("Effet", "tapez un effet"))
            ->add('imageMed', UrlType::class, $this->getConfiguration("URL de l'image", "tapez l'url de l'image"))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Medicaments::class,
        ]);
    }
}
