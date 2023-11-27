<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $student1 = new Student;
        $student1->dni = 10177229364;
        $student1->name = "Pedro Andres Leon Ramirez";
        $student1->phone = 3015242188;
        $student1->email = "pedro.leon@example.com";
        $student1->address = "Calle 123 #45-67";
        $student1->city = "Bogotá";
        $student1->semester = 7;
        $student1->save();


        $student2 = new Student;
        $student2->dni = 9876543210;
        $student2->name = "María Fernanda Gómez";
        $student2->phone = 3109876543;
        $student2->email = "maria.gomez@example.com";
        $student2->address = "Av. Principal #789";
        $student2->city = "Medellín";
        $student2->semester = 5;
        $student2->save();

        $student3 = new Student;
        $student3->dni = 8765432109;
        $student3->name = "Carlos Andrés López";
        $student3->phone = 3151234567;
        $student3->email = "carlos.lopez@example.com";
        $student3->address = "Carrera 50 #12-34";
        $student3->city = "Cali";
        $student3->semester = 3;
        $student3->save();

        $student4 = new Student;
        $student4->dni = 7654321098;
        $student4->name = "Ana María Rodríguez";
        $student4->phone = 3209876543;
        $student4->email = "ana.rodriguez@example.com";
        $student4->address = "Calle 67 #89-10";
        $student4->city = "Barranquilla";
        $student4->semester = 8;
        $student4->save();
        
        $student5 = new Student;
        $student5->dni = 6543210987;
        $student5->name = "Javier Alejandro Pérez";
        $student5->phone = 3176543210;
        $student5->email = "javier.perez@example.com";
        $student5->address = "Diagonal 25 #56-78";
        $student5->city = "Cartagena";
        $student5->semester = 6;
        $student5->save();

        $student6 = new Student;
        $student6->dni = 5432109876;
        $student6->name = "Laura Sofía Ramírez";
        $student6->phone = 3145678901;
        $student6->email = "laura.ramirez@example.com";
        $student6->address = "Carrera 80 #23-45";
        $student6->city = "Pereira";
        $student6->semester = 4;
        $student6->save();

        

    }
}
