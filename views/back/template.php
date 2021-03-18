<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title><?= 'Administration - '.$view ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="/public/css/back/material-dashboard.min.css" rel="stylesheet"/>
    <link href="/public/css/back/admin.css" rel="stylesheet"/>
    <script src="/public/js/back/tinymce/tinymce.min.js"></script>
    <script src="/public/js/back/tinymce/plugins/image/plugin.min.js"></script>
    <script>
        tinymce.init({
            selector: '#mce',
            height: 500,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullpage | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons'}
            },
            menubar: 'favs file edit view insert format tools table help',
            automatic_uploads: false,
            images_upload_url: '/admin/upload',
            images_upload_handler: function (blobInfo, success, failure) {
                var xhr, formData;

                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', '/admin/upload');

                xhr.onload = function() {
                    var json;

                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }

                    json = JSON.parse(xhr.responseText);

                    if (!json || typeof json.file_path != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }

                    success(json.file_path);
                };

                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());

                xhr.send(formData);
            }
        });
    </script>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="green">
        <div class="logo">
            <a href="/admin" class="simple-text logo-normal">Administration</a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item <?= $view == 'Tableau de bord' ? 'active' : ''; ?>">
                    <a class="nav-link" href="/admin">
                        <i class="material-icons">dashboard</i>
                        <p>Tableau de bord</p>
                    </a>
                </li>
                <li class="nav-item <?= $view == 'Articles' ? 'active' : ''; ?>">
                    <a class="nav-link" href="/admin/posts">
                        <i class="material-icons">library_books</i>
                        <p>Articles</p>
                    </a>
                </li>
                <li class="nav-item <?= $view == 'Utilisateurs' ? 'active' : ''; ?>">
                    <a class="nav-link" href="/admin/users">
                        <i class="material-icons">supervisor_account</i>
                        <p>Utilisateurs</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">
                        <i class="material-icons">exit_to_app</i>
                        <p>Déconnexion</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#pablo"><?= $view ?></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">
                                <i class="material-icons">exit_to_app</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                <?= $content; ?>
            </div>
        </div>
    </div>
</div>
<script src="/public/js/back/core/jquery.min.js" type="text/javascript"></script>
<script src="/public/js/back/core/popper.min.js" type="text/javascript"></script>
<script src="/public/js/back/core/bootstrap-material-design.min.js" type="text/javascript"></script>
<script src="/public/js/back/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="/public/js/back/plugins/chartist.min.js"></script>
<script src="/public/js/back/plugins/bootstrap-notify.js"></script>
<script src="/public/js/back/material-dashboard.min.js?" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
</script>
</body>

</html>