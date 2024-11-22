<?php
session_start();
?>
<form method="post">
    <input type="hidden" name="restart" value="<?= $_GET['restart'] ?? 0 ?>">
    <button type="submit" name="game_type" value="<7">Below 7</button>
    <button name="game_type" value="7">7</button>
    <button name="game_type" value=">7">Above 7</button>
</form>

<?php
$initialWalletBalance = 0;
$betAmount = 10;
$currentWalletBalance = 0;

if (!empty($_POST)) {

    $restart = (bool)$_POST['restart'];
    if (!empty($_SESSION['walletBalance']) && $restart) {
        $initialWalletBalance = $_SESSION['walletBalance'];
    } else {
        $_SESSION['walletBalance'] = $initialWalletBalance = 100;
    }

    $dice1Value = rand(1, 7);
    $dice2Value = rand(1, 7);
    $total = $dice1Value + $dice2Value;

    $won = false;
    $reward = 0;
    if ($_POST['game_type'] == '<7' && $total < 7) {
        $won = true;
        $reward = 20;
    } elseif ($_POST['game_type'] == '7' && $total == 7) {
        $won = true;
        $reward = 30;
    } elseif ($_POST['game_type'] == '>7' && $total > 7) {
        $won = true;
        $reward = 20;
    }

    $currentWalletBalance = calculateWallet($initialWalletBalance, $betAmount, $reward);
    echo "Game results ";
    echo "<br>";
    echo "Dice 1 : " . $dice1Value;
    echo "<br>";
    echo "Dice 2 : " . $dice2Value;
    echo "<br>";
    echo "Total :" . $total;
    if ($won) {
        echo "<br>";
        echo "Congratulations! You win! your balance is now " . $currentWalletBalance;
    } else {
        echo "<br>";
        echo "You loss the game! your balance is now " . $currentWalletBalance;
    }
    ?>
    <br>
    <a href="?restart=0">Reset and play again</a>
    <a href="?restart=1">Continue playing</a>
    <?php
}

function calculateWallet($initialWalletBalance, $betAmount, $reward = 0)
{
    $walletBalance = $initialWalletBalance - $betAmount + $reward;
    $_SESSION['walletBalance'] = $walletBalance;
    return $walletBalance;
}

?>
