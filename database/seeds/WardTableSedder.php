<?php

use App\Ward;
use Illuminate\Database\Seeder;

class WardTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 3จ',
            'ward_phone' => '043-258965',
            'ward_phoneำปะ' => '043-258965',
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 4ง',
            'ward_phoneext' => '63483,63484'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 5ง',
            'ward_phoneext' => '63538,63539'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยจิตเวช',
            'ward_phoneext' => '63018,63035'
        ]);
        Ward::create([
            'ward_name' => 'หอสงฆ์อาพาธ',
            'ward_phoneext' => '66321-2,66330-2'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยวิกฤตทารกแรกเกิด NICU',
            'ward_phone' => '043-363335'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยทารกแรกเกิดกึ่งวิกฤติ2ค',
            'ward_phone' => '043-363341'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 2ง',
            'ward_phone' => '043-363417'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยเด็ก IMC_2ง',
            'ward_phoneext' => '67184'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 3ง',
            'ward_phone' => '043-363481'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผ่าตัด1',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผ่าตัด2',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผ่าตัด3',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผ่าตัด4',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผู้ป่วยนอก1',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผู้ป่วยนอก2',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผู้ป่วยนอก3',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผู้ป่วยนอก4',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยกลาง',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 2ฉ',
            'ward_phoneext' => '64038,64039'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 5ก',
            'ward_phoneext' => '63650,63529'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 5จ',
            'ward_phoneext' => '63468,63469'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยเคมีบำบัด',
            'ward_phoneext' => '63510'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยICU อายุรกรรม 1 (MICU1)',
            'ward_phoneext' => '66220-3'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยICU อายุรกรรม 2 (MICU2)',
            'ward_phoneext' => '66242,66247'
        ]);
        Ward::create([
            'ward_name' => 'CCU',
            'ward_phoneext' => '63658,63652'
        ]);
        Ward::create([
            'ward_name' => 'PICU',
            'ward_phoneext' => '66205-6'
        ]);
        Ward::create([
            'ward_name' => 'หออภิบาลผู้ป่วยศัลยกรรมและฉุกเฉิน (S&EICU)',
            'ward_phoneext' => '63020,63061'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยเด็กระยะวิกฤต (NSICU)',
            'ward_phoneext' => '66239,66240'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยหนักศัลยกรรมหัวใจและทรวงอก (CVT)',
            'ward_phoneext' => '63499,63681'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยศัลยกรรมทั่วไป (SICU)',
            'ward_phoneext' => '66237,66238'
        ]);
        Ward::create([
            'ward_name' => 'SCTU',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 6ก',
            'ward_phoneext' => '63849,63578'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 6ข',
            'ward_phoneext' => '63611,63659'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 6จ',
            'ward_phoneext' => '63364,63612'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย กว.6/1',
            'ward_phone' => '043-367113,043-363948'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย กว.6/2',
            'ward_phone' => '043-367114'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย กว.7/1',
            'ward_phone' => '043-637115'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย สว11',
            'ward_phoneext' => '66372-3'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย สว12',
            'ward_phoneext' => '66413-4'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย สว13',
            'ward_phoneext' => '66453-4'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย สว14',
            'ward_phoneext' => '66493-4'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย สว15',
            'ward_phoneext' => '66532-4'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 8B',
            'ward_phoneext' => '66277,66278'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 8C',
            'ward_phoneext' => '66262'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 9A',
            'ward_phoneext' => '66298-9,66300'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 9B',
            'ward_phoneext' => '66307-8'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 9C',
            'ward_phoneext' => '66292-4'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยบริการปฐมภูมิ 123 มข.',
            'ward_phone' => '043-203455'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยบริการปฐมภูมิสามเหลี่ยม',
            'ward_phone' => '043-242101'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยบริการปฐมภูมิ นศ.มข',
            'ward_phone' => '043-203454'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 3ก',
            'ward_phoneext' => '63536,63566'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 3ข',
            'ward_phoneext' => '63477,63518'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 3ค',
            'ward_phoneext' => '63302,63303'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 3ฉ',
            'ward_phoneext' => '64055,64057'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 5ค',
            'ward_phoneext' => '63527,63475'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย IMC_3ข',
            'ward_phoneext' => '63269'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยรักษ์ประทุม',
            'ward_phoneext' => '66919,66920'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 2ก',
            'ward_phoneext' => '63520,63542'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 2ข',
            'ward_phoneext' => '63512,63513'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 5ข',
            'ward_phoneext' => '63846,63524'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยห้องคลอด',
            'ward_phoneext' => '63964,63592'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยวางแผนครอบครัว',
            'ward_phoneext' => '66317'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 4ก',
            'ward_phoneext' => '63523,63525'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย IMC_4ก',
            'ward_phone' => '043-363525'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 4ข1',
            'ward_phone' => '043-363842-3'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 4ข2',
            'ward_phone' => '043-363842-3'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 4ข3',
            'ward_phone' => '043-363842-3'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย 4ค',
            'ward_phone' => '043-363414,043-363415'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วย IMC_4ค',
            'ward_phone' => '043-363414,043-363415'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยไตและไตเทียม',
            'ward_phoneext' => '67208,673235'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยระบบทางเดินหายใจ',
            'ward_phone' => '043-366244'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยหัวใจและหลอดเลือด',
            'ward_phone' => '043-363426,043-363115'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยอุบัติเหตุและฉุกเฉิน 1 (AE1)',
            'ward_phone' => '043-363718-9'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยอุบัติเหตุและฉุกเฉิน 2 (AE2)',
            'ward_phone' => '043-363717,043-363720',
            'ward_phoneext' => '63717,63720'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยอุบัติเหตุและฉุกเฉิน 3 (AE3)',
            'ward_phone' => '043-363026,043-363721',
            'ward_phoneext' => '63026,63721'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยอุบัติเหตุและฉุกเฉิน 4 (AE4)',
            'ward_phone' => '043-36005,043-36006'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยผู้ป่วยนอกอุบัติเหตุและฉุกเฉิน (OPDAE)',
            'ward_phone' => '043-363714,043-363876',
            'ward_phoneext' => '63714,63876,63877'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยกู้ชีพ EMS',
            'ward_phone' => '043-363191',
            'ward_phoneext' => '631912'
        ]);
        Ward::create([
            'ward_name' => 'หน่วย refer',
            'ward_phone' => '043-363455,046-363678'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยควบคุมการติดเชื้อ',
            'ward_phoneext' => '63573,63077'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยคลื่นไฟฟ้าสมอง',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยกู้ชีวิต',
            'ward_phoneext' => '63000'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยสารอาหาร',
            'ward_phoneext' => '63069,63070'
        ]);
        Ward::create([
            'ward_name' => 'หน่วยโรคข้อ',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยมะเร็งวิทยา',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วย HBOT',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยเครื่องมือแพทย์',
            'ward_phoneext' => '63412'
        ]);
        Ward::create([
            'ward_name' => 'ศูนย์การพยาบาลรายกรณี',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'สถานบริหารจัดการงานวิจัยคลินิก',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยเอดส์',
            'ward_phone' => null
        ]);
        Ward::create([
            'ward_name' => 'หน่วยสารสนเทศ',
            'ward_phoneext' => '67185-9'
        ]);
        Ward::create([
            'ward_name' => 'หอผู้ป่วยไฟไหม้น้ำร้แนลวก (BURN UNIT)',
            'ward_phone' => '043-363597-8'
        ]);
    }
}
