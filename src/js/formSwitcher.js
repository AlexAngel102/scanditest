    $('#productType').on("change", function () {
        console.log("change fetched"),
            $.ajax({
                url: "src/View/productFormSwitch.php",
                method: "post",
                data: {productType: $(this).val()},
                success: function (data) {
                    $("#content").html(data),
                        console.log(data)
                }
            })
    });
