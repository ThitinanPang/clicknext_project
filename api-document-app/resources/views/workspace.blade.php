<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        *{
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        body{
            overflow-x: hidden;
        }
        .primary {
            background-color: #EF5B25;
            color: #fff;
        }
        .secondary {
            background-color: #F2F2F2;
            color: black;
        }
        .debug {
            border: 1px solid red;
        }
        .btn-menu {
            cursor: pointer;
            color: #fff;
            width: 100%;
            height: 65px;
            background-color: transparent;
            list-style: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            transition: all 0.3s;
        }
        .btn-menu:hover{
            background-color: #ea9c80;
            transition: all 0.3s;
        }
        .btn-menu:focus{
            background-color: #ea9c80;
        }
        .dropdown{
            color: #000;
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .create-workspace {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-nav-toggle:checked ~ .dropdown-content{
            display: flex;
        }

        .dropdown-menu {
            border: #000 solid 0px;
        }
        .dropdown-item {
            background: #fff;
            color:#000;
            transition: all 0.3s;
        }
        .dropdown-item:hover {
            background: #f2f2f2;
            color:dodgerblue;
            transition: all 0.3s;
        }
 	    .dropdown:focus .dropdown-content {
            display: block;
        }

        .navbar {
            border-bottom: #F2F2F2 solid 1px;
        }

        .custom-table {
            border-top: #F2F2F2 solid 1px;
            background-color: white;
            transition: all 0.3s;
        }
        .custom-table:hover {
            background-color: #f2f2f2;
            transition: all 0.3s;
        }
        td {
            background-color: transparent;
            color: #000;
        }
        td:hover {
            color: dodgerblue;
        }

        .icon {
            position: absolute;
            top: 6px;
            left: 10px;
            color: #808080;
            font-size: 16px;
            z-index: 9999;
        }

        i.fa {
            position: absolute;
            top: 6px;
            left: 10px;
            color: #808080;
            font-size: 16px;
            z-index: 2;
        }
        .form-control {
            position: relative;
            padding-left: 30px !important;
        }
        .pane {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, 0.1);
        }
        .textfield {
            width: auto;
            height: 30px;
            border: 2px solid #F2F2F2;
            border-radius: 5px;
            font-size: 16px;
            padding: 1px;
        }
        .textfield:focus {
            outline: 0;
            border:dodgerblue solid 2px;
            transition: all 0.3s;
        }
        .btn-dropdown{
            height: 100%;
            width: 100%;
            background: #fff;
            color: #000;
            font-weight: 500;
        }
        .btn-dropdown:hover {
            background: #f2f2f2;
            color: #000;
            font-weight: 500;
        }
        .btn-dropdown:focus {
            background: #f2f2f2;
            color: #000;
            font-weight: 500;
        }
        .btn-secondary {
            background: #f2f2f2;
            color: #000;
            font-weight: 500;
            border: #f2f2f2 solid 0px;
        }
        .btn-secondary:hover {
            background: #eeeeee;
            color: #000;
            font-weight: 500;
            border: #f2f2f2 solid 0px;
        }
        .btn-secondary:focus {
            background: #eeeeee;
            color: #000;
            font-weight: 500;
            border: #f2f2f2 solid 0px;
        }
        .btn-primary {
            background: #EF5B25;
            color: #fff;
            font-weight: 500;
            border: #EF5B25 solid 0px;
        }
        .btn-primary:hover {
            background: #d75120;
            color: #fff;
            font-weight: 500;
            border: #ef5b25 solid 0px;
        }
        .btn-primary:focus {
            background: #d75120;
            color: #fff;
            font-weight: 500;
            border: #EF5B25 solid 0px;
        }
        .link-black {
            color: #000000;
            transition: all 0.2s;
            text-decoration: none;
            height: 35px;
            display: flex;
            align-items: center;
        }
        .link-black:hover {
            color: dodgerblue;
            transition: all 0.2s;
            cursor: pointer;
        }
        .link-primary {
            color: #EF5B25;
            transition: all 0.2s;
            text-decoration: none;
            height: 35px;
            display: flex;
            align-items: center;
        }
        .link-primary:hover {
            color: dodgerblue;
            transition: all 0.2s;
            cursor: pointer;

        }
        .link-grey {
            color: #808080;
            transition: all 0.2s;
            text-decoration: none;
            height: 35px;
            display: flex;
            align-items: center;
        }
        .link-grey:hover {
            color: dodgerblue;
            transition: all 0.2s;
            cursor: pointer;
        }
        .line {
            width: 100%;
            height: 1px;
            background-color: #808080;
            margin: 0 0px;
        }
        .cursor {
            cursor: pointer;
        }
        .checkbox {
            position: relative;
            overflow: hidden;
        }

        .checkbox__input {
            position: absolute;
            top: -100px;
            left: -100px;
        }

        .checkbox__inner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #eeeeee;
            background: transparent no-repeat center;
        }

        .checkbox__input:checked + .checkbox__inner {
            border-color: #EF5B25;
            background-color: #EF5B25;
            background-image: url("data:image/svg+xml,%3C%3Fxml version='1.0' encoding='UTF-8'%3F%3E%3Csvg width='14px' height='10px' viewBox='0 0 14 10' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3C!-- Generator: Sketch 59.1 (86144) - https://sketch.com --%3E%3Ctitle%3Echeck%3C/title%3E%3Cdesc%3ECreated with Sketch.%3C/desc%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Cg id='ios_modification' transform='translate(-27.000000, -191.000000)' fill='%23FFFFFF' fill-rule='nonzero'%3E%3Cg id='Group-Copy' transform='translate(0.000000, 164.000000)'%3E%3Cg id='ic-check-18px' transform='translate(25.000000, 23.000000)'%3E%3Cpolygon id='check' points='6.61 11.89 3.5 8.78 2.44 9.84 6.61 14 15.56 5.05 14.5 4'%3E%3C/polygon%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 14px 10px;
        }

        .nav-tabs {
            background-color: #EF5B25;
        }

        .nav-tabs .nav-items {
            width: 220px;
            height: 100%;
            display: flex;
            flex-direction: row;
            background-color: #EF5B25;
            transition: all 0.3s;
        }
        .nav-tabs .nav-items:hover {
            background-color: #d45323;
            transition: all 0.3s;
        }
        .nav-items .nav-link {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 35%;
            color: #fff;
            width: 100%;
            height: 100%;
            border-radius: 0%;
            border: none;
            border-right: #fff 2px solid;
            transition: all 0.3s;
        }
        .nav-tabs .nav-link.active {
            color: #000;
            background-color: #ffffff;
            border-bottom: #EF5B25 solid 2px;
            border-right: #EF5B25 solid 2px;
            transition: all 0.3s
        }
        .nav-tabs .nav-items .nav-link button .material-symbols-outlined {
            font-weight: 400;
            font-size: 20px;
            color: #ffffff;
        }
        .nav-tabs .nav-items .nav-link.active button .material-symbols-outlined {
            color: #808080;
        }
        .add-nav-items{
            background-color: transparent;
            border: none;
            color: #fff;
            transition: all 0.3s;
        }
           .add-nav-items:hover{
            background-color: transparent;
            border: none;
            color: #808080;
            transition: all 0.3s;
        }

        .btn-collapse{
            background-color: #ffffff;
            border-radius: 0%;
            border: none;
            transition: all 0.3s;
        }
        .btn-collapse:hover{
            background-color: #f2f2f2;
            transition: all 0.3s;
        }
        .navbar-nav{
            background-color: #fff;
            transition: all 0.3s;
            padding-left: 55px;
        }
        .navbar-nav:hover{
            background-color: #f2f2f2;
            transition: all 0.3s;
            cursor: pointer;
        }
    </style>
</head>
<body class="d-flex flex-row">
     <!-- Start Sidebar -->
     <aside class="d-flex flex-shrink-0 flex-column primary" style="width:5.625rem; min-height: 100vh; overflow-y: auto;">
        <div class="list-group flex-column mb-auto">
            <a href="{{ route('home.index') }}" style="height: 65px" class="text-decoration-none d-flex justify-content-center align-items-center">
                <img width="50px" src="https://media.discordapp.net/attachments/994685233087643719/1215261876972429323/circle_logo.png?ex=65fc1bd1&is=65e9a6d1&hm=2ca5c2f0daef63d683772b7d936e3398948ccc82dff64fe57dcca0eedd499900&=&format=webp&quality=lossless" alt="clicknext-logo">
            </a>
            <div class="list-group-items btn-menu">
                <span class="material-symbols-outlined" style="font-size: 36px;">folder</span>
                <a href="#" class="link-body-emphasis text-decoration-none d-flex justify-content-center text-align-center" data-bs-toggle="dropdown" aria-expanded="false">
                    <label class="fw-normal cursor" style="color: white" for="">Collections</label>
                </a>
            </div>
            <div class="list-group-items btn-menu">
                <span class="material-symbols-outlined" style="font-size: 36px;">manage_history</span>
                <a href="#" class="link-body-emphasis text-decoration-none d-flex justify-content-center text-align-center" data-bs-toggle="dropdown" aria-expanded="false">
                    <label class="fw-normal cursor" style="color: white" for="">History</label>
                </a>
            </div>
            <div class="list-group-items btn-menu">
                <span class="material-symbols-outlined" style="font-size: 36px;">delete</span>
                <a href="#" class="link-body-emphasis text-decoration-none d-flex justify-content-center text-align-center" data-bs-toggle="dropdown" aria-expanded="false">
                    <label class="fw-normal cursor" style="color: white" for="">Trash</label>
                </a>
            </div>
        </div>
    </aside>
    <!-- End Sidebar -->
    <!-- Start Main -->
    <div class="d-flex flex-column container-fluid main p-0">
       <!-- Start Navbar -->
       <nav class="ps-2 d-flex navbar navbar-light bg-white sticky-top">
        <div class="dropdown">
            <input type="checkbox" id="dropdown-nav-toggle" class="dropdown-nav-toggle visually-hidden">
            <button class="btn btn-dropdown btn-white dropdown d-flex align-items-center" style="height: 50px;" onclick="toggleDropdownNav(),toggleCreateWorkspacePane('close')">
                <span class="material-symbols-outlined">grid_view</span>
                <span class="fs-5 fw-normal">Workspaces</span>
                <span id="dropdown-nav-icon" class="material-icons">expand_more</span>
            </button>
            <!-- Dropdown Menu -->
            <div class="dropdown-content flex-column container pane" style=" width: 420px; height: 230px;">
                <div class="row align-items-start p-2">
                    <div class="col-7 d-flex align-items-center p-1" style="height: 40px;">
                        <div class="input-group">
                            <i class="fa fa-search" style="font-size: 14px; margin-top: 2px;"></i>
                            <input class="textfield" style="padding-left: 30px; width: 100%; border-radius: 5px; font-size: 14px;" type="search" name="" id=""  placeholder="Search workspaces">
                        </div>
                    </div>
                    <div class="col-5 d-flex align-items-center p-1" style="height: 40px;">
                        <button class="m-auto rounded-1 w-100 btn btn-secondary pt-1" onclick="toggleCreateWorkspacePane('open')">Create Workspace</button>
                    </div>
                </div>
                <div class="row">
                    <label style="color: #808080; font-size: 14px; font-weight: 500;">Recently visited</label>
                    <ul style="list-style-type:none;">
                        @foreach ($workspaces as $index => $workspace)
                            @if ($index < 3)
                                <div class="row custom-table" style="border: none">
                                    <div class="col">
                                        <li class="d-flex align-items-center mt-1 link-black" style="height: 30px">
                                            <a class="link-black" style="width: 100%; height:100%" href="{{ route('workspace.show', ['workspace' => $workspace->id]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="me-2" viewBox="0 0 16 16" width="18" height="18"><path d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z"></path></svg>
                                                <label label class="fs-6 fw-normal cursor" for="">{{$workspace->name}}</label>
                                            </a>
                                        </li>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="row align-items-end mt-auto" style="border-top: #F2F2F2 solid 2px;">
                    <a href="" class="link-grey">View all workspaces <i style="font-size: 12px;" class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- Create Workspace Pane -->
            <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data" class="create-workspace flex-column justify-content-start pane p-3 needs-validation" id="form-create-workspace" style="width: 300px; margin-left: 425px;" novalidate>
                @csrf
                <label for="" style="font-size: 20px; font-weight: 500;">Create your workspace</label>
                <label class="mt-1" style="color: #808080; font-size: 14px; font-weight: 400;">Name</label>
                <input type="text" class="textfield p-1 form-control" name="workspace-input-name" id="workspace-input-name" required>
                <div class="invalid-feedback">Please fill your workspace name.</div>
                <div class="d-flex flex-row mt-2 align-self-end" style="width: 140px;" >
                    <div class="col py-1">
                        <button class="btn btn-secondary" type="button" onclick="toggleCreateWorkspacePane('close')">Cancel</button>
                    </div>
                    <div class="col py-1 ps-1">
                        <button class="btn btn-primary" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="dropdown pe-5 fs-5">
            <button class="btn btn-dropdown  btn-white dropdown d-flex align-items-center" onclick="toggleDropdownProfile()" style="height: 50px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://media.discordapp.net/attachments/994685233087643719/1215271120127791114/77ed449a829d201a7940b0f98d49ca5a3cf43dd9.jpg?ex=65fc246d&is=65e9af6d&hm=cc53b20e7bac20faa1f57f479c85b3a5c19f166a5ece6b0da943736fc79cb017&=&format=webp" alt="" width="40" height="40" class="rounded-circle me-2">
                <span class="fs-5 fw-normal">{{Auth::user()->name}}</span>
                <span id="dropdown-profile-icon" class="material-icons">expand_more</span>
            </button>
            <ul class="dropdown-menu pane" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">View Profile</a></li>
                <li>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="dropdown-item" type="submit">Sign Out</button>
                    </form>
                </li>
              </ul>
        </div>
    </nav>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">Workspace has been created</div>
    @endif
        <!-- Start Content -->
        <section class="content d-flex flex-row" style="min-height: 1200px; overflow-y: auto;">
            <!-- Collection list -->
            <div style="width: 280px; border-right: #f2f2f2 solid 1px;">
                <div class="d-flex align-items-center ps-4" style="height: 55px; border-bottom: #f2f2f2 solid 1px;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="18" height="18"><path d="M10.561 8.073a6.005 6.005 0 0 1 3.432 5.142.75.75 0 1 1-1.498.07 4.5 4.5 0 0 0-8.99 0 .75.75 0 0 1-1.498-.07 6.004 6.004 0 0 1 3.431-5.142 3.999 3.999 0 1 1 5.123 0ZM10.5 5a2.5 2.5 0 1 0-5 0 2.5 2.5 0 0 0 5 0Z"></path></svg>
                    <p class="mt-3 ms-2">{{$selectedWorkspace->name}}</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col d-flex align-items-center ps-0 py-2">
                            <a class="btn d-flex justify-content-center align-items-center p-0 m-2" href="{{ route('workspace.add_collection', ['workspace' => $selectedWorkspace->id]) }}">
                                <span style="color: #808080;" class="material-symbols-outlined">add</span>
                            </a>
                            <div class="input-group">
                                <i class="fa fa-search" style="font-size: 14px; margin-top: 2px;"></i>
                                <input class="textfield" style="padding-left: 30px; width: 100%; border-radius: 5px; font-size: 14px;" type="search" name="" id=""  placeholder="Search collections">
                            </div>
                        </div>
                    </div>
                    <!-- Collections List -->
                    <div class="row">
                        <div class="col p-0">
                            <button class="btn-collapse dropdown d-flex align-items-center" style="height: 30px; width: 100%;" type="button" data-bs-toggle="collapse" data-bs-target="#collection" aria-expanded="false" aria-controls="collection">
                                <span class="material-symbols-outlined me-2">chevron_right </span>
                                <span class="fs-6" style="font-weight: 500">New Collection</span>
                            </button>
                            <div class="collapse" id="collection">
                                <div class="container p-0 ">
                                    <button class="btn-collapse dropdown d-flex align-items-center ps-4" style="height: 30px; width: 100%;" type="button" data-bs-toggle="collapse" data-bs-target="#file" aria-expanded="false" aria-controls="file">
                                        <span class="material-symbols-outlined me-2" style="font-size: 22px;">chevron_right </span>
                                        <span class="" style="font-size: 14px;">Untitled-1</span>
                                    </button>
                                    <div class="collapse"  id="file">
                                        <ul class="navbar-nav">
                                            <li><a href=""><label class="me-2" style="font-size: 12px;  font-weight: 500;" for="">GET</label><label for="" style="font-size: 12px; color: #000;">api/user/4</label></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="" style="width: 100%;">
                <!-- Nav Tabs -->
                <ul class="nav nav-tabs" style="height: 55px;">
                    <li class="nav-items">
                        <a class="nav-link active fst-italic" data-bs-toggle="tab" href="#home">home
                            <button class="btn d-flex justify-content-center align-items-center p-1">
                                <span class="material-symbols-outlined">close</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link fst-italic" data-bs-toggle="tab" href="#profile">profile
                            <button class="btn d-flex justify-content-center align-items-center p-1">
                                <span class="material-symbols-outlined">close</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-items">
                        <a class="nav-link fst-italic" data-bs-toggle="tab" href="#contract">contract
                            <button class="btn d-flex justify-content-center align-items-center p-1">
                                <span class="material-symbols-outlined">close</span>
                            </button>
                        </a>
                    </li>
                    <button class="d-flex justify-content-center align-items-center p-2 add-nav-items">
                        <span class="material-symbols-outlined">add</span>
                    </button>
                </ul>
                <!-- Tabs Content -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="row">
                            <div class="col">
                                <h3>Home</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile">
                        <div class="row">
                            <div class="col">
                                <h3>profile</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="contract">
                        <div class="row">
                            <div class="col">
                                <h3>contract</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->
    </div>
    <!-- End Main -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const btnCollapse = document.querySelectorAll('.btn-collapse');

        btnCollapse.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const chevron = this.querySelector('.material-symbols-outlined');
                    if (chevron.textContent.trim() === 'chevron_right') {
                        chevron.textContent = 'expand_more';
                    } else {
                        chevron.textContent = 'chevron_right';
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const labels = document.querySelectorAll('.navbar-nav li label:first-child');

            labels.forEach(function(label) {
                const labelText = label.textContent.trim();
                if (labelText === 'GET') {
                    label.style.color = '#34A853';
                } else if (labelText === 'POST') {
                    label.style.color = '#FF0000';
                }
            });
        });
        (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                    }, false)
                })
                })()
        function toggleDropdownNav() {
            var checkbox = document.getElementById('dropdown-nav-toggle');
            var icon = document.getElementById('dropdown-nav-icon');
            if (checkbox.checked) {
                icon.innerHTML = 'expand_more';
            } else {
                icon.innerHTML = 'expand_less';
            }
            checkbox.checked = !checkbox.checked;
        }
        function toggleCreateWorkspacePane(action) {
            var formCreateWorkspace = document.getElementById("form-create-workspace");
            formCreateWorkspace.reset();
            if (action === "open") {
                formCreateWorkspace.style.display = "flex";
            } else {
                formCreateWorkspace.style.display = "none";
            }
        }
        function toggleDropdownProfile() {
            var icon = document.getElementById('dropdown-profile-icon');
            var dropdownMenu = document.getElementById('dropdownMenuButton1');
            if (dropdownMenu.getAttribute('aria-expanded') === 'false') {
                icon.innerText = 'expand_less';
            } else {
                icon.innerText = 'expand_more';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
