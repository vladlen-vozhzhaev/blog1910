<?php
require_once 'header.php';
?>
        <div class="container my-5">
            <h1 class="text-center my-3">Регистрация на сайте</h1>
           <div class="col-sm-6 mx-auto">
               <form action="/php/handlerReg.php" method="post">
                   <div class="mb-3">
                       <input required name="name" type="text" class="form-control" placeholder="Имя">
                   </div>
                   <div class="mb-3">
                       <input required name="lastname" type="text" class="form-control" placeholder="Фамилия">
                   </div>
                   <div class="mb-3">
                       <input required name="email" type="email" class="form-control" placeholder="Email">
                   </div>
                   <div class="mb-3">
                       <input required name="pass" type="password" class="form-control" placeholder="Пароль">
                   </div>
                   <div class="mb-3">
                       <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
                   </div>
               </form>
           </div>
        </div>
<?php
require_once 'footer.php'
?>