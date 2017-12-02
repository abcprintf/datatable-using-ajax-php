<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datatable Using PHP Ajax</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- start modal -->
        <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div>
        </div>
        </div>
        <!-- end modal -->
        <h2 class="text-center">Datatable using PHP Ajax</h2>
        <h3 class="text-center text-muted">Click cell Update data.</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap.min.js"></script>
    <script src="dist/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            load_data();
        });
    </script>
</body>
</html>