<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in SPK Pemilihan Ketua BEM</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
<div id="isi">
    <div id="auth">
    
        <div class="row h-100">
            <div class="col-lg-5 col-12">
                
                <div class="content">
                <img src="assets/images/logo.png" style="width:60px;height:120px; margin-bottom:10px; margin-left:25px" />
                    <h1 class="auth-title">Log in</h1>
                    <form action="login-act.php" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username/Email" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="login">
                            <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg ">Log in</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
</body>
<style>
    body {
        background: -webkit-linear-gradient(bottom, #c5e8d6, #90ab9d);
        background-repeat: no-repeat;
        h
    }
    .auth-title {
        color: #79bd9a;
        margin-bottom: 30px;
        font-size: 40pt;
    }
    .content {
        width: 300px;
        text-align: center;
        margin-top: 70px;
        margin-left: 110px;
        
    }
    #isi {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 600px;
        margin: 3rem auto 6rem auto;
        width: 529px;
        text-align: center;
    }
</style>
</html>
