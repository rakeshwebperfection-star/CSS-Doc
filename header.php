<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Rose:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CSS Docs</title>
</head>
<body>
<div class="side-overlay"></div>
<?php include 'aside.php'; ?>

<div id="main-content" class="dashboard-main-wrapper">
    <div class="top-navbar border-bottom">
        <div class="d-flex align-items-center gap-4">
            <div class="thinumber_Icon">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 24 24" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><clipPath id="a"><path d="M0 .001h24v24H0z" fill="#000000" opacity="1" data-original="#000000" class=""></path></clipPath><g clip-path="url(#a)"><path stroke="#292929" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6.001h18m-18 6h18m-18 6h18" fill="#000000" opacity="1" data-original="#000000" class=""></path></g></g></svg>
            </div>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search......" aria-label="Search"/>
                <button class="btn btn-primary text-white">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" x="0" y="0" viewBox="0 0 1707 1707" style="enable-background:new 0 0 512 512" xml:space="preserve" fill-rule="evenodd" class=""><g><path d="M623 1250c-166 0-323-65-440-183C65 949 0 793 0 627c0-167 65-323 183-441C300 68 457 4 623 4s323 64 441 182c117 118 182 274 182 441 0 166-65 322-182 440-118 118-275 183-441 183zm0-140c-129 0-251-50-342-141-91-92-142-213-142-342 0-130 51-251 142-343 91-91 213-141 342-141s251 50 342 141c189 189 189 496 0 685-91 91-213 141-342 141zM1198 1309c-8 0-16-3-22-9l-134-134c23-18 44-36 64-57 23-22 43-46 62-71l135 135c12 12 12 31 0 43-6 5-13 8-21 8-7 0-13-2-18-6l-39 48c5 11 3 24-6 34-6 6-14 9-21 9z" fill="#ffffff" opacity="1" data-original="#ffffff" class=""></path><path d="M1577 1703c-34 0-67-13-91-38l-282-281c-24-24-37-57-37-91 0-35 13-68 37-92 25-24 57-38 92-38s67 14 92 38l281 281c50 51 50 133 0 183-25 25-57 38-92 38zM421 829c-112-112-112-293 0-405 11-12 11-31 0-42-12-12-31-12-43 0-135 135-135 354 0 489 6 6 14 9 21 9 8 0 16-3 22-9 11-11 11-30 0-42z" fill="#fffffff" opacity="1" data-original="#ffffff" class=""></path></g></svg>
                </button>
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
                <a href="#" class="btn btn-primary d-flex align-items-center gap-1"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill: #ffffff" width="17" height="17" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path fill="#ffffff" d="M15.4 62c-1 0-2-.2-2.9-.7-2.4-1.1-3.8-3.4-3.8-6.1V8.7c0-3.7 3-6.7 6.7-6.7h33.2c3.7 0 6.7 3 6.7 6.7v46.6c0 2.6-1.5 4.9-3.8 6.1-2.4 1.1-5.1.8-7.1-.9l-10.7-8.7c-1-.8-2.4-.8-3.4 0l-10.7 8.7c-1.2 1-2.7 1.5-4.2 1.5zM32 47.1c1.5 0 3 .5 4.2 1.5l10.7 8.7c.8.7 1.9.8 2.9.4 1-.5 1.5-1.4 1.5-2.4V8.7c0-1.5-1.2-2.7-2.7-2.7H15.4c-1.5 0-2.7 1.2-2.7 2.7v46.6c0 1.1.6 2 1.5 2.4 1 .5 2 .3 2.9-.4l10.7-8.7c1.2-.9 2.7-1.5 4.2-1.5z" opacity="1" data-original="#2b3954" class=""></path><path fill="#e8335a" d="M40.9 16.4H23.3c-1.1 0-2-.9-2-2s.9-2 2-2h17.5c1.1 0 2 .9 2 2s-.8 2-1.9 2z" opacity="1" data-original="#03b8ff" class=""></path></g></svg> Favorites</a>                
            </div>
        </div>
    </div>
    
    <main class="main-content-inner">

    
