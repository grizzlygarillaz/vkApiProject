<form action="<?=$_SERVER["PHP_SELF"]?>" method="post" class="card p-0 m-4 w-50 bg-secondary" id="authForm">
    <?php if (isset($errorMessage)): ?>
    <div class="card-header bg-danger">
        <h5 class="errorMessage m-0 text-light"><?=$errorMessage?></h5>
    </div>
    <?php endif;?>
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Логин" name="login">
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Пароль" name="password">
            <label for="floatingPassword">Пароль</label>
        </div>
    </div>
    <div class="card-footer" style="text-align: center">
        <button type="submit" class="lightButton btn h-100 w-75 btn-light" name="submit">Войти</button>
    </div>
</form>
