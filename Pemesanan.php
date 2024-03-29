<?php
require  "connection.php";

if (isset($_POST["submit"])) {
  if (isset($_POST["delivery"])) {
    if (isset($_POST["delivery"])) {
      if (Pesan($_POST) > 0) {
        echo "<script>
                  alert('Pesanan Berhasil Terkirim');
                  window.location.href='Home.php';
              </script>";
      }
    }
  }
} else {
  echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="english">

<head>
  <title>SCHOENLAB</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8" />
  <meta property="twitter:card" content="summary_large_image" />

  <style data-tag="reset-style-sheet">
    html {
      line-height: 1.15;
    }

    body {
      margin: 0;
    }

    * {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
    }

    p,
    li,
    ul,
    pre,
    div,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    figure,
    blockquote,
    figcaption {
      margin: 0;
      padding: 0;
    }

    button {
      background-color: transparent;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-size: 100%;
      line-height: 1.15;
      margin: 0;
    }

    button,
    select {
      text-transform: none;
    }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
      -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
      border-style: none;
      padding: 0;
    }

    button:-moz-focus,
    [type="button"]:-moz-focus,
    [type="reset"]:-moz-focus,
    [type="submit"]:-moz-focus {
      outline: 1px dotted ButtonText;
    }

    a {
      color: inherit;
      text-decoration: inherit;
    }

    input {
      padding: 2px 4px;
    }

    img {
      display: block;
    }

    html {
      scroll-behavior: smooth
    }
  </style>
  <style data-tag="default-style-sheet">
    html {
      font-family: Inter;
      font-size: 16px;
    }

    body {
      font-weight: 400;
      font-style: normal;
      text-decoration: none;
      text-transform: none;
      letter-spacing: normal;
      line-height: 1.15;
      color: var(--dl-color-gray-black);
      background-color: var(--dl-color-gray-white);

    }
  </style>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" data-tag="font" />
  <link rel="stylesheet" href="./style3.css" />
</head>

