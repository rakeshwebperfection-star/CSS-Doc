<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>CSS Docs</title>
</head>
<body>
<div class="side-overlay"></div>

<?php include './assets/asidebar/aside.php'; ?>

<div id="main-content" class="dashboard-main-wrapper">
    <div class="top-navbar border-bottom">
        <div class="d-flex align-items-center gap-2 gap-md-4">
            <div class="thinumber_Icon">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><clipPath id="a"><path d="M0 .001h24v24H0z" fill="#000000" opacity="1" data-original="#000000" class=""></path></clipPath><g clip-path="url(#a)"><path stroke="#292929" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.001h18m-18 6h18m-18 6h18" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></g></svg>
            </div>
            <form class="d-flex position-relative" role="search" onsubmit="handleSearch(event)">
                <div class="search-bar me-1 w-100">
                    <input id="searchInput" class="form-control" type="search" placeholder="Search CSS topics..."  onkeyup="showSuggestions()" autocomplete="off" />
                </div>
                <a href="#" class="btn btn-primary fs-6 text-white search-btn min-w-auto px-lg-4">Search</a>
                <div id="suggestionsBox" class="suggestions-box"></div>
            </form>
        </div>
        <div class="d-flex align-item-center gap-3">
            <div class="notification-wrapper">
                <div class="notificaton-icon" data-bs-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path d="M453.332 229.332c-8.832 0-16-7.168-16-16 0-61.27-23.848-118.848-67.156-162.176-6.25-6.25-6.25-16.383 0-22.633s16.383-6.25 22.636 0c49.344 49.364 76.52 115.008 76.52 184.809 0 8.832-7.168 16-16 16zM16 229.332c-8.832 0-16-7.168-16-16 0-69.8 27.18-135.445 76.543-184.789 6.25-6.25 16.387-6.25 22.637 0s6.25 16.387 0 22.637C55.852 94.484 32 152.062 32 213.332c0 8.832-7.168 16-16 16zM234.668 512c-44.117 0-80-35.883-80-80 0-8.832 7.168-16 16-16s16 7.168 16 16c0 26.477 21.523 48 48 48 26.473 0 48-21.523 48-48 0-8.832 7.168-16 16-16s16 7.168 16 16c0 44.117-35.883 80-80 80zm0 0" fill="#000000" opacity="1" data-original="#000000"></path><path d="M410.668 448h-352c-20.59 0-37.336-16.746-37.336-37.332a37.305 37.305 0 0 1 13.059-28.375c32.445-27.414 50.941-67.262 50.941-109.48v-59.481C85.332 130.988 152.32 64 234.668 64 317.012 64 384 130.988 384 213.332v59.48c0 42.22 18.496 82.067 50.73 109.333 8.512 7.253 13.27 17.597 13.27 28.523C448 431.254 431.254 448 410.668 448zm-176-352c-64.707 0-117.336 52.629-117.336 117.332v59.48c0 51.645-22.633 100.415-62.078 133.758-.746.64-1.922 1.965-1.922 4.098 0 2.898 2.434 5.332 5.336 5.332h352c2.898 0 5.332-2.434 5.332-5.332 0-2.133-1.172-3.457-1.879-4.055C374.633 373.227 352 324.457 352 272.813v-59.481C352 148.629 299.371 96 234.668 96zm0 0" fill="#000000" opacity="1" data-original="#000000"></path><path d="M234.668 96c-8.832 0-16-7.168-16-16V16c0-8.832 7.168-16 16-16s16 7.168 16 16v64c0 8.832-7.168 16-16 16zm0 0" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
                </div>
                <div class="dropdown-menu">
                    <div class="notification-head">
                        <h5 class="title">Notifications</h5>
                        <div class="notif-close-icon">
                            <svg class="notification-close" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" data-bs-toggle="dropdown"><g><path d="M12 1a11 11 0 1 0 11 11A11.013 11.013 0 0 0 12 1zm4.242 13.829a1 1 0 1 1-1.414 1.414L12 13.414l-2.828 2.829a1 1 0 0 1-1.414-1.414L10.586 12 7.758 9.171a1 1 0 1 1 1.414-1.414L12 10.586l2.828-2.829a1 1 0 1 1 1.414 1.414L13.414 12z" data-name="Layer 2" fill="#ffffff" opacity="1" data-original="#ffffff"></path></g></svg>
                        </div>
                    </div>
                    <div class="notification-body">
                        <a href="#" class="notification-block">
                            <span class="badge new">New</span>
                            <h6 class="text">CSS Logical Properties Converter</h6>
                            <p class="content">Free CSS logical properties converter. Transform margin-left, padding-top, width and more into flow-relative equivalents for RTL and i18n-ready layouts. Includes shorthand conversion and writing mode simulator.</p>
                        </a>
                        <a href="#" class="notification-block">
                            <span class="badge new">New</span>
                            <h6 class="text">Unused CSS Finder</h6>
                            <p class="content">Free tool to find and remove unused CSS. Scan HTML, CSS, and JS to get a cleaned stylesheet, byte savings, and a breakdown of every removable selector.</p>
                        </a>
                        <a href="#" class="notification-block">
                            <span class="badge new">New</span>
                            <h6 class="text">CSS Skeleton Loader Generator</h6>
                            <p class="content">Generate production-ready CSS skeleton loader components instantly. Customize card type, quantity, size, colors, border radius, and animation style</p>
                        </a>
                        <a href="#" class="notification-block">
                            <span class="badge updated">Updated</span>
                            <h6 class="text">CSS Validator</h6>
                            <p class="content">CSS Validator has had a complete makeover, it now uses a newly developed CSS validation engine.</p>
                        </a>
                        <a href="#" class="notification-block">
                            <span class="badge new">New</span>
                            <h6 class="text">CSS Position Visualizer</h6>
                            <p class="content">An interactive visual reference for every CSS position value - static, relative, absolute, fixed, and sticky - plus z-index, stacking contexts, and a live layout debugger.</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="notification">
                <a href="#" class="btn btn-primary d-flex align-items-center gap-1 min-w-auto"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g fill="#fff" fill-rule="evenodd" clip-rule="evenodd"><path d="M11.1 16.8a1.5 1.5 0 0 1 1.8 0l3.2 2.4c.989.742 2.4.036 2.4-1.2V5A1.5 1.5 0 0 0 17 3.5H7A1.5 1.5 0 0 0 5.5 5v13c0 1.236 1.411 1.942 2.4 1.2zM12 18l3.2 2.4c1.978 1.483 4.8.072 4.8-2.4V5a3 3 0 0 0-3-3H7a3 3 0 0 0-3 3v13c0 2.472 2.822 3.883 4.8 2.4z" fill="#fff" opacity="1" data-original="#fff" class=""></path><path d="M8.25 7A.75.75 0 0 1 9 6.25h6a.75.75 0 0 1 0 1.5H9A.75.75 0 0 1 8.25 7z" fill="#fff" opacity="1" data-original="#fff" class=""></path></g></g></svg> Favorites</a>                
            </div>
        </div>
    </div>
    
    <main class="main-content-inner">