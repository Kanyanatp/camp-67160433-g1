@extends('template.default')
@section('header','ตารางแม่สูตรคูณ')
@section('content')
<form action="/calculate" method="get">
    <?php echo isset($_GET['mynumber']) ? $_GET['mynumber'] : ''; ?>
    <?php echo $_GET['mynumber'] ?? ''; ?>
    <input class="form-control" name="mynumber" type="number">
    <br>
    <button class="btn btn-success">บันทึก</button>
</form>
@endsection
