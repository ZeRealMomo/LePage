<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'connect.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Momo's D'e Homepage</title>
    <link rel="stylesheet" href="assets/css/Main.css">

</head>
<body>
    <header>
        <div class="navbar">
            <nav class="nav-list">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li> 
                </ul>
            </nav>
        </div>    
    </header>

    <main>
        <nav class="homepage">
            <section id="home">
                <h1>Greetings, I'm <?php
                $row = mysqli_fetch_assoc($result); echo $row['name']; ?>!</h1>
                
                <br>Mahasiswa Universitas <?php echo $row['kampus']; ?>.</br>
            </section>     
        </nav>

        <section id="gallery">
            <h1>Gallery</h1>
                <div class = "MySlides fade">
                    <div class="NumText">1 / 6</div>
                    <img src="assets/images/O1CN0178WutC1ClvB69sWgn__86940122.webp" alt="Beauty" width="100%">
                </div>        
                <div class="MySlides fade">
                    <div class="NumText">2 / 6</div>
                    <img src="assets/images/FweNvLpaEAENx3Q.jpg" alt="Elf" width="100%">
                </div>
                <div class="MySlides fade">
                    <div class="NumText">3 / 6</div>   
                    <img src="assets/images/sample_429e97952169b7bb9a0006ea3393812c.jpg" alt="JiraiKei" width="100%">
                </div>
                <div class="MySlides fade">
                    <div class="NumText">4 / 6</div>
                    <img src="assets/images/a0f50dfe3e334893b46be35757216a38.thumbnail.0000000000.webp" alt="Bomb" width="100%">
                </div>    
                <div class="MySlides fade">
                    <div class="NumText">5 / 6</div>    
                    <img src="assets/images/Jirai_kei.webp" alt="cute" width="100%">
                </div>    
                <div class="MySlides fade">
                    <div class="NumText">6 / 6</div>
                    <img src="assets/images/sample_eca50e3f8b97edc5f8521df9865ef422.jpg" alt="Land" width="100%">
                </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </section>
        <br>
        
        <div style="text-align:center;">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
          </div>

        <script src="assets/js/Gallery.js"></script>

        <section id="blog">
            <h1>Blog</h1>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'Blog 1')">Blog 1</button>
                <button class="tablinks" onclick="openCity(event, 'Blog 2')">Blog 2</button>
                <button class="tablinks" onclick="openCity(event, 'Blog 3')">Blog 3</button>
              </div>
              
              <div id="Blog 1" class="tabcontent">
                <h3>Pengalaman Jirai Kei</h3>
                <p>Saya telah memakai Jirai Sejak tahun 2020 dan saya sangat menikmatinya!
                    Saya tahu fesyen seharusnya hanya lelucon, dan meledak menjadi tren.
                    Tapi itu nyata bagiku dan membuatku bahagia...</p>
                    <a href="https://bunbunpawz.tumblr.com/post/679163420121169920/jirai-kei-girl-experience">Baca selengkapnya</a>
              </div>
              
              <div id="Blog 2" class="tabcontent">
                <h3>Joseph Stalin, Pahlawan atau Musuh?</h3>
                <p>Joseph Stalin adalah salah satu tokoh sejarah yang kita tidak yakin bagaimana cara mengkategorikannya. Tidak diragukan lagi, dia adalah salah satu pemimpin paling berpengaruh dan signifikan di abad ke-20. Tapi apakah mungkin untuk mengkategorikannya sebagai pahlawan atau penjahat?</p>
                <a href="https://blog.richmond.edu/psyc449/2010/12/02/joseph-stalin-rise-fall-repeat/">Baca selengkapnya</a>
              </div>
              
              <div id="Blog 3" class="tabcontent">
                <h3>Ketika 8 Negara bekerja sama melawan China</h3>
                <p>Terjadi setelah kekeringan parah, banjir dan kelaparan, Pemberontakan Boxer, Yihetuan atau yang paling puitis, Gerakan Tinju yang Benar dan Harmonis, adalah pemberontakan di Tiongkok yang terjadi antara tahun 1899 dan 1900.</p>
                <a href="https://blogs.soas.ac.uk/archives/2017/11/03/the-righteous-and-harmonious-fists/">Baca selengkapnya</a>
              </div> 
        </section>

        <script src="assets/js/Blog.js"></script>


    </main>

    <footer>
        <div class="Footer-Contact">
            <section id="contact">
                <h1>Contact</h1>
                <a href="https://www.youtube.com/channel/UCmcMNFkhOtZxe7j8UuYXJRw">YouTube</a>
                <p>mozartkereh@gmail.com</p>
            </section>

        </div>
    </footer>
</body>
</html>