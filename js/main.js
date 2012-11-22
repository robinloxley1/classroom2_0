//mouse enter and leave out event
$(".class-seat").mouseenter(function () {
    $('img',this).attr('src','img/\seat-hi.svg');
}).mouseleave(function () {
        $('img',this).attr('src','img/\seat.svg');
    });

$(".class-seat").click(function (){
    var sid = this.id;
    console.log(sid);
    $.ajax({
        url: "login.php",
        type: "POST",
        data: {seatId : sid},
        dataType: "json"
    }).error(function() {
            console.log("Error");})
        .complete(function(){
            console.log('success!');
        });
});