<body>
  <div>
    <link href="./style4.css" rel="stylesheet" />

    <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-container">
      <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-wwwishoelaundrycombyhtmltodesign-fr-eversion2105202">
        <input type="text" placeholder="Search" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputsearchformsubmit" />
        <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divrcanchorpt">
          <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text">
            <span>Privacy</span>
          </span>
          <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text02">
            <span>-</span>
          </span>
          <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text04">
            <span>Terms</span>
          </span>
        </div>
        <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divsitecontainer">
          <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-headersiteheader">
            <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divwrap"></div>
          </div>
          <img src="public/playground_assets/whatsappimage20230515at132914618-ihxl-300h.png" alt="WhatsAppImage20230515at132914618" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-whats-app-image20230515at13291" />
          <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divsiteinner">
            <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-articlepost823">
              <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-headerentryheader">
                <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text06">
                  <span>ORDER NOW!</span>
                </span>
              </div>
              <form action="" method="post">
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-formwpcf7form">
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-label">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text08">
                      <span>Nama</span>
                    </span>
                    <input type="text" placeholder="" name="nama" id="nama" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputwpcf7formcontrol" />
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-label1">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text10">
                      <span>Alamat Lengkap</span>
                    </span>
                    <input type="text" placeholder="" name="alamat" id="alamat" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputwpcf7formcontrol1" />
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-label2">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text12">
                      <span>Nomor Handphone</span>
                    </span>
                    <input type="text" placeholder="" name="nohp" id="nohp" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputwpcf7formcontrol2" />
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-label3">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text14">
                      <span>Email</span>
                    </span>
                    <input type="text" placeholder="" name="email" id="email" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputwpcf7formcontrol3" />
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-p">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text16">
                      <span>Pickup/Delivery Service</span>
                    </span>
                    <input type="checkbox" name="delivery" value="Ya" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text18"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text19">
                      <span>Ya</span>
                    </label>
                    <input type="checkbox" name="delivery" value="Tidak" id="checkbox-tidak" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputsvg">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text21"></span>
                    <label for="checkbox-tidak" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text22">
                      <span>Tidak</span>
                    </label>
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-label4">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text24">
                      <span>
                        Tanggal &amp; Jam Pickup/Delivery (*isi jika menggunakan
                        jasa Pickup/Delivery Service)
                      </span>
                    </span>
                    <input type="text" placeholder="" name="tanggal" id="tanggal" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-inputwpcf7formcontrol4" />
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-p1">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text26">
                      <span>Jumlah Sepatu/Barang &amp; Jenisnya</span>
                    </span>
                    <input type="text" placeholder="" name="jumlah" id="jumlah" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-selectwpcf7formcontrolinput" />
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-p2">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text28">
                      <span>Service</span>
                    </span>
                    <input type="checkbox" name="servis" value="Deep Clean" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input1" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text30"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text31">
                      <span>Deep Clean</span>
                    </label>
                    <input type="checkbox" name="servis" value="Regular Deep Clean" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input2" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text33"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text34">
                      <span>Regular Clean</span>
                    </label>
                    <input type="checkbox" name="servis" value="Hard Deep Clean" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input3" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text36"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text37">
                      <span>Hard Deep Clean</span>
                    </label>
                    <input type="checkbox" name="servis" value="Repaint" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input4" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text39"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text40">
                      <span>Repaint</span>
                    </label>
                    <input type="checkbox" name="servis" value="Clean Others" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input5" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text42"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text43">
                      <span>Clean Others</span>
                    </label>
                    <input type="checkbox" name="servis" value="Whitening" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input6" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text45"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text46">
                      <span>Whitening</span>
                    </label>
                    <input type="checkbox" name="servis" value="Colouring" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input7" />
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text48"></span>
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text49">
                      <span>Colouring</span>
                    </label>
                    <input type="checkbox" name="servis" value="Reapir" id="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-input8" />
                    <label for="checkbox-ya" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text51">
                      <span>Repair</span>
                    </label>
                  </div>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-label5">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text53">
                      <span>Note</span>
                    </span>
                    <input type="text" placeholder="" name="note" id="note" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-textareawpcf7formcontrolinput" />
                  </div>
                  <button type="submit" name="submit" style="cursor: pointer;" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-buttonwpcf7formcontrolbutton">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text55">
                      <span>Send</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-footersitefooter"></div>
          <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divvcrow">
            <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divvcrow1">
              <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divcontactdetailsbox">
                <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text57">
                  <span>Whatsapp kami</span>
                </span>
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-p3">
                  <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text59">
                    <span>+62 856-4948-0871</span>
                  </span>
                </div>
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-frameiconwhatsappsvg">
                  <img src="public/playground_assets/vector4618-4d9n.svg" alt="Vector4618" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-vector" />
                </div>
              </div>
              <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divcontactdetailsbox1">
                <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text61">
                  <span>Workshop</span>
                </span>
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-a">
                  <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text63">
                    <span>
                      Jl. Bojongloa No.177/92, Panjunan, Kec. Astanaanyar,
                      Kota Bandung, Jawa Barat 40242
                    </span>
                  </span>
                </div>
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-frameiconworkshopsvg">
                  <img src="public/playground_assets/vector4618-e2al.svg" alt="Vector4618" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-vector1" />
                </div>
              </div>
            </div>
          </div>
          <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divvcrow2">
            <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divvcrow3">
              <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divvccolsm3">
                <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text65">
                  <span>ABOUT US</span>
                </span>
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-pmargintop23">
                  <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text67">
                    <span>SchoenLAB merupakan usaha yang</span>
                    <br />
                    <span>bergerak dibidang jasa laundry cuci</span>
                    <br />
                    <span>
                      sepatu berkualitas yang berasal dari Kota&nbsp;
                    </span>
                    <span>Bandung.</span>
                  </span>
                  <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-p4">
                    <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text74">
                      <span>
                        Berbagai layanan seperti pencucian dan&nbsp;
                      </span>
                      <span>pewarnaan ulang pada sepatu.</span>
                    </span>
                  </div>
                </div>
                <button class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-buttonmore">
                  <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text77">
                    <span>Learn more</span>
                  </span>
                </button>
              </div>
              <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-divvccolsm31">
                <div class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-pmargintop231">
                  <span class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-text79">
                    <span>Follow kita di Instagram untuk</span>
                    <br />
                    <span>mendapatkan update tentang promo-</span>
                    <span>promo menarik</span>
                  </span>
                </div>
                <img src="public/playground_assets/buttoninstagramfollowbuttonpng1png4617-0ajm-200h.png" alt="buttoninstagramfollowbuttonpng1png4617" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-buttoninstagramfollowbuttonpng1png" />
              </div>
            </div>
          </div>
          <img src="public/playground_assets/image14619-h0er-900h.png" alt="image14619" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-image1" />
          <img src="public/playground_assets/image24619-xt-900h.png" alt="image24619" class="wwwishoelaundrycombyhtmltodesign-fr-eversion2105202-image2" />
        </div>
      </div>
    </div>
  </div>
</body>

</html>