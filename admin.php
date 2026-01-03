<?php
session_start();

if (!isset($_SESSION["admin_logged_in"])) {
    header("Location: login.php");
    exit;
}

require "config.php";

$result = $conn->query("SELECT * FROM reservations ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel | Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Segoe UI", sans-serif;
}

body {
    background: #f1f5f9;
    padding: 30px;
}

/* Header */
.header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 25px;
}

.header h2 {
    color: #1e293b;
}

.logout-btn {
    background: #dc2626;
    color: #fff;
    padding: 10px 18px;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 600;
    transition: 0.3s;
}

.logout-btn:hover {
    background: #b91c1c;
}

/* Table Container */
.table-container {
    background: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 14px 12px;
    text-align: left;
}

th {
    background: #f1f5f9;
    color: #334155;
    font-size: 14px;
}

td {
    font-size: 14px;
    color: #334155;
}

tr:not(:last-child) {
    border-bottom: 1px solid #e5e7eb;
}

/* Status select */
select {
    padding: 6px;
    border-radius: 5px;
    border: 1px solid #cbd5e1;
}

/* Buttons */
.btn {
    padding: 6px 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 13px;
}

.btn-update {
    background: #2563eb;
    color: #fff;
}

.btn-delete {
    background: #dc2626;
    color: #fff;
    margin-left: 5px;
}

.btn-update:hover {
    background: #1d4ed8;
}

.btn-delete:hover {
    background: #b91c1c;
}
</style>
</head>

<body>

<div class="header">
    <h2>Admin Panel – Reservations</h2>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Room</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row["guest_name"]) ?></td>
                <td><?= htmlspecialchars($row["email"]) ?></td>
                <td><?= htmlspecialchars($row["room_type"]) ?></td>
                <td><?= $row["check_in"] ?></td>
                <td><?= $row["check_out"] ?></td>
                <td><?= htmlspecialchars($row["status"] ?? 'Pending') ?></td>

                <td>
                    <form action="update_status.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <select name="status">
  <option value="Pending" <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
  <option value="Confirmed" <?= $row['status'] == 'Confirmed' ? 'selected' : '' ?>>Confirmed</option>
  <option value="Cancelled" <?= $row['status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
</select>

                        <button class="btn btn-update" type="submit">Update</button>
                    </form>

                    <form action="delete_reservation.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button class="btn btn-delete" type="submit"
                          onclick="return confirm('Are you sure you want to delete this reservation?')">
                          Delete
                        </button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
