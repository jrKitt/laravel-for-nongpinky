<ul>
    {{-- เอา item ที่ส่งมากจาก Controller มาแสดงในตัวแปรชื่อ koko --}}
    @foreach($items as $koko)
    {{-- ต่่อไปจะเข้าถึง col ที่ชื่อ name เลยต้องเข้าถึงตัวแปร koko ก่อนจากนั้น ชี้ไปที่ name --}}
    <li>{{$koko->name}}</li>
    @endforeach
</ul>
