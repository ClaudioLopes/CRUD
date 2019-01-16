<?=get('message');?>

<form action="/pages/forms/create_user.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-contol" id="nome" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-contol" id="sobrenome" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-contol" id="email" placeholder="Input field">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" class="form-contol" id="password" placeholder="Input field">
    </div>

    <button type="submit" class="btn btn-primsty">Submit</button>
</form>
