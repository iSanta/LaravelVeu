<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $teacher1 = new Teacher;
        $teacher1->dni = 9876543210;
        $teacher1->name = "María Fernanda Gómez";
        $teacher1->phone = 3109876543;
        $teacher1->email = "maria.gomez@example.com";
        $teacher1->address = "Av. Principal #789";
        $teacher1->city = "Medellín";
        $teacher1->save();

        $teacher2 = new Teacher;
        $teacher2->dni = 8765432109;
        $teacher2->name = "Carlos Andrés López";
        $teacher2->phone = 3151234567;
        $teacher2->email = "carlos.lopez@example.com";
        $teacher2->address = "Carrera 50 #12-34";
        $teacher2->city = "Cali";
        $teacher2->save();

        $teacher3 = new Teacher;
        $teacher3->dni = 7654321098;
        $teacher3->name = "Ana María Rodríguez";
        $teacher3->phone = 3209876543;
        $teacher3->email = "ana.rodriguez@example.com";
        $teacher3->address = "Calle 67 #89-10";
        $teacher3->city = "Barranquilla";
        $teacher3->save();

        $teacher4 = new Teacher;
        $teacher4->dni = 6543210987;
        $teacher4->name = "Javier Alejandro Pérez";
        $teacher4->phone = 3176543210;
        $teacher4->email = "javier.perez@example.com";
        $teacher4->address = "Diagonal 25 #56-78";
        $teacher4->city = "Cartagena";
        $teacher4->save();

        $teacher5 = new Teacher;
        $teacher5->dni = 5432109876;
        $teacher5->name = "Laura Sofía Ramírez";
        $teacher5->phone = 3145678901;
        $teacher5->email = "laura.ramirez@example.com";
        $teacher5->address = "Carrera 80 #23-45";
        $teacher5->city = "Pereira";
        $teacher5->save();
        
        $teacher6 = new Teacher;
        $teacher6->dni = 4321098765;
        $teacher6->name = "Andrés Felipe Herrera";
        $teacher6->phone = 3187654321;
        $teacher6->email = "andres.herrera@example.com";
        $teacher6->address = "Calle 12 #34-56";
        $teacher6->city = "Bucaramanga";
        $teacher6->save();
        


    }
}
