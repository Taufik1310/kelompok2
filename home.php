<?php 

require 'functions.php';


if (!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

$username = datauser();
$data = data()
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Penyebaran Covid-19 - Homepage</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/home.css" />
  </head>
  <body>
    <header>
      <nav role="navigation">
        <h4>Penyebaran Covid-19</h4>
        <ul>
          <li><a href="#identifikasi">Identifikasi</a></li>
          <li><a href="#rangkaian-peristiwa">Rangkaian Peristiwa</a></li>
          <li><a href="#interpretasi">Interpretasi</a></li>
        </ul>
        <section id="register-btn">
          <button type="button" class="login-btn"><a href="profileuser.php"><img src="profile/<?=$data["gambar"]?>" width="12px" alt=""> <?= $username;  ?></a></button>
          <button type="button" class="signup-btn"><a href="logout.php">Logout</a></button>
        </section>
      </nav>
      <video autoplay loop muted>
        <source src="./asset/video/y2mate.com - COVID19 3D Animation Background 4K FREE Download Video Coronavirus No Copyright Cinema 4D_480p (online-video-cutter.com).mp4" type="video/mp4" />
      </video>
      <h1>Penyebaran Covid-19</h1>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#1f1f1f"
          fill-opacity="1"
          d="M0,256L48,261.3C96,267,192,277,288,250.7C384,224,480,160,576,165.3C672,171,768,245,864,245.3C960,245,1056,171,1152,165.3C1248,160,1344,224,1392,256L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </header>

    <main>
      <article id="identifikasi">
        <hr />
        <div class="content">
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus debitis asperiores sequi sit dolor, obcaecati minima cupiditate nesciunt facilis quam dicta tenetur impedit itaque alias quibusdam magni tempore omnis maxime
            vero ducimus et recusandae eum vitae. Assumenda soluta ab libero tempora, modi eveniet atque consectetur veniam delectus, molestiae perspiciatis omnis repudiandae numquam eligendi possimus, quia recusandae eos labore in illo
            magni consequuntur non saepe. Provident at deserunt illo quia hic reprehenderit quas tempora maxime recusandae quam totam assumenda placeat rem ipsum earum quod accusamus, deleniti nulla reiciendis odit sint dignissimos
            accusantium aliquam fugit. Molestiae dicta facilis quisquam et laborum unde!
          </p>
          <section class="data">
            <h3>Data Penyebaran Covid-19 di Indonesia</h3>
            <table>
              <tr>
                <td colspan="3">Dirawat<br />43.582</td>
              </tr>
              <tr>
                <td>Terkonfirmasi<br />6.366.518 <span>+3.616</span></td>
                <td>Sembuh<br />6.165.328</td>
                <td>Meninggal<br />157.608</td>
              </tr>
              <tr>
                <td colspan="3">Sumber: www.covid19.go.id last update: 03-09-2022 12:15 WIB</td>
              </tr>
            </table>
          </section>
        </div>
      </article>
      <article id="rangkaian-peristiwa">
        <hr />
        <section class="bagian penyebab">
          <img src="./asset/img/coronavirus-4952102_1920.jpg" alt="cough" width="400px" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam nobis id, corrupti neque nostrum, officiis quibusdam accusamus fugit sequi soluta possimus dolores natus suscipit magni culpa libero alias exercitationem
            atque eaque recusandae? Odit ipsa blanditiis ab, sunt laborum quibusdam veritatis aliquid vel eos maxime eligendi incidunt? Laudantium recusandae assumenda aperiam quia necessitatibus provident ab autem dicta alias, illum
            tenetur accusantium atque quas iste. Explicabo, aliquid libero! Doloribus ratione magni hic ad, ut quisquam libero dolorum odio eaque repellat maxime!
          </p>
        </section>
        <hr />
        <section class="bagian gejala">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam nobis id, corrupti neque nostrum, officiis quibusdam accusamus fugit sequi soluta possimus dolores natus suscipit magni culpa libero alias exercitationem
            atque eaque recusandae? Odit ipsa blanditiis ab, sunt laborum quibusdam veritatis aliquid vel eos maxime eligendi incidunt? Laudantium recusandae assumenda aperiam quia necessitatibus provident ab autem dicta alias, illum
            tenetur accusantium atque quas iste. Explicabo, aliquid libero! Doloribus ratione magni hic ad, ut quisquam libero dolorum odio eaque repellat maxime!
          </p>
          <img src="./asset/img/mufid-majnun-yqLsYiuQgwo-unsplash.jpg" alt="cough" width="400px" />
        </section>
        <hr />
        <section class="bagian akibat">
          <img src="./asset/img/coronavirus-4914026_1920.jpg" alt="cough" width="400px" />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque aliquam nobis id, corrupti neque nostrum, officiis quibusdam accusamus fugit sequi soluta possimus dolores natus suscipit magni culpa libero alias exercitationem
            atque eaque recusandae? Odit ipsa blanditiis ab, sunt laborum quibusdam veritatis aliquid vel eos maxime eligendi incidunt? Laudantium recusandae assumenda aperiam quia necessitatibus provident ab autem dicta alias, illum
            tenetur accusantium atque quas iste. Explicabo, aliquid libero! Doloribus ratione magni hic ad, ut quisquam libero dolorum odio eaque repellat maxime!
          </p>
        </section>
        <hr />
      </article>
      <article id="interpretasi">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe ipsam aliquid, odio ratione qui, dolor non consectetur repellat totam suscipit delectus eaque vel recusandae eius molestias esse nemo amet, earum tenetur cumque beatae
          voluptatum. Ut dignissimos nostrum voluptates, iure excepturi totam asperiores vel natus dolorem maxime saepe esse? Dicta, atque expedita voluptate neque quod ex repellendus nemo consequuntur velit officia ducimus? Ipsum iure
          rerum eius!
        </p>
        <hr />
      </article>
    </main>
    <video controls>
      <source src="" type="video/mp4" />
    </video>
    <footer>
      <section class="head">
        <h3>Kelompok 2</h3>
        <h4>Penyebaran Covid-19</h4>
      </section>
      <section class="nama">
        <p>Nama Anggota</p>
        <ul>
          <li>Andi Putra Wijaya</li>
          <li>Ayudia Dewi Maharani</li>
          <li>Mochammad Sayyid Ath-Thoriq</li>
          <li>Nisrina Nuraini</li>
          <li>Rafi Fauzan</li>
          <li>Taufik Ismail</li>
        </ul>
      </section>
      <section class="ig">
        <p>IKUTI KAMI</p>
        <ul>
          <li><a href="https://www.instagram.com/andiputraw925/" target="_blank">andiputraw925</a></li>
          <li><a href="https://www.instagram.com/ayudieee/" target="_blank">ayudieee</a></li>
          <li><a href="https://www.instagram.com/sayyidarik/" target="_blank">sayyidarik</a></li>
          <li><a href="hhttps://www.instagram.com/kznisrina/" target="_blank">kznisrina</a></li>
          <li><a href="https://www.instagram.com/rrfauzan_/" target="_blank">rrfauzan_</a></li>
          <li><a href="https://www.instagram.com/taufiksmail_/" target="_blank">taufiksmail_</a></li>
        </ul>
      </section>
      <p><a href="./tentangkami.php">Tentang Kami</a></p>
      <p class="copyright">&copy; Copyright 2022. built with &hearts;</p>
    </footer>
  </body>
</html>
