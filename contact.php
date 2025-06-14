<?php include('includes/header.php'); ?>

<h2>დამიკავშირდი</h2>
<form method="post" action="">
    <label>სახელი: <input type="text" name="name" required></label><br>
    <label>ელ.ფოსტა: <input type="email" name="email" required></label><br>
    <label>შეტყობინება:<br><textarea name="message" required></textarea></label><br>
    <button type="submit">გაგზავნა</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<p>გმადლობთ შეტყობინებისთვის, {$_POST['name']}!</p>";
}
?>

<?php include('includes/footer.php'); ?>