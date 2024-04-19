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

