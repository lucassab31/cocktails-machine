<?php include 'inc/header.php'; ?>
<section id="pin_login">
    <div class="pin-content">
        <form method="post" id="pin-form">
            <input type="password" placeholder="Entrez le code" id="pin-input" name="pin" disabled>
            <input type="password" placeholder="Entrez le code" id="pin-input2" name="pin2" hidden>
            <div class="pin-pad">
                <button onclick="enterPin('1'); return false;">1</button>
                <button onclick="enterPin('2'); return false;">2</button>
                <button onclick="enterPin('3'); return false;">3</button>
                <button onclick="enterPin('4'); return false;">4</button>
                <button onclick="enterPin('5'); return false;">5</button>
                <button onclick="enterPin('6'); return false;">6</button>
                <button onclick="enterPin('7'); return false;">7</button>
                <button onclick="enterPin('8'); return false;">8</button>
                <button onclick="enterPin('9'); return false;">9</button>
                <button onclick="delPin(); return false;"><i class="fas fa-backspace"></i></button>
                <button onclick="enterPin('0'); return false;">0</button>
                <button type="submit" name="submitP"><i class="fas fa-check"></i></button>
            </div>
        </form>
        
    </div>
</section>
<script>
    var pinInput = document.getElementById("pin-input");
    var pinInput2 = document.getElementById("pin-input2");
    function enterPin(n) {
        if (pinInput.value.length < 4) {
            pinInput.value += n;
            pinInput2.value += n;
        }
    }
    function delPin() {
        pinInput.value="";
        pinInput2.value="";
    }

</script>
<?php include 'inc/footer.php'; ?>