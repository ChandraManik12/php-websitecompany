<?php include_once("inc_header.php")?>
        <!-- untuk home -->
        <section id="home">
            <img src="<?php echo ambil_gambar('1')?>"/>
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('1') ?></p>
                <h2><?php echo ambil_judul('1') ?></h2>
                <?php echo maximum_kata(ambil_isi('1'),20) ?>
                <p><a href="<?php echo buat_link_halaman(1)?>" class="tbl-pink">Pelajari Lebih Lanjut</a></p>
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi"><?php echo ambil_kutipan('2') ?></p>
                <h2><?php echo ambil_judul('2') ?></h2>
                <?php echo maximum_kata(ambil_isi('2'),100) ?>
                <p><a href="<?php echo buat_link_halaman(2)?>" class="tbl-biru">Pelajari Lebih Lanjut</a></p>
            </div>
            <img src="<?php echo ambil_gambar('2')?>"/>
        </section>

        <!-- untuk tutors -->
        <section id="tutors">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Welcome to my website</p>
                    <h2>Pemesanan Tempat</h2>
                    <p>Jika anda ingin memesan tempat ini, anda dapat mengisi formulir pemesanan tempat pada label di bawah ini.</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="https://dfu1k3y1rami2.cloudfront.net/wp-content/uploads/2014/07/26195109/2020_cb.jpg"/>
                        <p>Jason Lee Scott</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://images.ctfassets.net/1wryd5vd9xez/4DxzhQY7WFsbtTkoYntq23/a4a04701649e92a929010a6a860b66bf/https___cdn-images-1.medium.com_max_2000_1_Y6l_FDhxOI1AhjL56dHh8g.jpeg"/>
                        <p>John Doe</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://images.fastcompany.net/image/upload/w_596,c_limit,q_auto:best,f_auto/fc/3021752-inline-i-1-why-square-designed-its-new-offices-to-work-like-a-city.jpg"/>
                        <p>Michael Dell</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="https://blogs-images.forbes.com/jackkelly/files/2019/06/Jack-Kelly_avatar_1559658819-400x400.jpg"/>
                        <p>Bruce Wills</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- untuk partners -->
        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Lihat siapa saja yang sudah berkunjung</p>
                    <h2>Pengelolaan Wisatawan</h2>
                    <p>Pada halaman ini, anda dapat melihat siapa saja yang sudah berkunjung ke Taman Cerdas Salatiga ini.</p>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/black-wheat-and-mortarboard.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-63.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-62.jpg"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://www.designevo.com/res/templates/thumb_small/encircled-branches-and-book.png"/>
                    </div>
                    <div class="kartu-partner">
                        <img src="https://image.freepik.com/free-vector/campus-collage-university-education-logo-design-template_7492-64.jpg"/>
                    </div>
                </div>
            </div>
        </section>
<?php include_once("inc_footer.php")?>