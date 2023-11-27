<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $subject1 = new Subject;
        $subject1->name = "Modelado 3D";
        $subject1->description = "La asignatura tiene como objetivo introducir al alumno en el modelado tridimensional mediante la utilización de software para crear una representación matemática de un objeto o forma tridimensional. Las industrias del cine, la televisión, los videojuegos, la arquitectura, la construcción, el desarrollo de productos, la ciencia y la medicina utilizan estos modelos 3D para visualizar, simular, renderizar y animar todos estos elemento graficos, dentro del contexto de la producción de productos audiovisuales";
        $subject1->credits = 3;
        $subject1->knowledgeArea = "Artes digitales";
        $subject1->isMandatory = 1;
        $subject1->save();

        $subject2 = new Subject;
        $subject2->name = "Diseño Tridimensional";
        $subject2->description = "En esta materia, los estudiantes explorarán el diseño tridimensional utilizando herramientas de software avanzadas. Aprenderán a crear modelos matemáticos de objetos y formas en tres dimensiones. El diseño 3D es esencial en campos como la arquitectura, la ingeniería y la animación. Los alumnos desarrollarán habilidades para visualizar y representar objetos en entornos virtuales.";
        $subject2->credits = 4;
        $subject2->knowledgeArea = "Diseño y Tecnología";
        $subject2->isMandatory = 1;
        $subject2->save();

        $subject3 = new Subject;
        $subject3->name = "Animación Digital";
        $subject3->description = "Esta asignatura se centra en la creación de animaciones digitales en 3D. Los estudiantes aprenderán a dar vida a personajes, objetos y escenarios utilizando software especializado. Explorarán técnicas de modelado, rigging, texturización y renderización. La animación digital es fundamental en la industria del entretenimiento, publicidad y diseño interactivo.";
        $subject3->credits = 3;
        $subject3->knowledgeArea = "Artes visuales";
        $subject3->isMandatory = 1;
        $subject3->save();

        $subject4 = new Subject;
        $subject4->name = "Realidad Virtual";
        $subject4->description = "En esta materia, los estudiantes se sumergirán en el mundo de la realidad virtual. Aprenderán a crear entornos virtuales tridimensionales utilizando herramientas avanzadas. La realidad virtual se aplica en áreas como la educación, la medicina, la arquitectura y los videojuegos. Los alumnos explorarán técnicas de modelado, interacción y programación para desarrollar experiencias inmersivas.";
        $subject4->credits = 4;
        $subject4->knowledgeArea = "Tecnologías emergentes";
        $subject4->isMandatory = 1;
        $subject4->save();
        
        $subject5 = new Subject;
        $subject5->name = "Escultura Digital";
        $subject5->description = "Esta asignatura combina la creatividad artística con la tecnología digital. Los estudiantes explorarán técnicas de escultura en 3D utilizando software especializado. Aprenderán a modelar formas, texturizar superficies y aplicar iluminación. La escultura digital es relevante en campos como el diseño de personajes, la publicidad y la producción de efectos visuales.";
        $subject5->credits = 3;
        $subject5->knowledgeArea = "Artes plásticas";
        $subject5->isMandatory = 1;
        $subject5->save();
        
        $subject6 = new Subject;
        $subject6->name = "Simulación Física";
        $subject6->description = "En esta materia, los estudiantes explorarán la simulación de fenómenos físicos en entornos virtuales. Aprenderán a modelar y animar objetos en 3D aplicando principios de física. La simulación física se utiliza en áreas como la ingeniería, la medicina y la investigación científica. Los alumnos desarrollarán habilidades para crear simulaciones realistas y precisas.";
        $subject6->credits = 4;
        $subject6->knowledgeArea = "Ciencias aplicadas";
        $subject6->isMandatory = 1;
        $subject6->save();
        
        

    }
}
