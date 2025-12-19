<!-- file: resources/views/html101.blade.php -->
@extends('template.default')
@section('title', 'Workshop Form')

@section('content')
<h1>Workshop #HTML - FORM</h1>

<form onsubmit="validateForm(event)">

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">ชื่อ</label>
        <div class="col-sm-8">
            <input type="text" id="fname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุชื่อ</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">สกุล</label>
        <div class="col-sm-8">
            <input type="text" id="lname" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุนามสกุล</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">วันเดือนปีเกิด</label>
        <div class="col-sm-8">
            <input type="date" id="birthday" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุวันเดือนปีเกิด</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">อายุ</label>
        <div class="col-sm-8">
            <input type="number" id="age" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุอายุ</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">เพศ</label>
        <div class="col-sm-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender">
                <label class="form-check-label">ชาย</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender">
                <label class="form-check-label">หญิง</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender">
                <label class="form-check-label">อื่นๆ</label>
            </div>
            <div class="invalid-feedback" id="genderError">โปรดระบุเพศ</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">รูป</label>
        <div class="col-sm-8">
            <input type="file" id="photo" class="form-control">
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดใส่รูป</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">ที่อยู่</label>
        <div class="col-sm-8">
            <textarea id="address" class="form-control" rows="3"></textarea>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดระบุที่อยู่</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">สีที่ชอบ</label>
        <div class="col-sm-8">
            <select id="fav_color" class="form-select">
                <option value="">-- เลือกสี --</option>
                <option value="red">แดง</option>
                <option value="blue">น้ำเงิน</option>
                <option value="green">เขียว</option>
            </select>
            <div class="valid-feedback">ถูกต้อง</div>
            <div class="invalid-feedback">โปรดเลือกสี</div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-4 col-form-label">แนวเพลงที่ชอบ</label>
        <div class="col-sm-8">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="music">
                <label class="form-check-label">Pop</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="music">
                <label class="form-check-label">Rock</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="music">
                <label class="form-check-label">Jazz</label>
            </div>
            <div class="invalid-feedback" id="musicError">โปรดเลือกแนวเพลง</div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-sm-8 offset-sm-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="agree">
                <label class="form-check-label">ยินยอมให้เก็บข้อมูล</label>
                <div class="invalid-feedback">ต้องยินยอมก่อน</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 offset-sm-4">
            <button type="reset" class="btn btn-light">
                รีเซ็ต
            </button>
            <button type="submit" class="btn btn-success">
                บันทึก
            </button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
    <script>
function validateForm(event){
    event.preventDefault()

    let fname = document.getElementById('fname')
    let lname = document.getElementById('lname')
    let birthday = document.getElementById('birthday')
    let age = document.getElementById('age')
    let gender = document.querySelector('input[name="gender"]:checked')
    let genderBox = document.getElementById('genderBox')
    let photo = document.getElementById('photo')
    let address = document.getElementById('address')
    let color = document.getElementById('fav_color')
    let music = document.querySelectorAll('input[name="music"]:checked')
    let musicBox = document.getElementById('musicBox')
    let agree = document.getElementById('agree')

    if(fname.value==""){
        fname.classList.add('is-invalid');
        fname.classList.remove('is-valid')
    }else{
        fname.classList.add('is-valid');
        fname.classList.remove('is-invalid')
    }

    if(lname.value==""){
        lname.classList.add('is-invalid');
        lname.classList.remove('is-valid')
    }else{
        lname.classList.add('is-valid');
        lname.classList.remove('is-invalid')
    }

    if(birthday.value==""){
        birthday.classList.add('is-invalid');
        birthday.classList.remove('is-valid')
    }else{
        birthday.classList.add('is-valid');
        birthday.classList.remove('is-invalid')
    }

    if(age.value==""){
        age.classList.add('is-invalid');
        age.classList.remove('is-valid')
    }else{
        age.classList.add('is-valid');
        age.classList.remove('is-invalid')
    }

     if(!gender){
        genderError.style.display='block'
    }else{
        genderError.style.display='none'}


    if(photo.value==""){
        photo.classList.add('is-invalid');
        photo.classList.remove('is-valid')
    }else{
        photo.classList.add('is-valid');
        photo.classList.remove('is-invalid')}

    if(address.value==""){
        address.classList.add('is-invalid');
        address.classList.remove('is-valid')
    }else{
        address.classList.add('is-valid');
        address.classList.remove('is-invalid')
    }

    if(color.value==""){
        color.classList.add('is-invalid');
        color.classList.remove('is-valid')
    }else{
        color.classList.add('is-valid');
        color.classList.remove('is-invalid')
    }

    if(music.length==0){
        musicError.style.display='block'
    }else{
        musicError.style.display='none'}

    if(!agree.checked){
        agree.classList.add('is-invalid')
    }else{
        agree.classList.remove('is-invalid')
    }
}
    </script>
@endpush
