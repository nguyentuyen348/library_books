$(document).ready(function(){

    let origin= location.origin;

    $('.user-item').hover(function () {
        $(this).css('background-color',"green")
    },function (){
        $(this).css('background-color',"white")
    })
/*delete user*/
    $('.delete-user').click(function (){
        if (confirm('Are you sure ?')){
            let idUser=$(this).attr('data-id');
            $.ajax({
                url: origin + '/admin/users/' + idUser + '/delete',
                method: 'GET',
                dataType: 'json',
                success:function (res){
                    $('#user-' + idUser).remove();
                },
                error:function (error){

                }
            })
        }
    })
/*search user*/
    $('#search-user').keyup(function (){
        let value=$(this).val();
        if (value){
            $.ajax({
                url: origin + '/admin/users/search',
                method: 'GET',
                data:{
                    keyword:value
                },
                dataType: 'json',
                success:function (res){
                    let html='';
                    res.forEach(function (item,index){
                        html+='<li class="list-user-search list-group-item-action">';
                        html += item.name;
                        html += '</li>'
                    })
                    $('#list-user-search').html(html);
                },
                error: function (error) {

                }

            })
        } else  {
            $('#list-user-search').html('');

        }

    });
/*search student form borrow*/
    $('#search-student-borrow').keyup(function () {
        let value = $(this).val();
        if (value) {
            $.ajax({
                url: origin + '/admin/borrows/search-student',
                method: 'GET',
                data: {
                    keyword: value
                },
                success: function (res) {
                    let html = '';
                    res.forEach(function (item, index) {
                        html += '<li data-id="'+ item.id +'" class="list-group-item list-group-item-action student-item">';
                        html += item.name;
                        html += '</li>'
                    })
                    $('#list-student-borrow-search').html(html);
                    console.log(res)
                },
                error: function (error) {
                    console.log(error)
                }
            })
        }else {
            $('#list-student-borrow-search').html('');
        }
    })

    $('body').on('click','.student-item',function () {
        let idStudentClicked = $(this).attr('data-id');
        $.ajax({
            url: origin + '/admin/borrows/find-student/' + idStudentClicked,
            method: 'GET',
            success: function (res) {
                $('#id-student-borrow').val(res.id);
                $('#name-student-borrow').val(res.name);
                $('#email-student-borrow').val(res.email);
                $('#phone-student-borrow').val(res.phone);
                $('#list-student-borrow-search').html('');
            }
        })
    });


/*search book borrow*/
        $('#search-book-borrow').keyup(function (){
            let value= $(this).val()
            if(value){
                $.ajax({
                    url:origin + '/admin/borrows/search-book',
                    method:'GET',
                    data:{
                        keyword:value
                    },
                    success: function (res){
                        let html='';
                        res.forEach(function (item,index){
                            html += '<li data-id=" '+ item.id +' " class="list-group-item list-group-item-action book-item">';
                            html += item.name;
                            html += '</li>'
                        })
                        $('#list-book-borrow-search').html(html);
                        console.log(res)
                    },
                    error: function (error) {
                        console.log(error)
                    }
                })
            }else {
                $('#list-book-borrow-search').html('');
            }
        })

        $('body').on('click','.book-item',function () {
            let idBookClicked = $(this).attr('data-id');
            console.log('idBookClicked')
            $.ajax({
                url: origin + '/admin/borrows/find-book/' + idBookClicked,
                method: 'GET',
                success: function (res) {
                    console.log(res)
                    $('#id-book-borrow').val(res.id);
                    $('#name-book-borrow').val(res.name);
                    $('#image-book-borrow').attr('src', origin + '/storage/'+res.image);
                    $('#price-book-borrow').val(res.price);
                    $('#list-book-borrow-search').html('');

                }
            })
        });



    function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myMenu");
    li = ul.getElementsByTagName("li");

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
    li[i].style.display = "";
        } else {
    li[i].style.display = "none";
                }
        }
    }
  /*Showslide*/
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
    }

    $('.pagination a').unbind('click').on('click', function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        getPosts(page);
    });

    function getPosts(page)
    {
        $.ajax({
            type: "GET",
            url: 'http://127.0.0.1:8000/admin/products/index?page='+ page
        })
            .success(function(data) {
                $('body').html(data);
            });
    }
});
