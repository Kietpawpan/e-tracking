#  แนวคิดการพัฒนาระบบ e-Tracking Backend
## เป้าหมาย
เพื่อให้มีระบบ backend สำหรับศูนย์บริการร่วม ทส. ใช้ในการปรับปรุงฐานข้อมูลสถานะคำขอข้อมูลข่าวสาร ผ่านระบบคลาวด์กลางภาครัฐ โดยพัฒนาโปรแกรม e-tracking backend ที่มีความสะดวก รวดเร็ว มั่นคง และปลอดภัยในการใช้งาน

>[!WARNING]
>มีการนำเข้าข้อมูลส่วนบุคคลของผู้ยื่นคำขอ จึงต้องมีมาตรการรักษาความปลอดภัยของข้อมูลที่ได้มาตรฐานสากล

>[!TIP]
>ควรใช้มาตรการหลายชั้น เช่น
>- ใช้อุปกรณ์และเครือข่ายที่ได้รับการรับรองมาตรฐาน เช่น Elastic Cloud Server ของกระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคมแห่งชาติ
>- รักษาความปลอดภัยในการรับส่งข้อมูลผ่านระบบอินเตอร์เน็ตแบบ Secure Socket Layer โดยได้รับใบรับรอง SSL จากผู้ออกใบอนุญาตในต่างประเทศ
>- เข้ารหัสข้อมูลส่วนบุคคลด้วย hash algorithm ที่ทันสมัย ยังไม่มีการเจาะข้อมูลได้ด้วยเทคโนโลยีในปัจจุบัน
>- เขียนโปรแกรมโดยเจ้าหน้าที่ของรัฐที่มีหน้าที่รับผิดชอบ เพื่อลดจำนวนบุคคลที่อาจล่วงรู้ถึงการประมวลผลข้อมูลส่วนบุคคล ป้องกันความเสี่ยงจากการละเมิดข้อมูลส่วนบุคคลโดยโปรแกรมเมอร์ที่หน่วยงานว่าจ้าง
>- เก็บรวบรวมข้อมูลส่วนบุคคลให้น้อยที่สุด

>[!NOTE]
>คุณสมบัติของระบบที่จะพัฒนา
>- เป็นระบบ backend ที่ทำงานผ่านเว็บบราวเซอร์ในลักษณะ open stack
>- มีระบบจัดการสมาชิก การตรวจสอบความถูกต้องของชื่อผู้ใช้และรหัสผ่านก่อนอนุญาตให้เข้าใช้งาน
>- เขียนด้วยภาษาฝั่งแม่ข่าย คนทั่วไปไม่สามารถตรวจดูรหัสต้นฉบับที่สำคัญได้
>- มี e-form สำหรับรับข้อมูลความคืบหน้าและส่งไปยังเครื่องแม่ข่ายของโปรแกรม
>- มีคู่มือการใช้งาน นโยบายความเป็นส่วนตัว
>- ติดตั้งและทำงานบนเครื่องแม่ข่ายในระบบคลาวด์กลางภาครัฐทุกวัน ตลอด 24 ชั่วโมง
>- ผู้ใช้ไม่ต้องเข้าถึงเครื่องแม่ข่ายผ่านระบบ open stack ของกระทรวงดิจิทัลเพื่อเศรษฐกิจและสังคมแห่งชาติ
>- รักษาความปลอดภัยของการส่งข้อมูลผ่านเว็บบราวเซอร์แบบ Secure Socket Layer
>- รองรับการใช้งานบนอุปกรณ์ที่หลากหลาย ทั้งระบบ Windows, Android และ iOS
>- มี user interface ตามมาตรฐานการพัฒนาแอพพลิเคชันภาครัฐของสำนักงานพัฒนารัฐบาลดิจิทัล (องค์การมหาชน)

## การทำงานของโปรแกรม
1. หน้าแรก คือ index.php เป็นหน้ารับข้อมูลจากเจ้าหน้าที่ มีช่องรับข้อมูล (input) จำนวน 3 ช่อง ได้แก่
    - nid ใช้รับข้อมูลหมายเลขประจำตัวประชาชนของผู้ขอข้อมูลข่าวสาร เป็น number
    - progress ใช้รับข้อมูลความคืบหน้า เป็น text
    - OTP ใช้นำรับข้อมูลรหัสผ่านของเจ้าหน้าที่ผู้รายงานความคืบหน้า
    มีปุ่ม submit เพื่อส่งข้อมูลไปยังไฟล์แสดงผล updateResult.php
    มีปุ่ม Forget OTP? สำหรับนำไปหน้า getOTP.html เพื่อขอ OTP จากระบบ e-Tracking Backend
2. หน้าแสดงผล login.php
   - กรณีอีเมลหรือรหัสไม่ถูกต้อง ให้แจ้งผู้ใช้ว่า :
     > _อีเมลหรือรหัสผ่านไม่ถูกต้อง_
     จากนั้น กลับไปหน้า index.php
   - กรณีอีเมลและรหัสผ่านถูกต้อง ให้แสดงผลเป็นช่องรับข้อมูล จำนวน 2 ช่อง ได้แก่
     1) nid ใช้นำเข้าข้อมูลหมายเลขประจำตัวประชาชน 13 หลัก ของผู้ขอ
     2) progress ใช้นำเข้าข้อมูลความคืบหน้า หรือสถานะของคำขอ
    มีปุ่ม submit เพื่อส่งข้อมูลไปยังไฟล์ฐานข้อมูลผู้ขอ บนเครื่องแม่ข่ายของระบบ e-Tracking
3. หน้าแสดงผล update.php
   - กรณียังไม่กรอกข้อมูลช่องใด แต่กด submit ให้เตือนว่าต้องกรอกข้อมูลช่องนั้นก่อนฃ
   - กรณีกรอกข้อมูลครบทุกช่อง แล้วกด submit ให้แจ้งว่า
     > _ปรับปรุงข้อมูลสำเร็จ_
     และแสดงรายละเอียดข้อมูลที่ปรับปรุง
4. เจ้าหน้าที่สามารถตรวจสอบผลการปรับปรุงข้อมูลที่ https://esc.mnre.go.th/app/e-tracking/
