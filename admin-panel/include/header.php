<?php
include('include/db_config.php');
if(empty($_SESSION['admin_id']) || empty($_SESSION['admin_name'])){
	echo '<script>window.location.href="index.php"; </script>'; die; exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel Urjasteels</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  
  <style>
    * { box-sizing: border-box; }
    body { font-family: 'Segoe UI', sans-serif; background: #f4f6f9; margin: 0; }

    /* Sidebar */
    .sidebar {
      width: 200px;
      min-height: 100vh;
      background: #fff;
      border-right: 1px solid #e5e7eb;
      position: fixed;
      top: 0; left: 0;
    }
    .sidebar-logo {
      padding: 16px 20px;
      border-bottom: 1px solid #e5e7eb;
      display: flex; align-items: center; gap: 10px;
    }
    .sidebar-logo span {
      font-size: 1.3rem; font-weight: 800; letter-spacing: 2px; color: #111;
    }
    .sidebar-logo .menu-icon { color: #555; cursor: pointer; }
    .sidebar-nav { padding: 10px 0; }
    .sidebar-nav a {
      display: flex; align-items: center; gap: 10px;
      padding: 9px 20px;
      color: #555; text-decoration: none; font-size: 0.88rem;
      transition: background 0.2s, color 0.2s;
    }
    .sidebar-nav a:hover, .sidebar-nav a.active {
      background: #f0f4ff; color: #3b5bdb;
    }
    .sidebar-nav a.active { font-weight: 600; }
    .sidebar-nav a i { width: 16px; text-align: center; }

    /* Topbar */
    .topbar {
      position: fixed; top: 0; left: 200px; right: 0;
      height: 52px; background: #fff;
      border-bottom: 1px solid #e5e7eb;
      display: flex; align-items: center; justify-content: flex-end;
      padding: 0 24px; z-index: 100;
    }
    .topbar .admin-info {
      display: flex; align-items: center; gap: 8px;
      font-size: 0.88rem; color: #333; font-weight: 500;
    }
    .topbar .admin-avatar {
      width: 32px; height: 32px; border-radius: 50%;
      background: #e87722; color: #fff;
      display: flex; align-items: center; justify-content: center;
      font-size: 0.8rem; font-weight: 700;
    }

    /* Main Content */
    .main-content {
      margin-left: 200px;
      margin-top: 52px;
      padding: 24px;
    }

    .page-title { font-size: 1.2rem; font-weight: 700; color: #222; margin-bottom: 4px; }
    .breadcrumb-text { font-size: 0.8rem; color: #888; margin-bottom: 20px; }
    .breadcrumb-text a { color: #3b5bdb; text-decoration: none; }

    /* Card */
    .card-panel {
      background: #fff;
      border-radius: 8px;
      border: 1px solid #e5e7eb;
      padding: 20px;
    }

    /* Top bar of table */
    .table-topbar {
      display: flex; justify-content: space-between; align-items: center;
      margin-bottom: 14px;
    }
    .table-topbar .label {
      font-size: 0.85rem; color: #555; font-weight: 600; text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    .table-topbar .label span { color: #888; font-weight: 400; font-size: 0.8rem; margin-left: 6px; }

    .btn-export {
      background: #3b5bdb; color: #fff; border: none;
      padding: 7px 16px; border-radius: 5px; font-size: 0.82rem; cursor: pointer;
    }
    .btn-export:hover { background: #2f4ac0; }

    .btn-add-user {
      background: #3b5bdb; color: #fff; border: none;
      padding: 7px 16px; border-radius: 5px; font-size: 0.82rem; cursor: pointer;
      margin-bottom: 14px;
    }

    /* Pagination bar */
    .pagination-bar {
      display: flex; align-items: center; gap: 8px;
      font-size: 0.82rem; color: #555; margin-bottom: 12px; flex-wrap: wrap;
    }
    .pagination-bar input[type="number"] {
      width: 48px; padding: 3px 6px; border: 1px solid #ccc;
      border-radius: 4px; font-size: 0.82rem; text-align: center;
    }
    .pagination-bar select {
      padding: 3px 6px; border: 1px solid #ccc;
      border-radius: 4px; font-size: 0.82rem;
    }
    .pagination-bar .btn-page {
      padding: 3px 8px; border: 1px solid #ccc; background: #fff;
      border-radius: 4px; cursor: pointer; font-size: 0.8rem;
    }
    .pagination-bar .btn-page:hover { background: #f0f4ff; }

    /* Table */
    .users-table { width: 100%; border-collapse: collapse; font-size: 0.84rem; }
    .users-table th {
      background: #f8f9fa; color: #555;
      padding: 10px 10px; text-align: left;
      border-bottom: 2px solid #e5e7eb;
      font-weight: 600; font-size: 0.8rem;
    }
    .users-table td {
      padding: 9px 10px;
      border-bottom: 1px solid #f0f0f0;
      color: #333; vertical-align: middle;
    }
    .users-table tr:hover td { background: #fafbff; }

    /* Filter row */
    .filter-row input {
      width: 100%; padding: 5px 8px;
      border: 1px solid #ddd; border-radius: 4px;
      font-size: 0.8rem; color: #333;
    }
    .filter-row input:focus { outline: none; border-color: #3b5bdb; }

    /* Date filter */
    .date-filter { display: flex; flex-direction: column; gap: 4px; }
    .date-filter-row { display: flex; align-items: center; gap: 4px; font-size: 0.75rem; }
    .date-filter-row input[type="text"] {
      width: 110px; padding: 4px 6px;
      border: 1px solid #ddd; border-radius: 4px; font-size: 0.78rem;
    }
    .date-filter-row .cal-btn {
      padding: 4px 7px; border: 1px solid #ddd;
      background: #fff; border-radius: 4px; cursor: pointer; font-size: 0.75rem;
    }

    /* Status badge */
    .badge-active {
      background: #198754; color: #fff;
      padding: 3px 10px; border-radius: 4px;
      font-size: 0.75rem; font-weight: 600;
    }

    /* Action buttons */
    .btn-action {
      width: 28px; height: 28px; border: none; border-radius: 4px;
      cursor: pointer; font-size: 0.78rem;
      display: inline-flex; align-items: center; justify-content: center;
    }
    .btn-search-action { background: #e87722; color: #fff; }
    .btn-reset-action  { background: #dc3545; color: #fff; }
    .btn-edit-action   { background: #17a2b8; color: #fff; }

    .actions-cell { display: flex; gap: 4px; }
	
	
	
	/* Overlay */
.modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.6);
}

/* Large Modal Box */
.modal-content {
  background-color: #fff;
  margin: 3% auto;
  padding: 25px;
  border-radius: 12px;

  width: 90%;
  max-width: 1000px;   /* 👈 Large size */
  min-height: 500px;   /* optional for height */

  box-shadow: 0 15px 40px rgba(0,0,0,0.35);
  position: relative;

  animation: slideDown 0.3s ease;
}

/* Close Button */
.close {
  position: absolute;
  right: 15px;
  top: 10px;
  font-size: 26px;
  font-weight: bold;
  cursor: pointer;
}

/* Optional header/body styling */
.modal-header {
  font-size: 24px;
  font-weight: 600;
  margin-bottom: 15px;
}

.modal-body {
  font-size: 15px;
  line-height: 1.6;
  color: #333;
}

/* Animation */
@keyframes slideDown {
  from { transform: translateY(-40px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

/* Responsive */
@media (max-width: 768px) {
  .modal-content {
    width: 95%;
    margin: 10% auto;
    min-height: auto;
  }
}
	
	 table {
			border-collapse: collapse;
         }
         thead {
			 display: table-header-group;
			 vertical-align: middle;
			 border-color: inherit;
         }
         tr {
			 display: table-row;
			 vertical-align: inherit;
			 border-color: inherit;
         }	
         .table-bordered td, .table-bordered th {
			border: 1px solid #dee2e6;
         }
         .table td, .table th {
			 padding: 0.75rem;
			 vertical-align: top;
			 border-top: 1px solid #dee2e6;
			 text-align: left!important;
         }
	.viewed-internship {
    padding: 10px;
    font-size: 12px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #35aa47;
    margin-right: 10px;
    cursor: pointer;
}
	.not-viewed-internship {
    padding: 10px;
    font-size: 12px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #f68f98;
    margin-right: 10px;
    cursor: pointer;
}
  </style>
</head>
