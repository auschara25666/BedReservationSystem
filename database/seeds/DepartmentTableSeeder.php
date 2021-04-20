<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name_eng' => 'General Surgery 1',
            'name_th' => 'ศัลยกรรมทั่วไป 1',
            'name_abb' => 'Gen 1',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'General Surgery 2',
            'name_th' => 'ศัลยกรรมทั่วไป 2',
            'name_abb' => 'Gen 2',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'General Surgery 3',
            'name_th' => 'ศัลยกรรมทั่วไป 3',
            'name_abb' => 'Gen 3',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'General Surgery 4',
            'name_th' => 'ศัลยกรรมทั่วไป 4',
            'name_abb' => 'Gen 4',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Urology Surgery',
            'name_th' => 'ศัลยกรรมระบบปัสสาวะ',
            'name_abb' => 'Uro',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Neurointervention Radiology',
            'name_th' => 'ศัลยกรรมระบบประสาทและสมอง',
            'name_abb' => 'NIR',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Plastic medical',
            'name_th' => 'ศัลยกรรมพลาสติก',
            'name_abb' => 'Plastic',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Orthopedic',
            'name_th' => 'ศัลยกรรมกระดูก',
            'name_abb' => 'Orthopedic',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'GASTRO - INTESTINAL & LIVER CENTER',
            'name_th' => 'ระบบทางเดินอาหารและตับ',
            'name_abb' => 'GI Med',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Chest medicine',
            'name_th' => 'อายุรศาสตร์ทรวงอก',
            'name_abb' => 'Chest Med',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Neurology medical',
            'name_th' => 'อายุรศาสตร์ระบบประสาท',
            'name_abb' => 'Neuro Med',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Cardiology medical',
            'name_th' => 'อายุรศาสตร์โรคหัวใจ',
            'name_abb' => 'Cardio Med',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Infectious diseases medical',
            'name_th' => 'อายุรศาสตร์โรคติดเชื้อ',
            'name_abb' => 'ID Med',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Nutrition medical',
            'name_th' => 'อายุรกรรมโภชนาการ',
            'name_abb' => 'Nutrition',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Nephrology medical',
            'name_th' => 'อายุรศาสตร์โรคไต',
            'name_abb' => 'Nephro Med',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Endocrinology',
            'name_th' => 'อายุรศาสตร์โรคต่อมไร้ท่อ',
            'name_abb' => 'Endocrine',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Vascular Surgery',
            'name_th' => 'ศัลกรรมหลอดเลือด',
            'name_abb' => 'VS',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
        Department::create([
            'name_eng' => 'Cardiovascular Thoracic Surgery',
            'name_th' => 'ศัลยกรรมหัวใจหลอดเลือดและทรวงอก',
            'name_abb' => 'CVT',
            'rec_status' => 1,
            'created_user_id' => 2,
        ]);
    }
}
