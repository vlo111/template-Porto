/**
 * Created by Volodya on 06.05.2017.
 */

$(document).ready(function () {
    $('#contactForm').on('submit', function (event) {
        event.preventDefault();
        $.ajax({
            url:"http://my.host/wp/insert.php",
            method:"POST",
            data:$('#contactForm').serialize(),
            success:function (data) {
                $('#contactForm')[0].reset();
                $('#myModal').modal('hide');
            }
        })
    });

});