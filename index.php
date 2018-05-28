<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Caesar Cipher</title>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
  <div class="register-box" style="width:400px">
     <div class="register-logo">
      <a href="#"><b>MyCaesar</b> Chiper</a>
     </div>

      
      
  <div class="box box-info">
      
      <?php
		
	if(isset($_POST['submit1'])){
            function Cipher($ch, $key)
            {
                if (!ctype_alpha($ch))
                        return $ch;

                $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
            }

            function Encipher($input, $key)
            {
                $output = "";

                $inputArr = str_split($input);
                foreach ($inputArr as $ch)
                        $output .= Cipher($ch, $key);

                return $output;
            }

            function Decipher($input, $key)
            {
                    return Encipher($input, 26 - $key);
            }
            
            
        }else if(isset($_POST['submit2'])){
            function Cipher($ch, $key)
            {
                if (!ctype_alpha($ch))
                        return $ch;

                $offset = ord(ctype_upper($ch) ? 'A' : 'a');
                return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
            }

            function Encipher($input, $key)
            {
                $output = "";

                $inputArr = str_split($input);
                foreach ($inputArr as $ch)
                        $output .= Cipher($ch, $key);

                return $output;
            }

            function Decipher($input, $key)
            {
                    return Encipher($input, 26 - $key);
            }
        }
        ?>
      
    <br>
    <p class="login-box-msg" style="font-size:20px !important"><b></b></p>    
            <form name="enkripsi" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Isi Teks</label>
                  <textarea name="plain" required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                               oninput="setCustomValidity('')" type="text" class="form-control" rows="2" placeholder="Isikan teks disini"></textarea>            
                </div>
                <div class="form-group">
                  <label>Isi Key</label>
                  <input title="Pilih Key." required="true" oninvalid="this.setCustomValidity('Tidak boleh kosong!')" 
                               oninput="setCustomValidity('')" type="number" class="form-control" name="metode" placeholder="Masukan Key">
                </div>
                
                </div>
              
              <div class="box-footer">
                  <table class="table table-stripped">
                      <tr>
                          <td><input type="submit" name="submit1" value="Enkrip" style="width: 100%"></td>
                          <td><input type="submit" name="submit2" value="Dekrip" style="width: 100%"></td>
                      </tr>
                  </table>
              </div>
            </form>
              <div class="box-body">
                  <label>Hasil Enkripsi</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#6FACD5">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Encipher($_POST['plain'], $_POST['metode']);} 
                          if (isset($_POST['submit2'])){ echo Decipher($_POST['plain'], $_POST['metode']);}?></b></td>
                      </tr>
                  </table>
                  <label>Teks Asli</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#6FACD5">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo Decipher(Encipher($_POST['plain'], $_POST['metode']),$_POST['metode']);} 
                          if (isset($_POST['submit2'])){ echo Encipher(Decipher($_POST['plain'], $_POST['metode']),$_POST['metode']);}?></b></td>
                      </tr>
                  </table>
                  <label>Key</label>
                  <table class="table table-bordered">
                      <tr style="background-color:#6FACD5">
                          <td style="text-align:center"><b><?php if (isset($_POST['submit1'])){ echo $_POST['metode'];} 
                          if (isset($_POST['submit2'])){ echo $_POST['metode'];}?></b></td>
                      </tr>
                  </table>
      <br>
      <br>
                </div>
        </div>
</div>
    <div class="register-box-footer">
        <p style="text-align: center">Copyright &copy; 2018 EM-Studio</p>
    </div>        
</div>    
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="assets/bower_components/select2/dist/js/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
</body>
</html>




