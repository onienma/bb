<?php
include  './inc/db.php';
include  './inc/form.php';
include './inc/db_close.php';
include './inc/select.php';
?>

<?php include_once './parts/header.php';?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <img src="images/1211480.jpg"  alt="">
      <h1 class="display-4 fw-normal">اربح مع نور</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من البرنامج</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>
<!---
  <ul class="list-group list-group-flush">
                     <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه</li>
                     <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة واحده عبارة عن اسئلة واجوبة للجميع</li>
                     <li class="list-group-item">خلال فترة ساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك و إيميلك/li>
                     <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
                     <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
</ul>
-->
<div class="container">
<div class="position-relative  text-center ">


    <h3>الرجاء ادخال المعلومات</h3>
    <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" class="firstName" id="exampleInputEmail1"value="<?php print $firstName ?>">
    <div  class="form-text error"><?php print $errors['firstNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" class="lastName" id="exampleInputEmail1" value="<?php print $lastName ?> ">
    <div  class="form-text error"><?php print $errors['lastNameError']?></div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الالكتروني</label>
    <input type="text" class="email" id="exampleInputEmail1"value="<?php print $email ?> ">
    <div  class="form-text error"><?php print $errors['emailError']?></div>
  </div>

  <button type="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>


   <div class="form-floating mb-3">
       <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
       <label for="floatingInput">Email address</label>
   </div>
   <div class="form-floating">
       <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
       <label for="floatingPassword">Password</label>
   </div>




    </form>
    </div>
  </div>
  <div class="loader-con">
       <div id="loader">
	      <canvas id="circularlord" width="200" height="200"></canvas>
</div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id= "winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
اختيار الرابح</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">الرابج في المسابقة</h5>
     
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        الرابح
        <?php foreach($users as $user):?>
        <h1 class="modal-title" id="exampleModalLabel"><?php print htmlspecialchars($user['firstName']). ' ' .htmlspecialchars($user['lastName']) .'<br> ' .htmlspecialchars($user['email']); ?></h1>
        <?php endforeach;?>
      </div>
   
    </div>
  </div>
</div>









    <?php include_once './parts/footer.php'; ?>

