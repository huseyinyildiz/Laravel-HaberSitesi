<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Paneli</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets')}}/admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets')}}/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-color: #E2E2E2;">
<div class="container">
    <div class="row text-center " style="padding-top:100px;">
        <div class="col-md-12">
            <img src="{{asset('assets')}}/admin/img/logo-invoice.png" />
        </div>
    </div>
    <div class="row ">

        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

            <div class="panel-body">
                <form action="{{route('admin_logincheck')}}" method="post">
                    @csrf
                    <hr />
                    <h5>E-Mail ve Şifrenizi Girin</h5>
                    <br />
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Kullanıcı Adınız " />
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                        <input type="password" name="password" class="form-control"  placeholder="Şifreniz" />
                    </div>
                    <div class="form-group">
                        <label class="checkbox-inline">
                            <input type="checkbox" /> Beni hatırla
                        </label>
                        <span class="pull-right">
                                                   <a href="index.html" >Şifrenizi mi unuttunuz? </a>
                                            </span>
                    </div>
                    <button type="submit" class="button buttonBlue">Giriş Yap</button>

                    <hr />
                    Üye değil misin? <a href="index.html" >Buraya Tıkla </a> or ya da  <a href="index.html">Anasayfa</a>
                </form>
            </div>

        </div>


    </div>
</div>

</body>
</html>
