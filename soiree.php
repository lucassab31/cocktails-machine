<?php require_once('includes/header.php'); ?>
    <section id="soirees">
        <div class="section-title">
            <h1>Choix de la soirée</h1>
        </div>
        <a href="#" class="soiree first">
            <p>Ajouter une soirée</p>
            <i class="fas fa-plus-circle"></i>
        </a>
        <a href="#" class="soiree">
            <p>12/05/21</p>
            <p>Chez Mini Trump</p>
            <p>8 personnes</p>
            <i class="fas fa-arrow-circle-right"></i>
        </a>
        <a href="#" class="soiree">
            <p>12/05/21</p>
            <p>Chez Mini Trump</p>
            <p>8 personnes</p>
            <i class="fas fa-arrow-circle-right"></i>
        </a>
        <a href="#" class="soiree">
            <p>12/05/21</p>
            <p>Chez Mini Trump</p>
            <p>8 personnes</p>
           <i class="fas fa-arrow-circle-right"></i>
        </a>
    </section>
    <section id="attribution">
        <div class="presets">
            <a href="" class="preset">1</a>
            <a href="" class="preset">2</a>
            <a href="" class="preset">3</a>
            <a href="" class="preset">4</a>
        </div>
        <div class="section-title">
            <h1>Choix des bouteilles</h1>
        </div>
        <div class="page-selector">
            <a class="active" href="">Alcools</a>
            <a href="">Dilluants</a>
        </div>
        <div class="choix">
            <a href="?id=1&tuyau=8" class="item">
                <div class="item-header">
                    <h3>Vodka</h3>
                </div>
                <div class="item-content">
                    <div class="item-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="item-add">
                        <i class="fas fa-plus"></i>
                    </div>
                   
                </div>
            </a>
            <a href="?id=1&tuyau=8" class="item">
                <div class="item-header">
                    <h3>Vodka Orange</h3>
                </div>
                <div class="item-content">
                    <div class="item-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="item-add">
                        <i class="fas fa-plus"></i>
                    </div>
                   
                </div>
            </a>
            <a href="?id=1&tuyau=8" class="item">
                <div class="item-header">
                    <h3>Vodka Kas</h3>
                </div>
                <div class="item-content">
                    <div class="item-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="item-add">
                        <i class="fas fa-plus"></i>
                    </div>
                   
                </div>
            </a>
            <a href="?id=1&tuyau=8" class="item">
                <div class="item-header">
                    <h3>Jaeger Bomb</h3>
                </div>
                <div class="item-content">
                    <div class="item-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="item-add">
                        <i class="fas fa-plus"></i>
                    </div>
                   
                </div>
            </a>
            <a href="?id=1&tuyau=8" class="item">
                <div class="item-header">
                    <h3>Captain-Coca</h3>
                </div>
                <div class="item-content">
                    <div class="item-icon">
                        <i class="fas fa-wine-bottle"></i>
                    </div>
                    <div class="item-add">
                        <i class="fas fa-plus"></i>
                    </div>
                   
                </div>
            </a>
           
        </div>
    </section>
    <section class="popup-overlay">
        <div class="popup">
            <div class="popup-header">
                <h2>Vodka</h2>
                <h4><span id="vol">1</span>L - tuyaux : <span id="tuyaux">1</span></h4>
                <a href="#" class="close">&times;</a>    
            </div>
            <div class="popup-content">
                <div class="popup-content-volume">
                    <div class="popup-content-volume-bouton" id="volumeBtn">
                        <button class="selected" value="1" onclick="volumeBtn(this)" >1L</button>
                        <button value="2" onclick="volumeBtn(this)" >2L</button>
                        <button value="0.75" onclick="volumeBtn(this)" >0,75L</button>
                        <button value="1.75" onclick="volumeBtn(this)" >1,75L</button>
                        <button value="0.5" onclick="volumeBtn(this)" >0,5L</button>
                        <button value="1.5" onclick="volumeBtn(this)" >1,5L</button>
                    </div>
                    <div class="popup-content-volume-jauge">
                        <input onchange="volume(this)" type="range" id="volume" name="volume"min="0" max="2" step="0.25" list="volumes" >
                        <datalist id="volumes">
                            <option value="0" label="0L">
                            <option value="0.5" label="0,5L">
                            <option value="1" label="1L">
                            <option value="1.5" label="1,5L">
                            <option value="2" label="2L">
                        </datalist>
                    </div>
                </div>
                <div class="popup-content-tuyaux">
                    <div class="pad">
                        <button class="selected" value="1" onclick="tuyaux(this)" >1</button>
                        <button class="disable" value="2" onclick="tuyaux(this)" disabled>2</button>
                        <button value="3" onclick="tuyaux(this)" >3</button>
                        <button value="4" onclick="tuyaux(this)" >4</button>
                        <button value="5" onclick="tuyaux(this)" >5</button>
                        <button value="6" onclick="tuyaux(this)" >6</button>
                        <button value="7" onclick="tuyaux(this)" >7</button>
                        <button style="background-color: #2ecc71"><i class="fas fa-check"></i></button>
                        <button value="8" onclick="tuyaux(this)" >8</button>
                    </div>
                    <p>Tuyaux</p>
                </div>
            </div>
        </div>
    </section>
    <script>
        jauge = document.getElementById('volume');
        btns = document.getElementById('volumeBtn');
        vol = document.getElementById('vol');
        tuyau = document.getElementById('tuyaux');

        function volumeBtn(btn) {
            btn.parentElement.querySelectorAll('.selected').forEach(button => {
                button.classList.toggle('selected');
            });
            btn.classList.toggle('selected');
            jauge.value = btn.value;
            updateLabelVol(btn.value);
        }

        function volume(jauge) {
            btns.querySelectorAll('.selected').forEach(button => {
                button.classList.toggle('selected');
            });
            btns.querySelectorAll('button').forEach(button => {
                if (button.value == jauge.value) {
                    button.classList.toggle('selected');
                }
            });
            updateLabelVol(jauge.value);
        }

        function tuyaux(btn) {
            btn.parentElement.querySelectorAll('.selected').forEach(button => {
                button.classList.toggle('selected');
            });
            btn.classList.toggle('selected');
            console.log(btn.value)
            updateLabelTuyau(btn.value);
        }

        function updateLabelVol(v) {
            vol.innerHTML = v;
        }
        function updateLabelTuyau(t) {
            tuyau.innerHTML = t;
        }
    </script>
<?php require_once('includes/footer.html'); ?>

