@extends('layouts.frontend')

@section('css_after')
@endsection

@section('content')

<style>
    .row {
        margin-right: 0px;
        margin-left: 0px;
    }
</style>

    <div class="bg-image mb-3" style="background-image: url('{{ asset('media/photos/about/jobandcareer.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full overflow-hidden">
                <div class="mt-7 mb-5 text-center">
                    <h1 class="h2 text-white mb-2 js-appear-enabled animated fadeInDown" data-toggle="appear" data-class="animated fadeInDown">JOB AND CAREER</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="block block-rounded block-themed block-transparent mb-0">
        <div class="block-content font-size-sm">
            <div class="row col-12">
                {{-- <div class="form-group col-md-4"></div> --}}
                <div class="form-group col-md-6">
                    <div class="row col-11" style="justify-content: left;">
                        <h1 style="font-family:SukhumvitSet;">1. ผู้จัดการฝ่ายตรวจสอบรถยนต์</h1><br>
                    </div>
                    <div class="row col-12" style="justify-content: left;">
                        <div class="row col-12" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">รายละเอียดการทำงาน</h5><br>
                        </div>
                        <ul>
                            <li>ให้คำปรึกษาและคอยช่วยเหลืองานช่างทั้งระบบ</li>
                            <li>ให้คำปรึกษาปัญหาด้านรถยนต์กับแผนกเคลม</li>
                            <li>วางแผนการออกพบลูกค้าให้เป็นไปตามเป้าหมายและตรงต่อเวลา</li>
                            <li>รับผิดชอบงานอื่นๆ ที่ได้รับมอบหมาย ประสานงานกับแผนกต่างๆ</li> 
                            <li>ตรวจเช็คสภาพรถยนต์ให้ได้ตามมาตรฐาน SOP ของบริษัทฯ</li>
                            <li>ใช้โปรแกรม CRM ลงข้อมูลในระบบการตรวจสภาพรถยนต์</li>
                            <li>ออกให้บริการลูกค้า เพื่อช่วยเหลือแผนกเคลม</li>
                            <li>วางแผนการออกพบลูกค้าให้เป็นไปตามเป้าหมายและตรงต่อเวลา</li>
                            <li>ศึกษารายละเอียดแพ็คเกจ Product ของบริษัทฯ</li>
                            <li>ปฏิบัติงานตามขั้นตอน และกฎระเบียบของบริษัทฯให้ถูกต้อง</li>                          
                        </ul>
                    </div>
                    <br>
                    <div class="row col-12" style="justify-content: left;">
                        <div class="row col-12" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">คุณสมบัติ</h5><br>
                        </div>
                        <ul>
                            <li>เพศชาย อายุ25ปี ขึ้นไป</li>
                            <li>จบการศึกษาระดับปริญญาตรีขึ้นไป</li>
                            <li>มีประสบการณ์ด้านช่างยนต์ 2 ปีขึ้นไป</li>
                            <li>เวลาการทำงาน : ทำงาน 6 วัน/ สัปดาห์ ตามตารางแผนการทำงาน</li>
                            <li>สามารถขับรถยนต์ได้/ มีใบขับขี่</li>  
                            <li>มีความรู้ด้านซ่อมบำรุง/ อะไหล่รถยนต์/ ด้านช่างยนต์/ เครื่องยนต์</li> 
                            <li>สามารถใช้คอมพิวเตอร์/ Microsoft Office/ Internet ได้เป็นอย่างดี</li>      
                            <li>มีทักษะในการสื่อสาร การโน้มน้าวใจ บริหารจัดการเวลาได้ดี มีความละเอียดรอบคอบ</li> 
                            <li>มีทัศนคติเชิงบวกในการทำงาน สามารถทำงานภายใต้แรงกดดันได้</li>                  
                        </ul>
                    </div>
                    <br>
                    <div class="row col-12" style="justify-content: left;">
                        <div class="row col-12" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">สวัสดิการ</h5><br>
                        </div>
                        <ul>
                            <li>ชุดยูนิฟอร์มพนักงาน</li>
                            <li>ตรวจสุขภาพประจำปี ปีละ 1 ครั้ง</li>
                            <li>งานเลี้ยงสังสรรค์ปีใหม่</li>
                            <li>เลี้ยงอาหารประจำเดือน</li>
                            <li>โบนัสประจำปี</li>
                            <li>เค้กวันเกิด</li>  
                            <li>สัมมนาประจำปี</li> 
                            <li>ปรับฐานเงินเดือนประจำปี</li>
                            <li>กองทุนเงินทดแทน</li>
                            <li>กองทุนเงินประกันสังคม</li>
                            <li>ของขวัญเยี่ยมไข้ให้กำลังใจพนักงาน</li>
                            <li>ของขวัญพิธีมงคลสมรส</li>
                            <li>เงินช่วยเหลือเมื่อเกิดภัยพิบัติ</li>
                            <li>เงินช่วยเหลือครอบครัว(กรณีพนักงานเสียชีวิต)</li>
                            <li>บริษัทช่วยผ่อนทรัพย์สิน</li>
                            <li>ประกันสุขภาพกลุ่มและประกันอุบัติเหตุ</li>
                            <li>วันลาคงเหลือ คืนเป็นเงินในปีถัดไป</li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="row col-12">
                <div class="form-group col-md-6">
                    <div class="row col-11" style="justify-content: left;">
                        <h1 style="font-family:SukhumvitSet;">2. เจ้าหน้าที่ตรวจสอบรถยนต์</h1><br>
                    </div>
                    <div class="row col-12" style="justify-content: left;">
                        <div class="row col-12" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">รายละเอียดการทำงาน</h5><br>
                        </div>
                        <ul>
                            <li>ตรวจเช็คสภาพรถยนต์ให้ได้ตามมาตรฐาน SOP ของบริษัทฯ</li>
                            <li>ใช้โปรแกรม CRM ลงข้อมูลในระบบการตรวจสภาพรถยนต</li>
                            <li>ออกให้บริการลูกค้า เพื่อช่วยเหลือแผนกเคลม</li>
                            <li>ให้คำปรึกษาปัญหาด้านรถยนต์กับแผนกเคลม</li> 
                            <li>วางแผนการออกพบลูกค้าให้เป็นไปตามเป้าหมายและตรงต่อเวลา</li>
                            <li>ศึกษารายละเอียดแพ็คเกจ Product ของบริษัทฯ</li>
                            <li>รับผิดชอบงานอื่นๆ ที่ได้รับมอบหมาย ประสานงานกับแผนกต่างๆ</li>
                            <li>ปฏิบัติงานตามขั้นตอน และกฏระเบียบของบริษัทฯให้ถูกต้อง</li>                          
                        </ul>
                    </div>
                    <br>
                    <div class="row col-12" style="justify-content: left;">
                        <div class="row col-12" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">คุณสมบัติ</h5><br>
                        </div>
                        <ul>
                            <li>เพศชาย อายุ20ปี ขึ้นไป</li>
                            <li>จบการศึกษาระดับ ม.6 ขึ้นไป</li>
                            <li>มีประสบการณ์ด้านช่างยนต์ 1 ปี</li>
                            <li>เวลาการทำงาน : ทำงาน 6 วัน/ สัปดาห์ ตามตารางแผนการทำงาน</li>
                            <li>สามารถขับรถยนต์ได้/ มีใบขับขี่</li>  
                            <li>มีความรู้ด้านซ่อมบำรุง/ อะไหล่รถยนต์/ ด้านช่างยนต์/ เครื่องยนต์</li> 
                            <li>สามารถใช้คอมพิวเตอร์/ Microsoft Office/ Internet ได้เป็นอย่างดี</li>      
                            <li>มีทักษะในการสื่อสาร การโน้มน้าวใจ บริหารจัดการเวลาได้ดี มีความละเอียดรอบคอบ</li> 
                            <li>มีทัศนคติเชิงบวกในการทำงาน สามารถทำงานภายใต้แรงกดดันได้</li>                  
                        </ul>
                    </div>
                    <br>
                    <div class="row col-12" style="justify-content: left;">
                        <div class="row col-12" style="justify-content: left;">
                            <h4 style="font-family:SukhumvitSet;">สวัสดิการ</h5><br>
                        </div>
                        <ul>
                            <li>ชุดยูนิฟอร์มพนักงาน</li>
                            <li>ตรวจสุขภาพประจำปี ปีละ 1 ครั้ง</li>
                            <li>งานเลี้ยงสังสรรค์ปีใหม่</li>
                            <li>เลี้ยงอาหารประจำเดือน</li>
                            <li>โบนัสประจำปี</li>
                            <li>เค้กวันเกิด</li>  
                            <li>สัมมนาประจำปี</li> 
                            <li>ปรับฐานเงินเดือนประจำปี</li>
                            <li>กองทุนเงินทดแทน</li>
                            <li>กองทุนเงินประกันสังคม</li>
                            <li>ของขวัญเยี่ยมไข้ให้กำลังใจพนักงาน</li>
                            <li>ของขวัญพิธีมงคลสมรส</li>
                            <li>เงินช่วยเหลือเมื่อเกิดภัยพิบัติ</li>
                            <li>เงินช่วยเหลือครอบครัว(กรณีพนักงานเสียชีวิต)</li>
                            <li>บริษัทช่วยผ่อนทรัพย์สิน</li>
                            <li>ประกันสุขภาพกลุ่มและประกันอุบัติเหตุ</li>
                            <li>วันลาคงเหลือ คืนเป็นเงินในปีถัดไป</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection