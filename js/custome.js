$(document).ready(function() {

    $(function() {

        $("#rateYo").rateYo({

            rating: 1.6,
            spacing: "5px",
            multiColor: {

                "startColor": "#FF0000", //RED
                "endColor": "#00FF00" //GREEN
            },
            onSet: function(rating, rateYoinstance) {
                alert(rating)
            }
        });

    });
});