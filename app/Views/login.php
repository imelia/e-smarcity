<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-wizdth, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <title>Login</title>

    <style>
    *{
        margin:0;
        padding: 0;
        box-sizing: border-box;
    }
    html{
        height: 100%;
    }
    body{
        font-family: 'Segoe UI', sans-serif;;
        font-size: 1rem;
        line-height: 1.6;
        height: 100%;
    }
    .wrap {
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #fafafa;
    }
    .login-form{
        width: 350px;
        margin: 0 auto;
        border: 1px solid #ddd;
        padding: 2rem;
        background: #ffffff;
    }
    .form-input{
        background: #fafafa;
        border: 1px solid #eeeeee;
        padding: 12px;
        width: 100%;
    }
    .form-group{
        margin-bottom: 1rem;
    }
    .form-button{
        background: #69d2e7;
        border: 1px solid #ddd;
        color: #ffffff;
        padding: 10px;
        width: 100%;
        text-transform: uppercase;
    }
    .form-button:hover{
        background: #69c8e7;
    }
    .form-header{
        text-align: center;
        margin-bottom : 2rem;
    }
    .form-footer{
        text-align: center;
    }
    </style>
  </head>
  <body>
  <div class="wrap">
        <form class="login-form" action="/login/auth" method="post">
            <div class="form-header">
                <h3>Login Form</h3>
               <?php if(session()->getFlashdata('msg')):?>
               <div class="alert alert-danger"><?= session()->getFlashdata('msg')?></div>
               <?php endif;?>
            </div>
            <!--Email Input-->
            <div class="form-group">
                <label for="InputForEmail" class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-input" id="InputForEmail" placeholder="email@example.com" value="<?= set_value('email')?>">
            </div>
            <!--Password Input-->
            <div class="form-group">
                <label for="InputForEmail" class="form-label">Alamat Email</label>
                <input type="password" name="password" class="form-input" id="InputForPassword" placeholder="password">
            </div>
            <!--Login Button-->
            <div class="form-group">
                <button class="form-button" type="submit">Login</button>
            </div>
            <div class="form-footer">
            Don't have an account? <a href="/register">Sign Up</a>
            </div>
        </form>
    </div><!--/.wrap-->
</body>
</html>