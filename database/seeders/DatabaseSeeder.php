<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Student;
use App\Models\StudentClass;
use App\Models\ClassTeacher;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // =====================
        // KELAS
        // =====================

        $kelas1 = StudentClass::create([
            'nama_kelas' => 'XI RPL B'
        ]);

        $kelas2 = StudentClass::create([
            'nama_kelas' => 'XII RPL B'
        ]);

        // =====================
        // SUPER ADMIN
        // =====================

        User::create([
            'username' => 'superadmin',
            'password' => Hash::make('123456'),
            'role' => 'super_admin'
        ]);

        // =====================
        // WALI KELAS
        // =====================

        $wali1 = User::create([
            'username' => 'wali_xi',
            'password' => Hash::make('123456'),
            'role' => 'class_teacher'
        ]);

        $wali2 = User::create([
            'username' => 'wali_xii',
            'password' => Hash::make('123456'),
            'role' => 'class_teacher'
        ]);

        ClassTeacher::create([
            'nama' => 'Bapak Andi',
            'teacher_id' => '19870001',
            'student_class_id' => $kelas1->id,
            'user_id' => $wali1->id
        ]);

        ClassTeacher::create([
            'nama' => 'Ibu Siti',
            'teacher_id' => '19870002',
            'student_class_id' => $kelas2->id,
            'user_id' => $wali2->id
        ]);

        // =====================
        // SISWA
        // =====================

        $ketua = User::create([
            'username' => 'ketua',
            'password' => Hash::make('123456'),
            'role' => 'student'
        ]);

        $wakil = User::create([
            'username' => 'wakil',
            'password' => Hash::make('123456'),
            'role' => 'student'
        ]);

        $sekretaris = User::create([
            'username' => 'sekretaris',
            'password' => Hash::make('123456'),
            'role' => 'student'       
            ]);

        $kebersihan = User::create([
            'username' => 'kebersihan',
            'password'=> Hash::make('123456'),
            'role' => 'student'
        ]);

        $kerohanian = User::create([
            'username' => 'kerohanian',
            'password' => Hash::make('123456'),
            'role' => 'student'
        ]);


        $bendahara = User::create([
            'username' => 'bendahara',
            'password' => Hash::make('123456'),
            'role' => 'student'
        ]);

        Student::create([
            'student_id' => '001',
            'nama' => 'Ferdi',
            'jabatan' => 'ketua_kelas',
            'student_class_id' => $kelas1->id,
            'user_id' => $ketua->id
        ]);

        Student::create([
            'student_id' => '002',
            'nama' => 'Fitra',
            'jabatan' => 'wakil_ketua',
            'student_class_id' => $kelas1->id,
            'user_id' => $wakil->id
        ]);

        Student::create([
            'student_id' => '003',
            'nama' => 'Resti',
            'jabatan' => 'bendahara',
            'student_class_id' => $kelas1->id,
            'user_id' => $bendahara->id
        ]);

        Student::create([
            'student_id' => '004',
            'nama' => 'Alya',
            'jabatan' => 'sekretaris',
            'student_class_id' => '$kelas1->id',
            'user_id' => '$sekretaris->id',
            ]);
        Student::create([
            'student_id' => '005',
            'nama' => 'Nabila',
            'jabatan' => 'sie_kerohanian',
            'student_class_id' => '$kelas1->id',
            'user_id' => '$kerohanian->id',
            ]);
        Student::create([
            'student_id' => '006',
            'nama' => 'Dimas',
            'jabatan' => 'sie_kebersihan',
            'student_class_id' => '$kelas1->id',
            'user_id' => '$kebersihan->id',
            ]);
    }
}