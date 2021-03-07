<?php include 'inc/header.php'; ?>
<section class="service card-container">
    <div class="card">
        <div class="card-header">
            <h2><?= $cocktail->nom ?></h2>
            <h4><span id="vol">10</span>% d'alcool <span id="tuyaux"></span></h4>
            <a href="service.php" class="close">&times;</a>   
        </div>
        <form class="card-content" action="service-cocktail.php?id=<?= $cocktail->idCocktail ?>" method="POST">
            <div class="content-volume">
                <h3>Alcool dans le verre</h3>
                <div class="container-volume" id="volumeBtns">
                    <div>
                        <input onchange="volumeBtn(this);" value="10" type="radio" name="volume" id="volume-10" checked>
                        <label for="volume-10"><i class="fas fa-tint"></i></label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="30"  type="radio" name="volume" id="volume-30">
                        <label for="volume-30"><i class="fas fa-tint"></i><i class="fas fa-tint"></i></label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="50"  type="radio" name="volume" id="volume-50">
                        <label for="volume-50"><i class="fas fa-tint"></i> <i class="fas fa-tint"></i> <i class="fas fa-tint"></i></label>
                    </div>
                    <div>
                        <input onchange="volumeBtn(this);" value="80"  type="radio" name="volume" id="volume-80">
                        <label for="volume-80"><i class="fas fa-tint"></i> <i class="fas fa-tint"></i> <i class="fas fa-tint"></i> <i class="fas fa-tint"></i></label>
                    </div>

                </div>
                <div class="content-volume-jauge">
                    <input onchange="volumeJauge(this)" type="range" id="volume" name="volume" min="0" max="100" step="1" list="volumes" >
                    <datalist id="volumes">
                        <option value="0" label="0%">
                        <option value="25" label="25%">
                        <option value="50" label="50%">
                        <option value="75" label="75%">
                        <option value="100" label="100%">
                    </datalist>
                </div>
            </div>

            <div class="content-tuyaux">
                <h3>Quantité restante</h3>
                <div class="content-volume-jauge">
                    <?php
                        foreach($vols as $volumes) {
                            foreach($volumes as $vol) {
                                ?>
                                <h4><?= $vol->nom ?></h4>
                                <input type="range" id="volume" name="volume" min="0" max="2" step="0.25" list="volumes" value="<?= $vol->volume ?>" disabled>
                                <datalist id="volumes">
                                    <option value="0" label="0">
                                    <option value="0.5" label="0,5L">
                                    <option value="1" label="1L">
                                    <option value="1.75" label="1,75L">
                                    <option value="2" label="2L">
                                </datalist>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div>
                    <button name="sub" style="background-color: #2ecc71"><i class="fas fa-check"></i></button>
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