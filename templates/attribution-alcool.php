<?php include 'inc/header.php'; ?>
<section class="adding card-container">
    <div class="card">
        <div class="card-header">
            <h2><?= $alcool->nom ?></h2>
            <h4><span id="vol">1</span>L - tuyaux : <span id="tuyaux"></span></h4>
            <a href="soiree.php?id=<?= $_SESSION['idSoiree'] ?>" class="close">&times;</a>   
        </div>
        <form class="card-content" action="alcool.php?id=<?= $alcool->idAlcool ?>" method="POST">
            <div class="content-volume">
                <h3>Volume</h3>
                <div class="container-volume" id="volumeBtns">
                    <div>
                        <input onchange="volumeBtn(this);" value="1" type="radio" name="volume" id="volume-1" checked>
                        <label for="volume-1">1L</label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="2"  type="radio" name="volume" id="volume-2">
                        <label for="volume-2">2L</label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="0.75"  type="radio" name="volume" id="volume-75">
                        <label for="volume-75">0,75L</label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="1.75"  type="radio" name="volume" id="volume-175">
                        <label for="volume-175">1,75L</label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="0.5"  type="radio" name="volume" id="volume-5">
                        <label for="volume-5">0,5L</label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="1.5"  type="radio" name="volume" id="volume-15">
                        <label for="volume-15">1,5L</label>
                    </div>
                </div>
                <div class="content-volume-jauge">
                    <input onchange="volumeJauge(this)" type="range" id="volume" name="volume" min="0" max="2" step="0.25" list="volumes" >
                    <datalist id="volumes">
                        <option value="0" label="0L">
                        <option value="0.5" label="0,5L">
                        <option value="1" label="1L">
                        <option value="1.5" label="1,5L">
                        <option value="2" label="2L">
                    </datalist>
                </div>
                
            </div>

            <div class="content-tuyaux">
                <h3>Tuyaux</h3>
                <div class="container-tuyaux">
                    <?php
                        foreach ($tuyaux as $key => $value) {
                            ?>
                            <div>
                                <input onchange="updateLabelTuyau(this.value)" value="<?= $key ?>" type="radio" name="tuyaux" id="tuyau-<?= $key ?>" <?= !$value ? "disabled" : "" ?>>
                                <label for="tuyau-<?= $key ?>"><?= $key ?></label>
                            </div>
                            <?php
                        }
                    ?>
                    <div>
                        <button name="sub" style="background-color: #2ecc71"><i class="fas fa-check"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<script>
        jauge = document.getElementById('volume');
        btns = document.getElementById('volumeBtns');
        vol = document.getElementById('vol');
        tuyau = document.getElementById('tuyaux');

        function volumeBtn(btn) {
            jauge.value = btn.value;
            updateLabelVol(btn.value);
        }

        function volumeJauge(jauge) {
            btns.querySelectorAll('input').forEach(btn => {
                if (btn.value == jauge.value) {
                    btn.checked = true;
                }
            });
            updateLabelVol(jauge.value);
        }

        function updateLabelVol(v) {
            vol.innerHTML = v;
        }
        function updateLabelTuyau(t) {
            tuyau.innerHTML = t;
        }
    </script>
<?php include 'inc/footer.php'; ?>