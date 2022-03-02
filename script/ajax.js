<script>

$(document).ready(function () {
$('').click(function (e) {
    e.preventDefault();
    $.ajax({
        method: "post",
        url: "fetchdata.php",
        data: $(').serialize(),
        dataType: "dataType",
        success: function (response) {
            
        }
    });
})
});

</script>