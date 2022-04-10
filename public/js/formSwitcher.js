$("#productType").change(function () {
    $.ajax({
        url: "formSwitcher.php",
        method: "post",
        data: {productType: $(this).val()},
        success: function (data){
            $("#content").html('Hello');

        }
    })
})