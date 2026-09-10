<?php
session_start();
include '../db.php';

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// ==================== MENU HANDLERS ====================
// Handle Add Menu Item
if (isset($_POST['add_menu'])) {
    $img = "";
    if (!empty($_FILES['image']['name'])) {
        $img = time() . '_' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/" . $img);
    }
    $stmt = $pdo->prepare("INSERT INTO menu (name, description, price, category, image, label) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$_POST['name'], $_POST['desc'], $_POST['price'], $_POST['category'], $img, $_POST['label']]);
    header("Location: dashboard.php");
    exit;
}

// Handle Delete Menu Item
if (isset($_GET['delete_menu'])) {
    $stmt = $pdo->prepare("DELETE FROM menu WHERE id = ?");
    $stmt->execute([$_GET['delete_menu']]);
    header("Location: dashboard.php");
    exit;
}

// ==================== DEALS HANDLERS ====================
// Handle Add Deal (with Image)
if (isset($_POST['add_deal'])) {
    $dealImg = "";
    if (!empty($_FILES['deal_image']['name'])) {
        $dealImg = time() . '_deal_' . basename($_FILES['deal_image']['name']);
        move_uploaded_file($_FILES['deal_image']['tmp_name'], "../uploads/" . $dealImg);
    }
    $isActive = isset($_POST['is_active']) ? 1 : 0;
    $stmt = $pdo->prepare("INSERT INTO deals (title, description, image, price, is_active) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$_POST['title'], $_POST['description'], $dealImg, $_POST['price'], $isActive]);
    header("Location: dashboard.php");
    exit;
}

// Handle Toggle Deal Status
if (isset($_GET['toggle_deal'])) {
    $stmt = $pdo->prepare("UPDATE deals SET is_active = NOT is_active WHERE id = ?");
    $stmt->execute([$_GET['toggle_deal']]);
    header("Location: dashboard.php");
    exit;
}

// Handle Delete Deal
if (isset($_GET['delete_deal'])) {
    $stmt = $pdo->prepare("DELETE FROM deals WHERE id = ?");
    $stmt->execute([$_GET['delete_deal']]);
    header("Location: dashboard.php");
    exit;
}

// Fetch all entries
$menu = $pdo->query("SELECT * FROM menu ORDER BY id DESC")->fetchAll();
$deals = $pdo->query("SELECT * FROM deals ORDER BY id DESC")->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard — The Chai Adda</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6 md:p-10 font-sans text-gray-800">
    <div class="max-w-5xl mx-auto space-y-12">
        
        <!-- Header -->
        <div class="flex justify-between items-center pb-4 border-b border-gray-300">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">Cafe Administration</h1>
                <p class="text-sm text-gray-500">Manage your live storefront offerings</p>
            </div>
            <div class="flex items-center gap-4">
                <a href="../index.php" target="_blank" class="text-sm font-semibold text-amber-800 hover:underline">View Live Site &rarr;</a>
                <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition">Logout</a>
            </div>
        </div>

        <!-- ==================== DEALS MANAGEMENT ==================== -->
        <section class="space-y-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                    <span class="w-3 h-3 bg-amber-500 rounded-full"></span> Ongoing Deals & Combos
                </h2>
                <span class="text-xs bg-amber-100 text-amber-900 font-bold px-2.5 py-1 rounded-full">
                    <?php echo count($deals); ?> Deals Total
                </span>
            </div>

            <!-- Add Deal Form with Image Upload -->
            <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" name="title" placeholder="Deal / Combo Title" class="border p-2.5 rounded-lg w-full" required>
                <input type="number" name="price" placeholder="Combo Price (₹)" class="border p-2.5 rounded-lg w-full" required>
                <div class="flex items-center gap-2 pl-2">
                    <input type="checkbox" name="is_active" id="is_active" class="w-4 h-4 text-amber-600 rounded" checked>
                    <label for="is_active" class="text-sm font-medium text-gray-700">Display as Active on Site</label>
                </div>
                <textarea name="description" placeholder="Short combo description (e.g. 1 Vada Pav + 1 Kadak Chai)" class="border p-2.5 rounded-lg md:col-span-3" rows="2" required></textarea>
                
                <div class="md:col-span-3">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Deal Photo (Optional, saved to /uploads/)</label>
                    <input type="file" name="deal_image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-amber-50 file:text-amber-700 hover:file:bg-amber-100">
                </div>

                <button name="add_deal" class="bg-amber-600 hover:bg-amber-700 text-white font-semibold py-2.5 px-4 rounded-lg md:col-span-3 transition">Add New Deal</button>
            </form>

            <!-- Deals Table -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <table class="w-full text-left border-collapse text-sm">
                    <thead class="bg-gray-50 border-b border-gray-200 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="p-4">Photo</th>
                            <th class="p-4">Title</th>
                            <th class="p-4">Description</th>
                            <th class="p-4">Price</th>
                            <th class="p-4">Status</th>
                            <th class="p-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php if (empty($deals)): ?>
                            <tr><td colspan="6" class="p-4 text-center text-gray-400">No deals added yet.</td></tr>
                        <?php else: ?>
                            <?php foreach($deals as $d): ?>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 w-16">
                                    <?php if (!empty($d['image'])): ?>
                                        <img src="../uploads/<?php echo htmlspecialchars($d['image']); ?>" class="w-12 h-12 object-cover rounded-lg border border-gray-200" alt="">
                                    <?php else: ?>
                                        <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-xs">No img</div>
                                    <?php endif; ?>
                                </td>
                                <td class="p-4 font-bold text-gray-900"><?php echo htmlspecialchars($d['title']); ?></td>
                                <td class="p-4 text-gray-500 max-w-xs"><?php echo htmlspecialchars($d['description']); ?></td>
                                <td class="p-4 font-bold text-gray-900">₹<?php echo number_format($d['price'], 0); ?></td>
                                <td class="p-4">
                                    <a href="?toggle_deal=<?php echo $d['id']; ?>" class="inline-block px-2.5 py-1 text-xs font-bold rounded-full <?php echo $d['is_active'] ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-600'; ?>">
                                        <?php echo $d['is_active'] ? '● Active' : '○ Inactive'; ?>
                                    </a>
                                </td>
                                <td class="p-4 text-right space-x-3">
                                    <a href="?delete_deal=<?php echo $d['id']; ?>" onclick="return confirm('Delete this deal?')" class="text-red-600 hover:text-red-800 font-semibold">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- ==================== MENU MANAGEMENT ==================== -->
        <section class="space-y-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                    <span class="w-3 h-3 bg-blue-600 rounded-full"></span> Regular Menu Items
                </h2>
                <span class="text-xs bg-blue-100 text-blue-900 font-bold px-2.5 py-1 rounded-full">
                    <?php echo count($menu); ?> Items Total
                </span>
            </div>

            <!-- Add Menu Form -->
            <form method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" name="name" placeholder="Item Name" class="border p-2.5 rounded-lg w-full" required>
                <input type="number" name="price" placeholder="Price (₹)" class="border p-2.5 rounded-lg w-full" required>
                <select name="category" class="border p-2.5 rounded-lg w-full">
                    <option value="Chai">Chai</option>
                    <option value="Vada Pav">Vada Pav</option>
                    <option value="Coffee">Coffee</option>
                    <option value="Snacks">Snacks</option>
                    <option value="Cold Drinks">Cold Drinks</option>
                </select>
                <input type="text" name="label" placeholder="Badge / Tag (e.g. Bestseller, Chef Choice)" class="border p-2.5 rounded-lg w-full">
                <textarea name="desc" placeholder="Description of the item" class="border p-2.5 rounded-lg md:col-span-2" rows="2"></textarea>
                
                <div class="md:col-span-2">
                    <label class="block text-xs font-semibold text-gray-600 mb-1">Item Photo (Saved to /uploads/)</label>
                    <input type="file" name="image" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </div>

                <button name="add_menu" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-4 rounded-lg md:col-span-2 transition">Add Menu Item</button>
            </form>

            <!-- Menu Table -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
                <table class="w-full text-left border-collapse text-sm">
                    <thead class="bg-gray-50 border-b border-gray-200 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="p-4">Photo</th>
                            <th class="p-4">Item</th>
                            <th class="p-4">Category</th>
                            <th class="p-4">Price</th>
                            <th class="p-4 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        <?php if (empty($menu)): ?>
                            <tr><td colspan="5" class="p-4 text-center text-gray-400">No menu items added yet.</td></tr>
                        <?php else: ?>
                            <?php foreach($menu as $m): ?>
                            <tr class="hover:bg-gray-50 transition">
                                <td class="p-4 w-16">
                                    <?php if (!empty($m['image'])): ?>
                                        <img src="../uploads/<?php echo htmlspecialchars($m['image']); ?>" class="w-12 h-12 object-cover rounded-lg border border-gray-200" alt="">
                                    <?php else: ?>
                                        <div class="w-12 h-12 rounded-lg bg-gray-100 flex items-center justify-center text-gray-400 text-xs">No img</div>
                                    <?php endif; ?>
                                </td>
                                <td class="p-4 font-bold text-gray-900">
                                    <?php echo htmlspecialchars($m['name']); ?>
                                    <?php if (!empty($m['label'])): ?>
                                        <span class="text-[10px] bg-blue-100 text-blue-800 font-semibold px-2 py-0.5 rounded ml-1"><?php echo htmlspecialchars($m['label']); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td class="p-4 text-gray-500"><?php echo htmlspecialchars($m['category']); ?></td>
                                <td class="p-4 font-bold text-gray-900">₹<?php echo number_format($m['price'], 0); ?></td>
                                <td class="p-4 text-right">
                                    <a href="?delete_menu=<?php echo $m['id']; ?>" onclick="return confirm('Delete this menu item?')" class="text-red-600 hover:text-red-800 font-semibold">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>

    </div>
</body>
</html>