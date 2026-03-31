<!DOCTYPE html>
<html>

<head>
    <base target="_top">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body onload="initializeApp()">
    <div class="app-container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h1>QASO SYSTEM</h1>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="javascrip:void(0)" class="nav-link" data-tab="productos" onclick="showTab('productos')">
                        <span class="nav-icon">📦</span>
                        Nuevo producto
                    </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-tab="inventario" onclick="showTab('inventario')">
                        <span class="nav-icon">📊</span>
                        Inventario
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link active" data-tab="dashboard" onclick="showTab('dashboard')">
                        <span class="nav-icon">📊</span>
                        Dashboard
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link" data-tab="movimientos" onclick="showTab('movimientos')">
                        <span class="nav-icon">📋</span>
                        Movimientos
                    </a>
                </li> -->
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link" data-tab="reportes" onclick="showTab('reportes')">
                        <span class="nav-icon">📈</span>
                        Reportes
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-tab="buscar" onclick="showTab('buscar')">
                        <span class="nav-icon">🔍</span>
                        Buscar
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-tab="configuracion" onclick="showTab('configuracion')">
                        <span class="nav-icon">⚙️</span>
                        Configuración
                    </a>
                </li> -->
            </ul>
        </nav>