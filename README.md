### วิธีการติดตั้งโปรแกรม

- ดาวน์โหลด และติดตั้ง Xampp, Composer
- Clone และ Save Project ไว้ที่ โฟลเดอร์ xampp/htdocs
- เปิด Web Browser และไปที่ URL: http://localhost/phpmyadmin/
- กดปุ่ม New บนแถมเมนูด้านซ้าย ใส่ชื่อ Database ว่า "webple" และกดปุ่ม create
- กดปุ่ม Import บนแถบเมนูด้านบน เลือกไฟล์ webple.sql จากโฟลเดอร์ xampp/htdocs/webPLE/data และกดปุ่ม Go
- เข้า VSCode และเปิดไฟล์เดอร์โปรเจค จากนั้น run คำสั่ง บน Terminal 'composer install'
- เข้าไปยังโฟลเดอร์ xampp และเปิดแอปพลิเคชัน xampp-control
- กดปุ่ม Start ที่ Apache และ MySQL
- เปิด Web Browser และไปที่ URL: http://localhost/webPLE/public/
