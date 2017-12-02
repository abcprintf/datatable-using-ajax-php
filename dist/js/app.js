function load_data() {
    var table = $('#data-table');

    table.DataTable({
        "processing": true,
        "serverSide": true,
        "order": [],
        "ajax": {
            type: "post",
            url: "get_data.php"
        }
    });

    var data = null;
    var row_id = null;
    var column_name = null;
    var get_eq = null;
    $('#data-table tbody').on('click', 'td', function() {

        data = $(this).html().trim();
        row_id = $(this).parent().find('td').html().trim();
        column_name = $('#data-table thead tr th').eq($(this).index()).html().trim();
        get_eq = $(this).closest('tr').children('td:eq(0)').context['cellIndex'];

        type_col = null;
        if (column_name == 'First Name') {
            type_col = 'firstname';
        } else if (column_name == 'Last Name') {
            type_col = 'lastname';
        } else if (column_name == 'Email') {
            type_col = 'email';
        }

        if (type_col !== null) {
            $('#myModal').removeData('bs.modal');
            $('#myModal').modal({
                remote: 'get_modal.php?id=' + row_id + '&column=' + type_col
            });
            $('#myModal').modal('show');
        }
    });

    $('#myModal').on('click', 'button#change-info', function(event) {

        var formData = $('form#save-info').serialize();
        var get_data = $('#column_value').val();
        $.ajax({
            type: "POST",
            url: "save_info.php",
            data: formData,
            success: function(data2) {
                if (data2 == "update_success") {
                    $('#data-table tbody tr td').eq(get_eq).html(get_data);
                } else {
                    console.log(data2);
                }
            }
        });
    });
}