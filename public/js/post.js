var postId =0;

$('.like').on('click', function (event) {
    event.preventDefault();
    postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling ==null;
    $.ajax({
        method : "POST",
        url: urlLike,
        data: {isLike :isLike, postId:postId , _token: token}
    })
    .done(function () {
        //
    });
    console.log(response);
});
