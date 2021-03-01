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
                <span class="close">&times;</span>    
            </div>
            <div class="popup-content">
                <div class="popup-content-volume">
                    <div class="popup-content-volume-bouton">
                        <button class="selected">1L</button>
                        <button>2L</button>
                        <button>0,75L</button>
                        <button>1,75L</button>
                        <button>0,5L</button>
                        <button>1,5L</button>
                    </div>
                    <div class="popup-content-volume-jauge">
                        <input type="range" id="volume" name="volume"min="0" max="2" step="0.25" list="volumes" >
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

                </div>
            </div>
        </div>
    </section>
<?php require_once('includes/footer.html'); ?>

