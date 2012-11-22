//mouse enter and leave out event
$(".class-seat").mouseenter(function () {
    $('img',this).attr('src','img/\seat-hi.svg');
}).mouseleave(function () {
        $('img',this).attr('src','img/\seat.svg');
    });

//var seatId = {};
//var provider = {};
//$(".class-seat").click( function (){
//    var sid = this.id;
////    var json_data = {"seatId" : sid};
////    console.log(sid);
////    $.ajax({
////        url: "login.php",
////        type: "POST",
////        data: { postData : json_data},
////        dataType: "json",
////        success: function(data){
////            console.log('success message:', data);
////        },
////        error: function(e){
////            console.log('error message:', e.message);
////        }
////    });
//    seatId = sid;
//});
//
//function postParams(){
//    var xhr = new XMLHttpRequest();
//    xhr.open('POST', 'login.php', true);
//    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
//    var params = "seatId=" + seatId + '&provider=' + provider;
//    xhr.send(params);
//}
//
//$("#myModal-form a").click( function (event){
////    alert(event.target.getAttribute('data-provider'));
//    provider = event.target.getAttribute('data-provider');
//    postParams();
//});

var sid;
$(".class-seat").click( function (){
    sid = this.id;
});

$("#myModal-form a").mousedown( function (event){
    var provider = event.target.getAttribute('data-provider');
    this.href = this.href + '&seatId=' + sid;
//    alert(this.href);
});
