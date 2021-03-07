<?php include 'inc/header.php'; ?>
<section class="soirees card-container">
    <div class="card">
        <div class="card-header">
            <h2><?= $title ?></h2>
            <a href="soirees.php" class="close">&times;</a>   
        </div>
        <form class="card-content form-lr" action="createSoiree" method="POST">
            <div class="left">
                <div class="form-control">
                    <input class="input" type="text" name="loc" id="loc">
                    <label for="loc">Lieu de la soirée </label>
                </div>
                <div>
                    <input type="checkbox" name="identification" id="identification">
                    <label for="identification">identification</label>
                </div>
            </div>
            <div class="right">
                <div class="form-control">
                    <input class="input" type="number" min="1" name="nb" id="nb">
                    <label for="nb">Nombre de personnes </label>
                </div>
                <div>
                    <input type="checkbox" name="mini-game" id="mini-game" checked>
                    <label for="mini-game">Mini-jeux</label>
                </div>
            </div>
        </form>
    </div>
</section>
<script>
    inputs = document.querySelectorAll('.input');
    inputs.forEach(input => {
        input.addEventListener("focus", focusFunction);
        input.addEventListener("blur", blurFunction);
    });

    function focusFunction() {
        let parent = this.parentNode;
        parent.classList.add("focus");
    }

    function blurFunction() {
        let parent = this.parentNode;
        if (this.value == "") {
            parent.classList.remove("focus");
        } else {
            parent.classList.add("write");
        }
    }
</script>
<?php include 'inc/footer.php'; ?>