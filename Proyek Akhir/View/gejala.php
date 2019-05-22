<div class="header">
    <h1 class="judul">Silahkan pilih gejala yang Anda alami</h1>
    <div id="pilih">
        <form action="diagnosa" method="get">
            <?php
                foreach ($res as $key => $value) {
                    echo '<input type="checkbox" name="gejala[]" value='.$value[0].'>'.$value[0];
                }
            ?>
            <input type="submit" id="btnMulai" value="Mulai">
        <!-- <button id="btnMulai"><a href="#popup" id="mulai">Mulai</a></button> -->
        </form>
    </div>
</div>