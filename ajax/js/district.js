$(document).ready(function () {
    $('#district').change(function () {

        var disID = $(this).val();
        $('#ds').empty();
        $.ajax({
            url: "ajax/post-and-get/ds.php",
            type: "POST",
            data: {
                district: disID,
                action: 'GETDSBYDISTRICT'
            },
            dataType: "JSON",
            success: function (jsonStr) {
                var html = '<option value="">---- Select the Divisional Secretariat --- </option>';
                $.each(jsonStr, function (i, data) {
                    html += '<option value="' + data.name + '">';
                    html += data.name;
                    html += '</option>';
                });

                $('#ds').empty();
                $('#ds').append(html);
            },
            cache: false,

        });
    });
});