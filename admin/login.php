<?php
session_start();
include '../db.php';

if (isset($_POST['login'])) {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$_POST['user']]);
    $user = $stmt->fetch();

if ($user && $_POST['pass'] === $user['password'])  {
        $_SESSION['admin'] = true;
        header("Location: dashboard.php");
    } else {
        $error = "Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html>
<body class="flex items-center justify-center h-screen bg-stone-100 font-sans">
    <form method="POST" class="bg-white p-8 rounded shadow-md">
        <h2 class="text-xl font-bold mb-4">Admin Login</h2>
        <?php if(isset($error)) echo "<p class='text-red-500'>$error</p>"; ?>
        <input type="text" name="user" placeholder="Username" class="border p-2 mb-4 w-full block">
        <input type="password" name="pass" placeholder="Password" class="border p-2 mb-4 w-full block">
        <button name="login" class="bg-amber-800 text-white w-full py-2">Login</button>
    </form>
</body>
</html>