<!-- file: resources/views/html101.blade.php -->
<!Doctype html>

<html>
    <head>
        <title>HTML Form</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;500;600&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: "Sarabun", sans-serif;
            }
            .form-row {
                margin-bottom: 18px; 
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <h1>Workshop #HTML - FORM</h1>
            <form>

                <div class="row form-row">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id="fname" class="form-control">
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-sm-12 col-md-4">
                        <label for="lname">สกุล</label>
                    </div>
                    <div class="col">
                        <input id="lname" class="form-control">
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-4">
                        <label for="dob">วันเดือนปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="date" id="dob" class="form-control">
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-4">
                        <label>เพศ</label>
                    </div>
                    <div class="col">
                        <input type="radio" name="gender" value="male"> ชาย
                        <input type="radio" name="gender" value="female"> หญิง
                        <input type="radio" name="gender" value="other"> อื่นๆ
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-5">
                        <label for="photo">รูป</label>
                    </div>
                    <div class="col">
                        <input type="file" id="photo" class="form-control">
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-4">
                        <label for="address">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="address" class="form-control" rows="3"></textarea>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-4">
                        <label for="color">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input type="color" id="color" class="form-control form-control-color">
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-4">
                        <label>แนวเพลงที่ชอบ</label>
                    </div>
                    <div class="col">
                        <input type="checkbox" name="music" value="pop"> Pop<br>
                        <input type="checkbox" name="music" value="rock"> Rock<br>
                        <input type="checkbox" name="music" value="jazz"> Jazz<br>
                        <input type="checkbox" name="music" value="hiphop"> Hiphop<br>
                        <input type="checkbox" name="music" value="other"> อื่นๆ<br>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col">
                        <input type="checkbox" id="agree"> ยินยอมให้เก็บข้อมูล
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4"></div>
                    <div class="col">

                    
                        <button type="reset" class="btn"
                            style="background:white; border:1px solid #ccc; color:#000; padding:6px 14px;">
                            รีเซ็ต
                        </button>

                       
                        <button type="submit" class="btn"
                            style="background:#28a745; color:white; padding:6px 14px;">
                            บันทึก
                        </button>

                    </div>
                </div>

            </form>
        </div>
    </body>
</html>
