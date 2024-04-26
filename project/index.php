<?php 
include './inc/db.php';
include './inc/form.php';
include './inc/dp_close.php';
include './inc/select.php';

$sql = 'SELECT * FROM user ORDER BY RAND() LIMIT 1';
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>

<?php include_once './parts/header.php'; ?>



<center>
    <div class="p-4 p-md-5 mb-4 text-black rounded">
    <div class="col-md-6 px-0">
      <img src="img/01s.png" width="20%" hight="20%">
      <h1 class="display-4 fw-normal">اربح مع صالح الغامدي</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح سوني 5 مجاني</p>
    </div>
    
<h3>للدخول الى السحب الرجاء اتباع ما يلي:</h3>
    <ul class="list-group list-group-flush">
  <li class="list-group-item">تابع البث المباشر على حساباتي في التواصل الاجتماعي</li>
  <li class="list-group-item">ساقوم ببث مباشر لمده ساعتين عباره عن اسئله واجوبه حره للجميع</li>
  <li class="list-group-item">خلال فتره الساعتين سيتم فتح صفحه التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
  <li class="list-group-item">بنهايه البث سيتم اختيار واحد من قاعده البيانات بشكل عشوائي</li>
</ul>
</center>
<div class="container">

<div class="position-relative text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

<form  action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
  <h3>الرجاء تسجيل معلوماتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>
  <!---->
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>
<!---->
 <div class="mb-3">
    <label for="email" class="form-label">البريد الإلكتروني</label>
    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div> 
  <br>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" require>
    <label class="form-check-label" for="exampleCheck1">اضغط هنا في حال كانت معلوماتك صحيحه</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">تسجيل</button>
  </div>
  
</form>
    </div>
    </div>



</div>

<div class="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
<div class="button-wrapper">
</div>
</div>

<!-- Button trigger modal -->
<div class="d-grid gap-2 col-4 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
إختيار الرابح
</button>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($user as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']);?></h1>
      <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
  <?php include_once './parts/footer.php'; ?>